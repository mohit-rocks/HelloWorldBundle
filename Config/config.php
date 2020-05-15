<?php

declare(strict_types=1);

return [
    'name'        => 'Hello World',
    'description' => 'Enables integration for Hello World.',
    'version'     => '1.0.0',
    'author'      => 'Axelerant Inc',
    'routes'      => [
        'main'   => [],
        'public' => [],
        'api'    => [],
    ],
    'services' => [
        'integrations' => [
            // Basic definitions with name, display name and icon
            'mautic.integration.helloworld' => [
                'class' => \MauticPlugin\HelloWorldBundle\Integration\HelloWorldIntegration::class,
                'tags'  => [
                    'mautic.integration',
                    'mautic.basic_integration',
                ],
            ],
            // Provides the form types to use for the configuration UI
            'mautic.integration.helloworld.configuration' => [
                'class'     => \MauticPlugin\HelloWorldBundle\Integration\Support\ConfigSupport::class,
                'tags'      => [
                    'mautic.config_integration',
                ],
            ],
        ],
        'other' => [
            'helloworld.integration.config' => [
                'class'     => \MauticPlugin\HelloWorldBundle\Integration\Config::class,
                'arguments' => [
                  'mautic.integrations.helper',
                ],
            ],
            'helloworld.connection.client' => [
                'class'     => \MauticPlugin\HelloWorldBundle\Connection\Client::class,
                'arguments' => [
                    'mautic.integrations.auth_provider.basic_auth',
                    'mautic.helper.cache_storage',
                    'router',
                    'monolog.logger.mautic',
                    'helloworld.integration.config',
                ],
            ],
            'helloworld.connection.client.consumer' => [
                'class'     => \MauticPlugin\HelloWorldBundle\Connection\ApiConsumer::class,
                'arguments' => [
                    'mautic.helper.cache_storage',
                    'monolog.logger.mautic',
                    'helloworld.connection.client',
                    'helloworld.integration.config',
                ],
            ],
        ]
    ],
];
