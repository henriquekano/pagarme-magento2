/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
/*browser:true*/
/*global define*/
define(
    [
      'Magento_Payment/js/view/payment/cc-form',
      'ko',
      'jquery',
      'pagarme',
    ],
    function (Component, ko, $, pagarme) {
      'use strict'
      
      return Component.extend({
        defaults: {
          template: 'PagarMe_CreditCard/payment/pagarmecreditcard',
          creditCardHoldername: ko.observable(),
          cardHash: ko.observable()
        },
        getData: function() {
          var cardHash = this.cardHash()
          return {
            'method': this.item.method,
            additional_data: {
              card_hash: cardHash
            }
          }
        },
        pagarmeClient: function() {
          return pagarme.client.connect({
            encryption_key: this.encryptionKey()
          })
        },
        encryptionKey: function() {
          return window.checkoutConfig.payment.pagarme.encryptionKey
        },
        isActive: function() {
          return true
        },
        getCode: function() {
          return 'pagarmecreditcard'
        },
        isShowLegend: function() {
          return true
        },
        //Deprecated
        hasSsCardType: function() {
          return false
        },
        createCardHash: function() {
          var cardExpirationDate = this.formatExpirationDate(
            this.creditCardExpMonth(), this.creditCardExpYear()
          )
          var cardHashPayload = {
            card_number: this.creditCardNumber(),
            card_expiration_date: cardExpirationDate,
            card_cvv: this.creditCardVerificationNumber(),
            card_holder_name: this.creditCardHoldername()
          }

          return this.pagarmeClient()
            .then(client => client.security.encrypt(cardHashPayload))
            .then(card_hash => {
              this.cardHash(card_hash)
            })
        },
        formatExpirationDate: function(monthInteger, yearFourDigits) {
          var month
          if(parseInt(monthInteger) < 10) {
            month = "0" + monthInteger
          } else {
            month = monthInteger
          }

          var year = String(yearFourDigits).substr(2)

          return month + year
        }
      })
    }
)
