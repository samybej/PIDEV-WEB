<?php

namespace EntitiesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use UserBundle\Entity\User;
/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass="EntitiesBundle\Repository\ClientRepository")
 */
class Client
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
     *@ORM\OneToOne(targetEntity="UserBundle\Entity\User")
     *@ORM\JoinColumn(name="id_fos", referencedColumnName="id")
     */
    private $idFOS;

    /**
     * @var integer
     *
     * @ORM\Column(name="tel", type="integer", nullable=false)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=50, nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp", type="string", length=250, nullable=false)
     */
    private $mdp;

    /**
     * @var integer
     *
     * @ORM\Column(name="etat_compte", type="integer", nullable=false)
     */
    private $etatCompte = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", nullable=true)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=50, nullable=false)
     */
    private $mail;

    /**
     * @var integer
     *
     * @ORM\Column(name="point", type="integer", nullable=false)
     */
    private $point = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="avertissement", type="integer", nullable=false)
     */
    private $avertissement = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="cadeau", type="integer", nullable=false)
     */
    private $cadeau = '0';

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
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param string $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return string
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * @return mixed
     */
    public function getIdFOS()
    {
        return $this->idFOS;
    }

    /**
     * @param mixed $idFOS
     */
    public function setIdFOS($idFOS)
    {
        $this->idFOS = $idFOS;
    }

    /**
     * @param string $mdp
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;
    }

    /**
     * @return int
     */
    public function getEtatCompte()
    {
        return $this->etatCompte;
    }

    /**
     * @param int $etatCompte
     */
    public function setEtatCompte($etatCompte)
    {
        $this->etatCompte = $etatCompte;
    }

    /**
     * @return binary
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param binary $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param string $mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * @return int
     */
    public function getPoint()
    {
        return $this->point;
    }

    /**
     * @param int $point
     */
    public function setPoint($point)
    {
        $this->point = $point;
    }

    /**
     * @return int
     */
    public function getAvertissement()
    {
        return $this->avertissement;
    }

    /**
     * @param int $avertissement
     */
    public function setAvertissement($avertissement)
    {
        $this->avertissement = $avertissement;
    }

    /**
     * @return int
     */
    public function getCadeau()
    {
        return $this->cadeau;
    }

    /**
     * @param int $cadeau
     */
    public function setCadeau($cadeau)
    {
        $this->cadeau = $cadeau;
    }

    public function __toString()
    {
        return (string) $this->id;
    }






}

