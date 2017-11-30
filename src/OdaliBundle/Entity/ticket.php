<?php

namespace OdaliBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * ticket
 *
 * @ORM\Table(name="ticket")
 * @ORM\Entity(repositoryClass="OdaliBundle\Repository\ticketRepository")
 */
class ticket
{
    /**
     * @ORM\ManyToOne(targetEntity="categoria_ticket", inversedBy="ticket")
     * @ORM\JoinColumn(name="categoria_id", referencedColumnName="id")
     */
    protected $categoria_ticket;

    /**
     * @ORM\ManyToOne(targetEntity="status", inversedBy="ticket")
     * @ORM\JoinColumn(name="status_id", referencedColumnName="id")
     */
    protected $status;

    /**
     * @ORM\ManyToOne(targetEntity="usuario", inversedBy="ticket")
     * @ORM\JoinColumn(name="usuario_solicitante_id", referencedColumnName="id")
     * @ORM\JoinColumn(name="usuario_asignado_id", referencedColumnName="id")
     */
    protected $usuario;

    /**
     * @ORM\OneToMany(targetEntity="notas", mappedBy="ticket")
     */
    protected $notas;

    /**
     * @ORM\OneToMany(targetEntity="historial_ticket", mappedBy="ticket")
     */
    protected $historial_ticket;

    public function __construct()
    {
        $this->notas = new ArrayCollection();
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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_creado", type="datetime")
     */
    private $fechaCreado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_status", type="datetime")
     */
    private $fechaStatus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_cierre", type="datetime")
     */
    private $fechaCierre;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_problema", type="string", length=255, nullable=true)
     */
    private $descripcionProblema;

    /**
     * @var int
     *
     * @ORM\Column(name="categoria_id", type="integer")
     */
    private $categoriaId;

    /**
     * @var int
     *
     * @ORM\Column(name="status_id", type="integer", nullable=true)
     */
    private $statusId;

    /**
     * @var string
     *
     * @ORM\Column(name="prioridad", type="string", length=255,unique=true)
     */
    private $prioridad;

    /**
     * @var int
     *
     * @ORM\Column(name="usuario_solicitante_id", type="integer")
     */
    private $usuarioSolicitanteId;

    /**
     * @var int
     *
     * @ORM\Column(name="usuario_asignado_id", type="integer",nullable=true)
     */
    private $usuarioAsignadoId;


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
     * Set fechaCreado
     *
     * @param \DateTime $fechaCreado
     *
     * @return ticket
     */
    public function setFechaCreado($fechaCreado)
    {
        $this->fechaCreado = $fechaCreado;

        return $this;
    }

    /**
     * Get fechaCreado
     *
     * @return \DateTime
     */
    public function getFechaCreado()
    {
        return $this->fechaCreado;
    }

    /**
     * Set fechaStatus
     *
     * @param \DateTime $fechaStatus
     *
     * @return ticket
     */
    public function setFechaStatus($fechaStatus)
    {
        $this->fechaStatus = $fechaStatus;

        return $this;
    }

    /**
     * Get fechaStatus
     *
     * @return \DateTime
     */
    public function getFechaStatus()
    {
        return $this->fechaStatus;
    }

    /**
     * Set fechaCierre
     *
     * @param \DateTime $fechaCierre
     *
     * @return ticket
     */
    public function setFechaCierre($fechaCierre)
    {
        $this->fechaCierre = $fechaCierre;

        return $this;
    }

    /**
     * Get fechaCierre
     *
     * @return \DateTime
     */
    public function getFechaCierre()
    {
        return $this->fechaCierre;
    }

    /**
     * Set descripcionProblema
     *
     * @param string $descripcionProblema
     *
     * @return ticket
     */
    public function setDescripcionProblema($descripcionProblema)
    {
        $this->descripcionProblema = $descripcionProblema;

        return $this;
    }

    /**
     * Get descripcionProblema
     *
     * @return string
     */
    public function getDescripcionProblema()
    {
        return $this->descripcionProblema;
    }

    /**
     * Set categoriaId
     *
     * @param integer $categoriaId
     *
     * @return ticket
     */
    public function setCategoriaId($categoriaId)
    {
        $this->categoriaId = $categoriaId;

        return $this;
    }

    /**
     * Get categoriaId
     *
     * @return int
     */
    public function getCategoriaId()
    {
        return $this->categoriaId;
    }

    /**
     * Set statusId
     *
     * @param integer $statusId
     *
     * @return ticket
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
     * Set prioridad
     *
     * @param string $prioridad
     *
     * @return ticket
     */
    public function setPrioridad($prioridad)
    {
        $this->prioridad = $prioridad;

        return $this;
    }

    /**
     * Get prioridad
     *
     * @return string
     */
    public function getPrioridad()
    {
        return $this->prioridad;
    }

    /**
     * Set usuarioSolicitanteId
     *
     * @param integer $usuarioSolicitanteId
     *
     * @return ticket
     */
    public function setUsuarioSolicitanteId($usuarioSolicitanteId)
    {
        $this->usuarioSolicitanteId = $usuarioSolicitanteId;

        return $this;
    }

    /**
     * Get usuarioSolicitanteId
     *
     * @return int
     */
    public function getUsuarioSolicitanteId()
    {
        return $this->usuarioSolicitanteId;
    }

    /**
     * Set usuarioAsignadoId
     *
     * @param integer $usuarioAsignadoId
     *
     * @return ticket
     */
    public function setUsuarioAsignadoId($usuarioAsignadoId)
    {
        $this->usuarioAsignadoId = $usuarioAsignadoId;

        return $this;
    }

    /**
     * Get usuarioAsignadoId
     *
     * @return int
     */
    public function getUsuarioAsignadoId()
    {
        return $this->usuarioAsignadoId;
    }

    /**
     * Set categoriaTicket
     *
     * @param \OdaliBundle\Entity\categoria_ticket $categoriaTicket
     *
     * @return ticket
     */
    public function setCategoriaTicket(\OdaliBundle\Entity\categoria_ticket $categoriaTicket = null)
    {
        $this->categoria_ticket = $categoriaTicket;

        return $this;
    }

    /**
     * Get categoriaTicket
     *
     * @return \OdaliBundle\Entity\categoria_ticket
     */
    public function getCategoriaTicket()
    {
        return $this->categoria_ticket;
    }

    /**
     * Set status
     *
     * @param \OdaliBundle\Entity\status $status
     *
     * @return ticket
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

    /**
     * Set usuario
     *
     * @param \OdaliBundle\Entity\usuario $usuario
     *
     * @return ticket
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
     * Add nota
     *
     * @param \OdaliBundle\Entity\notas $nota
     *
     * @return ticket
     */
    public function addNota(\OdaliBundle\Entity\notas $nota)
    {
        $this->notas[] = $nota;

        return $this;
    }

    /**
     * Remove nota
     *
     * @param \OdaliBundle\Entity\notas $nota
     */
    public function removeNota(\OdaliBundle\Entity\notas $nota)
    {
        $this->notas->removeElement($nota);
    }

    /**
     * Get notas
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNotas()
    {
        return $this->notas;
    }

    /**
     * Add historialTicket
     *
     * @param \OdaliBundle\Entity\historial_ticket $historialTicket
     *
     * @return ticket
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
