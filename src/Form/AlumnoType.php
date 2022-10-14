<?php

namespace App\Form;

use App\Entity\Alumno;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AlumnoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dni_a')
            ->add('legajo_a')
            ->add('nombres_a')
            ->add('apellido_a')
            ->add('tel_a')
            ->add('direccion_a')
            ->add('cuil')
            ->add('copiadni_a')
            ->add('fechanacimiento_a')
            ->add('lugarnacimiento_a')
            ->add('codigopostal_a')
            ->add('certificadovacuna_a')
            ->add('electrocardiograma_a')
            ->add('certificadoaptitud_a')
            ->add('certificadosalud_a')
            ->add('cap_a')
            ->add('tutores')
            ->add('genero')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Alumno::class,
        ]);
    }
}
