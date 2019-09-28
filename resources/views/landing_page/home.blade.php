@include('landing_page.header')

    </style>
    <!-- HERO
    ================================================== -->
    <section>
        <header>
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                      <!-- Slide One - Set the background image for this slide in the line below -->
                      <div  class="carousel-item slider active" style="background-image: url({{ asset('images/sample_1/slider/1.jpg') }})"  >
                        <div class="carousel-caption row ">
                            <div class="col-md-7">
                              <h2 class="text-left slider-h2">HAVE YOUR CAR CHECKED FAST AND FREE <span style="color: #669932">BY AN EXPERT ONLINE </span></h2>
                                  <div class="">
                                    <p class="lead">
                                      <p class="text-left slider-p-black font-30" style="text-shadow: 2px 1px 0px rgba(255, 255, 255, 1);font-weight: bolder;">your best bet to stay away form buying another lemon</p>
                                      <a class="btn btn-success btn-lg float-left" href="{{ url('Sample_1/Submit/') }}" role="button">TRY IT NOW FOR FREE</a>
                                    </p>
                                  </div>
                            </div>
                        </div>
                      </div>

                      <div  class="carousel-item slider" style="background-image: url({{ asset('images/sample_1/slider/4.jpg') }})">
                          <div class="carousel-caption row ">
                        
                            <div class="col-md-7 offset-md-5">
                                    <div  class="jumbotron" style="min-height: 500px">
                                         <h2  class="text-right slider-h2"><span>SAVE <span style="color: #D59531" >MONEY</span> & TIME <img src="{{ asset('images/sample_1/icons/clock.jpg') }}" width="65"></span></h2>
                                                                    
                                            <p class="lead">
                                              <p class="text-right slider-p-black font-20">purchasing the right used car can be challenging, time consuming and sometimes quite a headache. And still there is no guarantee that you haven't picked up someone's headache</p>
                                              <a class="btn btn-success btn-lg float-right" href="{{ url('Sample_1/Submit/') }}" role="button">TRY IT NOW FOR FREE</a>
                                              <br>
                                            </p>  
                                    </div>
                            </div>
                        </div>
                      </div>

                      <div  class="carousel-item slider" style="background-image: url({{ asset('images/sample_1/slider/5.jpg') }})">

                          <div class="carousel-caption row ">
                        
                            <div class="col-md-7 offset-md-5">
                                    <div class="jumbotron" style="min-height: 500px;">
                                         <h2 class="text-right text-shadow-black font-65 txtbolder" style="color: #669932;"><span>UP TO 3 FREE CAR ANALYSIS</span></h2>                                          
                                            <p class="lead">
                                              <p class="text-right slider-p-black txtbolder font-30">A new best way to check used car mechanically from deep within</p>
                                              <h3 class="text-right" style="color:red;font-weight: bold; font-size: 50px"><span  >NO HIDDEN CHARGES</span></h3>
                                              <a class="btn btn-success btn-lg float-right" href="{{ url('Sample_1/Submit/') }}" role="button">TRY IT NOW FOR FREE</a>
                                              <br>
                                            </p>  
                                    </div>
                            </div>
                        </div>
                      </div>

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                  </div>
        </header>
    </section>


        <!-- About Car Energies
    ================================================== -->

        <section class="section " id="about">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="{{ asset('images/sample_1/about/checkingcar.jpg') }}" alt="" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6 ">
                    <div class="about-content">
                        <h2 data-aos="fade-left" class="display-5 section-title"><span class="color-green">About</span> <span class="color-white bg-green px-3">Car Energies</span></h2>
                        <br>
                        <p class="section-description font-30">At CarEnergies.com, we specialize in analyzing the energies of cars, motorcycles, SUV, and trucks. Julia is very sensitive to the energies of objects and senses the defective or broken parts of vehicles. She has helped people to choose best used vehicle and stay away from buying lemons. She can help you too.</p>


                        <ul class="list-unstyled">
                            <li class="section-description"><i class="fas fa-check color-green"></i>  3 FREE Analysis</li>
                            <li class="section-description"><i class="fas fa-check color-green"></i>  Fast, Accurate and Complete checking of your car</li>
                            <li class="section-description"><i class="fas fa-check color-green"></i>  Tried and Tested</li>
                            <li class="section-description"><i class="fas fa-check color-green"></i>  100% FREE</li>
                        </ul>

                        
                        <a href="#" class="btn"><img src="{{ asset('images/sample_1/trial.png') }}" alt="" height="50" width="300"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
      <section class="section bg-light pt-50 pb-30" id="whyus">
        <!-- Content -->
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7 text-center">

                    <!-- Heading -->
                    <h2 data-aos="zoom-in" class="lg-title mb-2 section-title mb-5"><span class="color-green">Why</span> <span class="color-white bg-green px-3">CarEnergies.com</span></h2>

                    <!-- Subheading -->
                    <p class="mb-5 section-description font-30">
                        No other person in the world can check with an X-ray precision, the existing (and soon to come) troubles of the automobile you consider to purchase, by looking at a few photos and sensing the energies of it.
                    </p>

                </div>
            </div>
            <!-- / .row -->
            <div class="row">

                <div class="col-lg-6">
                     <div class="row" style="margin-top: 100px; margin-left: 50px;">
                         <div class="col-md-6 mb-5">
                              <div class="service-block d-flex">
                                    <div class="service-icon ">
                                        {{-- <i class="fas fa-users-cog"></i> --}}
                                        <img src="{{ asset('images/sample_1/icons/bulb.png') }}" alt="" height="100" width="100">
                                    </div>
                                    <div class="service-content ">
                                        <h4 class="section-description"><span style="font-weight: bold;"  class="color-green txt-bold">EXPERT</span > Professional</h4>
                                        <p class="color-black">Having a car mechanic dad, Julia knows different systems and parts of cars, and does a complete and professional analysis</p>
                                    </div>
                                </div>
                         </div>
                         <div class="col-md-6 mb-5">
                              <div class="service-block d-flex">
                                    <div class="service-icon ">
                                        {{-- <i class="fas fa-money-bill-wave"></i> --}}
                                        <img src="{{ asset('images/sample_1/icons/free.png') }}" alt="" height="100" width="100">
                                    </div>
                                    <div class="service-content ">
                                        <h4 class="section-description"><span style="font-weight: bold;"  class="txt-bold color-green">100%</span > Free</h4>
                                        <p class="color-black">Go ahead and submit six photos of the car for a free evaluation report NOW</p>
                                    </div>
                                </div>
                         </div>
                         <div class="col-md-6">
                              <div class="service-block d-flex">
                                    <div class="service-icon ">
                                        <img src="{{ asset('images/sample_1/icons/stars.png') }}" alt="" height="100" width="100">
                                    </div>
                                    <div class="service-content ">
                                        <h4 class="section-description"><span style="font-weight: bold;"  class="txt-bold color-green">Trusted</span > by Clients</h4>
                                        <p class="color-black">Julia has helped many clients choose the best car for their money. She can help you too</p>
                                    </div>
                                </div>
                         </div>
                         <div class="col-md-6">
                              <div class="service-block d-flex">
                                    <div class="service-icon ">
                                        <img src="{{ asset('images/sample_1/icons/quick.png') }}" alt="" height="130" width="130">
                                    </div>
                                    <div class="service-content ">
                                        <h4 class="section-description"><span style="font-weight: bold;"  class="txt-bold color-green">EASY</span > Fast</h4>
                                        <p class="color-black">You upload and send your car photos, and receive your report usually in less than 24 hours</p>
                                    </div>
                                </div>
                         </div>
                     </div>
                </div>
                <div class="col-lg-6">
                    <!-- <div class="about-img"> -->
                        <img src="{{ asset('images/sample_1/about/whyus.png') }}" alt="" class="img-fluid">
                    <!-- </div> -->
                </div>
                
            </div>
        </div>
    </section>

    <section class="section pt-50 pb-30" id="feature">
        <div class="container-fluid">
            <div class="row justify-content-center mb-4">
                <div class="col-md-12 col-lg-12 text-center">
                    <!-- Heading -->
                    <h2 data-aos="zoom-out-up" class="lg-title mb-2 section-title mb-5"><span style="font-weight: bold;"  class="color-green">Our</span> <span class="color-white bg-green px-3">Work Process</span></h2>
                    <!-- Subheading -->
                    <p class="mb-5 section-description font-30">
                        Our work process consist of only 4 steps, all made online
                    </p>
                </div>
            </div>
            <!-- / .row -->
            <div class="row">
                <div class=" row col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="container-fluid">
                                  <div class="row justify-content-end">
                                      <img class="" src="{{ asset('images/sample_1/process/picture.png') }}" width="75" height="75">
                                  </div>
                                  <div class="service-content">
                                      <h4 class="section-description text-right"><span style="font-weight: bold;"  class="txt-bold color-green">1. TAKE YOUR CAR'S</span> PICTURE</h4>
                                      <p class="color-black text-right">Upload 4 recent clear photos of the used car in(front,read,left side,rightside)</p>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                              <div class="container-fluid">
                                  <div class="row justify-content-end">
                                      <img class="" src="{{ asset('images/sample_1/process/email.png') }}" width="75" height="75">
                                  </div>
                                  <div class="service-content">
                                      <h4 class="section-description text-right">
                                          <span class="txt-bold color-green" style="font-weight: bold;"> 2. YOU UPLOAD AND </span> SUBMIT THEM
                                      </h4>
                                      <p class="color-black text-right">Send us the pictures with your name, email address, state, city and country</p>
                                  </div>
                                
                              </div>
                          </div>
                    </div>
                </div>
                <div class="col-md-4"> 
                    <div data-aos="zoom-in" data-aos-delay="50" data-aos-duration="2000">
                        <img src="{{ asset('images/sample_1/frontcar.png') }}" alt="" class="img-fluid animated zoomIn">
                    </div>
                </div>
                <div class=" row col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="container-fluid">
                                <img src="{{ asset('images/sample_1/process/diagnose.png') }}" width="75" height="75">
                                <div class="service-content">
                                    <h4 class="section-description">
                                        <span class="txt-bold color-green" style="font-weight: bold;"> 3. CAR</span> DIAGNOSIS
                                    </h4>
                                    <p class="color-black text-left">We will analyze the car energies to find and list the existing and/or potential problems, if any</p>
                                </div>  
                            </div>                             
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="container-fluid">
                                <img src="{{ asset('images/sample_1/process/report.jpg') }}" width="75" height="75">
                                <div class="service-content">
                                    <h4 class="section-description">
                                        <span class="txt-bold color-green" style="font-weight: bold;">4.  RESOLUTION &</span> RECOMMENDATION
                                    </h4>
                                    <p class="color-black text-left">An email will be sent back to you consisting with diagnostic report up to 12-24 hours</p>
                                </div>  
                            </div>                             
                        </div>
                    </div>      
                </div>
            </div>
        </div> <!-- / .container -->
    </section>
    <section class="section pt-50 pb-30">
                <section class="section" style="background-image: url({{ asset('images/sample_1/testimonies/bg.jpg') }}); background-attachment: fixed;background-position: center;background-repeat: no-repeat; background-size: cover; height: auto">
           <div class="row justify-content-center mb-5">
                <div class="col-md-8 col-lg-6 text-center">
                    <!-- Heading -->
                    <!-- <h2 class="lg-title mb-2 section-title" style="color: white;">
                        What Our Customers Are Saying
                    </h2> -->
                           <h2 data-aos="fade-right" class="lg-title mb-2 section-title"><span style="font-weight: bold;"  class="color-white">What</span> <span class="color-white bg-green px-3">Our Customers Are Saying</span></h2>
                    <!-- Subheading -->
                    <p class="mb-5 font-30" style="color:lightgray;">
                        We appreciate our customers’ feedbacks!
                    </p>
                </div>
            </div>
      <div id="demo" class="carousel slide" data-ride="carousel">
              <!--Controls-->

          <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
            <li data-target="#multi-item-example" data-slide-to="1"></li>
            <li data-target="#multi-item-example" data-slide-to="2"></li>
        </ol>

          <!-- The slideshow -->
          <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                     <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-2">
                              <div class="card-body">
                                <h3 class="card-title">VERY QUICK AND FAST</h3>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                  card's content.</p>
                                 <div class="row">
                                            <div class="col-md-4"><img src="{{ asset('images/sample_1/testimonies/1.jpg') }}" class="" alt="..." height="100" width="100" style="border-radius: 50%;"></div>
                                            <div class="col-md-8">
                                                <span><strong>Jacico Albano</strong></span><br>
                                                <i>Senior Web Developer</i><br>
                                                <i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
                                                <i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
                                                <i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
                                                <i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
                                                <i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
                                            </div>
                                        </div>
                              </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-2">
                              <div class="card-body">
                                <h3 class="card-title">DONE IN 3 HOURS</h3>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                  card's content.</p>
                                 <div class="row">
                                            <div class="col-md-4"><img src="{{ asset('images/sample_1/testimonies/2.jpg') }}" class="" alt="..." height="100" width="100" style="border-radius: 50%;"></div>
                                            <div class="col-md-8">
                                                <span><strong>Rita Avila</strong></span><br>
                                                <i>Car Dealer Specialist</i><br>
                                                <i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
                                                <i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
                                                <i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
                                                <i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
                                                <i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
                                            </div>
                                        </div>
                              </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-2">
                              <div class="card-body">
                                 <h3 class="card-title">FIND IT PROFESSIONAL</h3>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                  card's content.</p>
                                 <div class="row">
                                            <div class="col-md-4"><img src="{{ asset('images/sample_1/testimonies/3.jpg') }}" class="" alt="..." height="100" width="100" style="border-radius: 50%;"></div>
                                            <div class="col-md-8">
                                                <span><strong>Linda Kuratsa</strong></span><br>
                                                <i>Palamon Sa Bahay</i><br>
                                                <i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
                                                <i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
                                                <i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
                                                <i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                        </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    <!--/.Second slide-->
    <div class="carousel-item">
                <div class="container">
                     <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-2">
                              <div class="card-body">
                                <h3 class="card-title">VERY QUICK AND FAST</h3>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                  card's content.</p>
                                 <div class="row">
                                            <div class="col-md-4"><img src="{{ asset('images/sample_1/testimonies/1.jpg') }}" class="" alt="..." height="100" width="100" style="border-radius: 50%;"></div>
                                            <div class="col-md-8">
                                                <span><strong>Jacico Albano</strong></span><br>
                                                <i>Senior Web Developer</i><br>
                                                <i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
                                                <i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
                                                <i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
                                                <i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                        </div>
                              </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-2">
                              <div class="card-body">
                                <h3 class="card-title">DONE IN 3 HOURS</h3>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                  card's content.</p>
                                 <div class="row">
                                            <div class="col-md-4"><img src="{{ asset('images/sample_1/testimonies/2.jpg') }}" class="" alt="..." height="100" width="100" style="border-radius: 50%;"></div>
                                            <div class="col-md-8">
                                                <span><strong>Rita Avila</strong></span><br>
                                                <i>Car Dealer Specialist</i><br>
                                                <i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
                                                <i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
                                                <i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
                                                <i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                        </div>
                              </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-2">
                              <div class="card-body">
                                 <h3 class="card-title">FIND IT PROFESSIONAL</h3>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                  card's content.</p>
                                 <div class="row">
                                            <div class="col-md-4"><img src="{{ asset('images/sample_1/testimonies/3.jpg') }}" class="" alt="..." height="100" width="100" style="border-radius: 50%;"></div>
                                            <div class="col-md-8">
                                                <span><strong>Linda Kuratsa</strong></span><br>
                                                <i>Palamon Sa Bahay</i><br>
                                                <i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
                                                <i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
                                                <i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
                                                <i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                        </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
          </div>

          <!-- Left and right controls -->
          <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>

        </div>
    </section>

    </section>

    <section class="section pb-30 pt-50" >
            <!-- <div class="box"> -->
            <div class="container">
                <div class="row">
                     
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mybox">
                       
                            <div class="box-part text-center">
                                
                                <!-- <i class="fas fa-instagram fa-3x" aria-hidden="true"></i> -->
                                <!-- <i class="fab fa-facebook-f fa-3x"></i> -->
                                <img src="{{ asset('images/sample_1/socmed/insta.png') }}" width="100" height="100">
                                <div class="title">
                                    <h4 style="font-size:30px ">Instagram</h4>
                                </div>
                                
                                <div class="text">
                                    <span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
                                </div>
                                
                                <a href="#">Learn More</a>
                                
                             </div>
                        </div>   
                        
                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 shadowbox ">
                       
                            <div class="box-part text-center">
                                
                                <!-- <i class="fas fa-twitter fa-3x" aria-hidden="true"></i> -->
                                 <img src="{{ asset('images/sample_1/socmed/twiter.png') }}" width="100" height="100">
                                <div class="title">
                                    <h4 style="font-size:30px ">Twitter</h4>
                                </div>
                                
                                <div class="text">
                                    <span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
                                </div>
                                
                                <a href="#">Learn More</a>
                                
                             </div>
                        </div>   
                        
                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mybox">
                       
                            <div class="box-part text-center">
                                
                               <!-- <i class="fab fa-facebook-f fa-3x"></i> -->
                               <img src="{{ asset('images/sample_1/socmed/facebook.png') }}" width="100" height="100">
                                
                                <div class="title">
                                    <h4 style="font-size:30px ">Facebook</h4>
                                </div>
                                
                                <div class="text">
                                    <span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
                                </div>
                                
                                <a href="#">Learn More</a>
                                
                             </div>
                        </div>   
                </div>      
    </div>
