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
use Symfony\Component\Translation\Translator;
use Symfony\Component\Translation\Loader\ArrayLoader;
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
                'label' => 'callback.form.username',
                'attr'  => [
                    'class' => 'form-control',
                    'placeholder' =>  'callback.form.plname',
                ]
            ])

            ->add('email', EmailType::class, [
                'label' => 'callback.form.email',
                'attr'  => [
                    'class' => 'form-control',
                    'placeholder' => 'callback.form.plmail',
                ],
                'constraints' => [
                    new Assert\Email([
                        'message'=>'Вы ввели некорректный E-mail'
                    ])]
            ])
            ->add('comment', TextareaType::class, [
                'label' => 'callback.form.comment',
                'attr'  => [
                    'class' => 'form-control',
                    'placeholder' => 'callback.form.plcomment',
                ]
            ])
            ->add('send', SubmitType::class, [
                'label' => 'callback.form.submit',
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