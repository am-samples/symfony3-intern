<?php

namespace FosCustomBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class FosCustomBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
