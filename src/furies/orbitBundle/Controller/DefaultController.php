<?php

namespace furies\orbitBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('furiesorbitBundle:Default:index.html.twig');
    }
}
