<?php
namespace Chanchito\ChanchitoBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Chanchito\ChanchitoBundle\Entity
 *
 * @ORM\Table(name="asistencia")
 * @ORM\Entity(repositoryClass="Chanchito\ChanchitoBundle\Entity\AsistenciaRepository")
 */
class Asistencia
{
	/**
	* @ORM\Id
	* @ORM\Column(type="integer")
	* @ORM\GeneratedValue(strategy="IDENTITY")
	*/
	protected $id;
	/**
	* @ORM\Column(type="date")
	* @Assert\Date();
	*/
	protected $fechaAsistencia;
	
	/**
	* @ORM\Column(type="time")
	* @Assert\Time()
	*/
	protected $registroReal;

	/**
	* @ORM\Column(type="time")
	* @Assert\Time()
	*/
	protected $registroUsuario;
	
	/**
	* @ORM\Column(type="string")
	* @Assert\MaxLength(255)
	*/
	protected $motivo;
        
	/**
	* @ORM\ManyToOne(targetEntity="Usuario", inversedBy="asistencias", cascade={"remove"})
	* @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
	*/
	protected $usuarios; 

   
   public function obtenerMontoAsistencia()
   {
	$parametrosTardanza=$this->usuario->getHorario()->getParametrosTardanza();
	$horaIngresoEvaluacion=$this->registroReal;

	if ($this->esRegistroConMotivo()){
		$horaIngresoEvaluacion=$this->registroUsuario;
	}
  	 foreach ($parametrosTardanza as $parametro) {
		if ( $horaIngresoEvaluacion > $parametro->getHorarioMinimo() && $horaIngresoEvaluacion <= $parametro->getHorarioMaximo() ){
			return	$parametro->getMonto();
		}	
  	 }
	return -1;
   }	

    public function esRegistroConMotivo()
    {
            if (isset($this->motivo)){
                if (strlen($this->motivo) == 0 ){
                        return false;
                }

            }else{
                return false;
            }
            return true;	
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
     * Set fechaAsistencia
     *
     * @param date $fechaAsistencia
     */
    public function setFechaAsistencia($fechaAsistencia)
    {
        $this->fechaAsistencia = $fechaAsistencia;
    }

    /**
     * Get fechaAsistencia
     *
     * @return date 
     */
    public function getFechaAsistencia()
    {
        return $this->fechaAsistencia;
    }

    /**
     * Set registroReal
     *
     * @param time $registroReal
     */
    public function setRegistroReal($registroReal)
    {
        $this->registroReal = $registroReal;
    }

    /**
     * Get registroReal
     *
     * @return time 
     */
    public function getRegistroReal()
    {
        return $this->registroReal;
    }

    /**
     * Set registroUsuario
     *
     * @param time $registroUsuario
     */
    public function setRegistroUsuario($registroUsuario)
    {
        $this->registroUsuario = $registroUsuario;
    }

    /**
     * Get registroUsuario
     *
     * @return time 
     */
    public function getRegistroUsuario()
    {
        return $this->registroUsuario;
    }

    /**
     * Set usuarios
     *
     * @param Chanchito\ChanchitoBundle\Entity\Usuario $usuarios
     */
    public function setUsuarios(\Chanchito\ChanchitoBundle\Entity\Usuario $usuarios)
    {
        $this->usuarios = $usuarios;
    }

    /**
     * Get usuarios
     *
     * @return Chanchito\ChanchitoBundle\Entity\Usuario 
     */
    public function getUsuarios()
    {
        return $this->usuarios;
    }

    /**
     * Set motivo
     *
     * @param string $motivo
     */
    public function setMotivo($motivo)
    {
        $this->motivo = $motivo;
    }

    /**
     * Get motivo
     *
     * @return string 
     */
    public function getMotivo()
    {
        return $this->motivo;
    }
}