<?php

namespace App\Controller\Admin;

use App\Entity\Boxeur;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class BoxeurCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Boxeur::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('nom'),
            TextField::new('prenom'),
            TextField::new('datedenaissance'),
            TextField::new('categorieage'),
            TextField::new('email'),
            TextField::new('telephone'),
            TextField::new('adresse'),
            TextField::new('codepostal'),
            TextField::new('ville'),
            TextField::new('licencecreele'),
            TextField::new('typedelicence'),
            
        ];
    }
    
}
