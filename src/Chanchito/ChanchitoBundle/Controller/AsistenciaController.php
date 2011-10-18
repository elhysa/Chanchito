<?php

namespace Chanchito\ChanchitoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Chanchito\ChanchitoBundle\Form\AsistenciaType;
use Chanchito\ChanchitoBundle\Entity\Asistencia;

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
        
        $form = $this->get('form.factory')->create(new AsistenciaType());          
        $request = $this->get('request');
        
        if($request->getMethod() == 'POST'){
                   
           $form->bindRequest($request);                        
           
           if($form->isValid()){               
                
                $asistencia = $form->getData();
                
                $em = $this->get('doctrine')->getEntityManager();
                $em->persist($asistencia);
                $em->flush();
                
                echo 'El usuario fue registrado con exito';

            }
        }
        
        $format = $this->get('request')->getRequestFormat();
        return $this->render('ChanchitoBundle:Asistencia:new.'.$format.'.twig',array(
            'form' => $form->createView())
                );
    }

}
