<?php

namespace Chanchito\ChanchitoBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Chanchito\ChanchitoBundle\Entity
 *
 * @ORM\Table(name="horario")
 * @ORM\Entity(repositoryClass="Chanchito\ChanchitoBundle\Entity\HorarioRepository")
 */
class Horario {
    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="IDENTITY")
    */
    protected $id;

    /**
    * @ORM\Column(type="string" )
    */
    protected $nombre;
        
    /**
    * @ORM\OneToMany(targetEntity="ParametroTardanza", mappedBy="horario")
    */
    protected $parametrosTardanza;

    /**
    * @ORM\OneToMany(targetEntity="Usuario", mappedBy="horario")
    */
    protected $usuarios;
    
    
    public function __construct()
    {
        $this->parametrosTardanza = new \Doctrine\Common\Collections\ArrayCollection();
        $this->usuario = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nombre
     *
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
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
     * Add parametrosTardanza
     *
     * @param Chanchito\ChanchitoBundle\Entity\ParametroTardanza $parametrosTardanza
     */
    public function addParametroTardanza(\Chanchito\ChanchitoBundle\Entity\ParametroTardanza $parametrosTardanza)
    {
        $this->parametrosTardanza[] = $parametrosTardanza;
    }

    /**
     * Get parametrosTardanza
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getParametrosTardanza()
    {
        return $this->parametrosTardanza;
    }

    /**
     * Add usuario
     *
     * @param Chanchito\ChanchitoBundle\Entity\Usuario $usuario
     */
    public function addUsuario(\Chanchito\ChanchitoBundle\Entity\Usuario $usuario)
    {
        $this->usuario[] = $usuario;
    }

    /**
     * Get usuario
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Get usuarios
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getUsuarios()
    {
        return $this->usuarios;
    }
    
    public function __toString(){
        return $this->nombre;
    }
    
}