<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adhesivos</title>
  <script src="https://www.paypal.com/sdk/js?client-id=AVzv9Kjwvbzahk3u8vgMVTWMlLVMY4_2v-Sj4KvzkyruOkDI_a5u11dANEyDDLvyc4nl0TeZhf4IR_HS&currency=USD"></script>
</head>

<body>

<div id="smart-button-container"></div>
      <div style="text-align: center;">
        <div id="paypal-button-container"></div>
      </div>
    </div>
    <script src="https://www.paypal.com/sdk/js?client-id=AVzv9Kjwvbzahk3u8vgMVTWMlLVMY4_2v-Sj4KvzkyruOkDI_a5u11dANEyDDLvyc4nl0TeZhf4IR_HS&currency=USD"></script>
  <!-- Set up a container element for the button -->
  <div id="paypal-button-container"></div>
  <script>
    paypal.Buttons({
      // Sets up the transaction when a payment button is clicked
      createOrder: (data, actions) => {
        return actions.order.create({
          purchase_units: [{
            amount: {
              value: '12.90' // Can also reference a variable or function
            }
          }]
        });
      },
      onCancel: function (data) {
            alert("Pago cancelado");
            console.log(data);
        },
      onApprove: function(data, actions) {
          return actions.order.capture().then(function(orderData) {
            
            // Full available details
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

            // Show a success message within this page, e.g.
            const element = document.getElementById('paypal-button-container');
            element.innerHTML = '';
            element.innerHTML = '<h3>Gracias por su pago</h3>';

            // Or go to another URL:  actions.redirect('thank_you.html');
            
          });
        },
        onError: function(err) {
          console.log(err);
        }
    }).render('#paypal-button-container');
  </script>
    <script>
      paypal.Buttons().render('#paypal-button-conteiner')
    function initPayPalButton() {
      paypal.Buttons({
        style: {
          shape: 'rect',
          color: 'gold',
          layout: 'vertical',
          label: 'paypal',
          
        },

        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"amount":{"currency_code":"USD","value",12.90}}]
          });
        },

        onCancel: function (data) {
            alert("Pago cancelado");
            console.log(data);
        },

        onApprove: function(data, actions) {
          return actions.order.capture().then(function(orderData) {
            
            // Full available details
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

            // Show a success message within this page, e.g.
            const element = document.getElementById('paypal-button-container');
            element.innerHTML = '';
            element.innerHTML = '<h3>Gracias por su pago</h3>';

            // Or go to another URL:  actions.redirect('thank_you.html');
            
          });
        },

        onError: function(err) {
          console.log(err);
        }

      }).render('#paypal-button-container');
    }
    initPayPalButton();
  </script>

</body>

</html>