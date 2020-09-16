<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Bundle\Templating;

class RandomController extends Controller
{
	/**
	*@Route("/random/number")
	*/
	public function numberAction()
	{
		$number = random_int(0,100);

		return $this->render('number.html.twig', ['number' => $number]);
	}
}