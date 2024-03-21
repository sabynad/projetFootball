<?php

namespace App\Form;

use App\Entity\Equipe;
use App\Entity\Opposition;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OppositionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // ->add('dates')
            ->add('dates', null, [
                'widget' => 'single_text',
            ])
            // ->add('resultats')
            ->add('scoreEquipe')
            ->add('scoreEquipe1')

            // ->add('classement')
            ->add('scoreClassement')
            ->add('scoreClassement1')

            // ->add('equipe')
            ->add('id_equipe', EntityType::class, [
                'class' => Equipe::class,
                'choice_label' => 'nom',
            ])
            ->add('id_equipe_1', EntityType::class, [
                'class' => Equipe::class,
                'choice_label' => 'nom',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Opposition::class,
        ]);
    }
}
