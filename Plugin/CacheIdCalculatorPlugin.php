<?php

declare(strict_types=1);

namespace Creatuity\GraphqlCacheFix\Plugin;

use Magento\Framework\App\Cache\Type\FrontendPool;
use Magento\Framework\App\DeploymentConfig;
use Magento\Framework\App\DeploymentConfig\Writer;
use Magento\Framework\Config\Data\ConfigData;
use Magento\Framework\Config\Data\ConfigDataFactory;
use Magento\Framework\Config\File\ConfigFilePool;
use Magento\GraphQlCache\Model\CacheId\CacheIdCalculator;

class CacheIdCalculatorPlugin
{
    public function __construct(
        private readonly DeploymentConfig $deploymentConfig,
        private readonly Writer $envWriter,
        private readonly ConfigDataFactory $configDataFactory
    ) {
    }

    /**
     * @param CacheIdCalculator $subject
     * @return void
     * @throws \Magento\Framework\Exception\FileSystemException
     * @throws \Magento\Framework\Exception\RuntimeException
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function beforeGetCacheId(CacheIdCalculator $subject): void
    {
        $cache = $this->deploymentConfig->get(FrontendPool::KEY_CACHE);

        if ($cache === null || !isset($cache['frontend'])) {
            $config = $this->configDataFactory->create(ConfigFilePool::APP_ENV);
            $config->set('cache/frontend', []);
            $this->envWriter->saveConfig([$config->getFileKey() => $config->getData()], false, null, [], true);
        }
    }
}
