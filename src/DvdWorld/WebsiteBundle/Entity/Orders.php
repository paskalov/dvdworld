<?php

namespace DvdWorld\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Orders
 *
 * @ORM\Table(name="Orders", indexes={@ORM\Index(name="fk_Zamowienia_StatusZamowienia1_idx", columns={"id_status"}), @ORM\Index(name="fk_Zamowienia_Filmy1_idx", columns={"movie_id"}), @ORM\Index(name="fk_Zamowienia_Uzytkownicy1_idx", columns={"user_id"})})
 * @ORM\Entity
 */
class Orders
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_of_order", type="datetime", nullable=true)
     */
    private $dateOfOrder;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_of_return", type="datetime", nullable=true)
     */
    private $dateOfReturn;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DvdWorld\WebsiteBundle\Entity\User
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
     * @var \DvdWorld\WebsiteBundle\Entity\Orderstatus
     *
     * @ORM\ManyToOne(targetEntity="DvdWorld\WebsiteBundle\Entity\Orderstatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_status", referencedColumnName="id")
     * })
     */
    private $idStatus;



    /**
     * Set dateOfOrder
     *
     * @param \DateTime $dateOfOrder
     * @return Orders
     */
    public function setDateOfOrder($dateOfOrder)
    {
        $this->dateOfOrder = $dateOfOrder;

        return $this;
    }

    /**
     * Get dateOfOrder
     *
     * @return \DateTime 
     */
    public function getDateOfOrder()
    {
        return $this->dateOfOrder;
    }

    /**
     * Set dateOfReturn
     *
     * @param \DateTime $dateOfReturn
     * @return Orders
     */
    public function setDateOfReturn($dateOfReturn)
    {
        $this->dateOfReturn = $dateOfReturn;

        return $this;
    }

    /**
     * Get dateOfReturn
     *
     * @return \DateTime 
     */
    public function getDateOfReturn()
    {
        return $this->dateOfReturn;
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
     * @return Orders
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
     * @return Orders
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

    /**
     * Set idStatus
     *
     * @param \DvdWorld\WebsiteBundle\Entity\Orderstatus $idStatus
     * @return Orders
     */
    public function setIdStatus(\DvdWorld\WebsiteBundle\Entity\Orderstatus $idStatus = null)
    {
        $this->idStatus = $idStatus;

        return $this;
    }

    /**
     * Get idStatus
     *
     * @return \DvdWorld\WebsiteBundle\Entity\Orderstatus 
     */
    public function getIdStatus()
    {
        return $this->idStatus;
    }
}
