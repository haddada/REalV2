<?php

namespace sprint2\RealEstate\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Archive
 */
class Archive
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
     * @var string
     */
    private $date;

    /**
     * @var string
     */
    private $url;


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
     * @return Archive
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
     * Set date
     *
     * @param string $date
     * @return Archive
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Archive
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }
}
