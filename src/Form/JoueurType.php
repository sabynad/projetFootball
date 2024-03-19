<?php

namespace App\Form;

use App\Entity\Equipe;
use App\Entity\Joueur;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class JoueurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('dateNaissance', null, [
                'widget' => 'single_text',
            ])
            ->add('numero')
            ->add('poste')
            ->add('numeroLicence')
            ->add('cartonJaune')
            ->add('cartonRouge')
            ->add('matchJoue')
            ->add('nbrPasse', null, [
                'required' => false,
            ])
            ->add('nbrPasseDecisif', null, [
                'required' => false,
            ])
            ->add('nbrTir', null, [
                'required' => false,
            ])
            ->add('nbrBut', null, [
                'required' => false,
            ])
            ->add('arretGardien', null, [
                'required' => false,
            ])
            ->add('butEncaisse', null, [
                'required' => false,
            ])
            ->add('penaltyDispute', null, [
                'required' => false,
            ])
            ->add('penaltyArrete', null, [
                'required' => false,
            ])
            ->add('equipe', EntityType::class, [
                'class' => Equipe::class,
                'choice_label' => 'nom',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Joueur::class,
        ]);
    }
}
