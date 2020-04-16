<?php

namespace EntitiesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InscriOffre
 *
 * @ORM\Table(name="inscri_offre", indexes={@ORM\Index(name="FK_id_client_offre", columns={"id_client"}), @ORM\Index(name="Fk_id_offreur_offre", columns={"id_offreur"}), @ORM\Index(name="FK_id_offre", columns={"id_offre"})})
 * @ORM\Entity
 */
class InscriOffre
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
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_client", referencedColumnName="id")
     * })
     */
    private $idClient;

    /**
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_offre", referencedColumnName="id", onDelete="CASCADE")
     * })
     */
    private $idOffre;

    /**
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_offreur", referencedColumnName="id")
     * })
     */
    private $idOffreur;

    /**
     * InscriOffre constructor.
     * @param \Client $idClient
     * @param \Offre $idOffre
     * @param \Client $idOffreur
     */
    public function __construct(Client $idClient, Offre $idOffre, Client $idOffreur)
    {
        $this->idClient = $idClient;
        $this->idOffre = $idOffre;
        $this->idOffreur = $idOffreur;
    }

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
     * @return \Client
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * @param \Client $idClient
     */
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;
    }

    /**
     * @return \Offre
     */
    public function getIdOffre()
    {
        return $this->idOffre;
    }

    /**
     * @param \Offre $idOffre
     */
    public function setIdOffre($idOffre)
    {
        $this->idOffre = $idOffre;
    }

    /**
     * @return \Client
     */
    public function getIdOffreur()
    {
        return $this->idOffreur;
    }

    /**
     * @param \Client $idOffreur
     */
    public function setIdOffreur($idOffreur)
    {
        $this->idOffreur = $idOffreur;
    }




}

