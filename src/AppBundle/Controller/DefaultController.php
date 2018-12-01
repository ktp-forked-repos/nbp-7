<?php
namespace AppBundle\Controller;

use AppBundle\Entity\Category;
use AppBundle\Entity\CategoryProject;
use AppBundle\Entity\Contact;
use AppBundle\Entity\Project;
use AppBundle\Entity\Technology;
use AppBundle\Entity\TechnologyProject;
use AppBundle\Form\NewsType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        return $this->render('pages/index.html.twig');
    }

}
