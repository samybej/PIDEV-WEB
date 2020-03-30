<?php

namespace EntitiesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VehiculeType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('immatriculation',null,['attr'=>['class'=>'form-control' ]])
            ->add('numeroAssurance',null,['attr'=>['class'=>'form-control' ]])
            ->add('marque',null,['attr'=>['class'=>'form-control' ]])
            ->add('type',null,['attr'=>['class'=>'form-control' ]])
            ->add('etat',null,['attr'=>['class'=>'form-control' ]])
            ->add('Ajouter', SubmitType::class,['attr'=>['class'=>'btn btn-primary' ]]);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EntitiesBundle\Entity\Vehicule'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'entitiesbundle_vehicule';
    }


}
