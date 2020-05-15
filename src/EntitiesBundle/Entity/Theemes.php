<?php

namespace EntitiesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Theemes
 *
 * @ORM\Table(name="theemes")
 * @ORM\Entity(repositoryClass="EntitiesBundle\Repository\TheemesRepository")
 */
class Theemes
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="Formateur", type="string", length=255)
     */
    private $formateur;

    /**
     * @var string
     *
     * @ORM\Column(name="Cibles", type="string", length=255)
     */
    private $cibles;



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
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param string $titre
     * @return Theemes
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
        return $this;
    }



    /**
     * Set formateur
     *
     * @param string $formateur
     *
     * @return Theemes
     */
    public function setFormateur($formateur)
    {
        $this->formateur = $formateur;
    
        return $this;
    }

    /**
     * Get formateur
     *
     * @return string
     */
    public function getFormateur()
    {
        return $this->formateur;
    }

    /**
     * Set cibles
     *
     * @param string $cibles
     *
     * @return Theemes
     */
    public function setCibles($cibles)
    {
        $this->cibles = $cibles;
    
        return $this;
    }

    /**
     * Get cibles
     *
     * @return string
     */
    public function getCibles()
    {
        return $this->cibles;
    }


}

