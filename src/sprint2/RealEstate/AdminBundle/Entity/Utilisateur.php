<?php

namespace sprint2\RealEstate\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Utilisateur
 * @ORM\HasLifecycleCallbacks
 */
class Utilisateur
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @Assert\Email(
     *     message = "le mail '{{ value }}' n'est pas une mail valide.",
     *     checkMX = true
     * )
     * @Assert\NotBlank(
     *     message = "remplire le champs",
     *     )
     * @var string
     */
    private $mail;

    /**
     * 
     * 
     * @var string
     */
    private $password;

    /**
     * 
     * @var string
     */
    private $nom;

    /**
     * 
     * @var string
     */
    private $prenom;

    /**
     * 
     * @var string
     */
    private $nummobile;

    /**
     * 
     * @var string
     */
    private $numfix;

    /**
     *
     * @var string
     */
    private $statusMatrimonial;

    /**
     * 
     * @var integer
     */
    private $role;

    /**
     * 
     * @var string
     */
    private $urlp;
    
    /**
     * @Assert\File(maxSize="6000000")
     */
    private $image;


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
     * Set mail
     *
     * @param string $mail
     * @return Utilisateur
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Utilisateur
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Utilisateur
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
     * Set prenom
     *
     * @param string $prenom
     * @return Utilisateur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set nummobile
     *
     * @param string $nummobile
     * @return Utilisateur
     */
    public function setNummobile($nummobile)
    {
        $this->nummobile = $nummobile;

        return $this;
    }

    /**
     * Get nummobile
     *
     * @return string 
     */
    public function getNummobile()
    {
        return $this->nummobile;
    }

    /**
     * Set numfix
     *
     * @param string $numfix
     * @return Utilisateur
     */
    public function setNumfix($numfix)
    {
        $this->numfix = $numfix;

        return $this;
    }

    /**
     * Get numfix
     *
     * @return string 
     */
    public function getNumfix()
    {
        return $this->numfix;
    }

    /**
     * Set statusMatrimonial
     *
     * @param string $statusMatrimonial
     * @return Utilisateur
     */
    public function setStatusMatrimonial($statusMatrimonial)
    {
        $this->statusMatrimonial = $statusMatrimonial;

        return $this;
    }

    /**
     * Get statusMatrimonial
     *
     * @return string 
     */
    public function getStatusMatrimonial()
    {
        return $this->statusMatrimonial;
    }

    /**
     * Set role
     *
     * @param integer $role
     * @return Utilisateur
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return integer 
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set urlp
     *
     * @param string $urlp
     * @return Utilisateur
     */
    public function setUrlp($urlp)
    {
        $this->urlp = $urlp;

        return $this;
    }

    /**
     * Get urlp
     *
     * @return string 
     */
    public function getUrlp()
    {
        return $this->urlp;
    }
    public function getImage() {
        return $this->image;
    }

    public function setImage($image) {
        $this->image = $image;
    }


   
}
