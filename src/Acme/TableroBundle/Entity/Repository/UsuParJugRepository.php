<?php
namespace Acme\TableroBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

class UsuParJugRepository extends EntityRepository{
    
    public function findPartidasByUsuario($id){
        
        $query = $this->getEntityManager()
                ->createQuery(""
                        . "SELECT upj FROM AcmeTableroBundle:UsuParJug upj "
                        . "JOIN upj.usuario u "
                        . "WHERE u.id = :id")
                ->setParameter("id", $id)
                ->getResult();
        return $query;
        
    }
    
    public function findDatosPartida($id_usuario, $id_partida){
        
        $query = $this->getEntityManager()
                    ->createQuery(""
                            . "SELECT upj FROM AcmeTableroBundle:UsuParJug upj "
                            . "JOIN upj.usuario u "
                            . "JOIN upj.partida p "
                            . "WHERE u.id = :id_u AND p.id = :id_p")
                    ->setParameter("id_u", $id_usuario)
                    ->setParameter("id_p", $id_partida)
                    ->getSingleResult();
        
        return $query;
        
    }
    
    public function findUsuariosByPartida($id){
        
        $query = $this->getEntityManager()
                ->createQuery(""
                        . "SELECT upj FROM AcmeTableroBundle:UsuParJug upj "
                        . "JOIN upj.partida p "
                        . "WHERE p.id = :id")
                ->setParameter("id", $id)
                ->getResult();
        return $query;
        
    }
    
}
