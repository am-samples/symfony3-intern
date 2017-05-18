<?php

namespace AppBundle\Form;

use AppBundle\Entity\Callback;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Класс описывающий форму (поля)
 */
class FormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Имя: ',
                'attr'  => [
                    'class' => 'form-control',
                    'placeholder' => 'Введите ваше имя...'
                ]
            ])

            ->add('email', EmailType::class, [
                'label' => 'E-mail: ',
                'attr'  => [
                    'class' => 'form-control',
                    'placeholder' => 'Введите ваш e-mail...'
                ],
                'constraints' => [
                    new Assert\Email([
                        'message'=>'This is not the corect email format'
                    ])]
            ])
            ->add('comment', TextareaType::class, [
                'label' => 'Комментарий: ',
                'attr'  => [
                    'class' => 'form-control',
                    'placeholder' => 'Можете добавить комментарий...'
                ]
            ])
            ->add('send', SubmitType::class, [
                'label' => 'Отправить',
                'attr'  => [
                    'class' => 'btn btn-primary',
                    'style' => 'margin-top: 10px;'
                ]
            ])->getForm();
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Callback::class,
        ]);
    }
}