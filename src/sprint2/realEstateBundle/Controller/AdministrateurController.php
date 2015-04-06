<?php

namespace sprint2\realEstateBundle\Controller;

use print2\realEstateBundle\Entity\Administrateur;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdministrateurController extends Controller
{


    public function afficherAdminsAction()
    {
    	$administrateurs= $this->getDoctrine()
        ->getRepository('realEstateBundle:Administrateur')
        ->findAll();

        return $this->render('realEstateBundle:administrateur:adminTable.html.twig',
        	array('administrateurs'=>$administrateurs));
    }

    public function ajouterAdminAction()
    {
    	return $this->render('realEstateBundle:administrateur:ajouterAdmin.html.twig');
    }
}
