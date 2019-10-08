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
                        <p>Let us evaluate the energies of your next car and help you choose the best car for your buck</p>
                    </div>
                </div>

                <div class="col-lg-2 ml-lg-auto col-md-2">

                    <!-- Links -->
                    <ul class="footer-link list-unstyled ml-0 justify-content-end">
                         <li>
                            <a href="{{ url('/') }}" class="text-white">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('services/') }}" class="text-white">
                                Services
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('benefits/') }}" class="text-white">
                                Benefits
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4">

                    <!-- Links -->
                    <ul class="footer-link list-unstyled ml-0 justify-content-end">
                        <li>
                            <a href="{{ url('submit/') }}" class="text-white">
                                Submit
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('about/') }}" class="text-white">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-white">
                                Contact Us
                            </a>
                        </li>
                        {{-- <li>
                            <i class="fa fa-mobile color-green"></i> +345-345456
                        </li>
                        <li>
                            <i class="fa fa-location-arrow color-green"></i> California, USA
                        </li>
                        <li>
                            <i class="fa fa-globe color-green"></i> www.carenergies.com
                        </li> --}}
                    </ul>
                </div>
            </div>
            <!-- / .row -->

            <div class="row justify-content-md-center footer-copy">
                <div class="col-md-4">
                    <table width="135" border="0" cellpadding="2" cellspacing="0" title="Click to Verify - This site chose Symantec SSL for secure e-commerce and confidential communications."><tr><td width="135" align="center" valign="top"><script type="text/javascript" src="https://seal.websecurity.norton.com/getseal?host_name=https://www.carenergies.com/&amp;size=L&amp;use_flash=NO&amp;use_transparent=No&amp;lang=en"></script><br /><a href="https://www.websecurity.symantec.com/ssl-certificate" target="_blank"  style="color:#000000; text-decoration:none; font:bold 10px verdana,sans-serif; letter-spacing:.5px;text-align:center; margin:0px; padding:0px;"> ABOUT SSL CERTIFICATES</a></td></tr></table>
                </div>
                <div class="col-lg-8 col-md-6 col-sm-6 text-center">
                    <p class="lead text-white-50">&copy; Copyright 2019 | Design and Developed by Car Energies </p>
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
    {{-- <script src="{{ asset('js/sample_1/theme.js') }}"></script> --}}
    <script src="{{ asset('js/sample_1/aos.js') }}"></script>
    {{-- <script src="../../assets/js/vendor/holder.min.js"></script> --}}
<!--     <script src="{{ asset('js/sample_1/countrystatecity.js') }}"></script> -->


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
            $('#logo').show(50);
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