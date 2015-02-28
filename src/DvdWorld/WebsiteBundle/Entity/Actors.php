<?php

namespace DvdWorld\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actors
 *
 * @ORM\Table(name="Actors")
 * @ORM\Entity
 */
class Actors
{
    /**
     * @var string
     *
     * @ORM\Column(name="fullname", type="string", length=60)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fullname;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="DvdWorld\WebsiteBundle\Entity\Movies", mappedBy="fullname")
     */
    private $movie;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->movie = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get fullname
     *
     * @return string 
     */
    public function getFullname()
    {
        return $this->fullname;
    }

    /**
     * Add movie
     *
     * @param \DvdWorld\WebsiteBundle\Entity\Movies $movie
     * @return Actors
     */
    public function addMovie(\DvdWorld\WebsiteBundle\Entity\Movies $movie)
    {
        $this->movie[] = $movie;

        return $this;
    }

    /**
     * Remove movie
     *
     * @param \DvdWorld\WebsiteBundle\Entity\Movies $movie
     */
    public function removeMovie(\DvdWorld\WebsiteBundle\Entity\Movies $movie)
    {
        $this->movie->removeElement($movie);
    }

    /**
     * Get movie
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMovie()
    {
        return $this->movie;
    }
}
