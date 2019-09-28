@include('landing_page.header')



        <!-- About Car Energies
    ================================================== -->

        <section class="section " id="about">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 text-center mb-3">
                            <h2 data-aos="fade-right" class="lg-title mb-2 section-title"><span style="font-weight: bold;"  class="color-green">Everything is energy</span> <span class="color-white bg-green px-3">Everything emits energy</span></h2>
                    </div>
                </div><br>
                <div class="col-md-8 offset-md-2 row mb-5" >
                       <p class="section-description" >Julia is very sensitive to subtle energies of objects, animals and people. She senses the defective or broken parts too. She has helped people to choose best used vehicle and stay away from buying lemons.</p>
                        <p class="section-description">She has helped her friends and clients choose homes, lands, appliances, vehicles and other objects. She can help you too.  For now, she will analyze up to 3 cars per person free of charge</p>
                        <p class="section-description">Please note that this service is for your personal use, and there are no guarantees that the car she approves, will be completely trouble free or the parts that she reports to be faulty or braking soon actually are. But she has a proven track record of being %95 accurate in her evaluation</p>
                </div>
                <div class="row col-md-12 justify-content-center">
                    <div class="about-img">
                        <img src="{{ asset('images/sample_1/about/parts.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="row mb-5  py-5">
                        <div class="col-md-8 offset-md-2">
                             <p class="section-title color-green text-center " style="font-weight: bold;"><strong>Save money and time</strong></p>
                             <p class="section-description">Julia’s  service can save you a lot of time taking the car you are considering buying to a mechanic, if at all possible. What better way to check the car from deep within when you are visiting a used car dealer, a private seller or a pre-auction car lot.</p>
                        </div>
                </div>
                <div class="row mb-5 py-5 bg-light">
                    <div class="col-md-5 offset-md-1">
                         <div class="about-img">
                        <img src="{{ asset('images/sample_1/about/1.jpg') }}" alt="" class="img-fluid" height="500" width="600">
                    </div>
                    </div>
                    <div class="col-md-6">
                        <p class="section-description">Julia can spot faulty mechanical, electrical parts and systems, previous accidents and covered up trouble spots of the vehicle by looking at new photos of it. She connects to the energies of these parts and informs you of her findings. Even the best mechanics using the latest technologies may not be able to detect the parts that are working at the moment of examination, but are done, used up and ready to break at any moment.</p >
                    </div>
                </div>
                   <div class="row ">
                <div class="col-lg-12 ">
                    <div class="container mb-5">
                        <p class="px-5 text-center color-black" style="font-size: 30px">Where else can someone look at the photos of a car and see the failed parts, hidden problems, covered up troubles?</p>
                    </div>
                <div class="row col-lg-12 justify-content-center">
                    <a href="{{ url('Sample_1/Submit/') }}" class="btn btn-success text-center font-30">TRY OUR SERVICE FOR FREE</a>
                </div>  

                </div>
            </div>

            </div>
    </section>





   @include('landing_page.footer')