<?php
declare(strict_types=1);

namespace Geekster\CeneoTrustedReviews\Model\Config\Source;
 
class TypeProductId implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * @return array
     */
    public function toOptionArray(): array
    {
        return [
            ['value' => 'id',  'label' => __('ID')],
            ['value' => 'sku', 'label' => __('SKU')]
        ];
    }
}
