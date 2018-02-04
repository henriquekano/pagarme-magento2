<?php

namespace PagarMe\CreditCard\Gateway\Http;

use Magento\Payment\Gateway\Http\TransferFactoryInterface;
use Magento\Payment\Gateway\Http\TransferBuilder;
use Magento\Framework\HTTP\Client\Curl;

class TransferFactory implements TransferFactoryInterface
{

  private $transferBuilder;

  public function __construct(TransferBuilder $transferBuilder)
  {
    $this->transferBuilder = $transferBuilder;
  }

  public function create(array $request)
  {
    var_dump('transfer factory');
    var_dump($request);
    die();    
    return $this->transferBuilder
      ->setMethod(Curl::POST)
      ->setHeaders(['Content-Type' => 'application/json'])
      ->setBody(json_encode($request))
      ->setAuthUsername('some api key')
      ->setAuthPassword('x')
      ->setUri('https://api.pagar.me/1/transactions')
      ->build();
  }
}