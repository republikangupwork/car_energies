@include('landing_page.sample_1.header')
<style>
    .box{
    padding:60px 0px;
}

.box-part{
    background:#FFF;
    border-radius:0;
    padding:60px 10px;
    margin:30px 0px;
}
.text{
    margin:20px 0px;
}

.fa{
     color:#4183D7;

}
       .mybox:hover{
            -webkit-box-shadow: 6px 7px 25px -10px rgba(0,0,0,0.48);
            -moz-box-shadow: 6px 7px 25px -10px rgba(0,0,0,0.48);
            box-shadow: 6px 7px 25px -10px rgba(0,0,0,0.48);
            transition: all 500ms ease;
        }
        .shadowbox{
            -webkit-box-shadow: 6px 7px 25px -10px rgba(0,0,0,0.48);
            -moz-box-shadow: 6px 7px 25px -10px rgba(0,0,0,0.48);
            box-shadow: 6px 7px 25px -10px rgba(0,0,0,0.48);
            transition: all 500ms ease;
        }
    .pt-50{
        padding-top: 50px;
    }
    .pb-30{
        padding-bottom: 30px;
    }
    .carousel-item {
  height: 100vh;
  min-height: 350px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
.carousel-caption h2{
    font-size: 100px;
    text-transform: uppercase;
    font-weight: bold;
    margin-bottom: 50px;
    color: white;
    text-shadow: 2px 2px gray;
}
.carousel-caption p{
    font-size: 50px;
    text-transform: uppercase;
    font-weight: bold;
    margin-bottom: 100px;
    color: white;
    text-shadow: 2px 2px gray;
}
@media only screen and (max-width: 720px) {
    .carousel-caption h2{
        display: none;
    }
    .carousel-caption p{
        margin-bottom: 200px
    }
}
    </style>
    <!-- HERO
    ================================================== -->
    <section class="">
        <header>
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                      <!-- Slide One - Set the background image for this slide in the line below -->
                      <div  class="carousel-item active" style="background-image: url({{ asset('images/sample_1/slider/1.jpg') }})">
                        <div class="carousel-caption row">
                            <div class="col-md-5"></div>
                            <div class="col-md-7 align-items-end">
                                <h2 class="display-1">Stay away from Lemon</h2>
                                <p class="lead">your best bet to stay away form buying another lemon</p>
                            </div>
                 
                        </div>
                      </div>
                      <!-- Slide Two - Set the background image for this slide in the line below -->
                      <div  class="carousel-item" style="background-image: url({{ asset('images/sample_1/slider/2.jpg') }})">
                        <div class="carousel-caption d-md-block">
                          <h2 class="display-4">Second Slide</h2>
                          <p class="lead">This is a description for the second slide.</p>
                        </div>
                      </div>
                      <!-- Slide Three - Set the background image for this slide in the line below -->
                      <div  class="carousel-item" style="background-image: url({{ asset('images/sample_1/slider/4.jpg') }})">
                        <div class="carousel-caption  d-md-block">
                          <h2 class="display-4">Third Slide</h2>
                          <p class="lead">This is a description for the third slide.</p>
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


    <!-- SECTIONS
    ================================================== -->
    <!-- PAGES
    ================================================== -->

    <!-- FEATURES
    ================================================== -->

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
                        <h2 class="display-5">
                            About Car Energies
                        </h2>
                        <p>At CarEnergies.com, we specialize in analyzing the energies of cars, motorcycles, SUV, and trucks. Julia is very sensitive to the energies of objects and senses the defective or broken parts of vehicles. She has helped people to choose best used vehicle and stay away from buying lemons. She can help you too.</p>


                        <ul class="list-unstyled skill-list ">
                            <li>3 FREE Consultancy</li>
                            <li>Easy Process</li>
                            <li>Tried and Tested</li>
                            <li>100% FREE</li>
                        </ul>

                        
                        <a href="#" class="btn btn-primary">TRY NOW FOR FREE</a>
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
                    <h2 class="lg-title mb-2">
                        Why Choose Us
                    </h2>

                    <!-- Subheading -->
                    <p class="mb-5">
                        No other person in the world <small>(that we know)</small> can do this, let alone do it online by just seeing a few photos online!
                    </p>

                </div>
            </div>
            <!-- / .row -->
            <div class="row">

                <div class="col-lg-6">
                     <div class="row" style="margin-top: 100px; margin-left: 50px;">
                         <div class="col-md-6">
                              <div class="service-block d-flex">
                                    <div class="service-icon ">
                                        <i class="fas fa-users-cog"></i>
                                    </div>
                                    <div class="service-content ">
                                        <h4><span>EXPERT</span> ENGINEER</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. asperiores rem voluptas nobis.</p>
                                    </div>
                                </div>
                         </div>
                         <div class="col-md-6">
                              <div class="service-block d-flex">
                                    <div class="service-icon ">
                                        <i class="fas fa-money-bill-wave"></i>
                                    </div>
                                    <div class="service-content ">
                                        <h4><span>100%</span> Free Trial</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. asperiores rem voluptas nobis.</p>
                                    </div>
                                </div>
                         </div>
                         <div class="col-md-6">
                              <div class="service-block d-flex">
                                    <div class="service-icon ">
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="service-content ">
                                        <h4><span>Trusted</span> by Clients</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. asperiores rem voluptas nobis.</p>
                                    </div>
                                </div>
                         </div>
                         <div class="col-md-6">
                              <div class="service-block d-flex">
                                    <div class="service-icon ">
                                        <i class="fas fa-business-time"></i>
                                    </div>
                                    <div class="service-content ">
                                        <h4><span>EASY</span> Process</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. asperiores rem voluptas nobis.</p>
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
                        <div class="col-md-8 col-lg-6 text-center">
                            <!-- Heading -->
                            <h2 class="lg-title mb-2">
                                Our Work Process
                            </h2>
                            <!-- Subheading -->
                            <p class="mb-5 ">
                                No other person in the world (that we know) can do this, let alone do it online by just seeing a few photos online!
                            </p>
                        </div>
                    </div>
            <!-- / .row -->
            <div class="row">
                <div class=" row col-lg-4 d-flex flex-column align-items-end">
                    <div class="col-md-6">
                          <div class="service-block d-flex">
                                
                                <div class="service-content ">
                                    <h4><span>TAKE CAR'S</span> PICTURE</h4>
                                    <p>Upload 4 recent photos of the car in(front,read,left side,rightside)</p>
                                </div>
                                <div class="">
                                    <img src="{{ asset('images/sample_1/process/picture.png') }}" width="110" height="110">
                                </div>
                            </div>
                    </div>
                     <div class="col-md-6">
                          <div class="service-block d-flex">
                                
                                <div class="service-content ">
                                    <h4><span>SUBMIT DETAILS</span> THRU EMAIL</h4>
                                    <p>Send us the pictures with your name, email address, state, city and country</p>
                                </div>
                                <div class="">
                                    <img src="{{ asset('images/sample_1/process/email.png') }}" width="130" height="130">
                                </div>
                            </div>
                    </div>
                     
                </div>
                <div class="col-lg-4"> 
                    <div data-aos="zoom-in" data-aos-delay="50" data-aos-duration="2000">
                        <img src="{{ asset('images/sample_1/frontcar.png') }}" alt="" class="img-fluid animated zoomIn">
                    </div>
                        
                </div>
                     <div class=" row col-lg-4 d-flex flex-column align-items-start">
                    <div class="col-md-6">
                          <div class="service-block d-flex">
                                 <div class="">
                                    <img src="{{ asset('images/sample_1/process/diagnose.png') }}" width="200" height="200">
                                </div>
                                <div class="service-content ">
                                    <h4><span>CAR</span> DIAGNOSTIC</h4>
                                    <p>We are going to check the car's energy thru the sent photos from you and list existing potential problems if theres any</p>
                                </div>
                               
                            </div>
                    </div>
                     <div class="col-md-6">
                          <div class="service-block d-flex">
                                 <div class="" style="margin-right: 10px">
                                   <img src="{{ asset('images/sample_1/process/report.jpg') }}" width="140" height="140">
                                </div>
                                <div class="service-content ">
                                    <h4><span>RESOLUTION &</span> RECOMMENDATION</h4>
                                    <p>An email will be sent back to you consisting with diagnostic report up to 12-24 hours</p>
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
                    <h2 class="lg-title mb-2" style="color: white;">
                        What Our Customers Are Saying
                    </h2>
                    <!-- Subheading -->
                    <p class="mb-5 " style="color:lightgray;">
                        No other person in the world (that we know) can do this, let alone do it online by just seeing a few photos online!
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
                                    <h4>Instagram</h4>
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
                                    <h4>Twitter</h4>
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
                                    <h4>Facebook</h4>
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
                <div class="col-md-8 col-lg-8 text-center">

                    <!-- Heading -->
                    <h2 class="lg-title mb-2">
                        Have any questions on mind?
                    </h2>

                    <!-- Subheading -->
                    <p class="mb-5">
                        Our duty towards you is to share our experience we're reaching in our work path with you.
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
                                    <input name="submit" type="submit" class="btn btn-primary btn-lg" value="Submit Now">
                                    <p class="pt-3">* We will not spam on you inbox.</p>
                                </div>
                            </div>
                        </div>
                    </form>
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</body>

</html>
<script>
  AOS.init();
</script>