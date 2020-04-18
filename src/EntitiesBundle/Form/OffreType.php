<?php

namespace EntitiesBundle\Form;

use Doctrine\DBAL\Types\DateTimeType;
use Doctrine\DBAL\Types\StringType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OffreType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nbPlace')->add('depart')->add('arrive')->add('date', \Symfony\Component\Form\Extension\Core\Type\DateTimeType::class , [
            'html5' => false,
            'widget' => 'single_text',
            'format' => 'yyyy-MM-dd',
            'attr' => ['class' => 'js-datepicker']
        ])->add('time', TextType::class ,['attr' => ['class' => 'js-timepicker']])->add('tarif')->add('vehicule')->add('bagage', ChoiceType::class, [
                'choices' => ['Non' => 'non','entre 1 et 5kg' => 's', 'entre 5 et 10kg' => 'm', '> 10kg' => "l"],
            ])->add('Ajouter',SubmitType::class, [
            'attr' => ['class' => 'btn btn-success'],]);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EntitiesBundle\Entity\Offre'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'entitiesbundle_offre';
    }


}
