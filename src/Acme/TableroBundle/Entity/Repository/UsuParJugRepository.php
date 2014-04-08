<?php
namespace Acme\TableroBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

class UsuParJugRepository extends EntityRepository{
    
    public function findPartidasByUsuario($id){
        
//        $query = $this->getEntityManager()->createQueryBuilder()
//                ->select("upj")
//                ->from("AcmeTableroBundle:Partida", "p")
//                ->join("AcmeTableroBundle:UsuParJug", "upj")
//                ->where("upj.usuario = ".$id)
//                ->getQuery()
//                ->execute();
        
        $query = $this->getEntityManager()->createQueryBuilder()
                ->select("upj")
                ->from("AcmeTableroBundle:UsuParJug", "upj")
                ->where("upj.usuario = ".$id)
                ->getQuery()
                ->execute();
        
        return $query;
        
    }
    
    public function findDatosPartida($id_partida){
        
        $query = $this->getEntityManager()->createQueryBuilder()
                ->select("upj")
                ->from("AcmeTableroBundle:UsuParJug","upj")
                ->where("upj.partida = ".$id_partida)
                ->getQuery();
        
        return $query->getResult();
        
    }
    
    public function findUsuariosByPartida($id){
                
        $query = $this->getEntityManager()->createQueryBuilder()
                ->select("upj")
                ->from("AcmeTableroBundle:UsuParJug","upj")
                ->where("upj.partida = ".$id)
                ->getQuery();
        
        return $query->execute();
        
    }
    
}
