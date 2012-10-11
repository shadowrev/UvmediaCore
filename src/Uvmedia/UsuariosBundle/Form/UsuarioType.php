<?php

namespace Uvmedia\UsuariosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class UsuarioType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('login')
            ->add('nombres')
            ->add('apellidos')
            ->add('email')
            ->add('contrasenha')
            ->add('salt')
            ->add('grupos')
        ;
    }

    public function getName()
    {
        return 'uvmedia_usuariosbundle_usuariotype';
    }
}
