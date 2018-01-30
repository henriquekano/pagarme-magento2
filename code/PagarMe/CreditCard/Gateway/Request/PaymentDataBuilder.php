<?php

namespace PagarMe\CreditCard\Gateway\Request;

use PagarMe\CreditCard\Observer\PassFrontendDataToBackendObserver;
use Magento\Payment\Gateway\Request\BuilderInterface;
use Magento\Payment\Helper\Formatter;

class PaymentDataBuilder implements BuilderInterface
{
  use Formatter;
  
  public function __construct(Config $config, SubjectReader $subjectReader)
  {
    $this->config = $config;
    $this->subjectReader = $subjectReader;
  }

  public function build(array $buildSubject)
  {
    $result = [
      'card_hash' => $payment->getAdditionalInformation(
        PassFrontendDataToBackendObserver::FRONTEND_CARD_HASH_IDENTIFIER_KEY
      )
    ];

    return $result;
  }
}

