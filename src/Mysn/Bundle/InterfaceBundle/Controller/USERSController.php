<?php

namespace Mysn\Bundle\InterfaceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Mysn\Bundle\InterfaceBundle\Entity\USERS;
use Mysn\Bundle\InterfaceBundle\Form\USERSType;

/**
 * USERS controller.
 *
 */
class USERSController extends Controller
{
    /**
     * Lists all USERS entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('MysnInterfaceBundle:USERS')->findAll();

        return $this->render('MysnInterfaceBundle:USERS:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a USERS entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('MysnInterfaceBundle:USERS')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find USERS entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MysnInterfaceBundle:USERS:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new USERS entity.
     *
     */
    public function newAction()
    {
        $entity = new USERS();
        $form   = $this->createForm(new USERSType(), $entity);

        return $this->render('MysnInterfaceBundle:USERS:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new USERS entity.
     *
     */
    public function createAction()
    {
        $entity  = new USERS();
        $request = $this->getRequest();
        $form    = $this->createForm(new USERSType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('users_show', array('id' => $entity->getId())));
            
        }

        return $this->render('MysnInterfaceBundle:USERS:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing USERS entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('MysnInterfaceBundle:USERS')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find USERS entity.');
        }

        $editForm = $this->createForm(new USERSType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MysnInterfaceBundle:USERS:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing USERS entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('MysnInterfaceBundle:USERS')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find USERS entity.');
        }

        $editForm   = $this->createForm(new USERSType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('users_edit', array('id' => $id)));
        }

        return $this->render('MysnInterfaceBundle:USERS:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a USERS entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('MysnInterfaceBundle:USERS')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find USERS entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('users'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
