<?php

namespace sprint2\RealEstate\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use sprint2\RealEstate\AdminBundle\Entity\Boitemessages;
use Symfony\Component\HttpFoundation\JsonResponse;


/**
 * Description of AjaxController
 *
 * @author FATHALLAH Wael
 */
class AjaxController extends Controller
{
    public function getListOfMailAction($id)
    {
        $em = $this->getDoctrine()->getManager();     
        $listofmailt = $em->getRepository('sprint2RealEstateAdminBundle:Boitemessages')->findBy(array('idExpediteur'=>$id));;
        $listofmailr = $em->getRepository('sprint2RealEstateAdminBundle:Boitemessages')->findBy(array('idDestinataire'=>$id));;
        $response = new JsonResponse();
        $fnfjn = array();
        $fnfjn2 = array();
        
        while ($this->has_next($listofmailt))
        {   
            $now = next($listofmailt);
            array_push($fnfjn,  array($now->getIdDestinataire()->getNom()." ".$now->getIdDestinataire()->getPrenom(), $now->getContenu()));
        }
        while ($this->has_next($listofmailr))
        {   
            $now1 = next($listofmailr);
            array_push($fnfjn2,  array($now1->getIdExpediteur()->getNom()." ".$now1->getIdExpediteur()->getPrenom(), $now1->getContenu()));
        }
        
        return $response->setData(array('datalist'=>$fnfjn,'datalist1'=>$fnfjn2));
    }
       
    function has_next($array) {
    if (is_array($array)) {
        if (next($array) === false) {
            return false;
        } else {
            return true;
        }
    } else {
        return false;
    }
}
}
