<?php

namespace EntitiesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Admin
 *
 * @ORM\Table(name="admin")
 * @ORM\Entity(repositoryClass="EntitiesBundle\Repository\AdminRepository")
 */
class Admin
{
    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp", type="string", length=20, nullable=false)
     */
    private $mdp;

    /**
     *@ORM\OneToOne(targetEntity="UserBundle\Entity\User")
     *@ORM\JoinColumn(name="id_fos", referencedColumnName="id")
     */
    private $idFOS;

    /**
     * @var integer
     *
     * @ORM\Column(name="etat_compte", type="integer", nullable=false)
     */
    private $etatCompte = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=50, nullable=false)
     */
    private $mail;


}

