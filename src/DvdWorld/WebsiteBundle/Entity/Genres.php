<?php

namespace DvdWorld\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Genres
 *
 * @ORM\Table(name="Genres")
 * @ORM\Entity
 */
class Genres
{
    /**
     * @var string
     *
     * @ORM\Column(name="genre", type="string", length=50)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $genre;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="DvdWorld\WebsiteBundle\Entity\Movies", mappedBy="genre")
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
     * Get genre
     *
     * @return string 
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Add movie
     *
     * @param \DvdWorld\WebsiteBundle\Entity\Movies $movie
     * @return Genres
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
