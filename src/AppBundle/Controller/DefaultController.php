<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Service\NbpService;


class DefaultController extends Controller
{
    public function indexAction(NbpService $nbpService)
    {
    	$response = $nbpService->getCurrency();

        return $this->render('pages/index.html.twig', ["currency"=>$response]);
    }

}
