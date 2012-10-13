<?php

namespace Uvmedia\UsuariosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\CallbackValidator;
use Symfony\Component\Form\FormError;

class UsuarioType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('login')
            ->add('nombres')
            ->add('apellidos')
            ->add('email')
            ->add('contrasenha', 'password')
            //->add('salt')
            ->add('grupos')
            ->add('confirm', 'password', array(
                'property_path' => false
            ))
        ;
        
        $builder
            ->addValidator(new CallbackValidator(function (FormInterface $form) 
                {
                    if(strcmp($form['contrasenha']->getData(), $form['confirm']->getData()) != 0)
                    {
                        $form->addError(new FormError('La contraseña no coincide'));
                    }
                }
            ));
    }

    public function getName()
    {
        return 'uvmedia_usuariosbundle_usuariotype';
    }
}