<!-- </div> -->
    </section>
    <!-- Contact
    ================================================== -->
    <section class="section bg-light" id="contact">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-12 col-lg-12 text-center">

                    <!-- Heading -->
                     <h2 data-aos="fade-right" class="lg-title mb-4 section-title"><span style="font-weight: bold;"  class="color-green">Have any</span> <span class="color-white bg-green px-3">Questions or Comments?</span></h2>

                    <!-- Subheading -->
                    <p class="mb-5 font-30 color-black">
                        Our goal is to serve you making your automobile purchase easier and help you save time, money.
                    </p>

                </div>
            </div>
            <!-- / .row -->


            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <form action="mail.php" method="post" id="main_contact_form" class="contact__form">
                        <!-- form message -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                        Your message was sent successfully.
                                    </div>
                                </div>
                            </div>
                            <!-- end message -->
                            
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter your Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="email" id="email" class="form-control" placeholder="Enter your Email *" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" name="subject" id="subject" class="form-control" placeholder="Enter your Subject *" required="required">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea name="message" id="message" cols="30" rows="6" class="form-control" placeholder="Enter your Message" required="required" ></textarea>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="submit text-center">
                                    <input name="submit" type="submit" class="btn btn-success btn-lg" value="Send Now">
                                    <p class="pt-3">* We respect your privacy. We will not share your information with anybody and we will not spam your inbox.</p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@include('landing_page.footer')
