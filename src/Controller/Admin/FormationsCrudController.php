<?php

namespace App\Controller\Admin;

use App\FOS\CKEditorBundle\FOSCKEditorBundle;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\CodeEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use App\Entity\Formations;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class FormationsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Formations::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('Name', 'Nom'),
            DateTimeField::new('DateDebut', 'Date début'),
            DateTimeField::new('dateFin', 'Date début'),
            TextEditorField::new('acquis', 'Les acquis')->setFormType(CKEditorType::class)
        ];
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->addFormTheme('@FOSCKEditor/Form/ckeditor_widget.html.twig')
            ;
    }

}
