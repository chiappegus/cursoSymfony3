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
         #
          $notes = [
            'Octopus asked me a riddle, outsmarted me',
            'I counted 8 legs... as they wrapped around me',
            'Inked!'
        ];

          return $this->render('genus/show.html.twig', array(
           	'name'=>$genusName ,
           	'notes'=>    $notes,
           	));
           
         
       
    }
 



   


}
