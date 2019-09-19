@include('landing_page.sample_1.header')

<style>
    .file-upload input[type='file'] {
  display: none;
}
.rounded-lg {
  border-radius: 1rem;
}

.custom-file-label.rounded-pill {
  border-radius: 50rem;
}

.custom-file-label.rounded-pill::after {
  border-radius: 0 50rem 50rem 0;
}
</style>


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
                            Submit Form
                        </h1>
                    </div>
                </div>
            </div>
            <!-- / .row -->
        </div>
        <!-- / .container -->
    </section>


        <!-- About Car Energies
    ================================================== -->

        <section class="section " id="#">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="{{ asset('images/sample_1/sidecar.png') }}" alt="" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6 ">
                    <div class="about-content">
                                                     <!-- Contact
                            ================================================== -->
                            <section class="section" id="contact">
                                <div class="container-fluid">
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
                                            <form action="" method="post" id="main_contact_form" class="contact__form">
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
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <select class=" form-control">
                                                            <option selected disabled="">Country</option>
                                                            <option value="1">Boots</option>
                                                            <option value="2">Shoes</option>
                                                            <option value="3">Feet</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                       <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <select class=" form-control">
                                                            <option selected disabled="">State</option>
                                                            <option value="1">Boots</option>
                                                            <option value="2">Shoes</option>
                                                            <option value="3">Feet</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                       <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <select class=" form-control">
                                                            <option selected disabled="">City</option>
                                                            <option value="1">Boots</option>
                                                            <option value="2">Shoes</option>
                                                            <option value="3">Feet</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                               
                                                </div>

                                        <div class="row mb-2">
                                              <div class="col-lg-6">
                                                <div class="p-5 bg-white shadow rounded-lg"><img id="imgid1" src="{{ asset('images/sample_1/car/front-hood.png') }}" alt="" width="200"  class="d-block mx-auto mb-4 rounded-pill">

                                                  <!-- Default bootstrap file upload-->

                                                  <h6 class="text-center mb-4 text-muted">
                                                    Front of car with Hood up
                                                  </h6>

                                                  <div class="custom-file overflow-hidden rounded-pill mb-2">
                                                    <input id="customFile" type="file" class="custom-file-input" onchange="readURL(this,imgid1,labelimg1);">
                                                    <label for="customFile" id="labelimg1" class="custom-file-label"></label>
                                                  </div>


                                                </div>
                                              </div>
                                                  <div class="col-lg-6">
                                                <div class="p-5 bg-white shadow rounded-lg"><img id="imgid2" src="{{ asset('images/sample_1/car/rear.png') }}" alt="" width="200" class="d-block mx-auto mb-4 rounded-pill">

                                                  <!-- Default bootstrap file upload-->

                                                  <h6 class="text-center mb-4 text-muted">
                                                    Rear  with open compartment 
                                                  </h6>

                                                  <div class="custom-file overflow-hidden rounded-pill mb-2">
                                                    <input id="customFile" type="file" class="custom-file-input" onchange="readURL(this,imgid2,labelimg2);">
                                                    <label for="customFile" id="labelimg2" class="custom-file-label"></label>
                                                  </div>


                                                </div>
                                              </div>
                                          </div>

                                        <div class="row">
                                              <div class="col-lg-6">
                                                <div class="p-5 bg-white shadow rounded-lg"><img id="imgid3" src="{{ asset('images/sample_1/car/driver-side.png') }}" alt="" width="200"  class="d-block mx-auto mb-4 rounded-pill">

                                                  <!-- Default bootstrap file upload-->

                                                  <h6 class="text-center mb-4 text-muted">
                                                    Left side open doors
                                                  </h6>

                                                  <div class="custom-file overflow-hidden rounded-pill mb-2">
                                                    <input id="customFile" type="file" class="custom-file-input" onchange="readURL(this,imgid3,labelimg3);">
                                                    <label for="customFile" id="labelimg3" class="custom-file-label"></label>
                                                  </div>


                                                </div>
                                              </div>
                                                  <div class="col-lg-6">
                                                <div class="p-5 bg-white shadow rounded-lg"><img id="imgid4" src="{{ asset('images/sample_1/car/left-side.png') }}" alt="" width="200" class="d-block mx-auto mb-4 rounded-pill">

                                                  <!-- Default bootstrap file upload-->

                                                  <h6 class="text-center mb-4 text-muted">
                                                    Right side open doors
                                                  </h6>

                                                  <div class="custom-file overflow-hidden rounded-pill mb-2">
                                                    <input id="customFile" type="file" class="custom-file-input" onchange="readURL(this,imgid4,labelimg4);">
                                                    <label for="customFile" id="labelimg4" class="custom-file-label"></label>
                                                  </div>


                                                </div>
                                              </div>
                                          </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </section>

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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</body>

</html>
<script>
  AOS.init();


       function readURL(input,imgid,lblid) {
        var name = input.files[0].name;
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $(imgid).attr('src', e.target.result);
                    $(lblid).html(name)
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>
