<?php

namespace sprint2\RealEstate\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use sprint2\RealEstate\AdminBundle\Models\Document;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $utilisateur_last_6_gerants= $this->getDoctrine()
        ->getRepository('sprint2RealEstateAdminBundle:Utilisateur')
        ->findBy(array('role'=>1));
        $utilisateur_last_6_client= $this->getDoctrine()
        ->getRepository('sprint2RealEstateAdminBundle:Utilisateur')
        ->findBy(array('role'=>2));
        $offre_last_6= $this->getDoctrine()
        ->getRepository('sprint2RealEstateAdminBundle:Offre')
        ->findAll();
        $Agance= $this->getDoctrine()
        ->getRepository('sprint2RealEstateAdminBundle:Agence')
        ->findAll();
        //array_slice($utilisateur,-6)
        //count($utilisateur);
        $Image = $this->get_gravatar("fathallahwael@windowslive.com");
        return $this->render('sprint2RealEstateAdminBundle:Default:index.html.twig',
                array('utilisateurg'=>array_slice($utilisateur_last_6_gerants,-8), 
                    'utilisateurc'=>array_slice($utilisateur_last_6_client,-8), 
                    'offre'=>array_slice($offre_last_6,-5),
                    'utilisateurgn'=>count($utilisateur_last_6_gerants),
                    'utilisateurcn'=>count($utilisateur_last_6_client),
                    'offren'=>count($offre_last_6),
                    'agancen'=>count($Agance),
                    'agance'=>array_slice($Agance,-5),
                    'image'=>$Image));
    }
    
    public function mailAction()
    {
        $Image = $this->get_gravatar("fathallahwael@windowslive.com");
        return $this->render('sprint2RealEstateAdminBundle:Pages:mail.html.twig',
        	array('image'=>$Image));
    }
    public function sentAction()
    {
        $Image = $this->get_gravatar("fathallahwael@windowslive.com");
        return $this->render('sprint2RealEstateAdminBundle:Pages:sentmail.html.twig',
        	array('image'=>$Image));

    }

    public function clientsAction()
    {
        $Image = $this->get_gravatar("fathallahwael@windowslive.com");
        $request1 = $this->getRequest();
        if ($request1->getMethod()=="POST" ){ 
            if($request1->get('Submit')=="Modifier"){
                $idx=$request1->get('id');
                $mailx=$request1->get('mail');
                $nomx=$request1->get('nom');
                $prenomx=$request1->get('prenom');
                $statmatrix=$request1->get('statmatri');

                $em1 = $this->getDoctrine()->getManager();
                if($request1->get('id')== NULL){
                   $idx= "0";
                }else{
                    $idx= $request1->get('id');
                }
                $utilisateurx = $em1->getRepository('sprint2RealEstateAdminBundle:Utilisateur')->find($idx);

                $utilisateurx->setMail($mailx);
                $utilisateurx->setNom($nomx);
                $utilisateurx->setPrenom($prenomx);
                $utilisateurx->setStatusMatrimonial($statmatrix);

                $em2=$this->getDoctrine()->getManager();
                $em2->persist($utilisateurx);
                $em2->flush();     
    //            return $this->render('sprint2RealEstateAdminBundle:Pages:agence.html.twig',
    //                array('agance'=>$Agance, 'utilisateur'=>$utilisateur, 'adresse'=>$adresse ));
            }
            elseif ($request1->get('Submit')=="Envoier") {
                
                $idxc=$request1->get('idxc');
                $mailxc=$request1->get('mailxc');
                $subxc=$request1->get('subxc');
                $bodyxc=$request1->get('bodyxc');
                
                $emS = $this->getDoctrine()->getManager();
                $destinataire = $emS->getRepository('sprint2RealEstateAdminBundle:Utilisateur')->find($idxc);
                $expediteur = $emS->getRepository('sprint2RealEstateAdminBundle:Utilisateur')->find("0");
                $mailx= new \sprint2\RealEstate\AdminBundle\Entity\Boitemessages();
                $mailx->setIdDestinataire($destinataire);
                $mailx->setVu("0");
                $mailx->setContenu($bodyxc);
                $mailx->setIdExpediteur($expediteur);  
                $mailx->setTempsEnvoi(NULL);

                $em=$this->getDoctrine()->getManager();
                $em->persist($mailx);
                $em->flush();     
            
        }
        }
        
        $utilisateur= $this->getDoctrine()
        ->getRepository('sprint2RealEstateAdminBundle:Utilisateur')
        ->findBy(array('role'=>2));
        
        $utilisateurf=new \sprint2\RealEstate\AdminBundle\Entity\Utilisateur();
        $form=$this->createForm(new \sprint2\RealEstate\AdminBundle\form\AjouCForm(),$utilisateurf);#container->get("form.factory")entre this et create#}
        $Request = $this->get('request_stack')->getCurrentRequest();
        $form->handleRequest($Request);//laison entre formulaire  et lentity en question et recuperer les données du requet
        if($form->isValid())
        {
            
            $cvbnnnn = $this->upload($utilisateurf->getImage());
            $utilisateurf->setPassword(md5($utilisateurf->getPassword()));
            $utilisateurf->setNumfix(NULL);
            $utilisateurf->setNummobile(NULL);
            $utilisateurf->setRole("2");
            $utilisateurf->setUrlp($cvbnnnn);
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($utilisateurf);
            $em->flush();

        }
        
        return $this->render('sprint2RealEstateAdminBundle:Pages:client.html.twig',
        	array('utilisateur'=>$utilisateur, 'form'=>$form->createView(), 'image'=>$Image));
    }
    
    public function gerantsAction()
    {
        $Image = $this->get_gravatar("fathallahwael@windowslive.com");
        $request1 = $this->getRequest();
        if ($request1->getMethod()=="POST" ){ 
            
            $idx=$request1->get('id');
            $mailx=$request1->get('mail');
            $nomx=$request1->get('nom');
            $prenomx=$request1->get('prenom');
            $statmatrix=$request1->get('statmatri');
            $fixex=$request1->get('numfix');
            $mobilx=$request1->get('nummob');
//            $passx=$request->get('pass');          
            $em1 = $this->getDoctrine()->getManager();
            if($request1->get('id')== NULL){
               $idx= "0";
            }else{
                $idx= $request1->get('id');
            }
            $utilisateurx = $em1->getRepository('sprint2RealEstateAdminBundle:Utilisateur')->find($idx);
                       
            $utilisateurx->setMail($mailx);
            $utilisateurx->setNom($nomx);
            $utilisateurx->setPrenom($prenomx);
            $utilisateurx->setStatusMatrimonial($statmatrix);
            $utilisateurx->setNumfix($fixex); 
            $utilisateurx->setNummobile($mobilx); 

            $em2=$this->getDoctrine()->getManager();
            $em2->persist($utilisateurx);
            $em2->flush();     
//            return $this->render('sprint2RealEstateAdminBundle:Pages:agence.html.twig',
//                array('agance'=>$Agance, 'utilisateur'=>$utilisateur, 'adresse'=>$adresse ));
        }
        
        $utilisateur= $this->getDoctrine()
        ->getRepository('sprint2RealEstateAdminBundle:Utilisateur')
        ->findBy(array('role'=>1));
        
        $utilisateurf=new \sprint2\RealEstate\AdminBundle\Entity\Utilisateur();
        $form=$this->createForm(new \sprint2\RealEstate\AdminBundle\form\AjouGForm(),$utilisateurf);#container->get("form.factory")entre this et create#}
        $Request = $this->get('request_stack')->getCurrentRequest();
        $form->handleRequest($Request);//laison entre formulaire  et lentity en question et recuperer les données du requet
        if($form->isValid())
        {
            $cvbnnnn = $this->upload($utilisateurf->getImage());
            $utilisateurf->setPassword(md5($utilisateurf->getPassword()));
            $utilisateurf->setRole("1");
            $utilisateurf->setUrlp($cvbnnnn);
            $em = $this->getDoctrine()->getManager();
            $em->persist($utilisateurf);
            $em->flush();

        }

        return $this->render('sprint2RealEstateAdminBundle:Pages:gerants.html.twig',
        	array('utilisateur'=>$utilisateur, 'form'=>$form->createView() , 'image'=>$Image));
    }
    
    public function offresAction()
    {
        $Image = $this->get_gravatar("fathallahwael@windowslive.com");
        $offre_list= $this->getDoctrine()
        ->getRepository('sprint2RealEstateAdminBundle:Offre')
        ->findAll();

        return $this->render('sprint2RealEstateAdminBundle:Pages:offres.html.twig',
                array('offre'=>$offre_list, 'image'=>$Image));
    }
    
    public function agenceAction()
    {
        $Image = $this->get_gravatar("fathallahwael@windowslive.com");
        $request = $this->getRequest();
        if ($request->getMethod()=="POST"){  
            $nomx=$request->get('nom');
            $agantx=$this->getDoctrine()->getManager()->getRepository("sprint2RealEstateAdminBundle:Utilisateur")->findOneById($request->get('agant')); 
            $adressex=$this->getDoctrine()->getManager()->getRepository("sprint2RealEstateAdminBundle:Adresse")->findOneById($request->get('adresse'));
            $description=$request->get('description');

            $agencex= new \sprint2\RealEstate\AdminBundle\Entity\Agence();
            $agencex->setNom($nomx);
            $agencex->setIdGerant($agantx);
            $agencex->setIdAdresse($adressex);
            $agencex->setDescription($description);            

            $em=$this->getDoctrine()->getManager();
            $em->persist($agencex);
            $em->flush();     
        }
      
        $Agance= $this->getDoctrine()
        ->getRepository('sprint2RealEstateAdminBundle:Agence')
        ->findAll();
        
        $utilisateur= $this->getDoctrine()
        ->getRepository('sprint2RealEstateAdminBundle:Utilisateur')
        ->findBy(array('role'=>1));
        
        $adresse= $this->getDoctrine()
        ->getRepository('sprint2RealEstateAdminBundle:Adresse')
        ->findALl();

        return $this->render('sprint2RealEstateAdminBundle:Pages:agence.html.twig',
                array('agance'=>$Agance, 'utilisateur'=>$utilisateur, 'adresse'=>$adresse, 'image'=>$Image));
        
        
    }
    
    public function supprimerUCAction($id){
        
        $em = $this->getDoctrine()->getManager();
        $utilisateur = $em->getRepository('sprint2RealEstateAdminBundle:Utilisateur')->find($id);
        $em->remove($utilisateur);
        $em->flush();
        return $this->redirectToRoute("sprint2_real_estate_admin_clients");
    }
    
    public function supprimerUGAction($id){
        
        $em = $this->getDoctrine()->getManager();
        $utilisateur = $em->getRepository('sprint2RealEstateAdminBundle:Utilisateur')->find($id);
        $em->remove($utilisateur);
        $em->flush();
        return $this->redirectToRoute("sprint2_real_estate_admin_gerants");
    }
    
    public function supprimerAAction($id){
        
        $em = $this->getDoctrine()->getManager();
        $agence = $em->getRepository('sprint2RealEstateAdminBundle:Agence')->find($id);
        $em->remove($agence);
        $em->flush();
        return $this->redirectToRoute("sprint2_real_estate_admin_agence");
    }
    public function upload($image) {
  
            $status = 'success';
            $uploadedURL='';
            $message="";
            if (($image instanceof UploadedFile) && ($image->getError() == '0')) {
                if (($image->getSize() < 2000000000)) {
                    $originalName = $image->getClientOriginalName();
                    $name_array = explode('.', $originalName);
                    $file_type = $name_array[sizeof($name_array) - 1];
                    $valid_filetypes = array('jpg', 'jpeg', 'bmp', 'png');
                    if (in_array(strtolower($file_type), $valid_filetypes)) {
                    
                      //Start Uploading File
                      $name =$this->str_random();
                      $document = new Document();
                      $document->setFile($image, $file_type, $name);
                      $document->setSubDirectory('image');
                      $document->processFile();
                      return "http://localhost/image/".$name.".".$file_type;

                    }
                    else {                      
                      return "http://localhost/image/null".".png";                       
                    }
                }
                 else {}
            }  else {
                
            }
            
        }  
    

   function str_random($length = 16)
   {
       $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

       return substr(str_shuffle(str_repeat($pool, $length)), 0, $length);
   }
   
   function get_gravatar( $email, $s = 80, $d = 'mm', $r = 'g', $img = false, $atts = array() ) {
    $url = 'http://www.gravatar.com/avatar/';
    $url .= md5( strtolower( trim( $email ) ) );
    $url .= "?s=$s&d=$d&r=$r";
        if ( $img ) {
            $url = '<img src="' . $url . '"';
            foreach ( $atts as $key => $val )
                $url .= ' ' . $key . '="' . $val . '"';
            $url .= ' />';
        }
    return $url;
    }

}

