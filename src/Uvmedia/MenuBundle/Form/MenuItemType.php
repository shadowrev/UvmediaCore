<?php

namespace Uvmedia\MenuBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class MenuItemType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('mei_nombre')
            ->add('mei_enlace')
            ->add('mei_group_id')
            ->add('mei_parent')
        ;
    }

    public function getName()
    {
        return 'uvmedia_menubundle_menuitemtype';
    }
}
