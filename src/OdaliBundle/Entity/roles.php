<?php

namespace OdaliBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * roles
 *
 * @ORM\Table(name="roles")
 * @ORM\Entity(repositoryClass="OdaliBundle\Repository\rolesRepository")
 */
class roles
{
    /**
     * @ORM\OneToMany(targetEntity="usuario", mappedBy="roles")
     */
    protected $usuario;

    public function __construct()
    {
        $this->usuario = new ArrayCollection();
    }

    /**
     * @ORM\ManyToOne(targetEntity="departamento_proyecto", inversedBy="roles")
     * @ORM\JoinColumn(name="departamento_proyecto_id", referencedColumnName="id")
     */
    protected $departamento_proyecto;

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
     * @ORM\Column(name="nombre", type="string", length=255,unique=true)
     */
    private $nombre;

    /**
     * @var int
     *
     * @ORM\Column(name="departamento_proyecto_id", type="integer")
     */
    private $departamentoProyectoId;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return roles
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set departamentoProyectoId
     *
     * @param integer $departamentoProyectoId
     *
     * @return roles
     */
    public function setDepartamentoProyectoId($departamentoProyectoId)
    {
        $this->departamentoProyectoId = $departamentoProyectoId;

        return $this;
    }

    /**
     * Get departamentoProyectoId
     *
     * @return int
     */
    public function getDepartamentoProyectoId()
    {
        return $this->departamentoProyectoId;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return roles
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
     * Add usuario
     *
     * @param \OdaliBundle\Entity\usuario $usuario
     *
     * @return roles
     */
    public function addUsuario(\OdaliBundle\Entity\usuario $usuario)
    {
        $this->usuario[] = $usuario;

        return $this;
    }

    /**
     * Remove usuario
     *
     * @param \OdaliBundle\Entity\usuario $usuario
     */
    public function removeUsuario(\OdaliBundle\Entity\usuario $usuario)
    {
        $this->usuario->removeElement($usuario);
    }

    /**
     * Get usuario
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set departamentoProyecto
     *
     * @param \OdaliBundle\Entity\departamento_proyecto $departamentoProyecto
     *
     * @return roles
     */
    public function setDepartamentoProyecto(\OdaliBundle\Entity\departamento_proyecto $departamentoProyecto = null)
    {
        $this->departamento_proyecto = $departamentoProyecto;

        return $this;
    }

    /**
     * Get departamentoProyecto
     *
     * @return \OdaliBundle\Entity\departamento_proyecto
     */
    public function getDepartamentoProyecto()
    {
        return $this->departamento_proyecto;
    }
}
