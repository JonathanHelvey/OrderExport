<?php
namespace OneCommerce\OrderExport\Api;

interface OrderExportInterface
{
    /**
     * Export orders
     *
     * @param string $fromDate
     * @param string $toDate
     * @return string
     */
    public function exportOrders($fromDate, $toDate);
}