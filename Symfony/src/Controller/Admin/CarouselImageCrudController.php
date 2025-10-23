<?php

namespace App\Controller\Admin;

use App\Entity\CarouselImage;
use App\Entity\Carousel;
use App\Entity\Image;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CarouselImageCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return CarouselImage::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('CarouselImage')
            ->setEntityLabelInPlural('CarouselImages')
            ->setDefaultSort(['position' => 'ASC']);
    }

    public function configureFields(string $pageName): iterable
    {
        yield AssociationField::new('carousel', 'Carousel')
                ->setFormTypeOptions([
                    'class' => Carousel::class,
                    'choice_label' => 'title',
                    'choice_value' => 'id',
                ])
                ->setRequired(true)
                ->formatValue(function ($value, $entity) {
                    $carousel = $entity->getCarousel();
                    return $carousel ? $carousel->getTitle() : '';
                });
        yield AssociationField::new('image', 'Image')
                ->setCrudController(ImageCrudController::class);
        yield IntegerField::new('position', 'Position');
    }
}