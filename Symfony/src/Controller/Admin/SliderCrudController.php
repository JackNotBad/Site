<?php

namespace App\Controller\Admin;

use App\Entity\Page;
use App\Entity\Slider;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class SliderCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Slider::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Slider')
            ->setEntityLabelInPlural('Sliders');
    }

    public function configureFields(string $pageName): iterable
    {
        yield TextField::new('title', 'Titre');
        yield TextEditorField::new('text', 'Texte');
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