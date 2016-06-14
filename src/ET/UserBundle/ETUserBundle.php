<?php

namespace ET\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ETUserBundle extends Bundle
{
    
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
