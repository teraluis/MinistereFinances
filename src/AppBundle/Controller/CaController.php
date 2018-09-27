<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\Ca;
use AppBundle\Form\CaType;

/**
 * Ca controller.
 *
 */
class CaController extends Controller
{
    /**
     * Lists all Ca entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $cas = $em->getRepository('AppBundle:Ca')->findAll();

        return $this->render('ca/index.html.twig', array(
            'cas' => $cas,
        ));
    }

    /**
     * Creates a new Ca entity.
     *
     */
    public function newAction(Request $request)
    {
        $ca = new Ca();
        $form = $this->createForm(new CaType(), $ca);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ca);
            $em->flush();

            return $this->redirectToRoute('CA_show', array('id' => $ca->getId()));
        }

        return $this->render('ca/new.html.twig', array(
            'ca' => $ca,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Ca entity.
     *
     */
    public function showAction(Ca $ca)
    {
        $deleteForm = $this->createDeleteForm($ca);

        return $this->render('ca/show.html.twig', array(
            'ca' => $ca,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Ca entity.
     *
     */
    public function editAction(Request $request, Ca $ca)
    {
        $deleteForm = $this->createDeleteForm($ca);
        $editForm = $this->createForm(new CaType(), $ca);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ca);
            $em->flush();

            return $this->redirectToRoute('CA_edit', array('id' => $ca->getId()));
        }

        return $this->render('ca/edit.html.twig', array(
            'ca' => $ca,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Ca entity.
     *
     */
    public function deleteAction(Request $request, Ca $ca)
    {
        $form = $this->createDeleteForm($ca);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ca);
            $em->flush();
        }

        return $this->redirectToRoute('CA_index');
    }

    /**
     * Creates a form to delete a Ca entity.
     *
     * @param Ca $ca The Ca entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Ca $ca)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('CA_delete', array('id' => $ca->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
