<?php
//
//namespace AppBundle\Form;
//
//use AppBundle\Entity\Task;
//use Symfony\Component\Form\AbstractType;
//use Symfony\Component\Form\FormBuilderInterface;
//use Symfony\Component\OptionsResolver\OptionsResolver;
//use Symfony\Component\Form\Extension\Core\Type\TextareaType;
//use Symfony\Component\Form\Extension\Core\Type\EmailType;
//use Symfony\Component\Form\Extension\Core\Type\TextType;
//use Symfony\Component\Form\Extension\Core\Type\SubmitType;
//
//class FormType extends AbstractType
//{
//    public function buildForm(FormBuilderInterface $builder, array $options)
//    {
//        $builder
//            ->setAction($this->generateUrl('sendmail'))
//            ->add('name', TextType::class, array(
//                'label' => 'Имя: ',
//                'attr'  => array('class' => 'form-control', 'placeholder' => 'Введите ваше имя...')
//            ))
//
//            ->add('email', EmailType::class, array(
//                'label' => 'E-mail: ',
//                'attr'  => array('class' => 'form-control', 'placeholder' => 'Введите ваш e-mail...')
//            ))
//            ->add('comment', TextareaType::class, array(
//                'label' => 'Комментарий: ',
//                'attr'  => array('class' => 'form-control', 'placeholder' => 'Можете добавить комментарий...')
//            ))
//            ->add('send', SubmitType::class, array(
//                'label' => 'Отправить',
//                'attr'  => array('class' => 'btn btn-primary', 'style' => 'margin-top: 10px;')
//            ))->getForm();
//    }
//
//    public function configureOptions(OptionsResolver $resolver)
//    {
//        $resolver->setDefaults(array(
//            'data_class' => Task::class,
//        ));
//    }
//}