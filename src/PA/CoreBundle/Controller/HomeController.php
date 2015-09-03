<?php

namespace PA\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function homeAction()
    {
        return $this->render('PACoreBundle:Home:home.html.twig', array(
                // ...
            ));    }

}
