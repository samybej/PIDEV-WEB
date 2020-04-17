<?php

namespace EntitiesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
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
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'Taxi' => 'Taxi',
                    'Camion' => 'Camion',

                ]])
            ->add('etat', ChoiceType::class, [
                'choices' => [
                    '0: En garage' => '0',
                    '1: Disponible' => '1',

                ]])
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
