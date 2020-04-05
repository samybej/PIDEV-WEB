<?php

namespace TaxiBundle\Form;

use EntitiesBundle\Entity\Chauffeur;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReservationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('depart' , TextType::class ,
            array('label' => 'Départ' ,
                    'attr' => array( 'placeholder' => 'Départ' ,  'oninvalid' => "setCustomValidity('Merci de saisir un endroit de départ')" ) ,
                'required' => true
                 )
            )
        ->add('arrive' , TextType::class ,
            array('label' => 'Arrivé' ,
                'attr' => array( 'placeholder' => 'Arrivé' , 'oninvalid' => "setCustomValidity('Merci de saisir un endroit d'arrivé')" ) ,
                'required' => true
                )
        )
            ->add('idChauffeur', EntityType::class, [
                'class' => Chauffeur::class,
                'choice_label' => function ($category) {
                    $noms = $category->getIdVehicule();
                    if ($noms == null)
                    {
                        return 'On ne connait pas cette Marque';
                    }
                    return $noms->getMarque();
                },
                'label' => 'Choisissez la Marque de la voiture',
                'attr' => array('class' => 'custom-select') ,
            ]);
        ;
    }/**
 * {@inheritdoc}
 */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EntitiesBundle\Entity\Reservation'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'entitiesbundle_reservation';
    }


}
