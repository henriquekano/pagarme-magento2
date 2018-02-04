<?php

namespace PagarMe\CreditCard\Gateway\Command;
use Magento\Payment\Gateway\CommandInterface;

class AuthorizeCommand implements   CommandInterface
{

  public function __construct()
  {
  }
  
  public function execute(array $commandSubject)
  {
    var_dump('Authorize command');
    var_dump($commandSubject);
    die();
  }
}
