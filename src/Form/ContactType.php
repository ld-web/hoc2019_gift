<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom :',
                'attr' => [
                    'placeholder' => 'Nom...'
                ]
            ])
            ->add('firstname', TextType::class, [
                'label' => 'Prénom :',
                'attr' => [
                    'placeholder' => 'Prénom...'
                ]
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email :',
                'attr' => [
                    'placeholder' => 'Email...'
                ]
            ])
            ->add('message', TextareaType::class, [
                'label' => 'Message :',
                'attr' => [
                    'placeholder' => 'Message...',
                    'rows' => '8'
                ]
            ])
            ->add('send', SubmitType::class, [
                'label' => 'ENVOYER'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
