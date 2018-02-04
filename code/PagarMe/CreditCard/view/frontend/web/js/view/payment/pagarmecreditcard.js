/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
/*browser:true*/
/*global define*/
define(
    [
    'uiComponent',
    'Magento_Checkout/js/model/payment/renderer-list'
    ],
    function (
      Component,
      rendererList
      ) {
      'use strict';
      console.log("yaaaaaaaaaaaay");
      rendererList.push(
          {
            type: 'pagarmecreditcard',
            component: 'PagarMe_CreditCard/js/view/payment/method-renderer/pagarmecreditcard-method'
          }
          );
      /** Add view logic here if needed */
      return Component.extend({});
    }
    );
