<?php

namespace Siplo\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class UserTwoType extends BaseType
{

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Siplo\UserBundle\Entity\UserTwo'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'siplo_user_two_registration';
    }

    public function getParent()
    {
        return 'fos_user_registration';
    }
}
