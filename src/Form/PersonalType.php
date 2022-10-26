<?php

namespace App\Form;

use App\Entity\Personal;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PersonalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dni_p')
            ->add('legajo_p')
            ->add('nombres_p')
            ->add('apellidos_p')
            ->add('tel_p')
            ->add('declaracionjurada')
            ->add('copiadni_p')
            ->add('rol')
            ->add('fechanacimiento_p')
            ->add('cuil_p')
            ->add('direccion_p')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Personal::class,
        ]);
    }
}
