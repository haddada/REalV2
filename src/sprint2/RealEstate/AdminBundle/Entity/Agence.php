<?php

namespace sprint2\RealEstate\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agence
 */
class Agence
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $idGerant;

    /**
     * @var integer
     */
    private $idAdresse;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $description;


    /**
     * Set id
     *
     * @param integer $id
     * @return Agence
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

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
     * Set idGerant
     *
     * @param integer $idGerant
     * @return Agence
     */
    public function setIdGerant($idGerant)
    {
        $this->idGerant = $idGerant;

        return $this;
    }

    /**
     * Get idGerant
     *
     * @return integer 
     */
    public function getIdGerant()
    {
        return $this->idGerant;
    }

    /**
     * Set idAdresse
     *
     * @param integer $idAdresse
     * @return Agence
     */
    public function setIdAdresse($idAdresse)
    {
        $this->idAdresse = $idAdresse;

        return $this;
    }

    /**
     * Get idAdresse
     *
     * @return integer 
     */
    public function getIdAdresse()
    {
        return $this->idAdresse;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Agence
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Agence
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
}
