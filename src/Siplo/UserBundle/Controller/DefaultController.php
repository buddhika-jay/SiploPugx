<?php

namespace Siplo\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        return $this->render(
            'SiploUserBundle:Home:home.html.twig',
            array('name' => $name)
        );
    }

    /**
     * @Route("/home")
     * @Template()
     */
    public function homeAction()
    {
        return $this->render(
            'SiploUserBundle:Home:home.html.twig'
        );
    }
}
