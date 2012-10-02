<?php

namespace Uvmedia\MenuBundle\Repository;

use Uvmedia\MenuBundle\Entity\MenuItem;
use Doctrine\ORM\EntityRepository;
/**
 * Clase MenuUtils
 *
 * @author uvmedia
 */
class MenuItemRepository extends EntityRepository
{
    public function findMenuRoot($id_grupo = null)
    {
        $criteria = array('mei_parent' => null);
        if(!empty($id_grupo)) $criteria['mei_group_id'] = $id_grupo;
        
        return $this->getEntityManager()
                ->getRepository('MenuBundle:MenuItem')
                ->findBy($criteria);
    }
}

?>
