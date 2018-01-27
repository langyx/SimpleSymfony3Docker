<?php

namespace YL\CoreAppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('YLCoreAppBundle:Default:index.html.twig');
    }
}
