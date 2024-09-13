<?php
namespace OneCommerce\OrderExport\Block\Adminhtml\Export;

use Magento\Backend\Block\Template;
use Magento\Backend\Block\Template\Context;

class Button extends Template
{
    /**
     * @param Context $context
     * @param array $data
     */
    public function __construct(
        Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

    /**
     * @return string
     */
    public function getExportUrl()
    {
        return $this->getUrl('orderexport/export/process');
    }
}