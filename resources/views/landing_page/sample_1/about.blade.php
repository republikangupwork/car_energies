@include('landing_page.sample_1.header')

        <section class="section section-top section-full" style="max-height: 50vh;">

        <!-- Cover -->
        <div class="bg-cover" style="background-image: url({{ asset('images/sample_1/about-us.jpg') }});"></div>

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
                        <h2 class="display-5 section-title">
                            About Car Energies and Julia
                        </h2>
                        <p class="section-description">Julia B. is very sensitive to subtle energies of objects, animals and people. She consumes energy doing this evaluation. She can evaluate a maximum of 100 automobiles a day. And for now, she will check up to 3 cars per person free of charge (and no more).
Please note that this is for your personal use, and there are no guarantees that the car she approves, will be completely trouble free. But she has a proven track record of being %95 accurate in her evaluation..</p>
<p class="section-description">Julia’s  service can save you a lot of time taking the car you are considering buying to a mechanic, if at all possible. What better way to check the car from deep within when you are visiting a used car dealer, a private seller or a pre-auction car lot.</p>


                       <p class="section-description"><strong>Save money and time</strong></p>

<p class="section-description"><strong>Don't buy another lemon</strong></p>
<p class="section-description">purchasing the right used car can be challenging, time consuming and quite a headache. And still there is no guarantee that you haven't picked a lemon</p>
<p class="section-description">Where else can someone look at the photos of a car and see the failed arts, hidden problems, covered up headaches?</p>
<p class="section-description">Julia can spot the troubles, accidents, damaged auto parts on cars, automobiles, trucks, motorcycles even bicycles. Even the best mechanics with the latest technologies who can check  a used car and give you a report of list of possible repairs can not detect the parts that are working at the moment of examination, but are done, used up and ready and about to break at any moment.
</p >

                        
                        <a href="#" class="btn btn-primary">TRY NOW FOR FREE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



   @include('landing_page.sample_1.footer')