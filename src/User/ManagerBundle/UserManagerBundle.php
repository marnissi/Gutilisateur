<?php

namespace User\ManagerBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class UserManagerBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
