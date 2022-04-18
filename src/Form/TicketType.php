<?php

namespace App\Form;

use App\Entity\Backend\Category;
use App\Entity\Backend\Country;
use App\Entity\Ticket;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TicketType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('ticket_content',TextareaType::class,array('attr'=>array('class'=> 'form-control', 'id' => 'basic-addon-name', 'placeholder'=>'Product Content'),'required' => true))
            ->add('ticket_priority',ChoiceType::class, array(
                'attr'=>array('class'=> 'custom-select'), 'label'=> 'Priority', 'label_attr'=> array('class'=>'form-label'),
                'multiple' => false ,
                'choices' => array(
                    'Urgent' => '0',
                    'Important' => '1',
                    'Standart'=>'2'
                ),

                'empty_data' => '2'
            ))
            ->add('category',EntityType::class,[ 'label' => 'Category',
                'required' => true,
                'multiple'=>true,
                'class' => Category::class,
                'choice_label' => 'category_name',
                'attr'=>[
                    'class'=>'custom-select',
                ]])


        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Ticket::class,
        ]);
    }
}
