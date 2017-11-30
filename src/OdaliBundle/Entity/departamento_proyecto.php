<?php

namespace OdaliBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * departamento_proyecto
 *
 * @ORM\Table(name="departamento_proyecto")
 * @ORM\Entity(repositoryClass="OdaliBundle\Repository\departamento_proyectoRepository")
 */
class departamento_proyecto
{
    /**
     * @ORM\OneToMany(targetEntity="roles", mappedBy="departamento_proyecto")
     */
    protected $roles;

    public function __construct()
    {
        $this->roles = new ArrayCollection();
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
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return departamento_proyecto
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
     * Add role
     *
     * @param \OdaliBundle\Entity\roles $role
     *
     * @return departamento_proyecto
     */
    public function addRole(\OdaliBundle\Entity\roles $role)
    {
        $this->roles[] = $role;

        return $this;
    }

    /**
     * Remove role
     *
     * @param \OdaliBundle\Entity\roles $role
     */
    public function removeRole(\OdaliBundle\Entity\roles $role)
    {
        $this->roles->removeElement($role);
    }

    /**
     * Get roles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRoles()
    {
        return $this->roles;
    }
}
