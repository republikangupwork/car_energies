@include('landing_page.header')
<style>
  .StripeElement {
  box-sizing: border-box;

  height: 40px;

  padding: 10px 12px;

  border: 1px solid transparent;
  border-radius: 4px;
  background-color: white;

  box-shadow: 0 1px 3px 0 #e6ebf1;
  -webkit-transition: box-shadow 150ms ease;
  transition: box-shadow 150ms ease;
}

.StripeElement--focus {
  box-shadow: 0 1px 3px 0 #cfd7df;
}

.StripeElement--invalid {
  border-color: #fa755a;
}

.StripeElement--webkit-autofill {
  background-color: #fefde5 !important;
}
.__PrivateStripeElement{
  width: 800px !important;
}
</style>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 data-aos="fade-right" class="lg-title section-title">
                    <span style="font-weight: bold;"  class="color-green">Checkout</span> 
                </h2>
            </div>
        </div>
    </div>


<section class="section">
    <div class="container">
            <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your cart</span>
            <span class="badge badge-secondary badge-pill">3</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">1 TRUCK EVALUATION</h6>
                <small class="text-muted">1 Evaluation of truck online assesment</small>
              </div>
              <span class="text-muted">$1.99</span>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Promo code</h6>
                <small>1FREETRUCK</small>
              </div>
              <span class="text-success">-$1.99</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (USD)</span>
              <strong>$0.00</strong>
            </li>
          </ul>

          <form class="card p-2">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Promo code">
              <div class="input-group-append">
                <button type="submit" class="btn btn-success">Redeem</button>
              </div>
            </div>
          </form>
        </div>

        <div class="col-md-8 order-md-1">
          <form action="{{ url('/checkout') }}" method="post" id="payment-form">
            {{ csrf_field() }}

        
         <!--    <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="same-address">
              <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="save-info">
              <label class="custom-control-label" for="save-info">Save this information for next time</label>
            </div>
            <hr class="mb-4"> -->

            <h4 class="mb-3">Payment</h4>
            <div class="card mb-3">
                  <div class="card-body ">
                        <div class="custom-control custom-radio">
                        <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                        <label class="custom-control-label" for="credit">Paypal</label>
                        <img src="{{ asset('images/sample_1/checkout/paypal.png') }}" alt=""  class="" style="height: 35px;margin-left: 125px">
                    </div>
                  </div>
                </div>
             <div class="card mb-3">
                  <div class="card-body ">
                        <div class="custom-control custom-radio">
                        <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                        <label class="custom-control-label" for="credit">Credit card</label>
                        <img src="{{ asset('images/sample_1/checkout/logo.jpg') }}" alt=""  class="" style="height: 35px;margin-left: 100px">
                    </div>
                  </div>
                </div>            
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">Name on card</label>
                <input type="text" class="form-control" id="cc-name" name="cc_name" placeholder="" required>
                <small class="text-muted">Full name as displayed on card</small>
                <div class="invalid-feedback">
                  Name on card is required
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">Credit card number</label>
                <input type="text" class="form-control" id="cc-number" name="cc-number" placeholder="" required>
                <div class="invalid-feedback">
                  Credit card number is required
                </div>
              </div>
            </div>
            <div class="row">
   


             
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Expiration Date</label>
                <select class="custom-select d-block w-100" id="year" name="year" required style="height: 50px;">
                  <option value="">Year</option>
                  <option>2019</option>
                </select>
                <div class="invalid-feedback">
                  Expiration date required
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-expiration"></label>
                <select class="custom-select d-block w-100" id="month" name="month" required style="height: 50px;margin-top: 8px">
                  <option value="">Month</option>
                  <option>12</option>
                </select>
                <div class="invalid-feedback">
                  Expiration date required
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" name="cc-cvv" placeholder="" required>
                <div class="invalid-feedback">
                  Security code required
                </div>
              </div>
               </div>
               <hr class="mb-4">
            <button class="btn btn-success btn-lg btn-block" type="submit">Continue to checkout</button>
            </div>
            
          </form>
        </div>
      </div>
    </div>

   

</section>

@include('landing_page.footer')
      <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        var stripe = Stripe('pk_test_wrvJOlwyyqQew5S1wlk8n3c90083TVuaIs');
        var elements = stripe.elements();

        // Custom styling can be passed to options when creating an Element.
var style = {
  base: {
    // Add your base input styles here. For example:
    fontSize: '16px',
    color: "#32325d",
  }
};

// Create an instance of the card Element.
var card = elements.create('card', {style: style});

// Add an instance of the card Element into the `card-element` <div>.
card.mount('#card-element');

card.addEventListener('change', function(event) {
  var displayError = document.getElementById('card-errors');
  if (event.error) {
    displayError.textContent = event.error.message;
  } else {
    displayError.textContent = '';
  }
});

var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
  event.preventDefault();

  stripe.createToken(card).then(function(result) {
    if (result.error) {
      // Inform the customer that there was an error.
      var errorElement = document.getElementById('card-errors');
      errorElement.textContent = result.error.message;
    } else {
      // Send the token to your server.
      stripeTokenHandler(result.token);
    }
  });
});

function stripeTokenHandler(token) {
  console.log(token);
  // Insert the token ID into the form so it gets submitted to the server
  var form = document.getElementById('payment-form');
  var hiddenInput = document.createElement('input');
  hiddenInput.setAttribute('type', 'hidden');
  hiddenInput.setAttribute('name', 'stripeToken');
  hiddenInput.setAttribute('value', token.id);
  form.appendChild(hiddenInput);

  // Submit the form
  form.submit();
}






















      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
      </script>

