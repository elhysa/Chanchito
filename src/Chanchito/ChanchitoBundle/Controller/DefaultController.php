<?php

namespace Chanchito\ChanchitoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('ChanchitoBundle:Default:index.html.twig', array('name' => $name));
    }
}
