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


<section class="section" id="submit_div_form">
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
                    <form id="submit_form" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                        <input type="hidden" name="type" value="form submit">
                        <input type="hidden" name="ip_address" value="">
                        <div class="row justify-content-center">
                            <div class="col-md-9 col-md-offset-2">
                                <div class="alert alert-danger" id="error-msg-div" style="display: none">
                                    <button type="button" class="close" data-dismiss="alert">×</button> 
                                    <span id="error-msg"></span>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label class="float-left">Name: (<b class="required_fields">*</b>)</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="ex: Julia B.">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="float-left">Email: (<b class="required_fields">*</b>)</label>
                                    <input type="text" name="email" id="email" class="form-control" placeholder="ex: car_energies@gmail.com" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="float-left">Country: (<b class="required_fields">*</b>)</label>
                                    <input type="text" name="country" id="country" class="form-control" placeholder="ex: Philipines">
                                </div>
                            </div>
                             <div class="col-md-3">
                                <div class="form-group">
                                    <label class="float-left">State:</label>
                                    <input type="text" name="state" id="state" class="form-control" placeholder="ex: Manila">
                                </div>
                            </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                    <label class="float-left">City: (<b class="required_fields">*</b>)</label>
                                    <input type="text" name="city" id="city" class="form-control" placeholder="ex: Quezon City">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="float-left">Maker: (<b class="required_fields">*</b>)</label>
                                    <input type="text" name="maker" id="maker" class="form-control" placeholder="ex: Toyota">
                                </div>
                            </div>
                             <div class="col-md-3">
                                <div class="form-group">
                                    <label class="float-left">Model: (<b class="required_fields">*</b>)</label>
                                    <input type="text" name="model" id="model" class="form-control" placeholder="ex: Vios">
                                </div>
                            </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                    <label class="float-left">Year: (<b class="required_fields">*</b>)</label>
                                    <input type="text" name="year" id="year" class="form-control" placeholder="ex: 2019">
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
                                            <input id="fronthoodup" type="file" name="front_of_car_with_hood_up" class="custom-file-input" onchange="readURL(this,imgid1,labelimg1);">
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
                                            <input id="backhoodup" type="file" name="rear_with_open_compartment" class="custom-file-input" onchange="readURL(this,imgid2,labelimg2);">
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
                                            <input id="driverseat" type="file" name="left_side_open_doors" class="custom-file-input" onchange="readURL(this,imgid3,labelimg3);">
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
                                            <input id="left" type="file" name="left_side_view" class="custom-file-input" onchange="readURL(this,imgid4,labelimg4);">
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
                                            <input id="right" type="file" name="right_side_view" class="custom-file-input" onchange="readURL(this,imgid5,labelimg5);">
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
                                            <input id="front" type="file" name="front_view" class="custom-file-input" onchange="readURL(this,imgid6,labelimg6);">
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
                            <button type="submit" class="btn btn-success float-right" id="submit_form_button" style="font-size: 18px; padding: 10px 25px !important;" disabled=""><i class="far fa-paper-plane"></i> &nbsp; Submit</button>

                            {{-- <button type="button" class="btn btn-success float-right" id="submit_form_button" style="font-size: 18px; padding: 10px 25px !important;" disabled=""><i class="far fa-paper-plane"></i> &nbsp; Submit</button> --}}
                        </div>
                        </div>
                       
                    </form>
                <!-- </div> -->
            <!-- </div> -->
        </div>
    </div>


    <div class="modal fade" id="terms_and_condtion" tabindex="-1" role="dialog" aria-hidden="true" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body" style="height: 800px;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h2><strong>Terms and Conditions</strong></h2>

                    <p>Welcome to CarEnergies.com!</p>

                    <p>These terms and conditions outline the rules and regulations for the use of Car Energies's Website, located at www.CarEnergies.com.</p>

                    <p>By accessing this website we assume you accept these terms and conditions. Do not continue to use CarEnergies.com if you do not agree to take all of the terms and conditions stated on this page. </a>.</p>

                    <p>The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and all Agreements: "Client", "You" and "Your" refers to you, the person log on this website and compliant to the Company’s terms and conditions. "The Company", "Ourselves", "We", "Our" and "Us", refers to our Company. "Party", "Parties", or "Us", refers to both the Client and ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner for the express purpose of meeting the Client’s needs in respect of provision of the Company’s stated services, in accordance with and subject to, prevailing law of Netherlands. Any use of the above terminology or other words in the singular, plural, capitalization and/or he/she or they, are taken as interchangeable and therefore as referring to same.</p>

                    <h3><strong>Cookies</strong></h3>

                    <p>We employ the use of cookies. By accessing CarEnergies.com, you agreed to use cookies in agreement with the Car Energies's Privacy Policy.</p>

                    <p>Most interactive websites use cookies to let us retrieve the user’s details for each visit. Cookies are used by our website to enable the functionality of certain areas to make it easier for people visiting our website. Some of our affiliate/advertising partners may also use cookies.</p>

                    <h3><strong>License</strong></h3>

                    <p>Unless otherwise stated, Car Energies and/or its licensors own the intellectual property rights for all material on CarEnergies.com. All intellectual property rights are reserved. You may access this from CarEnergies.com for your own personal use subjected to restrictions set in these terms and conditions.</p>

                    <p>You must not:</p>
                    <ul>
                        <li>Republish material from CarEnergies.com</li>
                        <li>Sell, rent or sub-license material from CarEnergies.com</li>
                        <li>Reproduce, duplicate or copy material from CarEnergies.com</li>
                        <li>Redistribute content from CarEnergies.com</li>
                    </ul>

                    <p>This Agreement shall begin on the date hereof.</p>

                    <p>Parts of this website offer an opportunity for users to post and exchange opinions and information in certain areas of the website. Car Energies does not filter, edit, publish or review Comments prior to their presence on the website. Comments do not reflect the views and opinions of Car Energies,its agents and/or affiliates. Comments reflect the views and opinions of the person who post their views and opinions. To the extent permitted by applicable laws, Car Energies shall not be liable for the Comments or for any liability, damages or expenses caused and/or suffered as a result of any use of and/or posting of and/or appearance of the Comments on this website.</p>

                    <p>Car Energies reserves the right to monitor all Comments and to remove any Comments which can be considered inappropriate, offensive or causes breach of these Terms and Conditions.</p>

                    <p>You warrant and represent that:</p>

                    <ul>
                        <li>You are entitled to post the Comments on our website and have all necessary licenses and consents to do so;</li>
                        <li>The Comments do not invade any intellectual property right, including without limitation copyright, patent or trademark of any third party;</li>
                        <li>The Comments do not contain any defamatory, libelous, offensive, indecent or otherwise unlawful material which is an invasion of privacy</li>
                        <li>The Comments will not be used to solicit or promote business or custom or present commercial activities or unlawful activity.</li>
                    </ul>

                    <p>You hereby grant Car Energies a non-exclusive license to use, reproduce, edit and authorize others to use, reproduce and edit any of your Comments in any and all forms, formats or media.</p>

                    <h3><strong>Hyperlinking to our Content</strong></h3>

                    <p>The following organizations may link to our Website without prior written approval:</p>

                    <ul>
                        <li>Government agencies;</li>
                        <li>Search engines;</li>
                        <li>News organizations;</li>
                        <li>Online directory distributors may link to our Website in the same manner as they hyperlink to the Websites of other listed businesses; and</li>
                        <li>System wide Accredited Businesses except soliciting non-profit organizations, charity shopping malls, and charity fundraising groups which may not hyperlink to our Web site.</li>
                    </ul>

                    <p>These organizations may link to our home page, to publications or to other Website information so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products and/or services; and (c) fits within the context of the linking party’s site.</p>

                    <p>We may consider and approve other link requests from the following types of organizations:</p>

                    <ul>
                        <li>commonly-known consumer and/or business information sources;</li>
                        <li>dot.com community sites;</li>
                        <li>associations or other groups representing charities;</li>
                        <li>online directory distributors;</li>
                        <li>internet portals;</li>
                        <li>accounting, law and consulting firms; and</li>
                        <li>educational institutions and trade associations.</li>
                    </ul>

                    <p>We will approve link requests from these organizations if we decide that: (a) the link would not make us look unfavorably to ourselves or to our accredited businesses; (b) the organization does not have any negative records with us; (c) the benefit to us from the visibility of the hyperlink compensates the absence of Car Energies; and (d) the link is in the context of general resource information.</p>

                    <p>These organizations may link to our home page so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products or services; and (c) fits within the context of the linking party’s site.</p>

                    <p>If you are one of the organizations listed in paragraph 2 above and are interested in linking to our website, you must inform us by sending an e-mail to Car Energies. Please include your name, your organization name, contact information as well as the URL of your site, a list of any URLs from which you intend to link to our Website, and a list of the URLs on our site to which you would like to link. Wait 2-3 weeks for a response.</p>

                    <p>Approved organizations may hyperlink to our Website as follows:</p>

                    <ul>
                        <li>By use of our corporate name; or</li>
                        <li>By use of the uniform resource locator being linked to; or</li>
                        <li>By use of any other description of our Website being linked to that makes sense within the context and format of content on the linking party’s site.</li>
                    </ul>

                    <p>No use of Car Energies's logo or other artwork will be allowed for linking absent a trademark license agreement.</p>

                    <h3><strong>iFrames</strong></h3>

                    <p>Without prior approval and written permission, you may not create frames around our Webpages that alter in any way the visual presentation or appearance of our Website.</p>

                    <h3><strong>Content Liability</strong></h3>

                    <p>We shall not be hold responsible for any content that appears on your Website. You agree to protect and defend us against all claims that is rising on your Website. No link(s) should appear on any Website that may be interpreted as libelous, obscene or criminal, or which infringes, otherwise violates, or advocates the infringement or other violation of, any third party rights.</p>

                    <h3><strong>Your Privacy</strong></h3>

                    <p>Please read Privacy Policy</p>

                    <h3><strong>Reservation of Rights</strong></h3>

                    <p>We reserve the right to request that you remove all links or any particular link to our Website. You approve to immediately remove all links to our Website upon request. We also reserve the right to amen these terms and conditions and it’s linking policy at any time. By continuously linking to our Website, you agree to be bound to and follow these linking terms and conditions.</p>

                    <h3><strong>Removal of links from our website</strong></h3>

                    <p>If you find any link on our Website that is offensive for any reason, you are free to contact and inform us any moment. We will consider requests to remove links but we are not obligated to or so or to respond to you directly.</p>

                    <p>We do not ensure that the information on this website is correct, we do not warrant its completeness or accuracy; nor do we promise to ensure that the website remains available or that the material on the website is kept up to date.</p>

                    <h3><strong>Disclaimer</strong></h3>

                    <p>To the maximum extent permitted by applicable law, we exclude all representations, warranties and conditions relating to our website and the use of this website. Nothing in this disclaimer will:</p>

                    <ul>
                        <li>limit or exclude our or your liability for death or personal injury;</li>
                        <li>limit or exclude our or your liability for fraud or fraudulent misrepresentation;</li>
                        <li>limit any of our or your liabilities in any way that is not permitted under applicable law; or</li>
                        <li>exclude any of our or your liabilities that may not be excluded under applicable law.</li>
                    </ul>

                    <p>The limitations and prohibitions of liability set in this Section and elsewhere in this disclaimer: (a) are subject to the preceding paragraph; and (b) govern all liabilities arising under the disclaimer, including liabilities arising in contract, in tort and for breach of statutory duty.</p>

                    <p>As long as the website and the information and services on the website are provided free of charge, we will not be liable for any loss or damage of any nature.</p>
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
                            <p class="modal-title" style="font-size: 18px; padding: 10px;">Thank you for trying our service! Your form has been sent successfully.</p>
                            <img src="{{ asset('images/sample_1/email_sent.gif') }}" style="width: 100%; height: 350px;">
                        </div>                    
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="submit_payment_form_modal" tabindex="-1" role="dialog" aria-hidden="true">
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
                            <p class="modal-title" style="font-size: 18px; padding: 10px;">Payment form here. <b>[coming soon]</b></p>
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

    $('#submit_form').submit(function(e){
        e.preventDefault();

        var formData = new FormData(this);

        $.ajax({
            type: 'POST',
            url: "{{ url('sendemail/') }}", 
            data: formData,
            cache:false,
            contentType: false,
            processData: false,
            success: function (response) {
                console.log(response)
                // if (response == 'not free') {
                //     $('#submit_payment_form_modal').modal('show');
                // } else {
                //     var message = response.split('|');
                //     if (message[0] == 0) {
                //         $('#error-msg-div').show(); 
                //         $('#error-msg').html(message[1]); 
                //         $('html, body').animate({
                //             scrollTop: $("#submit_div_form").offset().top
                //         }, 1000);
                //     } else {
                //         $('#error-msg-div').hide(); 
                //         $('#submit_form_modal').modal('show');
                //         setTimeout(function() {
                //             // $('#name').val('');
                //             // $('#email').val('');
                //             // $('#country').val('');
                //             // $('#state').val('');
                //             // $('#city').val('');
                //             // $('#maker').val('');
                //             // $('#model').val('');
                //             // $('#year').val('');
                //             $('#submit_form_modal').modal('hide');
                //         }, 4000);
                //     }
                // }
            },
            error: function (err) {
                $('#error-msg-div').show(); 
                $('#error-msg').html(err);
            }
        });
    })

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
