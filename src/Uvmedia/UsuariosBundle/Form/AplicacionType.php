<?php

namespace Uvmedia\UsuariosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class AplicacionType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('nombre')
        ;
    }

    public function getName()
    {
        return 'uvmedia_usuariosbundle_aplicaciontype';
    }
}
