<?php

namespace EntitiesBundle\Repository;

/**
 * NoteRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class NoteRepository extends \Doctrine\ORM\EntityRepository
{
    public function getNoteExiste($id_chauffeur,$id_client)
    {
        $qb = $this->getEntityManager()->
        createQuery("select n from EntitiesBundle:Note n WHERE n.idClient= :id_client AND n.idChauffeur = :id_chauffeur")
            ->setParameters(array('id_chauffeur'=>$id_chauffeur, 'id_client'=>$id_client));

        return $query = $qb->getResult();
    }
}