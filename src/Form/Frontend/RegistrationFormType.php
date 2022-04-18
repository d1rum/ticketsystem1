<?php

namespace App\Form\Frontend;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email',EmailType::class,
                [
                    'label' => 'Email',
                    'required' => true,
                    'attr' => [
                        'class' => 'form-control border-0 mb-3',
                        'id' => 'email',
                        'autofocus' => 'autofocus',
                        'placeholder' => 'Please enter your email'
                    ],
//                    'constraints' => [
//                        new NotBlank([
//                            'message' => 'Please fill the field'
//                        ]),
//                        new Email([
//                            'message' => 'Please enter a valid email'
//                        ])
//                    ]
                ],
            )
            ->add('agreeTerms', CheckboxType::class, [
                'label' => 'Yes, I agree with Grace <a href="#">Privacy Policy</a> and <a href="#">Terms of Use</a> *',
                'required' => true,
                'label_html' => true,
                'mapped' => false,
                'attr' => [
                    'class' => 'custom-control-input'
                ],
                'label_attr' => [
                    'class' => 'custom-control-label text-body'
                ],
                'constraints' => [
                    new IsTrue([
                        'message' => 'You should agree to our terms.',
                    ]),
                ],
            ])
            ->add('plainPassword', PasswordType::class, [
                'label' => 'Password',
                'required' => true,
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password','class' => 'form-control border-0 mb-3',],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a password',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
            ])
            ->add('confirmPassword', PasswordType::class, [
                'label' => 'Confirm Password',
                'required' => true,
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password','class' => 'form-control border-0 mb-3',],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a confirm password',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
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
