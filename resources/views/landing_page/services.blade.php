@include('landing_page.header')


        <!-- About Car Energies
    ================================================== -->

        <section class="section " id="about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center mb-3">
                        <h2 data-aos="fade-right" class="lg-title mb-2 section-title"><span style="font-weight: bold;"  class="color-green">What do</span> <span class="color-white bg-green px-3">we do for you?</span></h2>
                </div>
            </div>
            <div class="col-md-8 offset-md-2 row mb-5">
                   <p class="section-description text-center">Where else can you find someone who looks at the photos of a car and see the failed parts, covered problems, and patched up accidents?</p>
            </div>
            <br>
            <div class="row bg-light" style="position:relative;">
                <div class="col-md-5 offset-md-1">
                    <div class="about-img">
                        <img src="{{ asset('images/sample_1/business-woman.png') }}" alt="" class="" height="200">
                    </div>
                </div>
                <div class="col-md-6">
                    <div style="margin-top: 10%">
                        <h3 class="section-title px-5"><span class="bg-green color-white px-3">FREE</span> <span >EVALUATION</span></h3>
                        <p class=" px-5" style="font-size: 30px">For a limited time only, Julia, Car energy expert, will check the energies of the automobile, SUV, truck, boat or motorcycle that you are considering to buy, absolutely free of charge!</p>
                  
                        <p class=" px-5" style="font-size: 30px">Julia will check the cars energy and will list existing potential problems that you may encounter if you decide to purchase the car. And will send the report to you in an email.In most cases, it will take maximum 24 hours, possibly much sooner.</p>
                    </div>
                </div>
            </div>
             <div class="row" style="position:relative;">
                <div class="col-md-6">
                    <div style="margin-top: 20%">
                        <h3 class="section-title px-5">HOW TO <span class="bg-green color-white px-3">SUBMIT</span> YOUR CAR'S PHOTOS</h3>
                            <p class=" px-5" style="font-size: 30px">Fill out the simple form "HERE" with your name, email address, your city, state and country. Then upload 6 fresh photos of that car, truck, SUV or motorcycle. Julia needs to see recent
                            photos of the right side, the left side, the front side, the front side (hood up), the driver side
                            (door open) and one from behind the car. See the sample photos here. Then press "SUBMIT".
                            Julia will check the energies of the car and in less than 24 hours, will send you a report with
                            possible problem areas of the car, like a sample shown "HERE".</p>
                    </div>
                </div>
                <div class="col-md-5 offset-md-1" style="padding-top:10%">
                    <div class="about-img my-auto">
                        <img src="{{ asset('images/sample_1/services/sendmail.jpg') }}" alt="" class="" height="400">
                    </div>
                </div>
                
            </div>
   

        </div>
    </section>
    <section>
        <div class="row col-md-12 bg-light py-5">
            <div class="container">
                  <div class="row mb-5">
                    <a href="{{ asset('images/sample_1/car/front-hood.png') }}" data-toggle="lightbox" data-gallery="gallery" class="col-md-4 " style="text-decoration: none;">
                      <span style="font-size: 60px;">1</span>&nbsp;&nbsp;&nbsp;<img src="{{ asset('images/sample_1/car/front-hood.png') }}" class="img-fluid rounded myshadowbox" height="300" width="300">
                    </a>
                    <a href="{{ asset('images/sample_1/car/rear.png') }}" data-toggle="lightbox" data-gallery="gallery" class="col-md-4" style="text-decoration: none;">
                      <span style="font-size: 60px;">2</span>&nbsp;&nbsp;&nbsp;<img src="{{ asset('images/sample_1/car/rear.png') }}" class="img-fluid rounded myshadowbox" height="300" width="300">
                    </a>
                    <a href="{{ asset('images/sample_1/car/driver-side.png') }}" data-toggle="lightbox" data-gallery="gallery" class="col-md-4" style="text-decoration: none;">
                      <span style="font-size: 60px;">3</span>&nbsp;&nbsp;&nbsp;<img src="{{ asset('images/sample_1/car/driver-side.png') }}" class="img-fluid rounded myshadowbox" height="300" width="300">
                    </a>
                  </div>
                  <div class="row">
                    <a href="{{ asset('images/sample_1/car/1.png') }}" data-toggle="lightbox" data-gallery="gallery" class="col-md-4" style="text-decoration: none;">
                      <span style="font-size: 60px;">4</span>&nbsp;&nbsp;&nbsp;<img src="{{ asset('images/sample_1/car/1.png') }}" class="img-fluid rounded myshadowbox" height="300" width="300">
                    </a>
                    <a href="{{ asset('images/sample_1/car/2.png') }}" data-toggle="lightbox" data-gallery="gallery" class="col-md-4" style="text-decoration: none;">
                      <span style="font-size: 60px;">5</span>&nbsp;&nbsp;&nbsp;<img src="{{ asset('images/sample_1/car/2.png') }}" class="img-fluid rounded myshadowbox" height="300" width="300">
                    </a>
                    <a href="{{ asset('images/sample_1/car/3.png') }}" data-toggle="lightbox" data-gallery="gallery" class="col-md-4" style="text-decoration: none;">
                      <span style="font-size: 60px;">6</span>&nbsp;&nbsp;&nbsp;<img src="{{ asset('images/sample_1/car/3.png') }}" class="img-fluid rounded myshadowbox" height="300" width="300">
                    </a>
                  </div>

                </div>
            </div>
    </section>
    <section class="py-5">
            <div class="row ">
                <div class="col-lg-12 ">
                    <div class="container mb-5">
                        <p class="px-5 text-center color-black" style="font-size: 30px">"Have Julia’s Analysis Report" with you, when you go to the auction to buy that automobile,truck or SUV.</p>
                        <p class="px-5 text-center" style="font-size: 20px">Please note that this car energy analysis is for your personal use, and there are no guarantees
                        that the car that Julia approves will be completely trouble-free all the times, and/or the troubles
                        spots that she picks up from the car, will definitely cause a problem now or later. But she does
                        have a track record of being about %95 accurate in her evaluations.</p>


                    </div>
                <div class="row col-lg-12 justify-content-center">
                    <a href="{{ url('submit/') }}" class="btn btn-success text-center" style="font-size: 2.5vw;">TRY OUR SERVICE FOR FREE</a>
                </div>  
                </div>
            </div>
    </section>



@include('landing_page.footer')