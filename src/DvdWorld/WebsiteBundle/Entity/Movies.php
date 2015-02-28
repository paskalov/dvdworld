<?php

namespace DvdWorld\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Movies
 *
 * @ORM\Table(name="Movies", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})})
 * @ORM\Entity
 */
class Movies
{
    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=100, nullable=true)
     */
    private $title;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="release_year", type="date", nullable=true)
     */
    private $releaseYear;

    /**
     * @var integer
     *
     * @ORM\Column(name="length", type="integer", nullable=false)
     */
    private $length;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="img_url", type="text", length=65535, nullable=true)
     */
    private $imgUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="vid_url", type="text", length=65535, nullable=true)
     */
    private $vidUrl;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="DvdWorld\WebsiteBundle\Entity\Genres", inversedBy="movie")
     * @ORM\JoinTable(name="moviegenre",
     *   joinColumns={
     *     @ORM\JoinColumn(name="movie_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="genre", referencedColumnName="genre")
     *   }
     * )
     */
    private $genre;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="DvdWorld\WebsiteBundle\Entity\Actors", inversedBy="movie")
     * @ORM\JoinTable(name="movieactor",
     *   joinColumns={
     *     @ORM\JoinColumn(name="movie_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="fullname", referencedColumnName="fullname")
     *   }
     * )
     */
    private $fullname;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->genre = new \Doctrine\Common\Collections\ArrayCollection();
        $this->fullname = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set title
     *
     * @param string $title
     * @return Movies
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set releaseYear
     *
     * @param \DateTime $releaseYear
     * @return Movies
     */
    public function setReleaseYear($releaseYear)
    {
        $this->releaseYear = $releaseYear;

        return $this;
    }

    /**
     * Get releaseYear
     *
     * @return \DateTime 
     */
    public function getReleaseYear()
    {
        return $this->releaseYear;
    }

    /**
     * Set length
     *
     * @param integer $length
     * @return Movies
     */
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Get length
     *
     * @return integer 
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Movies
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
     * Set price
     *
     * @param string $price
     * @return Movies
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set imgUrl
     *
     * @param string $imgUrl
     * @return Movies
     */
    public function setImgUrl($imgUrl)
    {
        $this->imgUrl = $imgUrl;

        return $this;
    }

    /**
     * Get imgUrl
     *
     * @return string 
     */
    public function getImgUrl()
    {
        return $this->imgUrl;
    }

    /**
     * Set vidUrl
     *
     * @param string $vidUrl
     * @return Movies
     */
    public function setVidUrl($vidUrl)
    {
        $this->vidUrl = $vidUrl;

        return $this;
    }

    /**
     * Get vidUrl
     *
     * @return string
     */
    public function getVidUrl()
    {
        return $this->vidUrl;
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
     * Add genre
     *
     * @param \DvdWorld\WebsiteBundle\Entity\Genres $genre
     * @return Movies
     */
    public function addGenre(\DvdWorld\WebsiteBundle\Entity\Genres $genre)
    {
        $this->genre[] = $genre;

        return $this;
    }

    /**
     * Remove genre
     *
     * @param \DvdWorld\WebsiteBundle\Entity\Genres $genre
     */
    public function removeGenre(\DvdWorld\WebsiteBundle\Entity\Genres $genre)
    {
        $this->genre->removeElement($genre);
    }

    /**
     * Get genre
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Add fullname
     *
     * @param \DvdWorld\WebsiteBundle\Entity\Actors $fullname
     * @return Movies
     */
    public function addFullname(\DvdWorld\WebsiteBundle\Entity\Actors $fullname)
    {
        $this->fullname[] = $fullname;

        return $this;
    }

    /**
     * Remove fullname
     *
     * @param \DvdWorld\WebsiteBundle\Entity\Actors $fullname
     */
    public function removeFullname(\DvdWorld\WebsiteBundle\Entity\Actors $fullname)
    {
        $this->fullname->removeElement($fullname);
    }

    /**
     * Get fullname
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFullname()
    {
        return $this->fullname;
    }
}
