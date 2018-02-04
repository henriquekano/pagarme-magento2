<?php

namespace PagarMe\CreditCard\Gateway\Config;
use Magento\Payment\Gateway\Config\ValueHandlerInterface;

class CanCancelHandler implements ValueHandlerInterface
{

  public function __construct() {}
  
  public function handle(array $subject, $storeId = null)
  {
    return false;
  }
}
