<?php

namespace Uvmedia\UsuariosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\CallbackValidator;
use Symfony\Component\Form\FormError;

class UsuarioType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('login')
            ->add('nombres')
            ->add('apellidos')
            ->add('email')
            ->add('contrasenha', 'password')
            //->add('salt')
            ->add('grupos', 'entity', array(
                'class' => 'UsuariosBundle:Grupo',
                'property' => 'nombre',
                'expanded' => true,
                'multiple' => true
            ))
            ->add('confirm', 'password', array(
                'property_path' => false
            ))
        ;
        
        $builder
            ->addValidator(new CallbackValidator(function (\Symfony\Component\Form\FormInterface $form) 
                {
                    if(strcmp($form['contrasenha']->getData(), $form['confirm']->getData()) != 0)
                    {
                        $form->addError(new FormError('La contraseña no coincide'));
                    }
                }
            ))
        ;
    }

    public function getName()
    {
        return 'uvmedia_usuariosbundle_usuariotype';
    }
}
