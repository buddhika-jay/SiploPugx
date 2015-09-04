<?php

namespace Siplo\CalendarBundle\Entity;
use Siplo\CalendarBundle\Entity\EventEntity as BaseEvent;
use Doctrine\ORM\Mapping as ORM;

/**
 * Event
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Siplo\CalendarBundle\Entity\EventRepository")
 */
class Event extends EventEntity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
