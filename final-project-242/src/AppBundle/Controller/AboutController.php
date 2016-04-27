<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


/**
 * About Controller
 * 
 * @Route("/about")
 * 
 */
class AboutController extends Controller
{
    /**
     * @Route("/", name="about")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('about/about.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }
}
