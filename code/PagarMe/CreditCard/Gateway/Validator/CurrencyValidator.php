<?php

namespace PagarMe\CreditCard\Gateway\Validator;
use Magento\Payment\Gateway\Validator\AbstractValidator;
use Magento\Payment\Gateway\Validator\ResultInterfaceFactory;

class CurrencyValidator extends AbstractValidator
{

  public function __construct(
    ResultInterfaceFactory $resultFactory
  ) {
    parent::__construct($resultFactory);
  }

  public function validate(array $validationSubject)
  {
    return $this->createResult(true, []);
  }
}
