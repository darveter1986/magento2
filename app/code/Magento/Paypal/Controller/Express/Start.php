<?php
/**
 *
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Paypal\Controller\Express;

class Start extends \Magento\Paypal\Controller\Express\AbstractExpress\Start
{
    /**
     * Config mode type
     *
     * @var string
     */
    protected $_configType = \Magento\Paypal\Model\Config::class;

    /**
     * Config method type
     *
     * @var string
     */
    protected $_configMethod = \Magento\Paypal\Model\Config::METHOD_WPP_EXPRESS;

    /**
     * Checkout mode type
     *
     * @var string
     */
    protected $_checkoutType = \Magento\Paypal\Model\Express\Checkout::class;
}
