@include('landing_page.header')

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
    .required_fields {
        color: red;
    }

    .modal #terms_and_condtion {
        display: block !important;
    }
    #terms_and_condtion .modal-dialog {
        overflow-y: initial !important
    }
    #terms_and_condtion .modal-body {
        height: 400px;
        overflow-y: auto;
    }
    #submit_section {
        background-color: whitesmoke; 
    }
</style>


<section class="section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center mb-3">
                <h2 data-aos="fade-right" class="lg-title mb-2 section-title">
                    <span style="font-weight: bold;"  class="color-green">Submit</span> 
                    <span class="color-white bg-green px-3">Now!</span>
                </h2>
                <p class="section-description text-center">And grab this opportunity to learn more about that car</p>
            </div>
        </div>
    </div>
</section>

<section class="section" id="submit_section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <!-- <div class="card" style="padding: 40px 20px;"> -->
                    <form action="" method="">
                        <div class="row justify-content-center">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label class="float-left">Name: (<b class="required_fields">*</b>)</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="e.g: Julia B.">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="float-left">Email: (<b class="required_fields">*</b>)</label>
                                    <input type="text" name="email" id="email" class="form-control" placeholder="e.g: car_energies@gmail.com" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                                <div class="col-md-3">
                                <div class="form-group">
                                    <label class="float-left">Country: (<b class="required_fields">*</b>)</label>
                                    <select class=" form-control countries" name="country"  id="countryId">
                                        <option selected disabled="">Select Country</option>
                                    </select>
                                </div>
                            </div>
                             <div class="col-md-3">
                                <div class="form-group">
                                    <label class="float-left">State: (<b class="required_fields">*</b>)</label>
                                    <select class=" form-control states" name="state" id="stateId">
                                        <option selected disabled="">Select State</option>
                                    </select>
                                </div>
                            </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                    <label class="float-left">City: (<b class="required_fields">*</b>)</label>
                                    <select class=" form-control cities" name="city" id="cityId">
                                        <option selected disabled="">Select City</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-9"><hr></div>
                        </div>
                        
                        <div class="row justify-content-center">
                            <div class="col-md-3" style="margin: 10px 0;">
                                <div class="card">
                                    <div class="card-header bg-green">
                                        <h4 class="md-title text-center text-white">
                                            Front of car with Hood up
                                        </h4>
                                    </div>
                                    <div class="card-body">
                                        <img id="imgid1" src="{{ asset('images/sample_1/car/front-hood.png') }}" alt=""  class="" style="height: 300px;">
                                    </div>
                                    <div class="card-footer">
                                        <div class="custom-file overflow-hidden">
                                            <input id="customFile" type="file" class="custom-file-input" onchange="readURL(this,imgid1,labelimg1);">
                                            <label for="customFile" id="labelimg1" class="custom-file-label"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3" style="margin: 10px 0;">
                                <div class="card">
                                    <div class="card-header bg-green">
                                        <h4 class="md-title text-center text-white">
                                            Rear with open compartment 
                                        </h4>
                                    </div>
                                    <div class="card-body">
                                        <img id="imgid2" src="{{ asset('images/sample_1/car/rear.png') }}" alt=""  class="" style="height: 300px;">
                                    </div>
                                    <div class="card-footer">
                                        <div class="custom-file overflow-hidden">
                                            <input id="customFile" type="file" class="custom-file-input" onchange="readURL(this,imgid2,labelimg2);">
                                            <label for="customFile" id="labelimg2" class="custom-file-label"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="col-md-3" style="margin: 10px 0;">
                                <div class="card">
                                    <div class="card-header bg-green">
                                        <h4 class="md-title text-center text-white">
                                            Left side open doors
                                        </h4>
                                    </div>
                                    <div class="card-body">
                                        <img id="imgid3" src="{{ asset('images/sample_1/car/driver-side.png') }}" alt="" class="" style="height: 300px;">
                                    </div>
                                    <div class="card-footer">
                                        <div class="custom-file overflow-hidden">
                                            <input id="customFile" type="file" class="custom-file-input" onchange="readURL(this,imgid3,labelimg3);">
                                            <label for="customFile" id="labelimg3" class="custom-file-label"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                              <div class="col-md-3" style="margin: 10px 0;">
                                <div class="card">
                                    <div class="card-header bg-green">
                                        <h4 class="md-title text-center text-white">
                                            Left Side View
                                        </h4>
                                    </div>
                                    <div class="card-body">
                                        <img id="imgid4" src="{{ asset('images/sample_1/car/1.png') }}" alt="" class="" style="height: 300px;">
                                    </div>
                                    <div class="card-footer">
                                        <div class="custom-file overflow-hidden">
                                            <input id="customFile4" type="file" class="custom-file-input" onchange="readURL(this,imgid4,labelimg4);">
                                            <label for="customFile" id="labelimg4" class="custom-file-label"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3" style="margin: 10px 0;">
                                <div class="card">
                                    <div class="card-header bg-green">
                                        <h4 class="md-title text-center text-white">
                                            Right Side View
                                        </h4>
                                    </div>
                                    <div class="card-body">
                                        <img id="imgid5" src="{{ asset('images/sample_1/car/2.png') }}" alt="" class="" style="height: 300px;">
                                    </div>
                                    <div class="card-footer">
                                        <div class="custom-file overflow-hidden">
                                            <input id="customFile5" type="file" class="custom-file-input" onchange="readURL(this,imgid5,labelimg5);">
                                            <label for="customFile" id="labelimg5" class="custom-file-label"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3" style="margin: 10px 0;">
                                <div class="card">
                                    <div class="card-header bg-green">
                                        <h4 class="md-title text-center text-white">
                                            Front View
                                        </h4>
                                    </div>
                                    <div class="card-body">
                                        <img id="imgid6" src="{{ asset('images/sample_1/car/3.png') }}" alt="" class="" style="height: 300px;">
                                    </div>
                                    <div class="card-footer">
                                        <div class="custom-file overflow-hidden">
                                            <input id="customFile6" type="file" class="custom-file-input" onchange="readURL(this,imgid6,labelimg6);">
                                            <label for="customFile" id="labelimg6" class="custom-file-label"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-9">
                            <hr>
                            <span class="float-left">
                                <input type="checkbox" name="agreed_">&nbsp;
                                <small>By clicking Submit, you have agree to our <a href="" data-toggle="modal" data-target="#terms_and_condtion">Terms and Condition</a>.</small>
                            </span>
                            <button type="button" class="btn btn-success float-right" id="submit_form_button" data-toggle="modal" data-target="#submit_form_modal" style="font-size: 18px; padding: 10px 25px !important;" disabled=""><i class="far fa-paper-plane"></i> &nbsp; Submit</button>
                        </div>
                        </div>
                       
                    </form>
                <!-- </div> -->
            <!-- </div> -->
        </div>
    </div>


    <div class="modal fade" id="terms_and_condtion" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4>Terms</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <hr>
                    <h4>Conditions</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="submit_form_modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="padding: 0 15px;">
                    <div class="row no-gutter">
                        <div class="col-md-12 text-center">
                            <p class="modal-title" style="font-size: 18px; padding: 10px;">Thank you for trying our service! Your form will be submitted shortly.</p>
                            <img src="{{ asset('images/sample_1/email_sending.gif') }}" style="width: 100%; height: 350px;">
                        </div>                    
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</section>

@include('landing_page.footer')


<script>
    $(document).ready(function() {
        $('input[name=agreed_]').click(function() {
            if($(this).prop("checked") == true) {
                $('#submit_form_button').prop("disabled", false);
            } else if($(this).prop("checked") == false){
                $('#submit_form_button').prop("disabled", true);
            }
        });
    });
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
