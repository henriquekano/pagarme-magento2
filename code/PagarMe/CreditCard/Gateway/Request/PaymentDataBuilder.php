<?php

namespace PagarMe\CreditCard\Gateway\Request;

use PagarMe\CreditCard\Observer\PassFrontendDataToBackendObserver;
use Magento\Payment\Gateway\Request\BuilderInterface;
use Magento\Payment\Helper\Formatter;

class PaymentDataBuilder implements BuilderInterface
{
  use Formatter;
  
  public function __construct()
  {
  }

  public function build(array $buildSubject)
  {
    var_dump($buildSubject);
    var_dump('builder');
    die();
    $result = [
      'card_hash' => ''
    ];

    return $result;
  }
}

