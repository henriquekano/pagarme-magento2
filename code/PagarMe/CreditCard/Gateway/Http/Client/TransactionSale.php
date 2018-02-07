<?php

namespace PagarMe\CreditCard\Gateway\Http\Client;

use Magento\Payment\Gateway\Http\ClientException;
use Magento\Payment\Gateway\Http\ClientInterface;
use Magento\Payment\Gateway\Http\TransferInterface;

class TransactionSale implements ClientInterface
{

  private $logger;
  private $loggerInterface;

  public function __construct(
  ) {
  }

  public function placeRequest(TransferInterface $transferObject)
  {
    var_dump('tx sale');
    die();

    $data = $transferObject->getBody();
    $log = [
      'request' => $data,
      'client' => static::class
    ];
    $response['object'] = [];
    try {
      $response['object'] = $this->process($data);
    } catch (\Exception $e) {
      $message = __($e->getMessage() ?: 'Sorry, but something went wrong');
      throw new ClientException($message);
    } finally {
      $log['response'] = (array) $response['object'];
    }
    return $response;
  }

  private function process($data)
  {
  }
}
