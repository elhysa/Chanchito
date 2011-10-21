<?php

namespace Chanchito\ChanchitoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\SecurityContext;

use Chanchito\ChanchitoBundle\Form\AsistenciaType;
use Chanchito\ChanchitoBundle\Entity\Asistencia;

class AsistenciaController extends Controller
{
    public function showAction()
	{	
	
	
	$em = $this->get('doctrine')->getEntityManager();

	$asistenciaUsuarios = $em->getRepository('ChanchitoBundle:Asistencia')->findAsistenciaToday();

	$format = $this->get('request')->getRequestFormat();

	return $this->render('ChanchitoBundle:Asistencia:show.'.$format.'.twig', array(
		'listadoAsistencia' => $asistenciaUsuarios
	));
	
 	}
        
    public function newAction(){
        
        $em = $this->get('doctrine')->getEntityManager();
        
        $asistencia = new Asistencia();
        $asistencia->setFechaAsistencia(new \DateTime('now'));
        $asistencia->setRegistroReal(new \DateTime('now'));
        $asistencia->setRegistroUsuario(new \DateTime('now'));
        
        //$username = $this->get('request')->getSession()->get(Security::USERNAME);
        $usuario = $this->get('security.context')->getToken()->getUser();
        //$usuario = $em->find('Usuario',1);
                
        $asistencia->setUsuarios($usuario);
        
        $form = $this->get('form.factory')->create(new AsistenciaType());          
        $form->setData($asistencia);
        
        $request = $this->get('request');
        
        if($request->getMethod() == 'POST'){
           
           $form->bindRequest($request);                        
           
           if($form->isValid()){     
                
               $asistenciaToday = $em->getRepository('ChanchitoBundle:Asistencia')->findAsistenciaTodayByUser($usuario->getId());
                if( null == $asistenciaToday){    
                    error_log('Intenta registrar');                    
                    $em->persist($asistencia);
                    $em->flush();                   
                    $request->getSession()->setFlash('notice', 'Su asistencia ha sido registrada con exito');
                    return $this->redirect($this->generateUrl('perfil'));  
                }else{
                    error_log('Asistencia ya registrada');
                    $request->getSession()->setFlash('notice', 'Ya ha registrado su asistencia el día de hoy');
                    return $this->redirect($this->generateUrl('perfil'));  
                };
            }
        }
        
        $format = $this->get('request')->getRequestFormat();
        return $this->render('ChanchitoBundle:Asistencia:new.'.$format.'.twig',array(
            'form' => $form->createView())
                );
    }

}
