<?php

namespace App\Form\Frontend;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProfileEditFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name',TextType::class,[
                'label' => 'Name',
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                    'id' => 'name',
                    'placeholder' => 'Please enter your name'
                ]
            ])
            ->add('surname',TextType::class,[
                'label' => 'Surname',
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                    'id' => 'surname',
                    'placeholder' => 'Please enter your surname'
                ]
            ])
            ->add('phone',TextType::class,[
                'label' => 'Phone',
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                    'id' => 'phone',
                    'placeholder' => 'Please enter your phone'
                ]
            ])
            ->add('address',TextareaType::class,[
                'label' => 'Address',
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                    'id' => 'address',
                    'placeholder' => 'Please enter your address'
                ]
            ])
            ->add('country',TextType::class,[
                'label' => 'Country',
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                    'id' => 'country',
                    'placeholder' => 'Please enter your country'
                ]
            ])
            ->add('city',TextType::class,[
                'label' => 'City',
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                    'id' => 'city',
                    'placeholder' => 'Please enter your city'
                ]
            ])
            ->add('zipcode',TextType::class,[
                'label' => 'Zip Code',
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                    'id' => 'zipcode',
                    'placeholder' => 'Please enter your zip code'
                ]
            ])
            ->add('avatar',FileType::class,[
                'data_class' => null,
                'attr' => [
                    'class' => 'form-control',
                    'id' => 'avatar'
                ],
                'required' => false,
                'mapped' => false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
