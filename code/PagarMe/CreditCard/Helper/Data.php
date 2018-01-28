<?php

namespace PagarMe\CreditCard\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{

  const XML_ROOT_PATH = 'payment/pagarme/';

  public function getConfigValue($field, $storeId = null)
  {
    return $this->scopeConfig->getValue(
      $field, ScopeInterface::SCOPE_STORE, $storeId
    );
  }

}

