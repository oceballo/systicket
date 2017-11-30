<?php

namespace OdaliBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity(repositoryClass="OdaliBundle\Repository\usuarioRepository")
 */
class usuario
{
    /**
     * @ORM\OneToMany(targetEntity="ticket", mappedBy="usuario")
     */
    protected $ticket;

    /**
     * @ORM\OneToMany(targetEntity="notas", mappedBy="usuario")
     */
    protected $notas;

    /**
     * @ORM\OneToMany(targetEntity="historial_ticket", mappedBy="usuario")
     */
    protected $historial_ticket;

    /**
     * @ORM\OneToMany(targetEntity="usuario_categoria", mappedBy="usuario")
     */
    protected $usuario_categoria;

    public function __construct()
    {
        $this->ticket = new ArrayCollection();
        $this->notas = new ArrayCollection();
        $this->historial_ticket = new ArrayCollection();
        $this->usuario_categoria = new ArrayCollection();
    }

    /**
     * @ORM\ManyToOne(targetEntity="roles", inversedBy="usuario")
     * @ORM\JoinColumn(name="roles_id", referencedColumnName="id")
     */
    protected $roles;

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
     * @ORM\Column(name="nombres", type="string", length=255)
     */
    private $nombres;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidos", type="string", length=255)
     */
    private $apellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, unique=true)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var int
     *
     * @ORM\Column(name="usuario_categoria_id", type="integer")
     */
    private $usuarioCategoriaId;

    /**
     * @var int
     *
     * @ORM\Column(name="roles_id", type="integer")
     */
    private $rolesId;

    /**
     * @var bool
     *
     * @ORM\Column(name="estado", type="boolean")
     */
    private $estado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_registro", type="datetime")
     */
    private $fechaRegistro;


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
     * Set nombres
     *
     * @param string $nombres
     *
     * @return usuario
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;

        return $this;
    }

    /**
     * Get nombres
     *
     * @return string
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     *
     * @return usuario
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return usuario
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return usuario
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set usuarioCategoriaId
     *
     * @param integer $usuarioCategoriaId
     *
     * @return usuario
     */
    public function setUsuarioCategoriaId($usuarioCategoriaId)
    {
        $this->usuarioCategoriaId = $usuarioCategoriaId;

        return $this;
    }

    /**
     * Get usuarioCategoriaId
     *
     * @return int
     */
    public function getUsuarioCategoriaId()
    {
        return $this->usuarioCategoriaId;
    }

    /**
     * Set rolesId
     *
     * @param integer $rolesId
     *
     * @return usuario
     */
    public function setRolesId($rolesId)
    {
        $this->rolesId = $rolesId;

        return $this;
    }

    /**
     * Get rolesId
     *
     * @return int
     */
    public function getRolesId()
    {
        return $this->rolesId;
    }

    /**
     * Set estado
     *
     * @param boolean $estado
     *
     * @return usuario
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return bool
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set fechaRegistro
     *
     * @param \DateTime $fechaRegistro
     *
     * @return usuario
     */
    public function setFechaRegistro($fechaRegistro)
    {
        $this->fechaRegistro = $fechaRegistro;

        return $this;
    }

    /**
     * Get fechaRegistro
     *
     * @return \DateTime
     */
    public function getFechaRegistro()
    {
        return $this->fechaRegistro;
    }

    /**
     * Add ticket
     *
     * @param \OdaliBundle\Entity\ticket $ticket
     *
     * @return usuario
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
     * Add nota
     *
     * @param \OdaliBundle\Entity\notas $nota
     *
     * @return usuario
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
     * @return usuario
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

    /**
     * Add usuarioCategorium
     *
     * @param \OdaliBundle\Entity\usuario_categoria $usuarioCategorium
     *
     * @return usuario
     */
    public function addUsuarioCategorium(\OdaliBundle\Entity\usuario_categoria $usuarioCategorium)
    {
        $this->usuario_categoria[] = $usuarioCategorium;

        return $this;
    }

    /**
     * Remove usuarioCategorium
     *
     * @param \OdaliBundle\Entity\usuario_categoria $usuarioCategorium
     */
    public function removeUsuarioCategorium(\OdaliBundle\Entity\usuario_categoria $usuarioCategorium)
    {
        $this->usuario_categoria->removeElement($usuarioCategorium);
    }

    /**
     * Get usuarioCategoria
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsuarioCategoria()
    {
        return $this->usuario_categoria;
    }

    /**
     * Set roles
     *
     * @param \OdaliBundle\Entity\roles $roles
     *
     * @return usuario
     */
    public function setRoles(\OdaliBundle\Entity\roles $roles = null)
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * Get roles
     *
     * @return \OdaliBundle\Entity\roles
     */
    public function getRoles()
    {
        return $this->roles;
    }
}
