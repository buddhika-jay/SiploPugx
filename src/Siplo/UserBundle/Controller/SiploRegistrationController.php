<?php

namespace Siplo\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class SiploRegistrationController extends Controller
{
    public function registerAdminAction()
    {
        return $this->container
            ->get('pugx_multi_user.registration_manager')
            ->register('Siplo\UserBundle\Entity\Admin');
    }

    public function registerGuardianAction()
    {
        return $this->container
            ->get('pugx_multi_user.registration_manager')
            ->register('Siplo\UserBundle\Entity\Guardian');
    }

    public function registerTeacherAction()
    {
        return $this->container
            ->get('pugx_multi_user.registration_manager')
            ->register('Siplo\UserBundle\Entity\Teacher');
    }

    public function registerStudentAction()
    {
        return $this->container
            ->get('pugx_multi_user.registration_manager')
            ->register('Siplo\UserBundle\Entity\Student');
    }
}
