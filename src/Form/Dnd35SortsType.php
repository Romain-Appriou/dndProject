<?php

namespace App\Form;

use App\Entity\Dnd35Sorts;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Dnd35SortsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('ecole')
            ->add('complementecole')
            ->add('description')
            ->add('sauvegarde')
            ->add('composantes')
            ->add('tempsincantation')
            ->add('portee')
            ->add('effet')
            ->add('duree')
            ->add('resistancemagie')
            ->add('cibles')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Dnd35Sorts::class,
        ]);
    }
}
