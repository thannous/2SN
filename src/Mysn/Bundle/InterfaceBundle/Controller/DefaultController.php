<?php

namespace Mysn\Bundle\InterfaceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('MysnInterfaceBundle:Default:index.html.twig', array('name' => $name));
    }
}
