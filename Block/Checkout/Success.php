<?php
declare(strict_types=1);

namespace Geekster\CeneoTrustedReviews\Block\Checkout;

use Magento\Checkout\Model\Session;
use Magento\Framework\View\Element\Template\Context;
use Magento\Framework\Registry;
use Magento\Sales\Model\Order;
use Magento\Sales\Block\Order\Totals;
use Geekster\CeneoTrustedReviews\Helper\Data;

class Success extends Totals
{
    /**
     * @var Session
     */
    protected $_checkoutSession;

    /**
     * @var Data
     */
    protected $_helper;
    
    /**
     * @param Session $checkoutSession
     * @param Context $context
     * @param Registry $registry
     * @param Data $helper
     * @param array $data
     */
    public function __construct(
        Session $checkoutSession,
        Context $context,
        Registry $registry,
        Data $helper,
        array $data = []
    ){
        parent::__construct($context, $registry, $data);
        $this->_checkoutSession = $checkoutSession;
        $this->_helper = $helper;
    }

    /**
     * @return Order
     */
    public function getOrder(): Order 
    {
        return $this->_checkoutSession->getLastRealOrder();
    }

    /**
     * @return string
     */
    public function getCurrencyCode(): string 
    {
        return $this->getOrder()->getOrderCurrencyCode();
    }    

    /**
     * @return string
     */
    public function getIncrementId(): string 
    {
        return $this->getOrder()->getIncrementId();
    }  

    /**
     * @return string
     */
    public function getCustomerEmail(): string 
    {
        return $this->getOrder()->getCustomerEmail();
    } 

    /**
     * @return string
     */
    public function getAmount(): string 
    {
        $amount = $this->getOrder()->getGrandTotal();
        return number_format((float)$amount, 2, '.', '');
    }

    /**
     * @return bool
     */  
    public function getEnabled(): bool 
    {
        return $this->_helper->getEnabled();
    }

    /**
     * @return string
     */
    public function getGuid(): string 
    {
        return $this->_helper->getGuid();
    }

    /**
     * @return int
     */  
    public function getDaysToSend(): int 
    {
        return $this->_helper->getDaysToSend();
    }

    /**
     * @return string
     */
    public function getTypeId(): string 
    {
        return $this->_helper->getTypeId();
    }

    /**
     * @return string
     */
    public function getShopProducts(): string 
    {
        $data = '';
        $typeId = '';
        $price = '';
        $items = $this->getOrder()->getAllItems();

        foreach($items as $item) 
        {
            if ($item->getProductType() === 'configurable') continue;
            $qty   = number_format((int)$item->getQtyOrdered(), 0);
            $price = number_format((float)$item->getProduct()->getFinalPrice(), 2, '.','');
            $typeId = $this->getTypeId() === 'sku' ? $item->getSku() : $item->getProductId();

            $data.= "{ id: '".$typeId."'".
                    ", price: ".$price.
                    ", quantity: ".$qty.
                    ", currency: '".$this->getCurrencyCode()."'".
                    " },";
        }

        return rtrim($data, ',');
    }   
}
