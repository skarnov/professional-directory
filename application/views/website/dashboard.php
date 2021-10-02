<section>
    <div class="tz">
        <!--LEFT SECTION-->
        <div class="tz-l ">
            <div class="tz-l-2 left_menu">
                <ul class="">
                    <li>
                        <a href="<?php echo base_url(); ?>user/my_dashboard">My Dashboard</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>user/account" class="tz-lma">Account Settings</a>
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
                </ul>
            </div>
        </div>
        <!--CENTER SECTION-->
        <div class="tz-2">
            <div class="tz-2-com tz-2-main">
                <h4>Account Settings</h4>
                <div class="db-list-com tz-db-table">
                    <div class="hom-cre-acc-left hom-cre-acc-right">
                        <div class="">
                            <form name="user" action="<?php echo base_url(); ?>user/update_user" method="POST">
                                <?php if ($this->session->flashdata('update_user')): ?>
                                    <div class="row">
                                        <div class="alert alert-block alert-success">
                                            <a class="close" data-dismiss="alert" href="#">×</a>
                                            <p>
                                                <?php echo $this->session->flashdata('update_user'); ?>
                                            </p>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <div class="form-horizontal">
                                    <div class="row">
                                        <?php echo form_error('first_name'); ?>
                                        <div class="control-group col s12 m6">
                                            <label class="control-label">First Name</label>
                                            <div class="controls">
                                                <input required name="first_name" value="<?php echo $user_info->first_name; ?>" id="first_name" type="text" class="validate">
                                                <input  name="pk_user_id" value="<?php echo $user_info->pk_user_id; ?>" type="hidden" class="validate" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="control-group col s12 m6">
                                            <label class="control-label">Last Name</label>
                                            <div class="controls">
                                                <?php echo form_error('last_name'); ?>
                                                <input required name="last_name" value="<?php echo $user_info->last_name; ?>" id="last_name" type="text" class="validate" placeholder="Last Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="control-group col s12 m12">
                                            <label class="control-label">Email</label>
                                            <div class="controls">
                                                <?php echo form_error('email'); ?>
                                                <input name="email" value="<?php echo $user_info->email; ?>" required id="email" type="email" class="validate" placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <?php echo form_error('password'); ?>
                                            <?php echo form_error('confirm_password'); ?>
                                        </div>
                                        <div class="control-group col s12 m6">
                                            <label class="control-label">Password</label>
                                            <div class="controls">
                                                <input name="password" required value="<?php echo $user_info->password; ?>" id="password" type="text" class="validate" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="control-group col s12 m6">
                                            <label class="control-label">Confirm Password</label>
                                            <div class="controls">
                                                <input required name="confirm_password" value="<?php echo $user_info->password; ?>" id="password" type="text" class="validate" placeholder="Confirm Password ">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="control-group col s12 m8">
                                            <label class="control-label">CV/Portfolio Category</label>
                                            <div class="controls">
                                                <?php echo form_error('resume_id'); ?>
                                                <select required name="resume_id">
                                                    <option value="" disabled selected>Select Resume Category</option>
                                                    <?php
                                                    foreach ($all_resumes as $v_resume) {
                                                        ?>
                                                        <option value="<?php echo $v_resume->pk_resume_id; ?>"><?php echo $v_resume->name; ?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="control-group col s12 m4">
                                            <label class="control-label">Gender</label>
                                            <div class="controls">
                                                <?php echo form_error('sex'); ?>
                                                <select required name="sex">
                                                    <option value="-1" disabled selected>Select Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="control-group col s12 m12">
                                            <label class="control-label">Mobile</label>
                                            <div class="controls">
                                                <?php echo form_error('mobile'); ?>
                                                <input name="mobile" value="0<?php echo $user_info->mobile; ?>" id="mobile" required type="text" class="validate" placeholder="Mobile">
                                            </div>
                                        </div>
                                    </div>
<!--                                    <script>
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
                                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvey0q0kHdCf2HFQLOqYqJWpMS6Mnic0I&libraries=places&callback=initAutocomplete" async defer></script>
                                    -->
                                    <div class="row">
                                        <div class="input-field col s12 v2-mar-top-40"> <button type="submit" class="waves-effect waves-light btn-large full-btn">Update Info</button> </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--RIGHT SECTION-->

        <!--        <div class="tz-l-1">
                    <ul>
                        <li><img src="<?php echo base_url(); ?>media_library/user_images/<?php echo $user_info->profile_picture_thumb; ?>" alt="" /> </li>
                        <li>80% Profile Completion</li>
                    </ul>
                </div>-->

        <div class="tz-3">
            <div class="pglist-p3 pglist-bg pglist-p-com" style="border:none">
                <div class="pg-list-user-pro"> 
                    <img width="60px" height="60px" style="border-radius: 35px;"src="<?php echo base_url(); ?>media_library/user_images/<?php echo $user_info->profile_picture_thumb; ?>" alt=""> 
                </div>
                <div class="list-pg-inn-sp">
                    <div class="list-pg-upro">
                        <h5><?php echo $this->session->userdata('user_name'); ?></h5>
<!-- Progress bar HTML -->
                        <div class="progress progress-striped active">
                            <div class="progress-bar"></div>
                        </div>
                        <!-- End of Progress bar HTML -->
                        <a style="background:#fff"class="" href="<?php echo base_url(); ?>user/account" title="Update your Portfolio">Update your account</a><br /><br />
                        <a class="waves-effect waves-light btn-large full-btn list-pg-btn" href="<?php echo base_url(); ?>user/logout">Logout</a>									
                    </div>
                </div>
            </div>
            <div class="tz-l-1">

            </div>
        </div>

        <!--END OF RIGHT SECTION-->
    </div>
</section>
<script>
    document.forms['user'].elements['resume_id'].value = '<?php echo isset($user_info->fk_resume_id) ? $user_info->fk_resume_id : ' '; ?>';
    document.forms['user'].elements['sex'].value = '<?php echo isset($user_info->sex) ? $user_info->sex : ' '; ?>';
</script>