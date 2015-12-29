<?php

namespace PA\GameBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GameController extends Controller
{
    public function homeAction()
    {
        return $this->render('PAGameBundle:Game:home.html.twig', array(
                // ...
            ));    }

}
