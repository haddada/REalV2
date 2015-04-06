<?php

namespace sprint2\RealEstate\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offre
 */
class Offre
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
    private $etat;

    /**
     * @var string
     */
    private $typeimmob;

    /**
     * @var string
     */
    private $nature;

    /**
     * @var float
     */
    private $payement;

    /**
     * @var integer
     */
    private $surface;

    /**
     * @var integer
     */
    private $nbrpiece;

    /**
     * @var \DateTime
     */
    private $datepublication;

    /**
     * @var \DateTime
     */
    private $datemodification;

    /**
     * @var \DateTime
     */
    private $dispobileapartir;

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $etage;

    /**
     * @var integer
     */
    private $ascenceur;

    /**
     * @var integer
     */
    private $cuisineequipe;

    /**
     * @var integer
     */
    private $jardin;

    /**
     * @var integer
     */
    private $entreeindep;

    /**
     * @var integer
     */
    private $gazdeville;

    /**
     * @var integer
     */
    private $chauffage;

    /**
     * @var integer
     */
    private $meuble;

    /**
     * @var integer
     */
    private $climatisation;

    /**
     * @var float
     */
    private $note;

    /**
     * @var string
     */
    private $urlimage;

    /**
     * @var string
     */
    private $position;

    /**
     * @var integer
     */
    private $nbnote;


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
     * @return Offre
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
     * @return Offre
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
     * Set etat
     *
     * @param string $etat
     * @return Offre
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set typeimmob
     *
     * @param string $typeimmob
     * @return Offre
     */
    public function setTypeimmob($typeimmob)
    {
        $this->typeimmob = $typeimmob;

        return $this;
    }

    /**
     * Get typeimmob
     *
     * @return string 
     */
    public function getTypeimmob()
    {
        return $this->typeimmob;
    }

    /**
     * Set nature
     *
     * @param string $nature
     * @return Offre
     */
    public function setNature($nature)
    {
        $this->nature = $nature;

        return $this;
    }

    /**
     * Get nature
     *
     * @return string 
     */
    public function getNature()
    {
        return $this->nature;
    }

    /**
     * Set payement
     *
     * @param float $payement
     * @return Offre
     */
    public function setPayement($payement)
    {
        $this->payement = $payement;

        return $this;
    }

    /**
     * Get payement
     *
     * @return float 
     */
    public function getPayement()
    {
        return $this->payement;
    }

    /**
     * Set surface
     *
     * @param integer $surface
     * @return Offre
     */
    public function setSurface($surface)
    {
        $this->surface = $surface;

        return $this;
    }

    /**
     * Get surface
     *
     * @return integer 
     */
    public function getSurface()
    {
        return $this->surface;
    }

    /**
     * Set nbrpiece
     *
     * @param integer $nbrpiece
     * @return Offre
     */
    public function setNbrpiece($nbrpiece)
    {
        $this->nbrpiece = $nbrpiece;

        return $this;
    }

    /**
     * Get nbrpiece
     *
     * @return integer 
     */
    public function getNbrpiece()
    {
        return $this->nbrpiece;
    }

    /**
     * Set datepublication
     *
     * @param \DateTime $datepublication
     * @return Offre
     */
    public function setDatepublication($datepublication)
    {
        $this->datepublication = $datepublication;

        return $this;
    }

    /**
     * Get datepublication
     *
     * @return \DateTime 
     */
    public function getDatepublication()
    {
        return $this->datepublication;
    }

    /**
     * Set datemodification
     *
     * @param \DateTime $datemodification
     * @return Offre
     */
    public function setDatemodification($datemodification)
    {
        $this->datemodification = $datemodification;

        return $this;
    }

    /**
     * Get datemodification
     *
     * @return \DateTime 
     */
    public function getDatemodification()
    {
        return $this->datemodification;
    }

    /**
     * Set dispobileapartir
     *
     * @param \DateTime $dispobileapartir
     * @return Offre
     */
    public function setDispobileapartir($dispobileapartir)
    {
        $this->dispobileapartir = $dispobileapartir;

        return $this;
    }

    /**
     * Get dispobileapartir
     *
     * @return \DateTime 
     */
    public function getDispobileapartir()
    {
        return $this->dispobileapartir;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Offre
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

    /**
     * Set etage
     *
     * @param integer $etage
     * @return Offre
     */
    public function setEtage($etage)
    {
        $this->etage = $etage;

        return $this;
    }

    /**
     * Get etage
     *
     * @return integer 
     */
    public function getEtage()
    {
        return $this->etage;
    }

    /**
     * Set ascenceur
     *
     * @param integer $ascenceur
     * @return Offre
     */
    public function setAscenceur($ascenceur)
    {
        $this->ascenceur = $ascenceur;

        return $this;
    }

    /**
     * Get ascenceur
     *
     * @return integer 
     */
    public function getAscenceur()
    {
        return $this->ascenceur;
    }

    /**
     * Set cuisineequipe
     *
     * @param integer $cuisineequipe
     * @return Offre
     */
    public function setCuisineequipe($cuisineequipe)
    {
        $this->cuisineequipe = $cuisineequipe;

        return $this;
    }

    /**
     * Get cuisineequipe
     *
     * @return integer 
     */
    public function getCuisineequipe()
    {
        return $this->cuisineequipe;
    }

    /**
     * Set jardin
     *
     * @param integer $jardin
     * @return Offre
     */
    public function setJardin($jardin)
    {
        $this->jardin = $jardin;

        return $this;
    }

    /**
     * Get jardin
     *
     * @return integer 
     */
    public function getJardin()
    {
        return $this->jardin;
    }

    /**
     * Set entreeindep
     *
     * @param integer $entreeindep
     * @return Offre
     */
    public function setEntreeindep($entreeindep)
    {
        $this->entreeindep = $entreeindep;

        return $this;
    }

    /**
     * Get entreeindep
     *
     * @return integer 
     */
    public function getEntreeindep()
    {
        return $this->entreeindep;
    }

    /**
     * Set gazdeville
     *
     * @param integer $gazdeville
     * @return Offre
     */
    public function setGazdeville($gazdeville)
    {
        $this->gazdeville = $gazdeville;

        return $this;
    }

    /**
     * Get gazdeville
     *
     * @return integer 
     */
    public function getGazdeville()
    {
        return $this->gazdeville;
    }

    /**
     * Set chauffage
     *
     * @param integer $chauffage
     * @return Offre
     */
    public function setChauffage($chauffage)
    {
        $this->chauffage = $chauffage;

        return $this;
    }

    /**
     * Get chauffage
     *
     * @return integer 
     */
    public function getChauffage()
    {
        return $this->chauffage;
    }

    /**
     * Set meuble
     *
     * @param integer $meuble
     * @return Offre
     */
    public function setMeuble($meuble)
    {
        $this->meuble = $meuble;

        return $this;
    }

    /**
     * Get meuble
     *
     * @return integer 
     */
    public function getMeuble()
    {
        return $this->meuble;
    }

    /**
     * Set climatisation
     *
     * @param integer $climatisation
     * @return Offre
     */
    public function setClimatisation($climatisation)
    {
        $this->climatisation = $climatisation;

        return $this;
    }

    /**
     * Get climatisation
     *
     * @return integer 
     */
    public function getClimatisation()
    {
        return $this->climatisation;
    }

    /**
     * Set note
     *
     * @param float $note
     * @return Offre
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return float 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set urlimage
     *
     * @param string $urlimage
     * @return Offre
     */
    public function setUrlimage($urlimage)
    {
        $this->urlimage = $urlimage;

        return $this;
    }

    /**
     * Get urlimage
     *
     * @return string 
     */
    public function getUrlimage()
    {
        return $this->urlimage;
    }

    /**
     * Set position
     *
     * @param string $position
     * @return Offre
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set nbnote
     *
     * @param integer $nbnote
     * @return Offre
     */
    public function setNbnote($nbnote)
    {
        $this->nbnote = $nbnote;

        return $this;
    }

    /**
     * Get nbnote
     *
     * @return integer 
     */
    public function getNbnote()
    {
        return $this->nbnote;
    }
}
