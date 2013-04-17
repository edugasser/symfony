<?php

namespace Gestor\PersonaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PersonaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('apellido')
            ->add('fechaNacimiento')
            ->add('paisOrigen')
            ->add('poblacionActual')
            ->add('dni')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Gestor\PersonaBundle\Entity\Persona'
        ));
    }

    public function getName()
    {
        return 'gestor_personabundle_personatype';
    }
}
