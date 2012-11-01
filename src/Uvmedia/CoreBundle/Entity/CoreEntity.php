<?php

namespace Uvmedia\CoreBundle\Entity;
/**
 * Clase CoreEntity
 * Clase base para crear getters y setters genéricos
 *
 * @author uvmedia
 */
abstract class CoreEntity 
{
    public function get($param_name)
    {
        return call_user_func(array($this, 'get' . ucfirst($param_name)));
    }
    
    public function set($param_name, $param_value)
    {
        call_user_func(array($this, 'set' . ucfirst($param_name)), $param_value);
    }
}