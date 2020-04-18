<?php

namespace EntitiesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Type
 *
 * @ORM\Table(name="type")
 * @ORM\Entity
 */
class Type
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="vitesse", type="integer")
     */
    private $vitesse;

    /**
     * @var int
     *
     * @ORM\Column(name="nbrArrets", type="integer")
     */
    private $nbrArrets;

    /**
     * @var int
     *
     * @ORM\Column(name="tmpArret", type="integer")
     */
    private $tmpArret = 0;

    /**
     *
     * @ORM\OneToOne(targetEntity="Offre",inversedBy="type")
     * @ORM\JoinColumn(name="id_offre", referencedColumnName="id")
     */
    private $idOffre;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Type
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set vitesse
     *
     * @param integer $vitesse
     *
     * @return Type
     */
    public function setVitesse($vitesse)
    {
        $this->vitesse = $vitesse;
    
        return $this;
    }

    /**
     * Get vitesse
     *
     * @return integer
     */
    public function getVitesse()
    {
        return $this->vitesse;
    }

    /**
     * Set nbrArrets
     *
     * @param integer $nbrArrets
     *
     * @return Type
     */
    public function setNbrArrets($nbrArrets)
    {
        $this->nbrArrets = $nbrArrets;
    
        return $this;
    }

    /**
     * Get nbrArrets
     *
     * @return integer
     */
    public function getNbrArrets()
    {
        return $this->nbrArrets;
    }

    /**
     * Set tmpArret
     *
     * @param integer $tmpArret
     *
     * @return Type
     */
    public function setTmpArret($tmpArret)
    {
        $this->tmpArret = $tmpArret;
    
        return $this;
    }

    /**
     * Get tmpArret
     *
     * @return integer
     */
    public function getTmpArret()
    {
        return $this->tmpArret;
    }

    /**
     * @return Offre
     */
    public function getIdOffre()
    {
        return $this->idOffre;
    }

    /**
     * @param Offre $idOffre
     */
    public function setIdOffre($idOffre)
    {
        $this->idOffre = $idOffre;
    }


}

