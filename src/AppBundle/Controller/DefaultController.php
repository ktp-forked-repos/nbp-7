<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Service\NbpService;
use Symfony\Component\HttpFoundation\JsonResponse;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Response as GruzzleResponse;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $nbpService = $this->get('app.nbp_service');
        
    	$error = false;
    	$message = '';

    	$response = $nbpService->getCurrency();

    	if (!$response instanceof GruzzleResponse) {
    		$error = true;
    		$message = $response;
    	} else {
    		$response = $nbpService->decodeResponse($response);
    	}

        return $this->render('pages/index.html.twig', ["currency"=>$response, "error"=>$error, "message"=>$message]);
    }

    public function showHistoryAction($code) {
       return $this->render('pages/showHistory.html.twig');     
    }

}
