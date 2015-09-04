<?php

namespace Siplo\ThemeBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SiploThemeBundle extends Bundle
{
    public function getParent(){
        return 'AvanzuAdminThemeBundle';
    }
}
