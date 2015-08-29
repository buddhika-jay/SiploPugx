<?php

namespace Siplo\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class GuardianRegistrationFormType extends AbstractType
{

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Siplo\UserBundle\Entity\Guardian'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'siplo_guardian_registration';
    }

    public function getParent()
    {
        return 'fos_user_registration';
    }
}
