<?php

namespace Magento\Braintree\Gateway\Response;

use Magento\Payment\Gateway\Response\HandlerInterface;
use Magento\Sales\Api\Data\OrderPaymentInterface;

/**
 *Response Handler is the component of Magento payment provider gateway, that processes payment provider response. Typically, the response requires one of the following actions:

    Modify the order status
    Save information that was provided in a transaction response
    Send an email

The response handler only modifies the order state, based on the payment gateway response. It does not perform any other required actions.
 */
class CreditCardDetailsHandler implements HandlerInterface
{
  public function __construct()
  {
  }
  
  public function handle(array $handlingSubject, array $response)
  {
    var_dump('ccDetail handler');
    var_dump($handlingSubject);
    die();
  }
}
