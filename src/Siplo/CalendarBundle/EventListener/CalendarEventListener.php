<?php
/**
 * Created by PhpStorm.
 * User: me
 * Date: 8/26/15
 * Time: 11:33 PM
 */
namespace Siplo\CalendarBundle\EventListener;

use ADesigns\CalendarBundle\Event\CalendarEvent;
use ADesigns\CalendarBundle\Entity\EventEntity;
use Doctrine\ORM\EntityManager;
use Siplo\CalendarBundle\Entity\Event;
use Symfony\Component\Validator\Constraints\DateTime;

//use Siplo\CalendarBundle\Entity\EventEntity;
class CalendarEventListener
{
    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function loadEvents(CalendarEvent $calendarEvent)
    {
        $startDateFilter = $calendarEvent->getStartDatetime();
        $endDateFilter = $calendarEvent->getEndDatetime();
       // alert('event listener!');
        // The original request so you can get filters from the calendar
        // Use the filter in your query for example

        $request = $calendarEvent->getRequest();
        $filter = $request->get('filter');


        // load events using your custom logic here,
        // for instance, retrieving events from a repository

        $classEvents = $this->entityManager->getRepository('SiploCalendarBundle:Event')
            ->createQueryBuilder('company_events')
            ->where('company_events.startDatetime BETWEEN :startDate and :endDate')
            ->setParameter('startDate', $startDateFilter->format('Y-m-d H:i:s'))
            ->setParameter('endDate', $endDateFilter->format('Y-m-d H:i:s'))
            ->getQuery()->getResult();

        // $companyEvents and $companyEvent in this example
        // represent entities from your database, NOT instances of EventEntity
        // within this bundle.
        //
        // Create EventEntity instances and populate it's properties with data
        // from your own entities/database values.

        foreach($classEvents as $classEvent) {
            $eventEntity = new EventEntity($classEvent->getTitle(),$classEvent->getStartDatetime(), $classEvent->getEndDatetime(),false);

            //optional calendar event settings
           // $eventEntity->setAllDay(true); // default is false, set to true if this is an all day event
            $eventEntity->setBgColor($classEvent->getBgColor()); //set the background color of the event's label
            $eventEntity->setFgColor('#000000'); //set the foreground color of the event's label
            $eventEntity->setUrl('http://www.google.com'); // url to send user to when event label is clicked
            $eventEntity->setCssClass('my-custom-class'); // a custom class you may want to apply to event labels

            //finally, add the event to the CalendarEvent for displaying on the calendar
            $calendarEvent->addEvent($eventEntity);
        }
    }
}