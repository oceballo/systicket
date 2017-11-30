<?php

namespace OdaliBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * status
 *
 * @ORM\Table(name="status")
 * @ORM\Entity(repositoryClass="OdaliBundle\Repository\statusRepository")
 */
class status
{
    /**
     * @ORM\OneToMany(targetEntity="ticket", mappedBy="status")
     */
    protected $ticket;

    /**
     * @ORM\OneToMany(targetEntity="historial_ticket", mappedBy="status")
     */
    protected $historial_ticket;

    public function __construct()
    {
        $this->ticket = new ArrayCollection();
        $this->historial_ticket = new ArrayCollection();
    }

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255,unique=true)
     */
    private $descripcion;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return status
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Add ticket
     *
     * @param \OdaliBundle\Entity\ticket $ticket
     *
     * @return status
     */
    public function addTicket(\OdaliBundle\Entity\ticket $ticket)
    {
        $this->ticket[] = $ticket;

        return $this;
    }

    /**
     * Remove ticket
     *
     * @param \OdaliBundle\Entity\ticket $ticket
     */
    public function removeTicket(\OdaliBundle\Entity\ticket $ticket)
    {
        $this->ticket->removeElement($ticket);
    }

    /**
     * Get ticket
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTicket()
    {
        return $this->ticket;
    }

    /**
     * Add historialTicket
     *
     * @param \OdaliBundle\Entity\historial_ticket $historialTicket
     *
     * @return status
     */
    public function addHistorialTicket(\OdaliBundle\Entity\historial_ticket $historialTicket)
    {
        $this->historial_ticket[] = $historialTicket;

        return $this;
    }

    /**
     * Remove historialTicket
     *
     * @param \OdaliBundle\Entity\historial_ticket $historialTicket
     */
    public function removeHistorialTicket(\OdaliBundle\Entity\historial_ticket $historialTicket)
    {
        $this->historial_ticket->removeElement($historialTicket);
    }

    /**
     * Get historialTicket
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getHistorialTicket()
    {
        return $this->historial_ticket;
    }
}
