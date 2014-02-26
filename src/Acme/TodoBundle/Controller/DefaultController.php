<?php

namespace Acme\TodoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\TodoBundle\Entity\Task;
use Acme\TodoBundle\Form\Type\TaskType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeTodoBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function newAction(Request $request)
    {
        //create a task and give it some dummy data
        $task = new Task();
        $task->setTask('Study Symfony 2');
        $task->setDueDate(new \DateTime('tomorrow'));
        
        //create form directly in controller using formbuilder
//        $form = $this->createFormBuilder($task)
//                //change default action and method(POST, call itself) when creating the form
////                ->setAction($this->generateUrl('target_route_name'))//target route points to controller that processes the form
////                ->setMethod('GET')
//                ->add('task', 'text')
////                ->add('dueDate', 'date')
//                ->add('dueDate', 'date', array('widget' => 'single_text'))
//                ->add('save', 'submit')
//                ->add('saveAndAdd', 'submit')
//                ->getForm();
        
//        //create form using form class
//        $form = $this->createForm(new TaskType(), $task);
        //create form using form class configured as a service
        $form = $this->createForm('task', $task);
        
        $form->handleRequest($request);
        if ($form->isValid()) {//check app/config/config.yml if validation:{enabled:true} otherwise isValid() may/will always return true
            //perform some action, like persisting task to database
            $nextAction = $form->get('saveAndAdd')->isClicked() ? 'acme_todo_task_new' : 'acme_todo_task_success';
            return $this->redirect($this->generateUrl($nextAction));
        }
        
        return $this->render(
                'AcmeTodoBundle:Default:new.html.twig',
                array ('form' => $form->createView())
                );
    }
    
    public function task_successAction()
    {
        return new Response('task saved successfully');
    }
    
    public function task_newAction()
    {
        return new Response('task added successfully');
    }
}
