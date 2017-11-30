<?php

namespace OdaliBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * usuario_categoria
 *
 * @ORM\Table(name="usuario_categoria")
 * @ORM\Entity(repositoryClass="OdaliBundle\Repository\usuario_categoriaRepository")
 */
class usuario_categoria
{
    /**
     * @ORM\ManyToOne(targetEntity="usuario", inversedBy="usuario_categoria")
     * @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     */
    protected $usuario;

    /**
     * @ORM\ManyToOne(targetEntity="categoria_ticket", inversedBy="usuario_categoria")
     * @ORM\JoinColumn(name="categoria_id", referencedColumnName="id")
     */
    protected $categoria_ticket;

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
     * @ORM\Column(name="usuario_id", type="integer")
     */
    private $usuarioId;

    /**
     * @var int
     *
     * @ORM\Column(name="categoria_id", type="integer")
     */
    private $categoriaId;


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
     * Set usuarioId
     *
     * @param integer $usuarioId
     *
     * @return usuario_categoria
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
     * Set categoriaId
     *
     * @param integer $categoriaId
     *
     * @return usuario_categoria
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
     * Set usuario
     *
     * @param \OdaliBundle\Entity\usuario $usuario
     *
     * @return usuario_categoria
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
     * Set categoriaTicket
     *
     * @param \OdaliBundle\Entity\categoria_ticket $categoriaTicket
     *
     * @return usuario_categoria
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
}
