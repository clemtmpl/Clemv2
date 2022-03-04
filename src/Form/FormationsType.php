<?php

namespace App\Form;

use App\Entity\Formations;
use App\FOS\CKEditorBundle\FOSCKEditorBundle;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormationsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Name')
            ->add('DateDebut', DateType::class,
            ['widget' => 'single_text'])
            ->add('dateFin', DateType::class,
                ['widget' => 'single_text'])
            ->add('acquis',
                CKEditorType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Formations::class,
        ]);
    }
}
