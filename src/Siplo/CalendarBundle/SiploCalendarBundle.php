<?php

namespace Siplo\CalendarBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SiploCalendarBundle extends Bundle
{
    public function getParent(){
        return 'ADesignsCalendarBundle';
    }
}
