<?php

namespace App\Form;

use App\Entity\Collaborateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CollaborateurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('dateNaissance')
            ->add('dateEntreeEntreprise')
            ->add('numSecuriteSocial')
            ->add('typeContrat')
            ->add('dateHeureDerniereConnexion')
            ->add('dureeTravailHebdo')
            ->add('login')
            ->add('motDePasse')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Collaborateur::class,
        ]);
    }
}
