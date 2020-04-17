<?php

namespace EntitiesBundle\Form;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
$builder->add('dateDebut',null,['attr'=>['class'=>'form-control' ]])
            ->add('dateFin',null,['attr'=>['class'=>'form-control' ]])
            ->add('lieu',null,['attr'=>['class'=>'form-control' ]])
            ->add('time',null,['attr'=>['class'=>'form-control' ]])
            ->add('nbrPlace',null,['attr'=>['class'=>'form-control' ]])
            ->add('typeTheme', EntityType::class, array(
                'class'=>'EntitiesBundle:Theemes',
                'choice_label'=>'titre',
                'multiple'=>false))
            ->add('Ajouter', SubmitType::class,['attr'=>['class'=>'btn btn-primary' ]]);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EntitiesBundle\Entity\Formation'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'entitiesbundle_formation';
    }


}
