<?php

namespace App\Controller\Admin;

use App\Entity\Page;
use App\Entity\Carousel;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CarouselCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Carousel::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Carousel')
            ->setEntityLabelInPlural('Carousels');
    }

    public function configureFields(string $pageName): iterable
    {
        yield TextField::new('title', 'Titre');
        yield AssociationField::new('page', 'Page')
                ->setFormTypeOptions([
                    'class' => Page::class,
                    'choice_label' => 'Name',
                    'choice_value' => 'id',
                ])
                ->setRequired(true)
                ->formatValue(function ($value, $entity) {
                    $page = $entity->getPage();
                    return $page ? $page->getName() : '';
                });
        yield AssociationField::new('images', 'Images')
                ->onlyOnDetail();
    }
}