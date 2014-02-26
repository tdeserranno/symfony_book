<?php

namespace Acme\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\StoreBundle\Entity\Product;
use Acme\StoreBundle\Entity\Category;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeStoreBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function createProductAction()
    {
        $category = new Category();
        $category->setName('Main Products');
        
        $product = new Product();
        $product->setName('Baseball bat');
        $product->setPrice('24.99');
        $product->setDescription('Lets crack some skulls ... or hit some curve balls ... whatever.');
        
        //relate product to category
        $product->setCategory($category);
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($category);
        $em->persist($product);
        $em->flush();
        
        return new Response('Created product id'. $product->getId());
    }
    
    public function showAction($id)
    {
        $product = $this->getDoctrine()
                ->getRepository('AcmeStoreBundle:Product')
                ->find($id);
        
        if (!$product) {
            throw $this->createNotFoundException(
                    'No product found for id '.$id
                    );
        }
        
        return $this->render(
                'AcmeStoreBundle:Default:show.html.twig',
                array(
                    'product' => $product,
                    )
                );
    }
    
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('AcmeStoreBundle:Product')->find($id);
        
        if (!$product) {
            throw $this->createNotFoundException(
                    'No product found for id '.$id
                    );
        }
        
        $product->setName('Baseball bat with nail');
        $em->flush();
        
        return $this->render(
                'AcmeStoreBundle:Default:show.html.twig',
                array(
                    'product' => $product,
                )
                );
    }
    
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('AcmeStoreBundle:Product')->find($id);
        
        if (!$product) {
            throw $this->createNotFoundException('Product not found');
        }
        
        $em->remove($product);
        $em->flush();
        
        return new Response('Product with id '.$id.' has been deleted.');
    }
}
