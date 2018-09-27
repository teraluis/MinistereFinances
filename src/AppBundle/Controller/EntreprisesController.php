<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\Entreprises;
use AppBundle\Form\EntreprisesType;

/**
 * Entreprises controller.
 *
 */
class EntreprisesController extends Controller
{
    /**
     * Lists all Entreprises entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entreprises = $em->getRepository('AppBundle:Entreprises')->findAll();

        return $this->render('entreprises/index.html.twig', array(
            'entreprises' => $entreprises,
        ));
    }

    /**
     * Creates a new Entreprises entity.
     *
     */
    public function newAction(Request $request)
    {
        $entreprise = new Entreprises();
        $form = $this->createForm(new EntreprisesType(), $entreprise);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entreprise);
            $em->flush();

            return $this->redirectToRoute('entreprises_show', array('id' => $entreprises->getId()));
        }

        return $this->render('entreprises/new.html.twig', array(
            'entreprise' => $entreprise,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Entreprises entity.
     *
     */
    public function showAction(Entreprises $entreprise)
    {
        $deleteForm = $this->createDeleteForm($entreprise);

        return $this->render('entreprises/show.html.twig', array(
            'entreprise' => $entreprise,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Entreprises entity.
     *
     */
    public function editAction(Request $request, Entreprises $entreprise)
    {
        $deleteForm = $this->createDeleteForm($entreprise);
        $editForm = $this->createForm(new EntreprisesType(), $entreprise);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entreprise);
            $em->flush();

            return $this->redirectToRoute('entreprises_edit', array('id' => $entreprise->getId()));
        }

        return $this->render('entreprises/edit.html.twig', array(
            'entreprise' => $entreprise,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Entreprises entity.
     *
     */
    public function deleteAction(Request $request, Entreprises $entreprise)
    {
        $form = $this->createDeleteForm($entreprise);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($entreprise);
            $em->flush();
        }

        return $this->redirectToRoute('entreprises_index');
    }

    /**
     * Creates a form to delete a Entreprises entity.
     *
     * @param Entreprises $entreprise The Entreprises entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Entreprises $entreprise)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('entreprises_delete', array('id' => $entreprise->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
