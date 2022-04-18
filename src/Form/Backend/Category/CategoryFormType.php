<?php

namespace App\Form\Backend\Category;

use App\Entity\Backend\Category;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CategoryFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('category_name', TextType::class, array('attr'=>array('class'=> 'form-control', 'id' => 'basic-addon-name', 'placeholder'=>'Category')))
            ->add('status', ChoiceType::class, array(
                'attr'=>array('class'=> 'form-select'), 'label'=> 'Status', 'label_attr'=> array('class'=>'form-label'),
                'multiple' => false ,
                'choices' => array(
                    'Active' => '1',
                    'Passive' => '0'
                ),
                'empty_data' => '1'
            ))

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Category::class,
        ]);
    }
}
