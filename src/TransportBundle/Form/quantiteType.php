<?php

namespace TransportBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class quantiteType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('g', NumberType::class, ['label' => 'Grande taille'])
            ->add('m', NumberType::class, ['label' => 'Moyenne taille'])
            ->add('s', NumberType::class, ['label' => 'Petite taille']);
    }
/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TransportBundle\Entity\quantite'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'transportbundle_quantite';
    }


}
