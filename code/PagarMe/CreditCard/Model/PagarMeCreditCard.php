<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace PagarMe\CreditCard\Model;



/**
 * Pay In Store payment method model
 */
class PagarMeCreditCard extends \Magento\Payment\Model\Method\AbstractMethod
{

    const METHOD_CODE = 'pagarmecreditcard';

    /**
     * Payment code
     *
     * @var string
     */
    protected $_code = self::METHOD_CODE;

    /**
     * Availability option
     *
     * @var bool
     */
    protected $_isOffline = false;


  

}
