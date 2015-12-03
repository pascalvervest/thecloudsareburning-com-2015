<?php

namespace CloudsBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PageController extends Controller
{
	/**
	 * @Route("/page/{slug}")
	 * @Template("CloudsBundle::default/page.html.twig")
	 */
	public function indexAction($slug, Request $request)
	{
		
		echo 'pagina: '. $slug;
		echo 'Slug: '. $slug . '<br>';
		
		
		return [];
		
	}
}