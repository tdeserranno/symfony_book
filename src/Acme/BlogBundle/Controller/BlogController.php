<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Acme\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\BlogBundle\Entity\Author;

/**
 * Description of BlogController
 *
 * @author cyber02
 */
class BlogController extends Controller
{
    public function showAction($slug)
    {
        $blog = 'blog page';
        
        return $this->render('AcmeBlogBundle:Blog:show.html.twig', array(
            'blog' => $blog,
            'slug' => $slug,
        ));
    }
    
    public function indexAction($page)
    {
        $blog = 'blog page';
        
        return $this->render('AcmeBlogBundle:Blog:show.html.twig', array(
            'blog' => $blog,
            'slug' => 'page '.$page,
        ));
    }
    
    public function authorAction()
    {
        $author = new Author();
        //do something to the author
//        $author->setName('Thomas');
        
        $validator = $this->get('validator');
        $errors = $validator->validate($author);
        
        if (count($errors) > 0) {
//            $errorstring = (string) $errors;
            return $this->render(
                    'AcmeBlogBundle:Blog:error.html.twig',
                    array(
//                        'errorstring' => $errorstring,
                        'errors' => $errors,
                    ));
        }
        return $this->render(
                'AcmeBlogBundle:Blog:author.html.twig',
                array(
                    'author' => $author,
                ));
    }
}
