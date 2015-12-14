<?php

namespace CloudsBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PageController extends Controller
{
	/**
	 * @Route("/page/discography")
	 * @Template
	 */
	public function discographyAction()
	{
		return [];
	}
	
	/**
	 * @Route("/page/{slug}")
	 * @Template("CloudsBundle::default/page.html.twig")
	 */
	public function indexAction($slug, Request $request)
	{
		$page = $this->getDoctrine()
            ->getRepository('CloudsBundle:Page')
            ->findOneBySlug((string) $slug);
		
		return [
			'page' => $page
		];
		
	}
}