<?php


namespace FormationBundle\Repository;

use EntitiesBundle\Entity\Participation;

/**
 * FormationRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FormationRepository extends \Doctrine\ORM\EntityRepository
{


    public function rechercherCovoiturage($id)
    {
        $qb = $this->getEntityManager()->
        createQuery("select t,f from EntitiesBundle:Formation f JOIN f.idClient c Where f.id=:id ")
            ->setParameters(array('id' => $id));

        return $query = $qb->getResult();
    }

    public function recupererCovoiturage()
    {
        $qb = $this->getEntityManager()->
        createQuery("select t,f from EntitiesBundle:Formation f JOIN f.typeTheme t ");

        return $query = $qb->getResult();
    }




    public function participantparFormation($id)
    {
        $qb = $this->getEntityManager()->
        createQuery(" select p,c from EntitiesBundle:Participation p JOIN p.idChauffeur c Where p.idFormation=:id ")
            ->setParameters(array('id' => $id));

        return $query = $qb->getResult();
    }


    public function Mesparticipation($id)
    {
        $qb = $this->getEntityManager()->
        createQuery(" select p,f from EntitiesBundle:Participation p JOIN p.idFormation f Where p.idChauffeur=:id ")
            ->setParameters(array('id' => $id));

        return $query = $qb->getResult();
    }




}