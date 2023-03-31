<?php

namespace Geekster\CeneoTrustedReviews\Block\Checkout;

class Success extends \Magento\Sales\Block\Order\Totals
{
    protected $_checkoutSession;
    protected $_helper;
    
    public function __construct(
        \Magento\Checkout\Model\Session $checkoutSession,
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\Registry $registry,
        \Geekster\CeneoTrustedReviews\Helper\Data $helper,
        array $data = []
    ){
        parent::__construct($context, $registry, $data);
        $this->_checkoutSession = $checkoutSession;
        $this->_helper = $helper;
    }

    public function getOrder() {
        return $this->_checkoutSession->getLastRealOrder();
    }

    public function getIncrementId() {
        return $this->getOrder()->getIncrementId();
    }  

    public function getCustomerEmail() {
        return $this->getOrder()->getCustomerEmail();
    } 

    public function getEnabled() {
        return $this->_helper->getEnabled();
    }

    public function getGuid() {
        return $this->_helper->getGuid();
    }

    public function getDaysToSend() {
        return $this->_helper->getDaysToSend();
    }

    public function getTypeId() {
        return $this->_helper->getTypeId();
    }

    public function getProductIds() 
    {
        $ids = '';
        $items = $this->getOrder()->getAllItems();

        foreach($items as $item) {
            if ($item->getProductType() == 'simple') {
                $qty = number_format($item->getQtyOrdered(), 0);
                if ($this->getTypeId() == 'sku') {
                    $ids.= str_repeat('#'.$item->getSku(), $qty);
                } else {
                    $ids.= str_repeat('#'.$item->getProductId(), $qty);
                }
            }
        }

        return $ids;
    }   
}
