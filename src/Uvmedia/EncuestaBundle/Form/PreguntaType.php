<?php

namespace Uvmedia\EncuestaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class PreguntaType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('tipo_pregunta')
            ->add('respuestas')
        ;
    }

    public function getName()
    {
        return 'uvmedia_encuestabundle_preguntatype';
    }
}
