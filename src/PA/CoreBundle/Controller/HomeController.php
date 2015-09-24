<?php

namespace PA\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{
    public function homeAction()
    {
    //	$content = $this->get('templating')->render('PACoreBundle:Home:home.html.twig');
    //	return new Response($content);
	// Equivalent, sans le use Response
        return $this->render('PACoreBundle:Home:home.html.twig', array());    
	}
}
