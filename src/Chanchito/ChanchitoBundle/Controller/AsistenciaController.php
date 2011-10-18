<?php

namespace Chanchito\ChanchitoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Chanchito\ChanchitoBundle\Form\AsistenciaType;

class AsistenciaController extends Controller
{
    public function showAction()
	{	
	
	
	$em = $this->get('doctrine')->getEntityManager();

	$asistenciaUsuarios = $em->getRepository('ChanchitoBundle:Asistencia')->findAll();

	$format = $this->get('request')->getRequestFormat();

	return $this->render('ChanchitoBundle:Asistencia:show.'.$format.'.twig', array(
		'listadoAsistencia' => $asistenciaUsuarios
	));
	
 	}
        
    public function newAction(){
        
        $format = $this->get('request')->getRequestFormat();
        
        $form = $this->get('form.factory')->create(new AsistenciaType(), array());
        
        $request = $this->get('Request');
        
        if($request->getMethod() == 'POST'){
        
            $form->bindRequest($request);
            if($form->isValid()){
                //Aqui se registra la asistencia                
            }
        }
        
        return $this->render('ChanchitoBundle:Asistencia:new.'.$format.'.twig',array(
            'form' => $form->createView())
                );
    }

}
