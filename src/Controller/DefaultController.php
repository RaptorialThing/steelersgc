<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Bundle\Templating;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
	/**
	*@Route("/random/number")
	*/
	public function index(Request $request)
	{
		

		return new Response("<html>This is website try <ul><li><a href=".$request->getBaseUrl()."'/random/number'> /random/number/</a></li><li><a href=".$request->getBaseUrl()."'/steelersgc/whatwedo'> /steelerscg/whatwedo/</a></li> </ul> </html>");
	}
}