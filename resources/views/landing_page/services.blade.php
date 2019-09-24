@include('landing_page.header')


        <!-- About Car Energies
    ================================================== -->

        <section class="section " id="about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center mb-3">
                        <h2 data-aos="fade-right" class="lg-title mb-2 section-title"><span style="font-weight: bold;"  class="color-green">What to</span> <span class="color-white bg-green px-3">expect from us</span></h2>
                </div>
            </div>
            <div class="col-md-8 offset-md-2 row mb-5">
                   <p class="section-description text-center">Where else can someone look at the photos of a car and see the failed arts, hidden problems,
covered up headaches?</p>
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
                        <h3 class="section-title px-5"><span class="bg-green color-white px-3">FREE</span> <span >CONSULTATION</span></h3>
                        <p class=" px-5" style="font-size: 30px">For a limited time only, Julia will check the energy of the car you are considering to buy free of charge!.</p>
                  
                        <p class=" px-5" style="font-size: 30px">Julia will check the cars energy and will list existing potential problems that you may encounter if you decide to purchase the car. And will send the report to you in an email.In most cases, it will take maximum 24 hours, possibly much sooner.</p>
                    </div>
                </div>
            </div>
             <div class="row" style="position:relative;">
                <div class="col-md-6">
                    <div style="margin-top: 20%">
                        <h3 class="section-title px-5">FILL UP FORM & <span class="bg-green color-white px-3">SUBMIT</span></h3>
                            <p class=" px-5" style="font-size: 30px">Fill out a simple table with your name email address, your City, State and Country.
 and upload 4 recent photos of the car in the locations shown in here ( one from front of the car (hood up), one from behind the car and one from each side of the car, doors open) See the examples shown here.The website will generate a case number for each car you upload photos.</p>
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
                    <a href="{{ asset('images/sample_1/car/front-hood.png') }}" data-toggle="lightbox" data-gallery="gallery" class="col-md-4 ">
                      <img src="{{ asset('images/sample_1/car/front-hood.png') }}" class="img-fluid rounded myshadowbox" height="300" width="300">
                    </a>
                    <a href="{{ asset('images/sample_1/car/rear.png') }}" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                      <img src="{{ asset('images/sample_1/car/rear.png') }}" class="img-fluid rounded myshadowbox" height="300" width="300">
                    </a>
                    <a href="{{ asset('images/sample_1/car/driver-side.png') }}" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                      <img src="{{ asset('images/sample_1/car/driver-side.png') }}" class="img-fluid rounded myshadowbox" height="300" width="300">
                    </a>
                  </div>
                  <div class="row">
                    <a href="{{ asset('images/sample_1/car/1.png') }}" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                      <img src="{{ asset('images/sample_1/car/1.png') }}" class="img-fluid rounded myshadowbox" height="300" width="300">
                    </a>
                    <a href="{{ asset('images/sample_1/car/2.png') }}" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                      <img src="{{ asset('images/sample_1/car/2.png') }}" class="img-fluid rounded myshadowbox" height="300" width="300">
                    </a>
                    <a href="{{ asset('images/sample_1/car/3.png') }}" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                      <img src="{{ asset('images/sample_1/car/3.png') }}" class="img-fluid rounded myshadowbox" height="300" width="300">
                    </a>
                  </div>

                </div>
            </div>
    </section>
    <section class="py-5">
            <div class="row ">
                <div class="col-lg-12 ">
                    <div class="container mb-5">
                        <p class="px-5 text-center color-black" style="font-size: 30px">Have Julia’s repot in your hand when you are going to the auction to buy that SUV, truck or automobile.</p>
                        <p class="px-5 text-center" style="font-size: 20px">Please note that this is for your personal use, and there are no guarantees that the car she approves, will be completely trouble free. But she has a proven track record of being %95 accurate in her evaluation.</p>


                    </div>
                <div class="row col-lg-12 justify-content-center">
                    <a href="{{ url('Sample_1/Submit/') }}" class="btn btn-success text-center font-30">TRY OUR SERVICE FOR FREE</a>
                </div>  
                </div>
            </div>
    </section>



@include('landing_page.footer')