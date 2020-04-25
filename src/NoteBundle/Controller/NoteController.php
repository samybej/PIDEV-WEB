<?php


namespace NoteBundle\Controller;
use Symfony\Component\HttpFoundation\Request;

use EntitiesBundle\Entity\Note;
use EntitiesBundle\Form\NoteType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use EntitiesBundle\Entity\Client;



class NoteController extends Controller
{
    function addAction(Request  $request) {


        $note=new Note();
        $utilisateur = $this->getUser();
        $client = $this->getDoctrine()->getRepository(Client::class)->getIdClient($utilisateur);
        $note->setIdClient($client[0]);

        $form=$this->createForm(NoteType::class, $note);
        $form->handleRequest($request);
        if ($form -> isSubmitted()) {
            $chauffeur = $form->get('idChauffeur')->getData();
            $noteExiste = $this->getDoctrine()->getRepository(Note::class)->getNoteExiste($chauffeur,$client[0]);
            if ($noteExiste == true)
            {
                return $this->render('@Note/note/note_erreur.html.twig');
            }

            $em=$this->getDoctrine()->getManager();
            $em-> persist($note);
            $em-> flush();
            if ($form->get('note')->getData() < 4 ) {
                return $this->redirectToRoute('reclamation_add');

            }
            //return $this->redirectToRoute("club_list1");

        }
        return  $this->render('@Note/Note/add.html.twig', array("f"=>$form->createView()));

    }
    function listAction() {
        $note=$this->getDoctrine()->getRepository(Note::class)->findAll();
        return $this->render('@Note/Note/list.html.twig', array('list'=>$note));

    }

    public function updateAction(Request $request, $id)
    {
        $note  = $this->getDoctrine()->getRepository(Note::class)->find($id);
        $form = $this->createForm(NoteType::class,$note);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->persist($note);
            $em->flush();
            return $this->redirectToRoute("note_list");
        }

        return $this->render('@Note/Note/update.html.twig',array('f'=>$form->createView()));
    }

    public function deleteAction(Request $request, $id)
    {
        $note = $this->getDoctrine()->getRepository(Note::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($note);
        $em->flush();

        $listeNote = $this->getDoctrine()->getRepository(Note::class)->findAll();
        return $this->render('@Note/Note/list.html.twig',array("list"=>$listeNote));
    }




}