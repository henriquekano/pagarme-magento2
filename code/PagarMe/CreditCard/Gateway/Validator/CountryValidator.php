<?php

namespace PagarMe\CreditCard\Gateway\Validator;
use Magento\Payment\Gateway\Validator\AbstractValidator;

class CountryValidator extends AbstractValidator
{

	public function __construct() {}

	public function validate(array $validationSubject)
	{
		return $this->createResult(true, []);
	}
}