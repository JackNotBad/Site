<?php

namespace App\Controller\Admin;

use App\Entity\Page;
use App\Entity\Section;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class SectionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Section::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title','Titre'),
            TextEditorField::new('Text', 'Texte'),
            IntegerField::new('Position', 'Position'),
            DateTimeField::new('createdAt', 'Date de création'),
            AssociationField::new('Page_Id', 'Page')
                ->setFormTypeOptions([
                    'class' => Page::class,
                    'choice_label' => 'Name',
                    'choice_value' => 'id',
                ])
                ->setRequired(true)
                ->formatValue(function ($value, $entity) {
                    $page = $entity->getPageId();
                    return $page ? $page->getName() : '';
                }),
            AssociationField::new('Image_Id', 'Image')
                ->setCrudController(ImageCrudController::class)
                ->setRequired(false)
                ->setHelp('Choisir une image existante ou en créer une nouvelle.'),
        ];
    }
}
