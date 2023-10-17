<?php

namespace App\Form;

use App\Entity\Dnd35Dons;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Dnd35DonsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('description')
            ->add('special')
            ->add('bbaprerequis')
            ->add('forprerequis')
            ->add('dexprerequis')
            ->add('conprerequis')
            ->add('intprerequis')
            ->add('sagprerequis')
            ->add('chaprerequis')
            ->add('donsuppguerrier')
            ->add('niveaulanceursort')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Dnd35Dons::class,
        ]);
    }
}
