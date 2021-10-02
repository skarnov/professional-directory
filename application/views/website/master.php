<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $title; ?></title>
        <!-- META TAGS -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- FAV ICON(BROWSER TAB ICON) -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/frontend/images/aq.png" type="image/x-icon">
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
        <link href="<?php echo base_url(); ?>assets/frontend/css/sajib.css" rel="stylesheet">
        <!-- Google Capacha -->
        <script type="text/javascript">
            var onloadCallback = function () {
                grecaptcha.render('html_element', {
                    'sitekey': '6LcaLlQUAAAAALuL_xxfrQKWoRmIBvY_zvBOuwZ9'
                });
            };
        </script>
        <!-- End of Google Capacha -->
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <section class="bottomMenu dir-il-top-fix">
            <div class="container top-search-main">
                <div class="row">
                    <div class="ts-menu">
                        <!--SECTION: LOGO-->
                        <div class="ts-menu-1">
                            <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/frontend/images/beta.png" alt=""> </a>
                        </div>
                        <!--SECTION: BROWSE CATEGORY(NOTE:IT'S HIDE ON MOBILE & TABLET VIEW)-->

                        <!--SECTION: SEARCH BOX-->
                        <div class="ts-menu-3">
                            <div class="display_none">
                                <form action="<?php echo base_url(); ?>cms/search_resume" method="POST" class="tourz-search-form tourz-top-search-form">
                                    <div class="input-field enter_city_header" style="padding:8px">
                                        <input type="text" placeholder="Enter a location" id="autocomplete" class="autocomplete" onFocus="geolocate()">
                                        <label for="autocomplete"></label>
                                    </div>
                                    <div class="input-field">
                                        <input type="text" placeholder="Find expert professionals and companies contact address, phone number" name="resume" id="top-select-search" class="autocomplete">
                                        <label for="top-select-search" class="search-hotel-type"></label>
                                    </div>
                                    <div class="input-field">
                                        <input style="line-height:37px;height:0.4in;padding-left: 14px;"type="submit" value="search" class="waves-effect waves-light tourz-sear-btn"> 
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="ts-menu-4">
                            <div class="dir-ho-tr" >
                                <ul style="margin-top: 0.13in;">
                                    <li></li>
                                    <?php if ($this->session->userdata('user_id')) { ?>
                                        <li><a href="<?php echo base_url(); ?>user/logout">Signout</a> </li>
                                        <li><a href="<?php echo base_url(); ?>user/my_dashboard"><i class="fa fa-plus" aria-hidden="true"></i> Dashboard</a> </li>                               
                                    <?php } else { ?>
                                        <li><a href="<?php echo base_url(); ?>home/login">Sign In</a> </li>             
                                        <li><a href="<?php echo base_url(); ?>home/index"><i class="fa fa-plus" aria-hidden="true"></i> Join us</a> </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="ts-menu-5"><span><i class="fa fa-bars" aria-hidden="true"></i></span> </div>
                        <!--MOBILE MENU CONTAINER:IT'S ONLY SHOW ON MOBILE & TABLET VIEW-->
                        <div class="mob-right-nav" data-wow-duration="0.5s">
                            <div class="mob-right-nav-close"><i class="fa fa-times" aria-hidden="true"></i> </div>
                            <ul class="mob-menu-icon">
                                <?php if ($this->session->userdata('user_id')) { ?>
                                    <li><a href="<?php echo base_url(); ?>user/logout"><i class="fa fa-sign-out"></i>Signout</a> </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>user/my_dashboard">My Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>user/account">Account Settings</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>user/basic_info">Basic Info</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>user/summary">Summary</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>user/portfolio"> Portfolio</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>user/education">Education</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>user/employment_history">Employment History</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>user/certification">Certification</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>user/professional_skills">Specialization</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>user/languages"> Languages</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>user/membership"> Membership</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>user/honors_and_awards"> Honors & Awards</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>user/hobbies_and_interests"> Hobbies & Interests</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>user/references"> References</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>user/download_cv">Download CV</a>
                                    </li>                             
                                <?php } else { ?>
                                    <li><a href="<?php echo base_url(); ?>home/login">Sign In</a> </li>             
                                    <li><a href="<?php echo base_url(); ?>home/index"><i class="fa fa-plus" aria-hidden="true"></i> Join us</a> </li>
                                <?php } ?>


                            </ul>


                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="search_mobile" style="padding-top: 62px;padding-bottom:10px;text-align:center">

<!--            <input type="text" class="form-control booking address" id="pickup" placeholder="From">
            <input type="text" class="form-control booking address" id="destination" placeholder="To">-->

            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <form action="<?php echo base_url(); ?>cms/search_resume" method="POST" class="tourz-search-form tourz-top-search-form" style="padding-bottom:10px">
                            <div class="input-field enter_city_header" style="padding:8px;display:block;float:none;margin-bottom:12px;width:100%;">
                                <input type="text" placeholder="Enter a location" id="autocompleteMobile" class="autocomplete1" onFocus="geolocate()">
                                <label for="autocompleteMobile"></label>
                            </div>
                            <div class="input-field" style="display:block;float:none;margin-bottom:12px;width:100%;">
                                <input type="text" placeholder="Find expert professionals and companies contact address, phone number" name="resume" id="top-select-search" class="autocomplete">
                                <label for="top-select-search" class="search-hotel-type"></label>
                            </div>
                            <div class="input-field">
                                <input style="line-height:37px;height:0.4in;text-align:center"type="submit" value="Search" class="waves-effect waves-light tourz-sear-btn"> 
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--DASHBOARD-->
        <?php echo $main; ?>
        <!--END DASHBOARD-->
        <!--MOBILE APP-->

        <!--FOOTER SECTION-->
        <footer id="colophon" class="site-footer clearfix">
            <div id="quaternary" class="sidebar-container " role="complementary">
                <div class="sidebar-inner">
                    <div class="widget-area clearfix">
                        <div id="azh_widget-2" class="widget widget_azh_widget">

                            <div data-section="section" class="foot-sec2">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <h4>Address</h4>
                                            <p>House:29, Road:09, Flat:5B, Sector:4 Uttara, Dhaka, Bangladesh. </p>
                                            <p> <span class="strong">Phone: </span> <span class="highlighted">+8801 7092 97766</span> </p>
                                            <p> <span class="strong">Email: </span> <span class="highlighted">info@proffbd.com</span> </p>
                                        </div>
                                        <div class="col-sm-3">
                                            <h4>Support & Help</h4>
                                            <ul class="two-columns">
                                                <li> <a href="">About Us</a> </li>
                                                <li> <a href="">How it works </a> </li>
                                                <li> <a href="">Blog</a> </li>
                                                <li> <a href="">Advertise us</a> </li>
                                                <li> <a href="">Contact us</a> </li>
                                                <li> <a href="">Terms and Condition</a> </li>

                                            </ul>
                                        </div>
                                        <div class="col-sm-5 foot-social">
                                            <h4>Follow with us</h4>
                                            <p>Join the thousands of other There are many variations of passages of Lorem Ipsum available</p>
                                            <ul>
                                                <li><a href="#!"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                                                <li><a href="#!"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
                                                <li><a href="#!"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
                                                <li><a href="#!"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
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
                <p>Copyrights © 2018 Proffbd.com &nbsp;&nbsp;All Rights Reserved. </p>
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
        <?php if (!$this->session->userdata('user_id')) { ?>
            <div class="floating_right_panel">
                <a href="<?php echo base_url(); ?>home/index"><div class="floating_panel_handle"><img style="width:50px" src="<?php echo base_url(); ?>assets/frontend/images/resume.png"><p style="color:#fff;line-height:12px;font-size:12px;padding-top:5px">Create your CV</p></div></a>
            </div>
        <?php } ?>

        <script src="<?php echo base_url(); ?>assets/frontend/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/frontend/js/bootstrap.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/frontend/js/materialize.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/frontend/js/custom.js"></script>

        <script type="text/javascript">
            $('.floating_panel_handle').on('click', function () {
                var ths = $(this);
                var container = ths.closest('.floating_right_panel');
                if (container.hasClass('floating_right_panel_open')) {
                    container.removeClass('floating_right_panel_open');
                    ths.find('i').addClass('fa-chevron-circle-left').removeClass('fa-chevron-circle-right');
                } else {
                    container.addClass('floating_right_panel_open');
                    ths.find('i').removeClass('fa-chevron-circle-left').addClass('fa-chevron-circle-right');
                }
            });
        </script>
        <script>
            function check_delete()
            {
                var chk = confirm('Are You Want To Delete This');
                if (chk)
                {
                    return true;
                } else
                {
                    return false;
                }
            }

            $(document).ready(function () {
                $("#addButton").click(function () {
                    if (($('.form-horizontal .control-group').length + 1) > 4) {
                        alert("Save This Portfolio First");
                        return false;
                    }

                    $('.form-horizontal').append('<hr/><div class="control-group"><label class="control-label">Project Name</label><div class="controls">\n\
                        <input type="text" name="name_2" required placeholder="Project Name"></div></div><div class="control-group"><label class="control-label">Project Link</label><div class="controls">\n\
                        <input type="text" name="link_2" placeholder="Project Link"></div></div></div><div class="control-group"><label class="control-label">Project Description</label><div class="controls">\n\
                        <input type="text" name="description_2" required placeholder="Project Description"></div></div>');
                });
            });
        </script>



        <?php
        $ABC = array();
        foreach ($all_resumes as $resume) {
            $ABC[$resume->name] = null;
        }
        ?>
        <script type='text/javascript'>
            var ABC = <?php echo!count($ABC) ? '{}' : json_encode($ABC) ?>;
        </script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/custom.js"></script>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvey0q0kHdCf2HFQLOqYqJWpMS6Mnic0I&libraries=places&callback=initAutocomplete" async defer></script>



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


        <script>


            $(document).ready(function () {
                addressLookup();
            });

            function addressLookup() {
                //                var options = {
                //                    componentRestrictions: {
                //                        country: 'bd'
                //                    }
                //                };
                var address = document.getElementsByClassName('autocomplete1');


                for (var i = 0; i < address.length; i++) {
                    new google.maps.places.Autocomplete(address[i]);
                    //                    new google.maps.places.Autocomplete(address[i], options);
                }
                //new google.maps.places.Autocomplete(address, options);
            }
        </script>



        <!-- Include Date Range Picker -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

        <script>
            $(document).ready(function () {
                var date_input = $('input[name="date"]'); //our date input has the name "date"
                var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
                date_input.datepicker({
                    format: 'yyyy/mm/dd',
                    container: container,
                    todayHighlight: true,
                    autoclose: true,
                })
                var date_input = $('input[name="date2"]'); //our date input has the name "date"
                var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
                date_input.datepicker({
                    format: 'yyyy/mm/dd',
                    container: container,
                    todayHighlight: true,
                    autoclose: true,
                })
            })
        </script>

        <script>

            function filterSearch(iD) {
                jQuery.ajax({
                    url: "<?php echo base_url(); ?>cms/search_filter/" + iD,
                    type: "POST",
                    success: function (data) {
                        $("#search_filter").html(data);
                    }
                });
            }
        </script>
        <!-- jQuery Script -->

        <script type="text/javascript">
            var i = 0;
            function makeProgress() {
                if (i < <?php echo $this->session->userdata('count'); ?>) {
                    i = i + 1;
                    $(".progress-bar").css("width", i + "%").text(i + " %");
                }
                // Wait for sometime before running this script again
                setTimeout("makeProgress()", 0);
            }
            makeProgress();
        </script>
        <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
                async defer>
        </script>
    </body>
</html>