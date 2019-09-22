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
</style>


<section class="section section-top section-full" style="max-height: 50vh;">
    <!-- Cover -->
    <div class="bg-cover" style="background-image: url({{ asset('images/sample_1/email.jpg') }});"></div>
        <!-- Overlay -->
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-start align-items-center">
                <div class="col-md-12">
                    <div class="banner-content">
                        <h1 class="text-white text-center mb-4 display-4 font-weight-bold">
                            Submit Form
                        </h1>
                    </div>
                </div>
            </div>
        </div>
</section>

<section class="section" id="">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center">
                <div class="card" style="padding: 40px 20px;">
                    <h2 class="lg-title mb-2 section-title color-green">Have any <span class="color-white bg-green px-3">questions on mind?</span></h2>
                    <p class="mb-5">
                        Our duty towards you is to share our experience we're reaching in our work path with you.
                    </p>
                    <form action="" method="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="float-left">Name:</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="e.g: Julia B.">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="float-left">Email: (<b class="required_fields">*</b>)</label>
                                    <input type="text" name="email" id="email" class="form-control" placeholder="e.g: car_energies@gmail.com" required="required">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="float-left">Country:</label>
                                    <select class=" form-control">
                                        <option selected disabled="">Select Country</option>
                                        <option value="1">United States of America</option>
                                        <option value="2">New Zealand</option>
                                        <option value="3">Oman</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="float-left">State:</label>
                                    <select class=" form-control">
                                        <option selected disabled="">Select State</option>
                                        <option value="1">United States of America</option>
                                        <option value="2">New Zealand</option>
                                        <option value="3">Oman</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="float-left">City:</label>
                                    <select class=" form-control">
                                        <option selected disabled="">Select City</option>
                                        <option value="1">United States of America</option>
                                        <option value="2">New Zealand</option>
                                        <option value="3">Oman</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12"><hr></div>
                            <div class="col-md-6" style="width: auto; margin: 10px 0;">
                                <div class="card">
                                    <div class="card-header bg-green">
                                        <h4 class="md-title text-center text-white">
                                            Front of car with Hood up
                                        </h4>
                                    </div>
                                    <div class="card-body">
                                        <img id="imgid1" src="{{ asset('images/sample_1/car/front-hood.png') }}" alt="" width="100%" class="" style="height: 300px;">
                                    </div>
                                    <div class="card-footer">
                                        <div class="custom-file overflow-hidden">
                                            <input id="customFile" type="file" class="custom-file-input" onchange="readURL(this,imgid1,labelimg1);">
                                            <label for="customFile" id="labelimg1" class="custom-file-label"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6" style="width: auto; margin: 10px 0;">
                                <div class="card">
                                    <div class="card-header bg-green">
                                        <h4 class="md-title text-center text-white">
                                            Rear with open compartment 
                                        </h4>
                                    </div>
                                    <div class="card-body">
                                        <img id="imgid2" src="{{ asset('images/sample_1/car/rear.png') }}" alt="" width="100%" class="" style="height: 300px;">
                                    </div>
                                    <div class="card-footer">
                                        <div class="custom-file overflow-hidden">
                                            <input id="customFile" type="file" class="custom-file-input" onchange="readURL(this,imgid2,labelimg2);">
                                            <label for="customFile" id="labelimg2" class="custom-file-label"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6" style="width: auto; margin: 10px 0;">
                                <div class="card">
                                    <div class="card-header bg-green">
                                        <h4 class="md-title text-center text-white">
                                            Left side open doors
                                        </h4>
                                    </div>
                                    <div class="card-body">
                                        <img id="imgid3" src="{{ asset('images/sample_1/car/driver-side.png') }}" alt="" width="100%" class="" style="height: 300px;">
                                    </div>
                                    <div class="card-footer">
                                        <div class="custom-file overflow-hidden">
                                            <input id="customFile" type="file" class="custom-file-input" onchange="readURL(this,imgid3,labelimg3);">
                                            <label for="customFile" id="labelimg3" class="custom-file-label"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6" style="width: auto; margin: 10px 0;">
                                <div class="card">
                                    <div class="card-header bg-green">
                                        <h4 class="md-title text-center text-white">
                                            Right side open doors
                                        </h4>
                                    </div>
                                    <div class="card-body">
                                        <img id="imgid4" src="{{ asset('images/sample_1/car/left-side.png') }}" alt="" width="100%" class="" style="height: 300px;">
                                    </div>
                                    <div class="card-footer">
                                        <div class="custom-file overflow-hidden">
                                            <input id="customFile" type="file" class="custom-file-input" onchange="readURL(this,imgid4,labelimg4);">
                                            <label for="customFile" id="labelimg4" class="custom-file-label"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <hr>
                                <span class="float-left">
                                    <input type="checkbox" name="agreed_">&nbsp;
                                    <small>By clicking Submit, you have agree to our <a href="" data-toggle="modal" data-target="#terms_and_condtion">Terms and Condition</a>.</small>
                                </span>
                                <button type="button" class="btn btn-success float-right" id="submit_form_button" data-toggle="modal" data-target="#submit_form_modal" style="font-size: 18px; padding: 10px 25px !important;" disabled=""><i class="far fa-paper-plane"></i> &nbsp; Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
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

@include('landing_page.sample_1.footer')


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
