<?php

namespace Mysn\Bundle\InterfaceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use Mysn\Bundle\InterfaceBundle\Entity\ARTICLES;
use Mysn\Bundle\InterfaceBundle\Form\ARTICLESType;

class PortailController extends Controller
{

    public function indexAction()
    {
        $entity = $this->getDoctrine();
        $article = $entity->getEntityManager()->getRepository("MysnInterfaceBundle:ARTICLES");

        $entities = $article->findAll();
        $art = new ARTICLES();
        $form = $this->createForm(new ARTICLESType(), $art);
        return $this->render('MysnInterfaceBundle:Portail:index.html.twig', array("entities" => $entities,
                                                                                  "article" => $art,
                                                                                  "form" => $form->createView()
                                                                                ));
    }

    public function moreAction()
    {
        $requete = $this->container->get('request');

        $entity = $this->getDoctrine();
        $article = $entity->getEntityManager();

        if ($requete->isXmlHttpRequest())
        {
            $entities = $article->createQuery("SELECT ar FROM MysnInterfaceBundle:ARTICLES ar")
                                ->getArrayResult();

            return (new Response(json_encode($entities)));
        }
    }

    public function createAction()
    {
		
        $entity  = new ARTICLES();
        $request = $this->getRequest();
        $form = $this->createForm(new ARTICLESType(), $entity);
        $form->bindRequest($request);
            
        if ($form->isValid())
        {
            $em = $this->getDoctrine()->getEntityManager();
            $entity->setIDUSER(1);
            $entity->setIDGROUP(1);
            $entity->setDATEPUB(new \DateTime());
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('MysnInterfaceBundle_homepage'));
        }

        return $this->redirect($this->generateUrl('MysnInterfaceBundle_homepage'));
    }
}
?>