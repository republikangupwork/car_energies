@include('landing_page.header')
<
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
          <form class="needs-validation" novalidate>


        
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
            <!-- <div class="d-block my-3">
              <div class="custom-control custom-radio">
               
              </div>
            </div> -->
             <!--  <div class="custom-control custom-radio">
                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="debit">Debit card</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="paypal">Paypal</label>
              </div> -->
            
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">Name on card</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                <small class="text-muted">Full name as displayed on card</small>
                <div class="invalid-feedback">
                  Name on card is required
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">Credit card number</label>
                <input type="text" class="form-control" id="cc-number" placeholder="" required>
                <div class="invalid-feedback">
                  Credit card number is required
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Expiration Date</label>
                <select class="custom-select d-block w-100" id="year" required style="height: 50px;">
                  <option value="">Year</option>
                  <option>2019</option>
                </select>
                <div class="invalid-feedback">
                  Expiration date required
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-expiration"></label>
                <select class="custom-select d-block w-100" id="year" required style="height: 50px;margin-top: 8px">
                  <option value="">Month</option>
                  <option>01</option>
                </select>
                <div class="invalid-feedback">
                  Expiration date required
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                <div class="invalid-feedback">
                  Security code required
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-success btn-lg btn-block" type="submit">Continue to checkout</button>
          </form>
        </div>
      </div>
    </div>

</section>

@include('landing_page.footer')
      <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
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

