<?php
namespace Chanchito\ChanchitoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class AsistenciaType extends AbstractType {
    
    public function buildForm(FormBuilder $builder, array $options) {
        $builder//->add('fechaAsistencia' , 'date', array('label' => 'Fecha Asistencia'))
                ->add('registroUsuario', 'time',array('label' => 'Horario de ingreso'))
                //->add('tieneMotivo','checkbox',array('label' => 'Tiene Motivo'))
                ->add('motivo','textarea',array('label' => 'Motivo', 'required' => false));
                //->add('usuarios', 'entity', array('class' => 'Chanchito\\ChanchitoBundle\\Entity\\Usuario'));

    }

    public function getDefaultOptions(array $options) {
        return array('data_class' => 'Chanchito\ChanchitoBundle\Entity\Asistencia');
    }    
    
    public function getName() {
        return 'asistencia';
    }
    
}

?>
