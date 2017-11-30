<?php

namespace OdaliBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * historial_ticket
 *
 * @ORM\Table(name="historial_ticket")
 * @ORM\Entity(repositoryClass="OdaliBundle\Repository\historial_ticketRepository")
 */
class historial_ticket
{
    /**
     * @ORM\ManyToOne(targetEntity="ticket", inversedBy="historial_ticket")
     * @ORM\JoinColumn(name="ticket_id", referencedColumnName="id")
     */
    protected $ticket;

    /**
     * @ORM\ManyToOne(targetEntity="usuario", inversedBy="historial_ticket")
     * @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     */
    protected $usuario;

    /**
     * @ORM\ManyToOne(targetEntity="status", inversedBy="historial_ticket")
     * @ORM\JoinColumn(name="status_id", referencedColumnName="id")
     */
    protected $status;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="ticket_id", type="integer")
     */
    private $ticketId;

    /**
     * @var int
     *
     * @ORM\Column(name="usuario_id", type="integer")
     */
    private $usuarioId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;

    /**
     * @var int
     *
     * @ORM\Column(name="status_id", type="integer")
     */
    private $statusId;


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
     * Set ticketId
     *
     * @param integer $ticketId
     *
     * @return historial_ticket
     */
    public function setTicketId($ticketId)
    {
        $this->ticketId = $ticketId;

        return $this;
    }

    /**
     * Get ticketId
     *
     * @return int
     */
    public function getTicketId()
    {
        return $this->ticketId;
    }

    /**
     * Set usuarioId
     *
     * @param integer $usuarioId
     *
     * @return historial_ticket
     */
    public function setUsuarioId($usuarioId)
    {
        $this->usuarioId = $usuarioId;

        return $this;
    }

    /**
     * Get usuarioId
     *
     * @return int
     */
    public function getUsuarioId()
    {
        return $this->usuarioId;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return historial_ticket
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set statusId
     *
     * @param integer $statusId
     *
     * @return historial_ticket
     */
    public function setStatusId($statusId)
    {
        $this->statusId = $statusId;

        return $this;
    }

    /**
     * Get statusId
     *
     * @return int
     */
    public function getStatusId()
    {
        return $this->statusId;
    }

    /**
     * Set ticket
     *
     * @param \OdaliBundle\Entity\ticket $ticket
     *
     * @return historial_ticket
     */
    public function setTicket(\OdaliBundle\Entity\ticket $ticket = null)
    {
        $this->ticket = $ticket;

        return $this;
    }

    /**
     * Get ticket
     *
     * @return \OdaliBundle\Entity\ticket
     */
    public function getTicket()
    {
        return $this->ticket;
    }

    /**
     * Set usuario
     *
     * @param \OdaliBundle\Entity\usuario $usuario
     *
     * @return historial_ticket
     */
    public function setUsuario(\OdaliBundle\Entity\usuario $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \OdaliBundle\Entity\usuario
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set status
     *
     * @param \OdaliBundle\Entity\status $status
     *
     * @return historial_ticket
     */
    public function setStatus(\OdaliBundle\Entity\status $status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return \OdaliBundle\Entity\status
     */
    public function getStatus()
    {
        return $this->status;
    }
}
