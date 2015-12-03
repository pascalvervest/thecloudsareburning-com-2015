<?php

namespace CloudsBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @Template("CloudsBundle::default/home.html.twig")
     */
    public function indexAction(Request $request)
    {
        $posts = $this->getDoctrine()
            ->getRepository('CloudsBundle:Post')
            ->findAll();
        
        return [
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
            'posts' => $posts,
        ];
    }
}
