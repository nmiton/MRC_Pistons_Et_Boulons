<?php

namespace App\Form; 

use App\Entity\Collaborateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class CollaborateurType extends AbstractType
{

    /**
     * Fonction de création du formulaire collaborateur
     * 
     * Cette fonction a pour but de créer la mise en place des éléments du formulaire du collaborateur, ces données sont: 
     * son nom; son prénom; sa date de naissance; la date de son entrée en entreprise (qui est sur le format d'une date); son numéro de Sécurité Sociale; le type de son contrat de travail; la date avec l'heure de sa dernière connexion sur le site; sa durée de travail hebdomadaire; son login, ainsi que son mot de passe. 
     * 
     *  @param FormBuilderInterace $builder une variable qui permet la création d'un formulaire
     *  @param array $options un tableau qui permet de lister les champs du formulaire.
     * 
     * @return void
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('dateNaissance' , DateType::class , [ 'years' => range(1960 ,date('Y')+50) ])
            ->add('dateEntreeEntreprise' , DateType::class , [ 'years' => range(1960 ,date('Y')+50) ])
            ->add('numSecuriteSocial')
            ->add('typeContrat')
            ->add('dateHeureDerniereConnexion' , DateType::class , [ 'years' => range(1960 ,date('Y')+50) ])
            ->add('dureeTravailHebdo')
            ->add('login')
            ->add('motDePasse')
            /*->add('isAdmin' , CheckboxType::class , ['label' => 'est admin' , 'required' => false,] )*/
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Collaborateur::class,
        ]);
    }
}
