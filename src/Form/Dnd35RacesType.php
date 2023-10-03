<?php

namespace App\Form;

use App\Entity\Dnd35Races;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Dnd35RacesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('taille')
            ->add('vitesse')
            ->add('donssupplvl1')
            ->add('compsupplvl1')
            ->add('compsuppbylvl')
            ->add('idclassepredilection')
            ->add('immunitesommeil')
            ->add('visionnocturne')
            ->add('modiffor')
            ->add('modifdex')
            ->add('modifcon')
            ->add('modifint')
            ->add('modifsag')
            ->add('modifcha')
            ->add('nblanguessupplementaires')
            ->add('description')
            ->add('AgeId')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Dnd35Races::class,
        ]);
    }
}
