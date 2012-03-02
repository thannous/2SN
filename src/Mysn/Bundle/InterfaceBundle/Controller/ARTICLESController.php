<?php

namespace Mysn\Bundle\InterfaceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Mysn\Bundle\InterfaceBundle\Entity\ARTICLES;
use Mysn\Bundle\InterfaceBundle\Form\ARTICLESType;

/**
 * ARTICLES controller.
 *
 */
class ARTICLESController extends Controller
{
    /**
     * Lists all ARTICLES entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('MysnInterfaceBundle:ARTICLES')->findAll();

        return $this->render('MysnInterfaceBundle:Portail:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a ARTICLES entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('MysnInterfaceBundle:ARTICLES')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ARTICLES entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MysnInterfaceBundle:ARTICLES:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new ARTICLES entity.
     *
     */
    public function newAction()
    {
        $entity = new ARTICLES();
        $form   = $this->createForm(new ARTICLESType(), $entity);

        return $this->render('MysnInterfaceBundle:ARTICLES:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new ARTICLES entity.
     *
     */
    public function createAction()
    {
        $entity  = new ARTICLES();
        $request = $this->getRequest();
        $form    = $this->createForm(new ARTICLESType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('articles_show', array('id' => $entity->getId())));

        }

        return $this->render('MysnInterfaceBundle:ARTICLES:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing ARTICLES entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('MysnInterfaceBundle:ARTICLES')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ARTICLES entity.');
        }

        $editForm = $this->createForm(new ARTICLESType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MysnInterfaceBundle:ARTICLES:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing ARTICLES entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('MysnInterfaceBundle:ARTICLES')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ARTICLES entity.');
        }

        $editForm   = $this->createForm(new ARTICLESType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('articles_edit', array('id' => $id)));
        }

        return $this->render('MysnInterfaceBundle:ARTICLES:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ARTICLES entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('MysnInterfaceBundle:ARTICLES')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ARTICLES entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('articles'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
