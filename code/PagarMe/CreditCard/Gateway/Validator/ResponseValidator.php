<?php

namespace PagarMe\CreditCard\Gateway\Validator;

use Magento\Payment\Gateway\Validator\AbstractValidator;

/**
 *Response Validator is a component of the Magento payment provider gateway that performs gateway response verification. This may include low level data formatting, security verification, and even execution of some business logic required by the store configuration.
 */
class ResponseValidator extends AbstractValidator
{
  public function validate(array $validationSubject)
  {
    var_dump('response validator');
    die();
   $statements = [
     [
       true,
        __('Currency doesn\'t match.')
      ]
    ];

   $isValid = true;
   $fails = [];
    foreach ($statements as $statementResult) {
      if (!$statementResult[0]) {
        $isValid = false;
        $fails[] = $statementResult[1];
      }
    }

    return $this->createResult($isValid, $fails);
  }
}
