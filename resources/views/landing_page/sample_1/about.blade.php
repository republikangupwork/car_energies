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
                            About Car Energies
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
                        <img src="{{ asset('images/sample_1/xray3.jpg') }}" alt="" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6 ">
                    <div class="about-content">
                        <h2 class="display-5">
                            About Car Energies and Julia
                        </h2>
                        <p>At CarEnergies.com, we specialize in analyzing the energies of cars, motorcycles, SUV, and trucks. Julia is very sensitive to the energies of objects and senses the defective or broken parts of vehicles. She has helped people to choose best used vehicle and stay away from buying lemons. She can help you too.</p>
                        <p>Julia B. is very sensitive to subtle energies of objects, animals and people. She consumes energy doing this evaluation. She can evaluate a maximum of 100 automobiles a day. And for now, she will check up to 3 cars per person free of charge (and no more).
Please note that this is for your personal use, and there are no guarantees that the car she approves, will be completely trouble free. But she has a proven track record of being %95 accurate in her evaluation..</p>
<p>Julia’s  service can save you a lot of time taking the car you are considering buying to a mechanic, if at all possible. What better way to check the car from deep within when you are visiting a used car dealer, a private seller or a pre-auction car lot.</p>


                       <p><strong>Save money and time</strong></p>

<p><strong>Don't buy another lemon</strong></p>
<p>purchasing the right used car can be challenging, time consuming and quite a headache. And still there is no guarantee that you haven't picked a lemon</p>
<p>Where else can someone look at the photos of a car and see the failed arts, hidden problems, covered up headaches?</p>
<p>Julia can spot the troubles, accidents, damaged auto parts on cars, automobiles, trucks, motorcycles even bicycles. Even the best mechanics with the latest technologies who can check  a used car and give you a report of list of possible repairs can not detect the parts that are working at the moment of examination, but are done, used up and ready and about to break at any moment.
</p>

                        
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