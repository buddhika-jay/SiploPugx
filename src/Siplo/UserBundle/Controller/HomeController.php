<?php

namespace Siplo\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class HomeController extends Controller
{
    public function studentHomeAction()
    {
        return $this->render('@SiploUser/Home/student_home.html.twig');
    }

    public function teacherHomeAction()
    {
        return $this->render('@SiploUser/Home/teacher_home.html.twig');
    }

    public function guardianHomeAction()
    {
        return $this->render('@SiploUser/Home/guardian_home.html.twig');
    }

    public function adminHomeAction()
    {
        return $this->render('@SiploUser/Home/admin_home.html.twig');
    }



}
