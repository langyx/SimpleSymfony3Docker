<?php

namespace YL\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class YLUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
