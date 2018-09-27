<?php

namespace ministereBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ministereBundle:Default:index.html.twig');
    }
}
