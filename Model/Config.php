<?php
namespace OneCommerce\OrderExport\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;

class Config
{
    const CONFIG_PATH_ENABLED = 'sales/order_export/enabled';

    /**
     * @var ScopeConfigInterface
     */
    protected $scopeConfig;

    /**
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * Check if the order export feature is enabled
     *
     * @return bool
     */
    public function isEnabled()
    {
        return $this->scopeConfig->isSetFlag(self::CONFIG_PATH_ENABLED);
    }
}