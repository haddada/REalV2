<?php
namespace sprint2\realEstateBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use sprint2\realEstateBundle\Entity\Utilisateur;
use sprint2\realEstateBundle\Entity\Offre;
use sprint2\realEstateBundle\Entity\Vote;
use Symfony\Component\HttpFoundation\Response;

/**
 * Vote controller.
 *
 */
class VoteController extends Controller
{

	 public function createAction()
    {
        $entitie=new Vote();
        $user=new Utilisateur();
        $offre=new Offre();
        $em = $this->getDoctrine()->getManager();
        $request = $this->container->get('request');
        $idOffre=$request->get('id');

        $idUtilisateur=1;
        $note=$request->get('group-2');
        $entitie->setNote($note);
        $entitie->setIdUtilisateur($user);
        $entitie->setIdOffre($offre);
        $em->persist($entitie);
        $em->flush();

        return new Response('OK');
    }
}