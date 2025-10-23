<?php

namespace App\Controller\Admin;

use App\Entity\Image;
use App\Entity\Slider;
use App\Entity\Section;
use App\Entity\Carousel;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Filesystem\Filesystem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ImageCrudController extends AbstractCrudController
{
    private string $projectDir;
    private string $uploadDir;
    private Filesystem $fs;

    public function __construct(string $projectDir)
    {
        $this->projectDir = $projectDir;
        $this->uploadDir = $this->projectDir . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'uploads';
        $this->fs = new Filesystem();
    }

    public static function getEntityFqcn(): string
    {
        return Image::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Image')
            ->setEntityLabelInPlural('Images');
    }

    public function configureFields(string $pageName): iterable
    {
        $preview = ImageField::new('url', 'Image')
            ->setBasePath('uploads/')
            ->onlyOnIndex();

        $uploadField = TextField::new('file', 'Fichier image')
            ->setFormType(FileType::class)
            ->setFormTypeOptions([
                'mapped' => true,
                'required' => $pageName === Crud::PAGE_NEW,
            ])
            ->onlyOnForms();

        return [
            $preview,
            $uploadField,
            TextField::new('alt', 'Description alt'),
        ];
    }

    private function ensureUploadDirExists(): void
    {
        if (!$this->fs->exists($this->uploadDir)) {
            $this->fs->mkdir($this->uploadDir, 0775);
        }
    }

    private function removePhysicalFileIfExists(?string $filename): void
    {
        if (!$filename) {
            return;
        }

        $path = $this->uploadDir . DIRECTORY_SEPARATOR . $filename;
        if ($this->fs->exists($path)) {
            try {
                $this->fs->remove($path);
            } catch (\Throwable $e) {
            }
        }
    }

    private function generateFilename(UploadedFile $file): string
    {
        $ext = $file->guessExtension() ?: $file->getClientOriginalExtension() ?: 'bin';
        return bin2hex(random_bytes(12)) . '.' . $ext;
    }

    public function persistEntity(EntityManagerInterface $em, $entityInstance): void
    {
        if (!($entityInstance instanceof Image)) {
            parent::persistEntity($em, $entityInstance);
            return;
        }

        $file = $entityInstance->getFile();
        if ($file instanceof UploadedFile) {
            $this->ensureUploadDirExists();
            $newName = $this->generateFilename($file);

            try {
                $file->move($this->uploadDir, $newName);
            } catch (FileException $e) {
                throw $e;
            }

            $entityInstance->setUrl($newName);

            $entityInstance->setFile(null);
        }

        parent::persistEntity($em, $entityInstance);
    }

    public function updateEntity(EntityManagerInterface $em, $entityInstance): void
    {
        if (!($entityInstance instanceof Image)) {
            parent::updateEntity($em, $entityInstance);
            return;
        }

        $repo = $em->getRepository(Image::class);
        $existing = $repo->find($entityInstance->getId());

        $file = $entityInstance->getFile();
        if ($file instanceof UploadedFile) {
            $this->ensureUploadDirExists();
            $newName = $this->generateFilename($file);

            try {
                $file->move($this->uploadDir, $newName);
            } catch (FileException $e) {
                throw $e;
            }

            if ($existing instanceof Image) {
                $old = $existing->getUrl();
                if ($old && $old !== $newName) {
                    $this->removePhysicalFileIfExists($old);
                }
            }

            $entityInstance->setUrl($newName);
            $entityInstance->setFile(null);
        } else {
            if ($existing instanceof Image) {
                $entityInstance->setUrl($existing->getUrl());
            }
        }

        parent::updateEntity($em, $entityInstance);
    }

    /**
     *
     * @param EntityManagerInterface $entityManager
     * @param mixed $entityInstance
     */
    public function deleteEntity(EntityManagerInterface $entityManager, $entityInstance): void
    {
        if (!($entityInstance instanceof Image)) {
            parent::deleteEntity($entityManager, $entityInstance);
            return;
        }

        $checks = [
            Section::class  => 'Section',
            Carousel::class => 'Carousel',
            Slider::class   => 'Slider',
        ];

        $used = [];
        foreach ($checks as $entityClass => $label) {
            $count = $entityManager->getRepository($entityClass)->count(['image' => $entityInstance]);
            if ($count > 0) {
                $used[] = sprintf('%s (%d)', $label, $count);
            }
        }

        if (!empty($used)) {
            $entitiesString = $this->formatList($used);
            $this->addFlash('danger', sprintf(
                "Impossible de supprimer l'image — elle est utilisée par : %s.",
                $entitiesString
            ));
            return;
        }

        $filename = $entityInstance->getUrl();
        $this->removePhysicalFileIfExists($filename);

        parent::deleteEntity($entityManager, $entityInstance);
    }

    private function formatList(array $items): string
    {
        if (count($items) === 1) {
            return $items[0];
        }
        if (count($items) === 2) {
            return $items[0] . ' et ' . $items[1];
        }
        $last = array_pop($items);
        return implode(', ', $items) . ' et ' . $last;
    }
}
