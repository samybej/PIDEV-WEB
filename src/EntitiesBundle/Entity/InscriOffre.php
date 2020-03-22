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
     *   @ORM\JoinColumn(name="id_offre", referencedColumnName="id")
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


}

