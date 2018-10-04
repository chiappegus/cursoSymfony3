<?php

namespace AppBundle\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GenusController extends Controller
{
    /**
     * @Route("/genus/{genusName}", name="genus")
     */
    public function showAction($genusName)

    {      
         #$genusName=$this->container->has('templating');
          return $this->render('genus/show.html.twig', array(
           	'name'=>$genusName ,
           	));
           
         
       
    }
 



   


}
