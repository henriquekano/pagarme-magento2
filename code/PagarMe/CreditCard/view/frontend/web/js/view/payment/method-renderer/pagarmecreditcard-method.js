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
      'Magento_Checkout/js/action/place-order',
      'Magento_Checkout/js/model/full-screen-loader',
      'Magento_Checkout/js/model/payment/additional-validators',
      'Magento_Payment/js/model/credit-card-validation/validator',
    ],
    function (Component, $) {
      'use strict';

      var ey = Component.extend({
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
      });
      console.log(ey)
      return ey
    }
);
