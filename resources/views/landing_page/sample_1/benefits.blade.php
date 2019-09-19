@include('landing_page.sample_1.header')

        <section class="section section-top section-full" style="max-height: 50vh;">

        <!-- Cover -->
        <div class="bg-cover" style="background-image: url({{ asset('images/sample_1/car2.png') }});"></div>

        <!-- Overlay -->
        <div class="bg-overlay"></div>
        <!-- Content -->
        <div class="container">
            <div class="row justify-content-start align-items-center">
                <div class="col-md-12">
                    <div class="banner-content">
                        
                      

                        <!-- Heading -->
                        <h1 class="text-white text-center mb-4 display-4 font-weight-bold">
                            Your Benefits
                        </h1>

                        <!-- Subheading -->
                       <!--  <p class="lead text-white text-center mb-5">
                            For a limited time only, Julia will check the energy of the car you are considering to buy free of charge!.
                        </p> -->

                        <!-- Button -->
                       <!--  <p class="text-center mb-0" >
                            <a href="#" target="_blank" class="btn btn-primary ">
                                Contact Now
                            </a>
                        </p> -->
                    </div>
                </div>
            </div>
            <!-- / .row -->
        </div>
        <!-- / .container -->
    </section>


        <!-- About Car Energies
    ================================================== -->

        <section class="section " id="about">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="{{ asset('images/sample_1/family.png') }}" alt="" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6 ">
                    <div class="about-content">
                        <h2 class="display-5">
                            Don’t buy another lemon
                        </h2>
                        <p>Avoid being ripped off by a crook mechanic, that try to convince you of unnecessary and costly repairs! Know if you really need that!</p>


                       <p><strong>Use our services before you switch your mechanic and choosing a new mechanic.</strong></p>


<p>Bid with confidence in person or online automobile auctions.</p>
<p>Find gems that everybody else is overlooking (including possibly the car salesman), save thousands.</p>
<p>Increase your profits if you are in the business of buying and selling used cars, motorcycles, boats. </p>
<p>Free/easy/fast way to know the condition of your own vehicle.</p>
<p>Check for possible problems before you buy that used car.</p>
<p>A new best way to check used car mechanically from deep within</p>

                        
                        <a href="#" class="btn btn-primary">TRY NOW FOR FREE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



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
                                Portfolio
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
                            <i class="fa fa-mobile"></i> +345-345456
                        </li>
                        <li>
                            <i class="fa fa-location-arrow"></i> California, USA
                        </li>
                        <li>
                            <i class="fa fa-globe"></i> www.carenergies.com
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