<?php

namespace sprint2\realEstateBundle\Entity;
use sprint2\realEstateBundle\Entity\Adresse;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offre
 *
 * @ORM\Table(name="offre", indexes={@ORM\Index(name="id_gerant", columns={"id_gerant"}), @ORM\Index(name="id_adresse", columns={"id_adresse"})})
 * @ORM\Entity
 */
class Offre
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
     * @var integer
     *
     * @ORM\Column(name="id_gerant", type="integer", nullable=false)
     */
    private $idGerant;

    /**
     * @var Adresse
     *
     * @ORM\ManyToOne(targetEntity="Adresse")
     * @ORM\JoinColumn(name="id_adresse")
     */
    private $Adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=20, nullable=false)
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="typeImmob", type="string", length=20, nullable=false)
     */
    private $typeimmob;

    /**
     * @var string
     *
     * @ORM\Column(name="nature", type="string", length=20, nullable=false)
     */
    private $nature;

    /**
     * @var string
     *
     * @ORM\Column(name="payement", type="string", length=20, nullable=false)
     */
    private $payement;

    /**
     * @var integer
     *
     * @ORM\Column(name="surface", type="integer", nullable=false)
     */
    private $surface;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrPiece", type="integer", nullable=false)
     */
    private $nbrpiece;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datePublication", type="date", nullable=true)
     */
    private $datepublication;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateModification", type="date", nullable=true)
     */
    private $datemodification;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dispobileAPartir", type="date", nullable=true)
     */
    private $dispobileapartir;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description = 'aucune description disponible';

    /**
     * @var integer
     *
     * @ORM\Column(name="etage", type="integer", nullable=true)
     */
    private $etage = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ascenceur", type="integer", nullable=true)
     */
    private $ascenceur;

    /**
     * @var integer
     *
     * @ORM\Column(name="cuisineEquipe", type="integer", nullable=true)
     */
    private $cuisineequipe;

    /**
     * @var integer
     *
     * @ORM\Column(name="jardin", type="integer", nullable=true)
     */
    private $jardin;

    /**
     * @var integer
     *
     * @ORM\Column(name="entreeIndep", type="integer", nullable=true)
     */
    private $entreeindep;

    /**
     * @var integer
     *
     * @ORM\Column(name="gazDeVille", type="integer", nullable=true)
     */
    private $gazdeville;

    /**
     * @var integer
     *
     * @ORM\Column(name="chauffage", type="integer", nullable=true)
     */
    private $chauffage;

    /**
     * @var integer
     *
     * @ORM\Column(name="meuble", type="integer", nullable=true)
     */
    private $meuble;

    /**
     * @var integer
     *
     * @ORM\Column(name="climatisation", type="integer", nullable=true)
     */
    private $climatisation;

    /**
     * @var float
     *
     * @ORM\Column(name="note", type="float", precision=5, scale=2, nullable=true)
     */
    private $note;

    /**
     * @var integer
     *
     * @ORM\Column(name="NBNote", type="integer", nullable=true)
     */
    private $NBNote;

    /**
     * @var string
     *
     * @ORM\Column(name="UrlImage", type="string", length=200, nullable=false)
     */
    private $urlimage;

    /**
     * @var string
     *
     * @ORM\Column(name="position", type="string", length=60, nullable=true)
     */
    private $position;



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
     * @param string $payement
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
     * @return string 
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
     * Set Adresse
     *
     * @param $adresse
     * @return Offre
     */
    public function setAdresse( $adresse )
    {
        $this->Adresse = $adresse;

        return $this;
    }

    /**
     * Get Adresse
     *
     * @return Adresse 
     */
    public function getAdresse()
    {
        return $this->Adresse;
    }

    public function getNBNote(){

        return $this->NBNote;

        
    }
    /**
     * Set NBNote
     *
     * @param integer $NBNote
     * @return Offre
     */
    public function setNBNote($NBNote){
        $this->NBNote=$NBNote;
        return $this;
    }

}
