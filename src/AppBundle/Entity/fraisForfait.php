<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * fraisForfait
 *
 * @ORM\Table(name="frais_forfait")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\fraisForfaitRepository")
 */
class fraisForfait
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
     * @var int
     *
     * @ORM\Column(name="quantiteFrais", type="integer", nullable=true)
     */
    private $quantiteFrais;

    /**
     * @var int
     *
     * @ORM\Column(name="ficheFrais", type="integer", unique=true)
     */
    /**
     * @ORM\ManyToOne(targetEntity="ficheFrais", inversedBy="fraisForfait")
     * @ORM\JoinColumn(name="ficheFrais_id", referencedColumnName="id")
     */
    private $ficheFrais;

    /**
     * @var int
     *
     * @ORM\Column(name="listeFrais", type="integer", unique=true)
     */
    /**
     * @ORM\ManyToOne(targetEntity="listeFrais, inversedBy="fraisForfait")
     * @ORM\JoinColumn(name="listeFrais_id", referencedColumnName="id")
     */
    private $listeFrais;


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
     * Set quantiteFrais
     *
     * @param integer $quantiteFrais
     *
     * @return fraisForfait
     */
    public function setQuantiteFrais($quantiteFrais)
    {
        $this->quantiteFrais = $quantiteFrais;

        return $this;
    }

    /**
     * Get quantiteFrais
     *
     * @return int
     */
    public function getQuantiteFrais()
    {
        return $this->quantiteFrais;
    }

    /**
     * Set ficheFrais
     *
     * @param integer $ficheFrais
     *
     * @return fraisForfait
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

    /**
     * Set listeFrais
     *
     * @param integer $listeFrais
     *
     * @return fraisForfait
     */
    public function setListeFrais($listeFrais)
    {
        $this->listeFrais = $listeFrais;

        return $this;
    }

    /**
     * Get listeFrais
     *
     * @return int
     */
    public function getListeFrais()
    {
        return $this->listeFrais;
    }
}

