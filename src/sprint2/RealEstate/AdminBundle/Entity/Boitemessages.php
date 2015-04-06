<?php

namespace sprint2\RealEstate\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
/**
 * @HasLifecycleCallbacks 
 * Boitemessages
 */
class Boitemessages
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $contenu;

    /**
     * @var integer
     */
    private $vu;

    /**
     * 
     * @var \DateTime
     */
    private $tempsEnvoi;

    /**
     * @var \sprint2\RealEstate\AdminBundle\Entity\Utilisateur
     */
    private $idDestinataire;

    /**
     * @var \sprint2\RealEstate\AdminBundle\Entity\Utilisateur
     */
    private $idExpediteur;
    
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
     * Set contenu
     *
     * @param string $contenu
     * @return Boitemessages
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set vu
     *
     * @param integer $vu
     * @return Boitemessages
     */
    public function setVu($vu)
    {
        $this->vu = $vu;

        return $this;
    }

    /**
     * Get vu
     *
     * @return integer 
     */
    public function getVu()
    {
        return $this->vu;
    }

    /**
     * Set tempsEnvoi
     *
     * @param \DateTime $tempsEnvoi
     * @return Boitemessages
     */
    public function setTempsEnvoi($tempsEnvoi)
    {
        $this->tempsEnvoi = $tempsEnvoi;

        return $this;
    }

    /**
     * Get tempsEnvoi
     *
     * @return \DateTime 
     */
    public function getTempsEnvoi()
    {
        return $this->tempsEnvoi;
    }

    /**
     * Set idDestinataire
     *
     * @param \sprint2\RealEstate\AdminBundle\Entity\Utilisateur $idDestinataire
     * @return Boitemessages
     */
    public function setIdDestinataire(\sprint2\RealEstate\AdminBundle\Entity\Utilisateur $idDestinataire = null)
    {
        $this->idDestinataire = $idDestinataire;

        return $this;
    }

    /**
     * Get idDestinataire
     *
     * @return \sprint2\RealEstate\AdminBundle\Entity\Utilisateur 
     */
    public function getIdDestinataire()
    {
        return $this->idDestinataire;
    }

    /**
     * Set idExpediteur
     *
     * @param \sprint2\RealEstate\AdminBundle\Entity\Utilisateur $idExpediteur
     * @return Boitemessages
     */
    public function setIdExpediteur(\sprint2\RealEstate\AdminBundle\Entity\Utilisateur $idExpediteur = null)
    {
        $this->idExpediteur = $idExpediteur;

        return $this;
    }

    /**
     * Get idExpediteur
     *
     * @return \sprint2\RealEstate\AdminBundle\Entity\Utilisateur 
     */
    public function getIdExpediteur()
    {
        return $this->idExpediteur;
    }
}
