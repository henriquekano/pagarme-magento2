<?php

namespace PagarMe\CreditCard\Gateway\Http\Client;

use Magento\Payment\Gateway\Http\ClientException;
use Magento\Payment\Gateway\Http\ClientInterface;
use Magento\Payment\Gateway\Http\TransferInterface;
use Magento\Payment\Model\Method\Logger;
use Psr\Log\LoggerInterface;

class TransactionSale implements ClientInterface
{

  private $logger;
  private $loggerInterface;

  public function __construct(
    LoggerInterface $logger,
    Logger $customLogger
  ) {
    $this->logger = $logger;
    $this->loggerInterface = $loggerInterface;
  }

  public public function placeRequest(TransferInterface $transferObject)
  {
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
      $this->logger->critical($message);
      throw new ClientException($message);
    } finally {
      $log['response'] = (array) $response['object'];
      $this->customLogger->debug($log);
    }
    return $response;
  }

  private function process($data)
  {
  }
}
