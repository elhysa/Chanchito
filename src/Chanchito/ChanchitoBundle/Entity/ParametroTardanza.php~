<?php
namespace Chanchito\ChanchitoBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Chanchito\ChanchitoBundle\Entity
 *
 * @ORM\Table(name="parametroTardanza")
 * @ORM\Entity(repositoryClass="Chanchito\ChanchitoBundle\Entity\ParametroTardanzaRepository")
 */
class ParametroTardanza
{
	/**
	* @ORM\Id
	* @ORM\Column(type="integer")
	* @ORM\GeneratedValue(strategy="IDENTITY")
	*/
	protected $id;
	/**
	* @ORM\Column(type="time")
	*/
	protected $horarioMinimo;
	/**
	* @ORM\Column(type="time")
	*/
	protected $horarioMaximo;
	/**
	* @ORM\Column(type="decimal",scale=2)
	* @Assert\Min(0)
	*/
	protected $monto;
        
	/**
	* @ORM\ManyToOne(targetEntity="Horario", inversedBy="parametrosTardanza", cascade={"remove"})
	* @ORM\JoinColumn(name="horario_id", referencedColumnName="id")
	*/
	protected $horario;

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
     * Set horarioMinimo
     *
     * @param time $horarioMinimo
     */
    public function setHorarioMinimo($horarioMinimo)
    {
        $this->horarioMinimo = $horarioMinimo;
    }

    /**
     * Get horarioMinimo
     *
     * @return time 
     */
    public function getHorarioMinimo()
    {
        return $this->horarioMinimo;
    }

    /**
     * Set horarioMaximo
     *
     * @param time $horarioMaximo
     */
    public function setHorarioMaximo($horarioMaximo)
    {
        $this->horarioMaximo = $horarioMaximo;
    }

    /**
     * Get horarioMaximo
     *
     * @return time 
     */
    public function getHorarioMaximo()
    {
        return $this->horarioMaximo;
    }

    /**
     * Set monto
     *
     * @param decimal $monto
     */
    public function setMonto($monto)
    {
        $this->monto = $monto;
    }

    /**
     * Get monto
     *
     * @return decimal 
     */
    public function getMonto()
    {
        return $this->monto;
    }

    /**
     * Set usuario
     *
     * @param Chanchito\ChanchitoBundle\Entity\Usuario $usuario
     */
    public function setUsuario(\Chanchito\ChanchitoBundle\Entity\Usuario $usuario)
    {
        $this->usuario = $usuario;
    }

    /**
     * Get usuario
     *
     * @return Chanchito\ChanchitoBundle\Entity\Usuario 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set horario
     *
     * @param Chanchito\ChanchitoBundle\Entity\Horario $horario
     */
    public function setHorario(\Chanchito\ChanchitoBundle\Entity\Horario $horario)
    {
        $this->horario = $horario;
    }

    /**
     * Get horario
     *
     * @return Chanchito\ChanchitoBundle\Entity\Horario 
     */
    public function getHorario()
    {
        return $this->horario;
    }
}