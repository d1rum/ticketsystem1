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

class BackendTicketType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('ticket_content',TextareaType::class,array('attr'=>array('class'=> 'form-control', 'id' => 'basic-addon-name', 'placeholder'=>'Product Content'),'required' => true))
            ->add('ticket_priority',ChoiceType::class, array(
                'attr'=>array('class'=> 'form-select'), 'label'=> 'Priority', 'label_attr'=> array('class'=>'form-label'),
                'multiple' => false ,
                'choices' => array(
                    'Urgent' => '0',
                    'Important' => '1',
                    'Standart'=>'2'
                ),
                'empty_data' => '2'
            ))

            ->add('status',ChoiceType::class, array(
                'attr'=>array('class'=> 'form-select'), 'label'=> 'Status', 'label_attr'=> array('class'=>'form-label'),
                'multiple' => false ,
                'choices' => array(
                    'Active' => '0',
                    'Closed' => '1',

                ),
                'empty_data' => '0'
            ))
            ->add('ticketResponse',TextareaType::class,array('attr'=>array('class'=> 'form-control', 'id' => 'basic-addon-name', 'placeholder'=>'Response')))

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Ticket::class,
        ]);
    }
}
