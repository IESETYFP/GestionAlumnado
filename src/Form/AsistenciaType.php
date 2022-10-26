<?php

namespace App\Form;

use App\Entity\Asistencia;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AsistenciaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('cantasistencia')
            ->add('reintegrado')
            ->add('turno')
            ->add('evento')
            ->add('condicion')
            ->add('horaasistencia')
            ->add('fechaasistencia')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Asistencia::class,
        ]);
    }
}
