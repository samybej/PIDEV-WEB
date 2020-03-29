<?php

namespace TransportBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * quantite
 *
 * @ORM\Table(name="quantite")
 * @ORM\Entity(repositoryClass="TransportBundle\Repository\quantiteRepository")
 */
class quantite
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    private $g;
    private $s;
    private $m;

    /**
     * @return mixed
     */
    public function getG()
    {
        return $this->g;
    }

    /**
     * @param mixed $g
     */
    public function setG($g)
    {
        $this->g = $g;
    }

    /**
     * @return mixed
     */
    public function getS()
    {
        return $this->s;
    }

    /**
     * @param mixed $s
     */
    public function setS($s)
    {
        $this->s = $s;
    }

    /**
     * @return mixed
     */
    public function getM()
    {
        return $this->m;
    }

    /**
     * @param mixed $m
     */
    public function setM($m)
    {
        $this->m = $m;
    }


}
