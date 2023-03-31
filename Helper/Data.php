<?php
 
namespace Geekster\CeneoTrustedReviews\Helper;
 
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    public function getConfig($path)
    {
        return $this->scopeConfig->getValue(
            $path,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    public function getEnabled() {
        return $this->getConfig('ceneotrustedreviews/general/enable');
    }

    public function getGuid() {
        return $this->getConfig('ceneotrustedreviews/settings/guid');
    }

    public function getDaysToSend() {
        return $this->getConfig('ceneotrustedreviews/settings/days');
    }    

    public function getTypeId() {
        return $this->getConfig('ceneotrustedreviews/settings/type_product_id');
    }
}
