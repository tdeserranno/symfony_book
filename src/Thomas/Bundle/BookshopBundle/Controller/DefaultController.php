<?php

namespace Thomas\Bundle\BookshopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ThomasBookshopBundle:Default:index.html.twig');
    }
}
