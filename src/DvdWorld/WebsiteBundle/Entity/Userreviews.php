<?php

namespace DvdWorld\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Userreviews
 *
 * @ORM\Table(name="UserReviews", indexes={@ORM\Index(name="fk_Recenzje_Uzytkownicy2_idx", columns={"user_id"}), @ORM\Index(name="fk_Recenzje_Filmy2", columns={"movie_id"})})
 * @ORM\Entity
 */
class Userreviews
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time", type="datetime", nullable=true)
     */
    private $time;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=45, nullable=true)
     */
    private $content;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DvdWorld\UserBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="DvdWorld\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var \DvdWorld\WebsiteBundle\Entity\Movies
     *
     * @ORM\ManyToOne(targetEntity="DvdWorld\WebsiteBundle\Entity\Movies")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="movie_id", referencedColumnName="id")
     * })
     */
    private $movie;



    /**
     * Set time
     *
     * @param \DateTime $time
     * @return Userreviews
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return \DateTime 
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Userreviews
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
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
     * Set user
     *
     * @param \DvdWorld\UserBundle\Entity\User $user
     * @return Userreviews
     */
    public function setUser(\DvdWorld\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \DvdWorld\UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set movie
     *
     * @param \DvdWorld\WebsiteBundle\Entity\Movies $movie
     * @return Userreviews
     */
    public function setMovie(\DvdWorld\WebsiteBundle\Entity\Movies $movie = null)
    {
        $this->movie = $movie;

        return $this;
    }

    /**
     * Get movie
     *
     * @return \DvdWorld\WebsiteBundle\Entity\Movies 
     */
    public function getMovie()
    {
        return $this->movie;
    }
}
