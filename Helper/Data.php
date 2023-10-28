<?php

namespace Geekster\CeneoTrustedReviews\Helper;
 
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * @param string $path
     * @return mixed
     */
    public function getConfig(string $path): mixed
    {
        return $this->scopeConfig->getValue(
            $path,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return bool
     */ 
    public function getEnabled(): bool 
    {
        return $this->getConfig('ceneotrustedreviews/general/enable');
    }

    /**
     * @return string
     */  
    public function getGuid(): string 
    {
        return $this->getConfig('ceneotrustedreviews/settings/guid');
    }

    /**
     * @return int
     */ 
    public function getDaysToSend(): int 
    {
        return $this->getConfig('ceneotrustedreviews/settings/days');
    }    

    /**
     * @return string
     */  
    public function getTypeId(): string 
    {
        return $this->getConfig('ceneotrustedreviews/settings/type_product_id');
    }
}
