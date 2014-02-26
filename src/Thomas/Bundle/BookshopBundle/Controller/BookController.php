<?php

namespace Thomas\Bundle\BookshopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of BookController
 *
 * @author cyber02
 */
class BookController extends Controller
{
    public function listAction()
    {
        $repository = $this->getDoctrine()
                ->getRepository('ThomasBookshopBundle:Book');
        $query = $repository->createQueryBuilder('b')->getQuery();
                
        $books = $query->getResult();
        
        return $this->render(
                'ThomasBookshopBundle:Book:list.html.twig',
                array('books' => $books));
    }
}
