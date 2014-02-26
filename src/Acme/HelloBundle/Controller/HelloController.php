<?php

namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\HttpFoundation\Response;

class HelloController extends Controller
//class HelloController
{
    public function indexAction(/*$firstName, $lastName, $color*/)
    {
//        return $this->render('AcmeHelloBundle:Hello:index.html.twig', array(
//            'firstname' => $firstName,
//            'lastname' => $lastName,
//            'color' => $color));

//        return new Response('<html><body>Hallookes '.$name.'!!!</body></html>');
        return $this->redirect($this->generateUrl('homepage'));
    }
}
