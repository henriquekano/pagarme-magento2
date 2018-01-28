/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
/*browser:true*/
/*global define*/
define(
    [
      'Magento_Payment/js/view/payment/cc-form',
      'jquery',
      'pagarme',
    ],
    function (Component, $, pagarme) {
      'use strict';

      return Component.extend({
        defaults: {
          template: 'PagarMe_CreditCard/payment/pagarmecreditcard',
          creditCardHoldername: '',
          cardHash: ''
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
        }
      })
    }
)
