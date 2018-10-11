<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * listeFrais
 *
 * @ORM\Table(name="liste_frais")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\listeFraisRepository")
 */
class listeFrais
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
     * @var string
     *
     * @ORM\Column(name="montant", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $montant;

    /**
     * @var int
     *
     * @ORM\Column(name="fraisForfait", type="integer")
     */
    /**
     * @ORM\OneToMany(targetEntity="fraisForfait", mappedBy="listeFrais")
     */
    private $fraisForfait;

    public function __construct()
    {
        $this->fraisForfait = new ArrayCollection();
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
     * @return listeFrais
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
     * Set montant
     *
     * @param string $montant
     *
     * @return listeFrais
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return string
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set fraisForfait
     *
     * @param integer $fraisForfait
     *
     * @return listeFrais
     */
    public function setFraisForfait($fraisForfait)
    {
        $this->fraisForfait = $fraisForfait;

        return $this;
    }

    /**
     * Get fraisForfait
     *
     * @return int
     */
    public function getFraisForfait()
    {
        return $this->fraisForfait;
    }
}

