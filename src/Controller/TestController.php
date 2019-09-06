<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
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
	public function init($id)
	{
		return new Response('Coucou johan :) ' . $id);
	}

}
