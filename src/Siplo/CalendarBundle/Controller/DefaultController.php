<?php

namespace Siplo\CalendarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Doctrine\ORM\EntityManager;
use Siplo\CalendarBundle\Entity\Event;
use Symfony\Component\Validator\Constraints\DateTime;
use ADesigns\CalendarBundle\Event\CalendarEvent;
use ADesigns\CalendarBundle\Entity\EventEntity;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }

    /**
     * @Route("/viewcalendar/")
     */
    public function viewCalendarAction()
    {
        return $this->render('@SiploCalendar/testTheme.html.twig');

    }
    /**
     * @Route("/createEvent/{title}/{start}/{end}/{color}")
     */
    public function createAction($title,$start,$end,$color)
    {
        $event = new Event($title,new \DateTime($start),new \DateTime($end),true);
       // $event->setTitle('test');
        $event->setBgColor('#'.$color);
        $event->setCssClass('test');
        $event->setFgColor('t');
        $event->setUrl('test');

        $em = $this->getDoctrine()->getManager();

        $em->persist($event);
        $em->flush();

        return  $this->render('@SiploCalendar/viewercalendar.html.twig');
    }


}
