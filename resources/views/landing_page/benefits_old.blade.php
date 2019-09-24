@include('landing_page.header')

        <section class="section section-top section-full" style="max-height: 50vh;">

        <!-- Cover -->
        <div class="bg-cover" style="background-image: url({{ asset('images/sample_1/benefits.png') }});"></div>

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
                        <h2 class="display-5 section-title">
                            Don’t buy another lemon
                        </h2>
                        <p class="section-description">Avoid being ripped off by a crook mechanic, that try to convince you of unnecessary and costly repairs! Know if you really need that!</p>


                       <p class="section-description"><strong>Use our services before you switch your mechanic and choosing a new mechanic.</strong></p>


<p class="section-description">Bid with confidence in person or online automobile auctions.</p>
<p class="section-description">Find gems that everybody else is overlooking (including possibly the car salesman), save thousands.</p>
<p class="section-description">Increase your profits if you are in the business of buying and selling used cars, motorcycles, boats. </p>
<p class="section-description">Free/easy/fast way to know the condition of your own vehicle.</p>
<p class="section-description">Check for possible problems before you buy that used car.</p>
<p class="section-description">A new best way to check used car mechanically from deep within</p>

                        
                        <a href="#" class="btn btn-primary">TRY NOW FOR FREE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@include('landing_page..footer')