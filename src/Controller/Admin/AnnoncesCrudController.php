<?php

namespace App\Controller\Admin;

use App\Entity\Annonces;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TelephoneField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;



class AnnoncesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Annonces::class;
    }

    
     public function configureFields(string $pageName): iterable
     {
        return [
            //IdField::new('id'),
            TextField::new('titre'),
            TextareaField::new('adresse'),
            NumberField::new('cp'),
            TextField::new('ville'),
            TextareaField::new('description'),
            NumberField::new('surface'), 
            IntegerField::new('nbrDePieces'),
            IntegerField::new('nbrDeChambres'), 
            IntegerField::new('nbrSdb'),
            IntegerField::new('nbrGarage'),
            MoneyField::new('prix')->setCurrency('EUR'),    
            ImageField::new('photo')
                ->setBasePath('uploads/')
                ->setUploadDir('public/uploads')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(false),
            // panels usually display only a title
            // FormField::addPanel('User Details'),
            TelephoneField::new('telephonePr'),
            TextField::new('nomPr'),
            EmailField::new('mailPr'),


         ];
     }
    
}