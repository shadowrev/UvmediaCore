<?php

namespace Uvmedia\UsuariosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class GrupoType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('aplicacion')
            ->add('usuarios')
        ;
    }

    public function getName()
    {
        return 'uvmedia_usuariosbundle_grupotype';
    }
}
