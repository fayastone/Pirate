<?php

namespace PA\WikiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ExplorerController extends Controller
{
	public function exploreAction()
    {
        return $this->render('PAWikiBundle:Explorer:explorer.html.twig', array());
    }
}
