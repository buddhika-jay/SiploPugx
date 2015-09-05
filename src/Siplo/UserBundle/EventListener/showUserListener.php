<?php
/**
 * Created by PhpStorm.
 * User: me
 * Date: 9/5/15
 * Time: 11:08 AM
 */

namespace Siplo\UserBundle\EventListener;

// ...

use Avanzu\AdminThemeBundle\Event\ShowUserEvent;
//use Siplo\UserBundle\Model\UserModel;
use Avanzu\AdminThemeBundle\Model\UserModel;

class showUserListener {

    // ...

    public function onShowUser(ShowUserEvent $event) {

        $user = $this->getUser();
        $event->setUser($user);
    }

    protected function getUser() {

        // retrieve your concrete user model or entity
       $user = new UserModel();
        $user->setAvatar('')->setIsOnline(true)->setMemberSince(new \DateTime())->setUsername('Siplo User');
      //  $user=$this->container->get('security.context')->getToken()->getUser;
        return $user;
    }

}