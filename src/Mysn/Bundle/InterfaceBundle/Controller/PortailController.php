<?php

namespace Mysn\Bundle\InterfaceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class PortailController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('MysnInterfaceBundle:Portail:index.html.twig');
    }
}
