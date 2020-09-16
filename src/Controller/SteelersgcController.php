<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Bundle\Templating;

class SteelersgcController extends Controller
{
	/**
	*@Route("/steelersgc/whatwedo")
	*/
	public function whatwedo()
	{

		return $this->render('whatwedo.html.twig');
	}
}