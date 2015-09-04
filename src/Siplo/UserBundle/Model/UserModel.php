<?php
/**
 * Created by PhpStorm.
 * User: buddhika
 * Date: 9/4/15
 * Time: 11:14 PM
 */

namespace Siplo\UserBundle\Model;

use FOS\UserBundle\Model\User as BaseUser;
use Avanzu\AdminThemeBundle\Model\UserInterface as ThemeUser;

class UserModel extends BaseUser implements ThemeUser
{

    public function getAvatar()
    {
        // TODO: Implement getAvatar() method.
    }

    public function getName()
    {
        // TODO: Implement getName() method.
    }

    public function getMemberSince()
    {
        // TODO: Implement getMemberSince() method.
    }

    public function isOnline()
    {
        // TODO: Implement isOnline() method.
    }

    public function getIdentifier()
    {
        // TODO: Implement getIdentifier() method.
    }

    public function getTitle()
    {
        // TODO: Implement getTitle() method.
    }
}