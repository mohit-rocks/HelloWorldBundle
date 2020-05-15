<?php

namespace MauticPlugin\HelloWorldBundle\Integration;

use Mautic\IntegrationsBundle\Integration\BasicIntegration;
use Mautic\IntegrationsBundle\Integration\ConfigurationTrait;
use Mautic\IntegrationsBundle\Integration\Interfaces\BasicInterface;

class HelloWorldIntegration extends BasicIntegration implements BasicInterface
{
    use ConfigurationTrait;
    public const NAME         = 'HelloWorld';
    public const DISPLAY_NAME = 'Hello World';

    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return self::NAME;
    }

    /**
     * {@inheritdoc}
     */
    public function getDisplayName(): string
    {
        return self::DISPLAY_NAME;
    }

    /**
     * {@inheritdoc}
     */
    public function getIcon(): string
    {
        return 'plugins/HelloWorldBundle/Assets/img/zoom.png';
    }
}
