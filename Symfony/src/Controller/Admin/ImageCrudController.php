<?php

namespace App\Controller\Admin;

use App\Entity\Image;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ImageCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Image::class;
    }


    // public function configureFields(string $pageName): iterable
    // {
    //     return [
    //         IdField::new('id'),
    //         ImageField::new('url', 'Image')
    //             ->setBasePath('uploads/')
    //             ->setUploadDir('public/uploads')
    //             ->setUploadedFileNamePattern('[randomhash].[extension]')
    //             ->setRequired(true),
    //         TextField::new('Alt', 'Description Image'),
    //     ];
    // }
}
