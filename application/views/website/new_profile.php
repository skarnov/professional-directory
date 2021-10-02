<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $title; ?></title>
        <!-- META TAGS -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- FAV ICON(BROWSER TAB ICON) -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/frontend/images/fav.ico" type="image/x-icon">
        <!-- GOOGLE FONT -->
        <link href="https://fonts.googleapis.com/css?family=Poppins%7CQuicksand:500,700" rel="stylesheet">
        <!-- FONTAWESOME ICONS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/font-awesome.min.css">
        <!-- ALL CSS FILES -->
        <link href="<?php echo base_url(); ?>assets/frontend/css/materialize.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/frontend/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/frontend/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
        <link href="<?php echo base_url(); ?>assets/frontend/css/responsive.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/frontend/css/ARNOV.css" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!--TOP SEARCH SECTION-->
        <section class="bottomMenu dir-il-top-fix">
            <div class="container top-search-main">
                <div class="row">
                    <div class="ts-menu">
                        <!--SECTION: LOGO-->
                        <div class="ts-menu-1">
                            <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/frontend/images/aff-logo.png" alt=""> </a>
                        </div>
                        <!--SECTION: BROWSE CATEGORY(NOTE:IT'S HIDE ON MOBILE & TABLET VIEW)-->

                        <!--SECTION: SEARCH BOX-->
                        <div class="ts-menu-3">
                            <div class="">
                                <form class="tourz-search-form tourz-top-search-form">
                                    <div class="input-field">
                                        <input type="text" id="top-select-city" class="autocomplete">
                                        <label for="top-select-city">Enter city</label>
                                    </div>
                                    <div class="input-field">
                                        <input type="text" id="top-select-search" class="autocomplete">
                                        <label for="top-select-search" class="search-hotel-type">Find expert professionals and companies contact address, phone number</label>
                                    </div>
                                    <div class="input-field">
                                        <input type="submit" value="" class="waves-effect waves-light tourz-top-sear-btn"> 
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--SECTION: REGISTER,SIGNIN AND ADD YOUR BUSINESS-->
                        <div class="ts-menu-4">
                            <div class="v3-top-ri">
                                <ul>
                                    <li><a href="login.html" class="v3-menu-sign"><i class="fa fa-sign-in"></i> Sign In</a> </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--DASHBOARD-->
        <section>
            <div class="tz">
                <!--LEFT SECTION-->
                <div class="tz-l" style="margin-top: -12px;">

                    <div class="tz-l-2">
                        <ul>
                            <!--                            <li>
                                                            <a href="<?php echo base_url(); ?>home" class="tz-lma"><img src="images/icon/dbl1.png" alt="" /> My Dashboard</a>
                                                        </li>-->
                            <li>
                                <a href="<?php echo base_url(); ?>home" class="tz-lma"><img src="images/icon/dbl1.png" alt="" /> Home</a>
                            </li>
                            <!--                            <li>
                                                            <a href="<?php echo base_url(); ?>home" class="tz-lma"><img src="images/icon/dbl1.png" alt="" /> Create Account</a>
                                                        </li>-->
                            <!--                            <li>
                                                            <a href=""><img src="images/icon/dbl1.png" alt="" /> Basic Info</a>
                                                        </li>
                                                        <li>
                                                            <a href="db-all-listing.html"><img src="images/icon/dbl2.png" alt="" /> Summary</a>
                                                        </li>
                                                        <li>
                                                            <a href="db-listing-add.html" ><img src="images/icon/dbl3.png" alt="" /> Portfolio</a>
                                                        </li>
                                                        <li>
                                                            <a href="db-listing-add.html" ><img src="images/icon/dbl3.png" alt="" /> Education</a>
                                                        </li>
                                                        <li>
                                                            <a href="db-listing-add.html" ><img src="images/icon/dbl3.png" alt="" /> Employment History</a>
                                                        </li>
                                                        <li>
                                                            <a href="db-listing-add.html" ><img src="images/icon/dbl3.png" alt="" /> Experience</a>
                                                        </li>
                                                        <li>
                                                            <a href="db-listing-add.html" ><img src="images/icon/dbl3.png" alt="" /> Certification</a>
                                                        </li>
                                                        <li>
                                                            <a href="db-listing-add.html" ><img src="images/icon/dbl3.png" alt="" /> Professional Skills</a>
                                                        </li>
                                                        <li>
                                                            <a href="db-listing-add.html" ><img src="images/icon/dbl3.png" alt="" /> Languages</a>
                                                        </li>
                                                        <li>
                                                            <a href="db-listing-add.html" ><img src="images/icon/dbl3.png" alt="" /> Membership</a>
                                                        </li>
                                                        <li>
                                                            <a href="db-message.html"><img src="images/icon/dbl14.png" alt="" /> Honors & Awards</a>
                                                        </li>
                                                        <li>
                                                            <a href="db-review.html"><img src="images/icon/dbl13.png" alt="" /> Hobbies & Interests</a>
                                                        </li>
                                                        <li>
                                                            <a href="db-review.html"><img src="images/icon/dbl13.png" alt="" /> References</a>
                                                        </li>-->

                            <!--                            <li>
                                                            <a href="#!"><img src="images/icon/dbl12.png" alt="" /> Log Out</a>
                                                        </li>-->
                        </ul>
                    </div>
                </div>
                <!--CENTER SECTION-->
                <div class="tz-2">
                    <div class="tz-2-com tz-2-main">
                        <h4>Join us</h4>
                        <div class="db-list-com tz-db-table">
                            <div class="ds-boar-title">
                                <h2>Create Account</h2>
                                <p>All the Lorem Ipsum generators on the All the Lorem Ipsum generators on the</p>
                            </div>
                            <div class="hom-cre-acc-left hom-cre-acc-right">
                                <div class="">
                                    <form action="<?php echo base_url(); ?>home/save_user" method="POST">
                                        <?php if ($this->session->flashdata('save_user')): ?>
                                            <div class="row">
                                                <div class="alert alert-block alert-danger">
                                                    <a class="close" data-dismiss="alert" href="#">×</a>
                                                    <p>
                                                        <?php echo $this->session->flashdata('save_user'); ?>
                                                    </p>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input name="first_name" value="<?php echo set_value('first_name'); ?>" id="first_name" type="text" class="validate">
                                                <label for="first_name">First Name</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input name="last_name" value="<?php echo set_value('last_name'); ?>" id="last_name" type="text" class="validate">
                                                <label for="last_name">Last Name</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input name="email" value="<?php echo set_value('email'); ?>" id="email" type="email" class="validate">
                                                <label for="email">Email</label>
                                                <?php echo form_error('email'); ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input name="password" id="password" type="password" class="validate">
                                                <label for="password">Password</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input name="confirm_password" id="password" type="password" class="validate">
                                                <label for="password">Confirm Password</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s8">
                                                <select name="resume_id">
                                                    <option value="-1" disabled selected>Select Resume Category</option>
                                                    <?php
                                                    foreach ($all_resumes as $v_resume) {
                                                        ?>
                                                        <option value="<?php echo $v_resume->pk_resume_id; ?> <?php echo set_value('resume_id'); ?>"><?php echo $v_resume->name; ?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="input-field col s4">
                                                <select name="sex">
                                                    <option value="-1" disabled selected>Gender</option>
                                                    <option value="Male <?php echo set_value('Male'); ?>">Male</option>
                                                    <option value="Female <?php echo set_value('Female'); ?>">Female</option>
                                                    <option value="Other <?php echo set_value('Other'); ?>">Other</option>
                                                </select>
                                            </div>
                                        </div>



                                        <!--                                        <div class="row">
                                                                                    <div class="input-field col s6">
                                                                                        <input name="father_name" id="father_name" type="text" class="validate">
                                                                                        <label for="father_name">Father's Name</label>
                                                                                    </div>
                                                                                    <div class="input-field col s6">
                                                                                        <input name="mother_name" id="mother_name" type="text" class="validate">
                                                                                        <label for="mother_name">Mother's Name</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="input-field col s12">
                                                                                        <input name="rusume_title" id="rusume_title" type="text" class="validate">
                                                                                        <label for="rusume_title">Resume Title</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="input-field col s12">
                                                                                        <input type="text" class="validate">
                                                                                        <label class="">Date of Birth</label>
                                                                                    </div>
                                                                                </div>-->
                                        <!--                                        <div class="row">
                                                                                    
                                                                                </div>-->


                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input name="mobile" value="<?php echo set_value('mobile'); ?>" id="mobile" type="text" class="validate">
                                                <label for="mobile">Mobile</label>
                                                <?php echo form_error('mobile'); ?>
                                            </div>
                                        </div>
                                        <!--
                                        
                                                                                <div class="row">
                                                                                    <div class="input-field col s12">
                                                                                        <input id="religion" type="text" class="validate">
                                                                                        <label for="religion">Religion</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="input-field col s12">
                                                                                        <select>
                                                                                            <option value="" disabled selected>Marital Status</option>
                                                                                            <option value="Single">Single</option>
                                                                                            <option value="Married">Married</option>
                                                                                            <option value="Unmarried">Unmarried</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="input-field col s12">
                                                                                        <input id="nationality" type="text" class="validate">
                                                                                        <label for="nationality">Nationality</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="input-field col s12">
                                                                                        <input id="permanent_address" type="text" class="validate">
                                                                                        <label for="permanent_address">Permanent Address</label>
                                                                                    </div>
                                                                                </div>
                                                                                
                                                                                
                                                                                <div id="locationField" class="row">
                                                                                    <div class="input-field col s12">
                                                                                        <input id="autocomplete" onFocus="geolocate()" placeholder="Present City" type="text" class="validate">
                                                                                        <label for="autocomplete">Present City</label>
                                                                                    </div>
                                                                                </div>
                                                                                <table id="address" style="display:none;">
                                                                                    <tr>
                                                                                        <td class="label">Street address</td>
                                                                                        <td class="slimField">
                                                                                            <input class="field" id="street_number" disabled="true"></input>
                                                                                        </td>
                                                                                        <td class="wideField" colspan="2">
                                                                                            <input class="field" id="route" disabled="true"></input>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class="label">City</td>
                                                                                        <td class="wideField" colspan="3">
                                                                                            <input name="city" class="field" id="locality" disabled="true"></input>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class="label">State</td>
                                                                                        <td class="slimField"><input class="field" id="administrative_area_level_1" disabled="true"></input></td>
                                                                                        <td class="label">Zip code</td>
                                                                                        <td class="wideField">
                                                                                            <input class="field" id="postal_code" disabled="true"></input>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class="label">Country</td>
                                                                                        <td class="wideField" colspan="3">
                                                                                            <input class="field" id="country" disabled="true"></input>
                                                                                        </td>
                                                                                    </tr>-->
                                        </table>
                                        <script>
                                            var placeSearch, autocomplete;
                                            var componentForm = {
                                                street_number: 'short_name',
                                                route: 'long_name',
                                                locality: 'long_name',
                                                administrative_area_level_1: 'short_name',
                                                country: 'long_name',
                                                postal_code: 'short_name'
                                            };
                                            function initAutocomplete() {
                                                // Create the autocomplete object, restricting the search to geographical
                                                // location types.
                                                autocomplete = new google.maps.places.Autocomplete(
                                                        /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
                                                        {types: ['geocode']});

                                                // When the user selects an address from the dropdown, populate the address
                                                // fields in the form.
                                                autocomplete.addListener('place_changed', fillInAddress);
                                            }

                                            function fillInAddress() {
                                                // Get the place details from the autocomplete object.
                                                var place = autocomplete.getPlace();
                                                for (var component in componentForm) {
                                                    document.getElementById(component).value = '';
                                                    document.getElementById(component).disabled = false;
                                                }

                                                // Get each component of the address from the place details
                                                // and fill the corresponding field on the form.
                                                for (var i = 0; i < place.address_components.length; i++) {
                                                    var addressType = place.address_components[i].types[0];
                                                    if (componentForm[addressType]) {
                                                        var val = place.address_components[i][componentForm[addressType]];
                                                        document.getElementById(addressType).value = val;
                                                    }
                                                }
                                            }

                                            // Bias the autocomplete object to the user's geographical location,
                                            // as supplied by the browser's 'navigator.geolocation' object.
                                            function geolocate() {
                                                if (navigator.geolocation) {
                                                    navigator.geolocation.getCurrentPosition(function (position) {
                                                        var geolocation = {
                                                            lat: position.coords.latitude,
                                                            lng: position.coords.longitude
                                                        };
                                                        var circle = new google.maps.Circle({
                                                            center: geolocation,
                                                            radius: position.coords.accuracy
                                                        });
                                                        autocomplete.setBounds(circle.getBounds());
                                                    });
                                                }
                                            }
                                        </script>
                                        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvey0q0kHdCf2HFQLOqYqJWpMS6Mnic0I&libraries=places&callback=initAutocomplete"
                                                async defer>
                                        </script>
                                        <!--                                        <div class="row">
                                                                                    <div class="input-field col s12">
                                                                                        <select>
                                                                                            <option value="" disabled selected>Current Career Level</option>
                                                                                            <option value="1">Student</option>
                                                                                            <option value="2">Entry Level</option>
                                                                                            <option value="3">Experienced (Non-Manager)</option>
                                                                                            <option value="4">Manager (Manager/Supervisor of Staff)</option>
                                                                                            <option value="5">Executive (SVP, VP, Department Head etc)</option>
                                                                                            <option value="6">Senior Executive (President, CFO etc)</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="input-field col s12">
                                                                                        <select>
                                                                                            <option value="" disabled selected>Education Level</option>
                                                                                            <option value="1">Under SSC</option>
                                                                                            <option value="2">SSC</option>
                                                                                            <option value="3">HSC</option>
                                                                                            <option value="4">Bachelor/Honors</option>
                                                                                            <option value="5">Masters</option>
                                                                                            <option value="6">PHD</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>-->



                                        <!--                                        <div class="row">
                                                                                    <div class="input-field col s12">
                                                                                        <textarea id="textarea1" class="materialize-textarea"></textarea>
                                                                                        <label for="textarea1">Listing Descriptions</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="db-v2-list-form-inn-tit">
                                                                                        <h5>Social Media Informations:</h5>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="input-field col s12">
                                                                                        <input type="text" class="validate">
                                                                                        <label>www.facebook.com/directory</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="input-field col s12">
                                                                                        <input type="text" class="validate">
                                                                                        <label>www.googleplus.com/directory</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="input-field col s12">
                                                                                        <input type="text" class="validate">
                                                                                        <label>www.twitter.com/directory</label>
                                                                                    </div>
                                                                                </div>	
                                                                                <div class="row">
                                                                                    <div class="db-v2-list-form-inn-tit">
                                                                                        <h5>Listing Guarantee:</h5>
                                                                                    </div>
                                                                                </div>	
                                                                                <div class="row">
                                                                                    <div class="input-field col s12">
                                                                                        <select>
                                                                                            <option value="" disabled selected>Select Service Guarantee</option>
                                                                                            <option value="1">Upto 2 month of service</option>
                                                                                            <option value="2">Upto 6 month of service</option>
                                                                                            <option value="3">Upto 1 year of service</option>
                                                                                            <option value="4">Upto 2 year of service</option>
                                                                                            <option value="5">Upto 5 year of service</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>									
                                                                                <div class="row">
                                                                                    <div class="input-field col s12">
                                                                                        <select>
                                                                                            <option value="" disabled selected>Are you a Professionals for this service?</option>
                                                                                            <option value="1">Yes</option>
                                                                                            <option value="2">No</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>									-->
                                        <!--                                        <div class="row">
                                                                                    <div class="input-field col s12">
                                                                                        <select>
                                                                                            <option value="" disabled selected>Insurance Limits</option>
                                                                                            <option value="1">Upto $5,000</option>
                                                                                            <option value="2">Upto $10,000</option>
                                                                                            <option value="3">Upto $15,000</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>	
                                                                                <div class="row">
                                                                                    <div class="db-v2-list-form-inn-tit">
                                                                                        <h5>Google Map:</h5>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="input-field col s12">
                                                                                        <input type="text" class="validate">
                                                                                        <label>Past your iframe code here</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="db-v2-list-form-inn-tit">
                                                                                        <h5>360 Degree View:</h5>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="input-field col s12">
                                                                                        <input type="text" class="validate">
                                                                                        <label>Past your iframe code here</label>
                                                                                    </div>
                                                                                </div>									-->
                                        <!--                                        <div class="row">
                                                                                    <div class="db-v2-list-form-inn-tit">
                                                                                        <h5>Cover Image <span class="v2-db-form-note">(image size 1350x500):<span></h5>
                                                                                                    </div>
                                                                                                    </div>-->
                                        <!--                                                            <div class="row tz-file-upload">
                                                                                                        <div class="file-field input-field">
                                                                                                            <div class="tz-up-btn"> <span>File</span>
                                                                                                                <input type="file"> </div>
                                                                                                            <div class="file-path-wrapper db-v2-pg-inp">
                                                                                                                <input class="file-path validate" type="text"> 
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>-->
                                        <!--                                        <div class="row">
                                                                                    <div class="db-v2-list-form-inn-tit">
                                                                                        <h5>Profile Photo <span class="v2-db-form-note">(Size 750x500)</span></h5>
                                                                                    </div>
                                                                                </div>-->
                                        <!--                                        <div class="row tz-file-upload">
                                                                                    <div class="file-field input-field">
                                                                                        <div class="tz-up-btn"> <span>File</span>
                                                                                            <input type="file" multiple> </div>
                                                                                        <div class="file-path-wrapper db-v2-pg-inp">
                                                                                            <input class="file-path validate" type="text"> 
                                                                                        </div>
                                                                                    </div>
                                                                                </div>									-->
                                        <!--                                                                                <div class="row">
                                                                                                                            <div class="db-v2-list-form-inn-tit">
                                                                                                                                <h5>Services Offered <span class="v2-db-form-note">(Enter service name and upload service image note:size 400x250):<span>:</h5>
                                                                                                                                            </div>
                                                                                                                                            </div>	-->
                                        <!--                                                                                                    <div class="row">
                                                                                                                                                <div class="input-field col s6">
                                                                                                                                                    <input type="text" class="validate">
                                                                                                                                                    <label>Service Name (ex:Room Booking)</label>
                                                                                                                                                </div>
                                                                                                                                                <div class="col s6">
                                                                                                                                                    <div class="row tz-file-upload">
                                                                                                                                                        <div class="file-field input-field">
                                                                                                                                                            <div class="tz-up-btn"> <span>File</span>
                                                                                                                                                                <input type="file"> </div>
                                                                                                                                                            <div class="file-path-wrapper db-v2-pg-inp">
                                                                                                                                                                <input class="file-path validate" type="text"> 
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                </div>										
                                                                                                                                            </div>
                                                                                                                                            <div class="row">
                                                                                                                                                <div class="input-field col s6">
                                                                                                                                                    <input type="text" class="validate">
                                                                                                                                                    <label>Service Name (ex:Java Development)</label>
                                                                                                                                                </div>
                                                                                                                                                <div class="col s6">
                                                                                                                                                    <div class="row tz-file-upload">
                                                                                                                                                        <div class="file-field input-field">
                                                                                                                                                            <div class="tz-up-btn"> <span>File</span>
                                                                                                                                                                <input type="file"> </div>
                                                                                                                                                            <div class="file-path-wrapper db-v2-pg-inp">
                                                                                                                                                                <input class="file-path validate" type="text"> 
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                </div>										
                                                                                                                                            </div>
                                                                                                                                            <div class="row">
                                                                                                                                                <div class="input-field col s6">
                                                                                                                                                    <input type="text" class="validate">
                                                                                                                                                    <label>Service Name (ex:Home Lones)</label>
                                                                                                                                                </div>
                                                                                                                                                <div class="col s6">
                                                                                                                                                    <div class="row tz-file-upload">
                                                                                                                                                        <div class="file-field input-field">
                                                                                                                                                            <div class="tz-up-btn"> <span>File</span>
                                                                                                                                                                <input type="file"> </div>
                                                                                                                                                            <div class="file-path-wrapper db-v2-pg-inp">
                                                                                                                                                                <input class="file-path validate" type="text"> 
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                </div>										
                                                                                                                                            </div>
                                                                                                                                            <div class="row">
                                                                                                                                                <div class="input-field col s6">
                                                                                                                                                    <input type="text" class="validate">
                                                                                                                                                    <label>Service Name (ex:Property Rent)</label>
                                                                                                                                                </div>
                                                                                                                                                <div class="col s6">
                                                                                                                                                    <div class="row tz-file-upload">
                                                                                                                                                        <div class="file-field input-field">
                                                                                                                                                            <div class="tz-up-btn"> <span>File</span>
                                                                                                                                                                <input type="file"> </div>
                                                                                                                                                            <div class="file-path-wrapper db-v2-pg-inp">
                                                                                                                                                                <input class="file-path validate" type="text"> 
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                </div>										
                                                                                                                                            </div>
                                                                                                                                            <div class="row">
                                                                                                                                                <div class="input-field col s6">
                                                                                                                                                    <input type="text" class="validate">
                                                                                                                                                    <label>Service Name (ex:Job Trainings)</label>
                                                                                                                                                </div>
                                                                                                                                                <div class="col s6">
                                                                                                                                                    <div class="row tz-file-upload">
                                                                                                                                                        <div class="file-field input-field">
                                                                                                                                                            <div class="tz-up-btn"> <span>File</span>
                                                                                                                                                                <input type="file"> </div>
                                                                                                                                                            <div class="file-path-wrapper db-v2-pg-inp">
                                                                                                                                                                <input class="file-path validate" type="text"> 
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                </div>										
                                                                                                                                            </div>
                                                                                                                                            <div class="row">
                                                                                                                                                <div class="input-field col s6">
                                                                                                                                                    <input type="text" class="validate">
                                                                                                                                                    <label>Service Name (ex:Travels)</label>
                                                                                                                                                </div>
                                                                                                                                                <div class="col s6">
                                                                                                                                                    <div class="row tz-file-upload">
                                                                                                                                                        <div class="file-field input-field">
                                                                                                                                                            <div class="tz-up-btn"> <span>File</span>
                                                                                                                                                                <input type="file"> </div>
                                                                                                                                                            <div class="file-path-wrapper db-v2-pg-inp">
                                                                                                                                                                <input class="file-path validate" type="text"> 
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                </div>										
                                                                                                                                            </div>									-->
                                        <div class="row">
                                            <div class="input-field col s12 v2-mar-top-40"> <button type="submit" class="waves-effect waves-light btn-large full-btn">Create Account</button> </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--RIGHT SECTION-->
<!--                                <div class="tz-l-1">
                                    <ul>
                                        <li><img src="<?php echo base_url(); ?>assets/frontend/images/db-profile.jpg" alt="" /> </li>
                                        <li>80% Profile Completion</li>
                
                                    </ul>


                                </div>-->
            </div>
        </section>
        <!--END DASHBOARD-->
        <!--MOBILE APP-->

        <!--FOOTER SECTION-->
        <footer id="colophon" class="site-footer clearfix">
            <div id="quaternary" class="sidebar-container " role="complementary">
                <div class="sidebar-inner">
                    <div class="widget-area clearfix">
                        <div id="azh_widget-2" class="widget widget_azh_widget">
                            <div data-section="section">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-4 col-md-3 foot-logo"> <img src="<?php echo base_url(); ?>assets/frontend/images/foot-logo.png" alt="logo">
                                            <p class="hasimg">Worlds's No. 1 Local Business Directory Website.</p>
                                            <p class="hasimg">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                        </div>
                                        <div class="col-sm-4 col-md-3">
                                            <h4>Support & Help</h4>
                                            <ul class="two-columns">
                                                <li> <a href="advertise.html">Advertise us</a> </li>
                                                <li> <a href="about-us.html">About Us</a> </li>
                                                <li> <a href="customer-reviews.html">Review</a> </li>
                                                <li> <a href="how-it-work.html">How it works </a> </li>
                                                <li> <a href="add-listing.html">Add Business</a> </li>
                                                <li> <a href="#!">Register</a> </li>
                                                <li> <a href="#!">Login</a> </li>
                                                <li> <a href="#!">Quick Enquiry</a> </li>
                                                <li> <a href="#!">Ratings </a> </li>
                                                <li> <a href="trendings.html">Top Trends</a> </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4 col-md-3">
                                            <h4>Popular Services</h4>
                                            <ul class="two-columns">
                                                <li> <a href="#!">Hotels</a> </li>
                                                <li> <a href="#!">Hospitals</a> </li>
                                                <li> <a href="#!">Transportation</a> </li>
                                                <li> <a href="#!">Real Estates </a> </li>
                                                <li> <a href="#!">Automobiles</a> </li>
                                                <li> <a href="#!">Resorts</a> </li>
                                                <li> <a href="#!">Education</a> </li>
                                                <li> <a href="#!">Sports Events</a> </li>
                                                <li> <a href="#!">Web Services </a> </li>
                                                <li> <a href="#!">Skin Care</a> </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4 col-md-3">
                                            <h4>Cities Covered</h4>
                                            <ul class="two-columns">
                                                <li> <a href="#!">Atlanta</a> </li>
                                                <li> <a href="#!">Austin</a> </li>
                                                <li> <a href="#!">Baltimore</a> </li>
                                                <li> <a href="#!">Boston </a> </li>
                                                <li> <a href="#!">Chicago</a> </li>
                                                <li> <a href="#!">Indianapolis</a> </li>
                                                <li> <a href="#!">Las Vegas</a> </li>
                                                <li> <a href="#!">Los Angeles</a> </li>
                                                <li> <a href="#!">Louisville </a> </li>
                                                <li> <a href="#!">Houston</a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-section="section" class="foot-sec2">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4>Payment Options</h4>
                                            <p class="hasimg"> <img src="<?php echo base_url(); ?>assets/frontend/images/payment.png" alt="payment"> </p>
                                        </div>
                                        <div class="col-sm-4">
                                            <h4>Address</h4>
                                            <p>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A. Landmark : Next To Airport</p>
                                            <p> <span class="strong">Phone: </span> <span class="highlighted">+01 1245 2541</span> </p>
                                        </div>
                                        <div class="col-sm-5 foot-social">
                                            <h4>Follow with us</h4>
                                            <p>Join the thousands of other There are many variations of passages of Lorem Ipsum available</p>
                                            <ul>
                                                <li><a href="#!"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                                                <li><a href="#!"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
                                                <li><a href="#!"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                                                <li><a href="#!"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
                                                <li><a href="#!"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
                                                <li><a href="#!"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .widget-area -->
                </div>
                <!-- .sidebar-inner -->
            </div>
            <!-- #quaternary -->
        </footer>
        <!--COPY RIGHTS-->
        <section class="copy">
            <div class="container">
                <p>Copyrights © 2018 3devs IT Ltd. &nbsp;&nbsp;All Rights Reserved. </p>
            </div>
        </section>
        <!--QUOTS POPUP-->
        <section>
            <!-- GET QUOTES POPUP -->
            <div class="modal fade dir-pop-com" id="list-quo" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header dir-pop-head">
                            <button type="button" class="close" data-dismiss="modal">×</button>
                            <h4 class="modal-title">Get a Quotes</h4>
                            <!--<i class="fa fa-pencil dir-pop-head-icon" aria-hidden="true"></i>-->
                        </div>
                        <div class="modal-body dir-pop-body">
                            <form method="post" class="form-horizontal">
                                <!--LISTING INFORMATION-->
                                <div class="form-group has-feedback ak-field">
                                    <label class="col-md-4 control-label">Full Name *</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="fname" placeholder="" required> </div>
                                </div>
                                <!--LISTING INFORMATION-->
                                <div class="form-group has-feedback ak-field">
                                    <label class="col-md-4 control-label">Mobile</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="mobile" placeholder=""> </div>
                                </div>
                                <!--LISTING INFORMATION-->
                                <div class="form-group has-feedback ak-field">
                                    <label class="col-md-4 control-label">Email</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="email" placeholder=""> </div>
                                </div>
                                <!--LISTING INFORMATION-->
                                <div class="form-group has-feedback ak-field">
                                    <label class="col-md-4 control-label">Message</label>
                                    <div class="col-md-8 get-quo">
                                        <textarea class="form-control"></textarea>
                                    </div>
                                </div>
                                <!--LISTING INFORMATION-->
                                <div class="form-group has-feedback ak-field">
                                    <div class="col-md-6 col-md-offset-4">
                                        <input type="submit" value="SUBMIT" class="pop-btn"> </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- GET QUOTES Popup END -->
        </section>
        <!--SCRIPT FILES-->
        <script src="<?php echo base_url(); ?>assets/frontend/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/frontend/js/bootstrap.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/frontend/js/materialize.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/frontend/js/custom.js"></script>
    </body>


    <!-- Mirrored from rn53themes.net/themes/demo/directory/db-listing-add.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Mar 2018 10:50:59 GMT -->
</html>