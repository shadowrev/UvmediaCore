<?php

namespace Uvmedia\UsuariosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class GrupoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('aplicacion')
            ->add('usuarios', 'entity', array(
                'class' => 'UsuariosBundle:Usuario',
                'property' => 'login',
                'expanded' => true,
                'multiple' => true
            ))
        ;
    }

    public function getName()
    {
        return 'uvmedia_usuariosbundle_grupotype';
    }
}
