<?php

namespace App\Controller\Admin;

use App\Entity\Section;
use App\Entity\Image;
use App\Entity\DetailsSectionImage;
use App\Controller\Admin\ImageCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class DetailsSectionImageCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return DetailsSectionImage::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('SectionImage')
            ->setEntityLabelInPlural('SectionImages')
            ->setDefaultSort(['position' => 'ASC']);
    }

    public function configureFields(string $pageName): iterable
    {
        yield AssociationField::new('Section')
            ->setFormTypeOptions([
                'class' => Section::class,
                'choice_label' => 'title',
                'choice_value' => 'id',
            ])
            ->setRequired(true)
            ->formatValue(function ($value, $entity) {
                $section = $entity->getSection();
                return $section ? $section->getTitle() : '';
            });

        yield AssociationField::new('Image')
            ->setFormType(EntityType::class)
            ->setFormTypeOptions([
                'class' => Image::class,
                'choice_label' => 'alt',
                'multiple' => true,
                'by_reference' => false,
            ])
            ->setCrudController(ImageCrudController::class);
    }
}
