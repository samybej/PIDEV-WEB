<?php

namespace EntitiesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity
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
     * @var binary
     *
     * @ORM\Column(name="image", type="binary", nullable=true)
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


}

