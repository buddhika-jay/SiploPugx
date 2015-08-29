<?php
/**
 * Created by PhpStorm.
 * User: buddhika
 * Date: 8/28/15
 * Time: 3:52 PM
 */

namespace Siplo\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationUserOneFormType extends AbstractType
{


    public function getParent()
    {
        return 'fos_user_registration';
    }

    public function getName()
    {
        return 'app_user_registration';
    }
}