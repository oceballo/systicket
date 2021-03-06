<?php

namespace OdaliBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * notas
 *
 * @ORM\Table(name="notas")
 * @ORM\Entity(repositoryClass="OdaliBundle\Repository\notasRepository")
 */
class notas
{
    /**
     * @ORM\ManyToOne(targetEntity="ticket", inversedBy="notas")
     * @ORM\JoinColumn(name="ticket_id", referencedColumnName="id")
     */
    protected $ticket;

    /**
     * @ORM\ManyToOne(targetEntity="usuario", inversedBy="notas")
     * @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     */
    protected $usuario;

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
     * @var string
     *
     * @ORM\Column(name="descripcion_nota", type="string", length=255)
     */
    private $descripcionNota;


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
     * @return notas
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
     * @return notas
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
     * @return notas
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
     * Set descripcionNota
     *
     * @param string $descripcionNota
     *
     * @return notas
     */
    public function setDescripcionNota($descripcionNota)
    {
        $this->descripcionNota = $descripcionNota;

        return $this;
    }

    /**
     * Get descripcionNota
     *
     * @return string
     */
    public function getDescripcionNota()
    {
        return $this->descripcionNota;
    }

    /**
     * Set ticket
     *
     * @param \OdaliBundle\Entity\ticket $ticket
     *
     * @return notas
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
     * @return notas
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
}
