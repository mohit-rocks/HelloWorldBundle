<?php

declare(strict_types=1);

namespace MauticPlugin\HelloWorldBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class ConfigAuthType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add(
          'key',
          TextType::class,
          [
            'label'    => 'hello_world.form.key',
            'required' => true,
            'attr'     => [
              'class' => 'form-control',
            ],
            'constraints' => [
              new NotBlank(['message' => 'hello_world.form.key.required']),
            ],
          ]
        );

        $builder->add(
          'secret',
          TextType::class,
          [
            'label'      => 'hello_world.form.secret',
            'label_attr' => ['class' => 'control-label'],
            'required'   => true,
            'attr'       => [
              'class' => 'form-control',
            ],
            'constraints' => [
              new NotBlank(['message' => 'hello_world.form.secret.required']),
            ],
          ]
        );

        $choices = [
          'Production Endpoint (https://api.example.com)'    => 'https://api.example.com',
          'Staging Endpoint (https://api.stage.example.net)' => 'https://api.stage.example.net',
        ];

        $builder->add(
          'host',
          ChoiceType::class,
          [
            'label'      => 'hello_world.form.host',
            'label_attr' => ['class' => 'control-label'],
            'required'   => true,
            'attr'       => [
              'class' => 'form-control',
            ],
            'choices'  => $choices,
          ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $optionsResolver): void
    {
        $optionsResolver->setDefaults(
            [
                'integration' => null,
            ]
        );
    }
}
