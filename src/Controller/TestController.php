<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{

	/**
	 * @Route(
	 * 	"/init/{id}",
	 * 	defaults={"id": "12"},
	 * 	requirements={"id": "\d+"},
	 * 	name="trololo"
	 * 	)
	 */
	public function init(Request $request, $id)
	{
		return new Response('<body>Coucou johan :) ' . $id . '</body>');
	}

}
