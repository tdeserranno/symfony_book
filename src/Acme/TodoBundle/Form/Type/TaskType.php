<?php

namespace Acme\TodoBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Acme\TodoBundle\Form\Type\CategoryType;

/**
 * Description of TaskType
 *
 * @author cyber02
 */
class TaskType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('task')
                ->add('dueDate', null, array('widget' => 'single_text'))
                /*when adding extra fields to a form that don't exist on the mapped object
                  you need to set the mapped option to false, otherwise an exception will be thrown*/
                ->add('reminder', null, array('mapped' => false))
                ->add('category', new CategoryType)
                ->add('save', 'submit');
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acme\TodoBundle\Entity\Task',//set data_class, ie the class that holds the underlying data
            'cascade_validation' => true,//forces validation on category, which is a seperate object with seperate validation rules
        ));
    }
    
    public function getName()
    {
        return 'task';
    }
}
