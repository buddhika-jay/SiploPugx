<?php

namespace Siplo\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserOneType extends AbstractType
{

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Siplo\UserBundle\Entity\UserOne'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'siplo_user_one_registration';
    }

    public function getParent()
    {
        return 'fos_user_registration';
    }
}
