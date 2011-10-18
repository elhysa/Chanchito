<?php
namespace Chanchito\ChanchitoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class AsistenciaType extends AbstractType {
    
    public function buildForm(FormBuilder $builder, array $options) {
        $builder->add('fechaAsistencia')
              ->add('registroReal')
              ->add('registroUsuario')
              ->add('tieneMotivo','checkbox',array('label' => 'Tiene Motivo'))
              ->add('motivo','textarea')
              ->add('usuario');
    }

    public function getDefaultOptions(array $options) {
        return array('data_class' => 'Chanchito\ChanchitoBundle\Entity\Asistencia');
    }    
    
    public function getName() {
        return 'registro_asistencia';
    }
    
}

?>
