<?php

namespace App\Form;

use App\Entity\Property;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PropertyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('description')
            ->add('surface')
            ->add('rooms')
            ->add('bedrooms')
            ->add('floor')
            ->add('price')
            ->add('heat')
            ->add('city')
            ->add('address')
            ->add('postal_code')
            ->add('sold')
            ->add('created_at')
            ->add('swimmingpool')
            ->add('sauna')
            ->add('wifi')
            ->add('sport')
            ->add('helipad')
            ->add('terrasse')
            ->add('balcon')
            ->add('hifi')
            ->add('television')
            ->add('plageprox')
            ->add('mervue')
            ->add('montagnevue')
            ->add('enville')
            ->add('visavis')
            ->add('plageprive')
            ->add('pieddanseau')
            ->add('centreville')
            ->add('champetre')
            ->add('typepropriete')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Property::class,
        ]);
    }
}
