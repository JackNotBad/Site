<?php
// src/Controller/Admin/ImageCrudController.php
namespace App\Controller\Admin;

use App\Entity\Image;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\Filesystem\Filesystem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use Symfony\Component\Validator\Constraints\File as FileConstraint;

class ImageCrudController extends AbstractCrudController
{
    private string $uploadDir;
    private Filesystem $fs;

    public function __construct()
    {
        $this->uploadDir = 'public/uploads';
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
            ->setEntityLabelInPlural('Images')
            ->setDefaultSort(['id' => 'DESC']);
    }

    public function configureFields(string $pageName): iterable
    {
        $imageField = ImageField::new('url', 'Image')
            ->setBasePath('uploads/')
            ->setUploadDir($this->uploadDir)
            ->setUploadedFileNamePattern('[randomhash].[extension]')
            ->setRequired($pageName === Crud::PAGE_NEW);

        if ($pageName === Crud::PAGE_NEW) {
            $imageField = $imageField->setFormTypeOptions([
                'constraints' => [
                    new FileConstraint([
                        'maxSize' => '5M',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                            'image/gif',
                            'image/webp',
                        ],
                        'mimeTypesMessage' => 'Veuillez uploader une image valide (jpeg/png/gif/webp).',
                        'maxSizeMessage' => 'Le fichier est trop grand (max {{ limit }}).',
                    ]),
                ],
            ]);
        }

        return [
            IdField::new('id')->hideOnForm(),
            $imageField,
            TextField::new('alt', 'Description alt'),
        ];
    }

    private function removePhysicalFileIfExists(?string $filename): void
    {
        if (!$filename) {
            return;
        }

        $possiblePaths = [
            $this->uploadDir . DIRECTORY_SEPARATOR . $filename,
            'public' . DIRECTORY_SEPARATOR . $filename,
            $filename,
        ];

        foreach ($possiblePaths as $path) {
            if (file_exists($path) && is_file($path)) {
                try {
                    $this->fs->remove($path);
                } catch (\Throwable $e) {
                }
                break;
            }
        }
    }

    public function deleteEntity(EntityManagerInterface $entityManager, $entityInstance): void
    {
        if (!$entityInstance instanceof Image) {
            return;
        }

        $filename = $entityInstance->getUrl();
        $this->removePhysicalFileIfExists($filename);

        parent::deleteEntity($entityManager, $entityInstance);
    }

    public function updateEntity(EntityManagerInterface $entityManager, $entityInstance): void
    {
        if (!$entityInstance instanceof Image) {
            parent::updateEntity($entityManager, $entityInstance);
            return;
        }

        $repo = $entityManager->getRepository(Image::class);
        $existing = $repo->find($entityInstance->getId());

        if ($existing instanceof Image) {
            $oldFilename = $existing->getUrl();
            $newFilename = $entityInstance->getUrl();

            if ($oldFilename && $oldFilename !== $newFilename) {
                $this->removePhysicalFileIfExists($oldFilename);
            }
        }

        parent::updateEntity($entityManager, $entityInstance);
    }

    public function persistEntity(EntityManagerInterface $entityManager, $entityInstance): void
    {
        parent::persistEntity($entityManager, $entityInstance);
    }
}
