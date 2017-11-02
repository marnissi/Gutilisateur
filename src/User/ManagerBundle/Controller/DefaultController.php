<?php

namespace User\ManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UserManagerBundle:Default:index.html.twig');
    }
}
