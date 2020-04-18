<?php

namespace EntitiesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participation
 *
 * @ORM\Table(name="participation", indexes={@ORM\Index(name="FK_id_chauffeur", columns={"id_chauffeur"}), @ORM\Index(name="FK_id_formation", columns={"id_formation"})})
 * @ORM\Entity
 */
class Participation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Chauffeur
     *
     * @ORM\ManyToOne(targetEntity="Chauffeur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_chauffeur", referencedColumnName="id")
     * })
     */
    private $idChauffeur;

    /**
     * @var \Formation
     *
     * @ORM\ManyToOne(targetEntity="Formation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_formation", referencedColumnName="id")
     * })
     */
    private $idFormation;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return \Chauffeur
     */
    public function getIdChauffeur()
    {
        return $this->idChauffeur;
    }

    /**
     * @param \Chauffeur $idChauffeur
     */
    public function setIdChauffeur($idChauffeur)
    {
        $this->idChauffeur = $idChauffeur;
    }

    /**
     * @return \Formation
     */
    public function getIdFormation()
    {
        return $this->idFormation;
    }

    /**
     * @param \Formation $idFormation
     */
    public function setIdFormation($idFormation)
    {
        $this->idFormation = $idFormation;
    }


}

