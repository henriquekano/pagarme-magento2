<?php

namespace PagarMe\CreditCard\Model\Ui;

use \Magento\Framework\App\Config\ScopeConfigInterface as ScopeConfig;
use \Magento\Checkout\Model\ConfigProviderInterface;
use \Magento\Framework\Encryption\EncryptorInterface;

class ConfigProvider implements ConfigProviderInterface
{
  protected $scopeConfig;
  protected $encryptor;

  public function __construct(
    ScopeConfig $scopeConfig,
    EncryptorInterface $encryptor
  ) {
    $this->scopeConfig = $scopeConfig;
    $this->encryptor = $encryptor;
  }

  public function getConfig()
  {
    $encryptedEncryptionKey = $this->scopeConfig
      ->getValue('payment/pagarmecreditcard/encryption_key');
    return [
      'payment' => [
        'pagarme' => [
          'encryptionKey' => $this->encryptor
            ->decrypt($encryptedEncryptionKey),
          'creditcard' => [
          ]
        ]
      ]
    ];
  }
}
                        
