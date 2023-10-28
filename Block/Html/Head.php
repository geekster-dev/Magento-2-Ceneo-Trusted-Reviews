<?php
declare(strict_types=1);

namespace Geekster\CeneoTrustedReviews\Block\Html;

use Magento\Framework\View\Element\Template\Context;
use Geekster\CeneoTrustedReviews\Helper\Data;

class Head extends \Magento\Framework\View\Element\Template
{
    /**
     * @var Data
     */
    protected $_helper;

    /**
     * @param Context $context
     * @param Data $helper
     * @param array $data
     */
    public function __construct(
        Context $context,
        Data $helper,
        array $data = []
    ){
        parent::__construct($context, $data);
        $this->_helper = $helper;
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
}
