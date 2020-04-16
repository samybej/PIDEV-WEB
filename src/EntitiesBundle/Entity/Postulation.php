<?php

namespace EntitiesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Postulation
 *
 * @ORM\Table(name="postulation", indexes={@ORM\Index(name="id_client", columns={"id_client"})})
 * @ORM\Entity
 */
class Postulation
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_demande", type="date", nullable=false)
     */
    private $dateDemande;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_permis", type="integer", nullable=false)
     */
    private $numPermis;

    /**
     * @var integer
     *
     * @ORM\Column(name="cin", type="integer", nullable=false)
     */
    private $cin;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=20, nullable=false)
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="experience", type="string", length=20, nullable=false)
     */
    private $experience;

    /**
     * @var string
     *
     * @ORM\Column(name="Langue", type="string", length=20, nullable=false)
     */
    private $langue;

    /**
     * @var integer
     *
     * @ORM\Column(name="tel", type="integer", nullable=false)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=20, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=20, nullable=false)
     */
    private $prenom;

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
     * @return \DateTime
     */
    public function getDateDemande()
    {
        return $this->dateDemande;
    }

    /**
     * @param \DateTime $dateDemande
     */
    public function setDateDemande($dateDemande)
    {
        $this->dateDemande = $dateDemande;
    }

    /**
     * @return int
     */
    public function getNumPermis()
    {
        return $this->numPermis;
    }

    /**
     * @param int $numPermis
     */
    public function setNumPermis($numPermis)
    {
        $this->numPermis = $numPermis;
    }

    /**
     * @return int
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * @param int $cin
     */
    public function setCin($cin)
    {
        $this->cin = $cin;
    }

    /**
     * @return string
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * @param string $sexe
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }

    /**
     * @return string
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * @param string $experience
     */
    public function setExperience($experience)
    {
        $this->experience = $experience;
    }

    /**
     * @return string
     */
    public function getLangue()
    {
        return $this->langue;
    }

    /**
     * @param string $langue
     */
    public function setLangue($langue)
    {
        $this->langue = $langue;
    }

    /**
     * @return int
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param int $tel
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
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


}

