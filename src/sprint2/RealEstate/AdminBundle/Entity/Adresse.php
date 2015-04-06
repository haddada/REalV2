<?php

namespace sprint2\RealEstate\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adresse
 */
class Adresse
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $gouvernorat;

    /**
     * @var integer
     */
    private $codepostal;

    /**
     * @var string
     */
    private $ville;


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
     * Set gouvernorat
     *
     * @param string $gouvernorat
     * @return Adresse
     */
    public function setGouvernorat($gouvernorat)
    {
        $this->gouvernorat = $gouvernorat;

        return $this;
    }

    /**
     * Get gouvernorat
     *
     * @return string 
     */
    public function getGouvernorat()
    {
        return $this->gouvernorat;
    }

    /**
     * Set codepostal
     *
     * @param integer $codepostal
     * @return Adresse
     */
    public function setCodepostal($codepostal)
    {
        $this->codepostal = $codepostal;

        return $this;
    }

    /**
     * Get codepostal
     *
     * @return integer 
     */
    public function getCodepostal()
    {
        return $this->codepostal;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Adresse
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }
}
