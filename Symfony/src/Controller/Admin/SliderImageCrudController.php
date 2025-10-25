<?php

namespace App\Controller\Admin;

use App\Entity\Slider;
use App\Entity\SliderImage;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class SliderImageCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return SliderImage::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('SliderImage')
            ->setEntityLabelInPlural('SliderImages')
            ->setDefaultSort(['position' => 'ASC']);
    }

    public function configureFields(string $pageName): iterable
    {
        yield AssociationField::new('slider', 'Slider')
                ->setFormTypeOptions([
                    'class' => Slider::class,
                    'choice_label' => 'title',
                    'choice_value' => 'id',
                ])
                ->setRequired(true)
                ->formatValue(function ($value, $entity) {
                    $slider = $entity->getSlider();
                    return $slider ? $slider->getTitle() : '';
                });
        yield AssociationField::new('image', 'Image')
            ->setCrudController(ImageCrudController::class);
        yield IntegerField::new('position', 'Position');
    }
}