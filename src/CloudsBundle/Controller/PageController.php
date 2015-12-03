<?php

namespace CloudsBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PageController extends Controller
{
	/**
	 * @Route("/page/{slug}")
	 */
	public function indexAction($slug, Request $request)
	{
		
		echo 'pagina: '. $slug;
		die();
		echo 'Slug: '. $slug . '<br>';
		
		
		ladybug_dump_die($request);
	}
}