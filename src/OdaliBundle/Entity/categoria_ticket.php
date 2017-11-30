<?php

namespace OdaliBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * categoria_ticket
 *
 * @ORM\Table(name="categoria_ticket")
 * @ORM\Entity(repositoryClass="OdaliBundle\Repository\categoria_ticketRepository")
 */
class categoria_ticket
{
    /**
     * @ORM\OneToMany(targetEntity="ticket", mappedBy="categoria_ticket")
     */
    protected $ticket;

    /**
     * @ORM\OneToMany(targetEntity="usuario_categoria", mappedBy="categoria_ticket")
     */
    protected $usuario_categoria;

    public function __construct()
    {
        $this->ticket = new ArrayCollection();
        $this->usuario_categoria = new ArrayCollection();
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
     * @ORM\Column(name="nombre_categoria", type="string", length=255)
     */
    private $nombreCategoria;


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
     * Set nombreCategoria
     *
     * @param string $nombreCategoria
     *
     * @return categoria_ticket
     */
    public function setNombreCategoria($nombreCategoria)
    {
        $this->nombreCategoria = $nombreCategoria;

        return $this;
    }

    /**
     * Get nombreCategoria
     *
     * @return string
     */
    public function getNombreCategoria()
    {
        return $this->nombreCategoria;
    }



    /**
     * Add ticket
     *
     * @param \OdaliBundle\Entity\ticket $ticket
     *
     * @return categoria_ticket
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
     * Add usuarioCategorium
     *
     * @param \OdaliBundle\Entity\usuario_categoria $usuarioCategorium
     *
     * @return categoria_ticket
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
}
