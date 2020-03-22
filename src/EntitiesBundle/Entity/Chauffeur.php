<?php

namespace EntitiesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chauffeur
 *
 * @ORM\Table(name="chauffeur", indexes={@ORM\Index(name="id_vehicule", columns={"id_vehicule"})})
 * @ORM\Entity
 */
class Chauffeur
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
     * @var integer
     *
     * @ORM\Column(name="cin", type="integer", nullable=true)
     */
    private $cin;

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
     * @var integer
     *
     * @ORM\Column(name="tel", type="integer", nullable=false)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=20, nullable=false)
     */
    private $sexe;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_naissance", type="date", nullable=true)
     */
    private $dateNaissance;

    /**
     * @var float
     *
     * @ORM\Column(name="salaire", type="float", precision=10, scale=0, nullable=true)
     */
    private $salaire;

    /**
     * @var float
     *
     * @ORM\Column(name="note", type="float", precision=10, scale=0, nullable=true)
     */
    private $note;

    /**
     * @var binary
     *
     * @ORM\Column(name="image", type="binary", nullable=true)
     */
    private $image;

    /**
     * @var integer
     *
     * @ORM\Column(name="etat_compte", type="integer", nullable=true)
     */
    private $etatCompte;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=20, nullable=true)
     */
    private $role;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_permis", type="integer", nullable=true)
     */
    private $numPermis;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp", type="string", length=50, nullable=true)
     */
    private $mdp;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbReclamation", type="integer", nullable=true)
     */
    private $nbreclamation;

    /**
     * @var \Vehicule
     *
     * @ORM\ManyToOne(targetEntity="Vehicule")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_vehicule", referencedColumnName="id")
     * })
     */
    private $idVehicule;


}

