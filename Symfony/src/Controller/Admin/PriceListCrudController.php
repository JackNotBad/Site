<?php

namespace App\Controller\Admin;

use App\Entity\PriceList;
use App\Entity\Section;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

class PriceListCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return PriceList::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('PriceList')
            ->setEntityLabelInPlural('PriceLists')
            ->setSearchFields(['Title','Description','Titre_Section']);
    }

    public function configureFields(string $pageName): iterable
    {
        yield IdField::new('id')->onlyOnIndex();

        yield TextField::new('Title', 'Title');
        yield TextField::new('Description', 'Description');
        yield TextField::new('Price', 'Price');
        yield TextField::new('Specification1', 'Specification1');
        yield TextField::new('Specification2', 'Specification2')->hideOnIndex();
        yield TextField::new('Specification3', 'Specification3')->hideOnIndex();

        yield AssociationField::new('section', 'Section')
            ->setCrudController(SectionCrudController::class)
            ->setRequired(false)
            ->autocomplete();

        yield TextField::new('Titre_Section', 'Titre Section')->setRequired(false);

        yield DateTimeField::new('createdAt', 'Créé le')->onlyOnDetail();
    }

    public function persistEntity(EntityManagerInterface $em, $entityInstance): void
    {
        if (!($entityInstance instanceof PriceList)) return;

        if (null === $entityInstance->getCreatedAt()) {
            $entityInstance->setCreatedAt(new \DateTimeImmutable());
        }

        if ($entityInstance->getSection() && !$entityInstance->getTitreSection()) {
            $entityInstance->setTitreSection($entityInstance->getSection()->getTitle());
        }

        $em->persist($entityInstance);
        $em->flush();
    }

    public function updateEntity(EntityManagerInterface $em, $entityInstance): void
    {
        if (!($entityInstance instanceof PriceList)) return;

        if ($entityInstance->getSection()) {
            $entityInstance->setTitreSection($entityInstance->getSection()->getTitle());
        }

        $em->persist($entityInstance);
        $em->flush();
    }
}

