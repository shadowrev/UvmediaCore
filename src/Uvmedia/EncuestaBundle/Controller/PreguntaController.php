<?php

namespace Uvmedia\EncuestaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Uvmedia\EncuestaBundle\Entity\Pregunta;
use Uvmedia\EncuestaBundle\Form\PreguntaType;

/**
 * Pregunta controller.
 *
 */
class PreguntaController extends Controller
{
    /**
     * Lists all Pregunta entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('EncuestaBundle:Pregunta')->findAll();

        return $this->render('EncuestaBundle:Pregunta:index.html.twig', array(
            'entities' => $entities,
            'titulo' => 'Pregunta',
            'menu' => null
        ));
    }

    /**
     * Finds and displays a Pregunta entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('EncuestaBundle:Pregunta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Pregunta entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EncuestaBundle:Pregunta:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new Pregunta entity.
     *
     */
    public function newAction()
    {
        $entity = new Pregunta();
        $form   = $this->createForm(new PreguntaType(), $entity);

        return $this->render('EncuestaBundle:Pregunta:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new Pregunta entity.
     *
     */
    public function createAction()
    {
        $entity  = new Pregunta();
        $request = $this->getRequest();
        $form    = $this->createForm(new PreguntaType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('preguntaadmin_show', array('id' => $entity->getId())));
            
        }

        return $this->render('EncuestaBundle:Pregunta:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Pregunta entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('EncuestaBundle:Pregunta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Pregunta entity.');
        }

        $editForm = $this->createForm(new PreguntaType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EncuestaBundle:Pregunta:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Pregunta entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('EncuestaBundle:Pregunta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Pregunta entity.');
        }

        $editForm   = $this->createForm(new PreguntaType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('preguntaadmin_edit', array('id' => $id)));
        }

        return $this->render('EncuestaBundle:Pregunta:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Pregunta entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('EncuestaBundle:Pregunta')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Pregunta entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('preguntaadmin'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
