<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * etat
 *
 * @ORM\Table(name="etat")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\etatRepository")
 */
class etat
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
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var int
     *
     * @ORM\Column(name="ficheFrais", type="integer", unique=true)
     */
    /**
     * @ORM\OneToMany(targetEntity="ficheFrais", mappedBy="etat")
     */
    private $ficheFrais;

    public function __construct()
    {
        $this->ficheFrais = new ArrayCollection();
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return etat
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set ficheFrais
     *
     * @param integer $ficheFrais
     *
     * @return etat
     */
    public function setFicheFrais($ficheFrais)
    {
        $this->ficheFrais = $ficheFrais;

        return $this;
    }

    /**
     * Get ficheFrais
     *
     * @return int
     */
    public function getFicheFrais()
    {
        return $this->ficheFrais;
    }
}

