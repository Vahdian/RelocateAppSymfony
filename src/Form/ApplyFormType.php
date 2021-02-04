<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;

class ApplyFormType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add(
            'code',
            TextType::class,
            array(
                'attr' => array(
                    'placeholder' => 'Enter your Syberia Code',
                ),
                'label' => false,
            )

        );
        $builder->add(
            'name',
            TextType::class,
            array(
                'attr' => array(
                    'placeholder' => 'Enter your name',
                ),
                'label' => false,
            )

        );

        $builder->add(
            'destination',
            TextType::class,
            array(
                'attr' => array(
                    'placeholder' => 'Wanted destination',
                ),
                'label' => false,
            )

        );
        $builder->add(
            'email',
            EmailType::class,
            array(
                'attr' => array(
                    'placeholder' => 'Enter your email',
                ),
                'label' => false,
            )

        );
        $builder->add('policy', CheckboxType::class,
        ['label' =>  "I consent my data sent to <a style='color: darkgoldenrod;' href='/galaxyfederation'>galaxy federation</a>",
         'label_html' => true]
    );
    }
}
