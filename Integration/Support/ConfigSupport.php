<?php

namespace MauticPlugin\HelloWorldBundle\Integration\Support;

use Mautic\IntegrationsBundle\Integration\DefaultConfigFormTrait;
use Mautic\IntegrationsBundle\Integration\Interfaces\ConfigFormAuthInterface;
use Mautic\IntegrationsBundle\Integration\Interfaces\ConfigFormInterface;
use MauticPlugin\HelloWorldBundle\Form\Type\ConfigAuthType;
use MauticPlugin\HelloWorldBundle\Integration\HelloWorldIntegration;

class ConfigSupport extends HelloWorldIntegration implements ConfigFormInterface, ConfigFormAuthInterface
{
    use DefaultConfigFormTrait;

    /**
     * {@inheritdoc}
     */
    public function getAuthConfigFormName(): string
    {
        return ConfigAuthType::class;
    }

    /**
     * {@inheritdoc}
     */
    public function getFeatureSettingsConfigFormName(): string
    {
        return '';
    }

    /**
     * {@inheritdoc}
     */
    public function getSyncConfigObjects(): array
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function getSyncMappedObjects(): array
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function getRequiredFieldsForMapping(string $object): array
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function getOptionalFieldsForMapping(string $object): array
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function getAllFieldsForMapping(string $object): array
    {
        return [];
    }
}
