<?php

namespace PagarMe\CreditCard\Observer;

use \Magento\Quote\Api\Data\PaymentInterface;
use \Magento\Payment\Observer\AbstractDataAssignObserver;
use \Magento\Framework\Event\Observer;

class PassFrontendDataToBackendObserver extends AbstractDataAssignObserver
{
    const FRONTEND_CARD_HASH_IDENTIFIER_KEY = 'card_hash';

    protected $additionalInformationList = [
        self::FRONTEND_CARD_HASH_IDENTIFIER_KEY,
    ];

    public function execute(Observer $observer)
    {

        $data = $this->readDataArgument($observer);

        $additionalData = $data->getData(PaymentInterface::KEY_ADDITIONAL_DATA);
        if (!is_array($additionalData)) {
            return;
        }

        $paymentInfo = $this->readPaymentModelArgument($observer);

        foreach ($this->additionalInformationList as $additionalInformationKey) {
            if (isset($additionalData[$additionalInformationKey])) {
                $paymentInfo->setAdditionalInformation(
                    $additionalInformationKey,
                    $additionalData[$additionalInformationKey]
                );
            }
        }
    }
}

