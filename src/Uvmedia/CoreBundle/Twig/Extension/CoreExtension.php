<?php

namespace Uvmedia\CoreBundle\Twig\Extension;

class CoreExtension extends \Twig_Extension 
{
    public function getName()
    {
        return 'core_extension';
    }
    
    public function getFilters()
    {
        return array(
            'parametroEntidad' => new \Twig_Filter_Method($this, 'parametroEntidadFilter')
        );
    }
    
    public function parametroEntidadFilter(&$entidad, $nombre_parametro, $parametros_adicionales = null)
    {
        return call_user_func_array(array($entidad, 'get' . ucfirst($nombre_parametro)), $parametros_adicionales);
    }
}