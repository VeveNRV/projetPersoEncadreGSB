<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * fraisHorsForfait
 *
 * @ORM\Table(name="frais_hors_forfait")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\fraisHorsForfaitRepository")
 */
class fraisHorsForfait
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
     * @ORM\Column(name="nomFraisHF", type="string", length=255)
     */
    private $nomFraisHF;

    /**
     * @var string
     *
     * @ORM\Column(name="prixFraisHF", type="decimal", precision=10, scale=0)
     */
    private $prixFraisHF;

    /**
     * @var int
     *
     * @ORM\Column(name="ficheFrais", type="integer", unique=true)
     */
    /**
     * @ORM\ManyToOne(targetEntity="ficheFrais", inversedBy="fraisHorsForfait")
     * @ORM\JoinColumn(name="ficheFrais_id", referencedColumnName="id")
     */
    private $ficheFrais;


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
     * Set nomFraisHF
     *
     * @param string $nomFraisHF
     *
     * @return fraisHorsForfait
     */
    public function setNomFraisHF($nomFraisHF)
    {
        $this->nomFraisHF = $nomFraisHF;

        return $this;
    }

    /**
     * Get nomFraisHF
     *
     * @return string
     */
    public function getNomFraisHF()
    {
        return $this->nomFraisHF;
    }

    /**
     * Set prixFraisHF
     *
     * @param string $prixFraisHF
     *
     * @return fraisHorsForfait
     */
    public function setPrixFraisHF($prixFraisHF)
    {
        $this->prixFraisHF = $prixFraisHF;

        return $this;
    }

    /**
     * Get prixFraisHF
     *
     * @return string
     */
    public function getPrixFraisHF()
    {
        return $this->prixFraisHF;
    }

    /**
     * Set ficheFrais
     *
     * @param integer $ficheFrais
     *
     * @return fraisHorsForfait
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

