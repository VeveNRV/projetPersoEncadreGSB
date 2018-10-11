<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ficheFrais
 *
 * @ORM\Table(name="fiche_frais")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ficheFraisRepository")
 */
class ficheFrais
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="date")
     */
    private $dateCreation;

    /**
     * @var int
     *
     * @ORM\Column(name="mois", type="integer")
     */
    private $mois;

    /**
     * @var string
     *
     * @ORM\Column(name="annee", type="string", length=255)
     */
    private $annee;

    /**
     * @var int
     *
     * @ORM\Column(name="utilisateur", type="integer", unique=true)
     */
    /**
     * @ORM\ManyToOne(targetEntity="utilisateur", inversedBy="ficheFrais")
     * @ORM\JoinColumn(name="utilisateur_id", referencedColumnName="id")
     */
    private $utilisateur;


    /**
     * @var int
     *
     * @ORM\Column(name="etat", type="integer")
     */
    /**
     * @ORM\ManyToOne(targetEntity="etat", inversedBy="ficheFrais")
     * @ORM\JoinColumn(name="etat_id", referencedColumnName="id")
     */
    private $etat;

    /**
     * @var int
     *
     * @ORM\Column(name="fraisForfait", type="integer", unique=true)
     */
    /**
     * @ORM\OneToMany(targetEntity="fraisForfait", mappedBy="ficheFrais")
     */
    private $fraisForfait;

    public function __construct()
    {
        $this->fraisForfait = new ArrayCollection();
    }

    /**
     * @var int
     *
     * @ORM\Column(name="fraisHorsForfait", type="integer", unique=true)
     */
    /**
     * @ORM\OneToMany(targetEntity="fraisHorsForfait", mappedBy="ficheFrais")
     */
    private $fraisHorsForfait;

    public function __constructHF()
    {
        $this->fraisHorsForfait = new ArrayCollection();
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
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return ficheFrais
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set mois
     *
     * @param integer $mois
     *
     * @return ficheFrais
     */
    public function setMois($mois)
    {
        $this->mois = $mois;

        return $this;
    }

    /**
     * Get mois
     *
     * @return int
     */
    public function getMois()
    {
        return $this->mois;
    }

    /**
     * Set annee
     *
     * @param string $annee
     *
     * @return ficheFrais
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return string
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set utilisateur
     *
     * @param integer $utilisateur
     *
     * @return ficheFrais
     */
    public function setUtilisateur($utilisateur)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return int
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    /**
     * Set etat
     *
     * @param integer $etat
     *
     * @return ficheFrais
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return int
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set fraisForfait
     *
     * @param integer $fraisForfait
     *
     * @return ficheFrais
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

    /**
     * Set fraisHorsForfait
     *
     * @param integer $fraisHorsForfait
     *
     * @return ficheFrais
     */
    public function setFraisHorsForfait($fraisHorsForfait)
    {
        $this->fraisHorsForfait = $fraisHorsForfait;

        return $this;
    }

    /**
     * Get fraisHorsForfait
     *
     * @return int
     */
    public function getFraisHorsForfait()
    {
        return $this->fraisHorsForfait;
    }
}

