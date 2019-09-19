@include('landing_page.sample_1.header')

        <section class="section section-top section-full" style="max-height: 50vh;">

        <!-- Cover -->
        <div class="bg-cover" style="background-image: url({{ asset('images/sample_1/our-services.jpg') }} );"></div>

        <!-- Overlay -->
        <div class="bg-overlay"></div>
        <!-- Content -->
        <div class="container">
            <div class="row justify-content-start align-items-center">
                <div class="col-md-12">
                    <div class="banner-content">
                        
                      

                        <!-- Heading -->
                        <h1 class="text-white text-center mb-4 display-4 font-weight-bold">
                            Our Services
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
                <div class="col-lg-1"></div>
                <div class="col-lg-5">
                    <div class="about-img">
                        <img src="{{ asset('images/sample_1/business-woman.png') }}" alt="" class="" height="500">
                    </div>
                </div>

                <div class="col-lg-6 ">
                    <div class="about-content">
                        <h2 class="display-5 section-title">
                            What Do You Expect From Us
                        </h2>
                        <p class="section-description">For a limited time only, Julia will check the energy of the car you are considering to buy free of charge!.</p>
                        <p class="section-description">Fill out a simple table with your name email address, your City, State and Country.
 and upload 4 recent photos of the car in the locations shown in here ( one from front of the car (hood up), one from behind the car and one from each side of the car, doors open) See the examples shown here.The website will generate a case number for each car you upload photos.</p>
 <p class="section-description">Julia will check the cars energy and will list existing potential problems that you may encounter if you decide to purchase the car. And will send the report to you in an email.In most cases, it will take maximum 24 hours, possibly much sooner.</p>
 <p class="section-description">Please note that this is for your personal use, and there are no guarantees that the car she approves, will be completely trouble free. But she has a proven track record of being %95 accurate in her evaluation.</p>
 <p class="section-description">Have Julia’s repot in your hand when you are going to the auction to buy that SUV, truck or automobile.</p>
 <p class="section-description">Imagine going to the seller knowing not only the condition of all parts of the vehicle, but also some trouble spots that even the seller may honestly not know. Even if you do not purchase it, the seller now can know the invaluable information on the coming future problems on the vehicle.</p>





                        
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