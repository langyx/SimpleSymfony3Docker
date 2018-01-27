<?php

namespace YL\CompanyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('YLCompanyBundle:Default:index.html.twig');
    }
}
