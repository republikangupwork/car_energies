    <!-- FOOTER
    ================================================== -->
    <footer class="top-padding bg-dark">
        <!--Content -->
        <div class="container">
            <div class="row align-self-center">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-widget">
                        <!-- Brand -->
                        <a href="#" class="footer-brand text-white">
                            Car Energies
                        </a>
                        <p>In expedita sapiente cumque enim dicta similique, animi adipisci quia et quo quod numquam, veniam eligendi reprehenderit .</p>
                    </div>
                </div>

                <div class="col-lg-2 ml-lg-auto col-md-2">

                    <!-- Links -->
                    <ul class="footer-link list-unstyled ml-0 justify-content-end">
                        <li>
                            <a href="{{ url('Sample_1/Services/') }}" class="text-white">
                                Services
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-white">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('Sample_1/Benefits/') }}" class="text-white">
                                Benefits
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4">

                    <!-- Links -->
                    <ul class="footer-link list-unstyled ml-0 justify-content-end">
                        <li>
                            <i class="fa fa-mobile color-green"></i> +345-345456
                        </li>
                        <li>
                            <i class="fa fa-location-arrow color-green"></i> California, USA
                        </li>
                        <li>
                            <i class="fa fa-globe color-green"></i> www.carenergies.com
                        </li>
                    </ul>
                </div>
            </div>
            <!-- / .row -->

            <div class="row justify-content-md-center footer-copy">
                <div class="col-lg-8 col-md-6 col-sm-6 text-center">
                    <p class="lead text-white-50">&copy; Copyright 2019 | Design and Developed by Unciano </p>
                </div>
            </div>
        </div>
        <!-- / .container -->
    </footer>

    <!-- JAVASCRIPT
    ================================================== -->
    <!-- Global JS -->
    <script src="{{ asset('lib/sample_1/jquery/jquery.js') }}"></script>
    <script src="{{ asset('lib/sample_1/bootstrap/bootstrap.bundle.min.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ asset('js/sample_1/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/sample_1/ajax-contact.js') }}"></script>

    <!-- Theme JS -->
    <script src="{{ asset('js/sample_1/theme.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

</body>

</html>
<script>
  AOS.init();
</script>
<script>
    var prevScrollpos = window.pageYOffset;
window.onscroll = function() {

  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    $('#logo').show(500);
  } else {
       $('#logo').hide(50);
  }
  prevScrollpos = currentScrollPos;
}
$(document).on("click", '[data-toggle="lightbox"]', function(event) {
  event.preventDefault();
  $(this).ekkoLightbox();
});
</script>