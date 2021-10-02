<section>
    <div class="tz">
        <!--LEFT SECTION-->
        <div class="tz-l">
            <div class="tz-l-2 left_menu">
                <ul>
                    <li>
                        <a href="<?php echo base_url(); ?>user/my_dashboard">My Dashboard</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>user/account">Account Settings</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>user/basic_info" class="tz-lma">Basic Info</a>
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
                <h4>Basic Information</h4>
                <div class="db-list-com tz-db-table">
                    <div class="hom-cre-acc-left hom-cre-acc-right">
                        <div class="">
                            <form enctype="multipart/form-data" name="user" action="<?php echo base_url(); ?>user/update_basic_info" method="POST">
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
                                        <div class="db-v2-list-form-inn-tit">
                                            <h5>Profile Image <span class="v2-db-form-note">(Image Size 300x300):</span></h5>
                                        </div>
                                    </div>
                                    <div class="row tz-file-upload">
                                        <div class="file-field input-field">
                                            <div class="tz-up-btn">
                                                <span>File</span>
                                                <input type="file" name="profile_picture">
                                                <input name="pk_user_id" value="<?php echo $user_info->pk_user_id; ?>" type="hidden">
                                                <input type="hidden" name="previous_profile_picture" value="<?php echo $user_info->profile_picture; ?>">
                                            </div>
                                            <div class="file-path-wrapper db-v2-pg-inp">
                                                <input class="file-path validate" type="text"> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="control-group col s12 m12">
                                            <label class="control-label">Resume Title</label>
                                            <div class="controls">
                                                <?php echo form_error('resume_title'); ?>
                                                <div class="controls">
                                                    <input name="resume_title" required id="resume_title" value="<?php echo $user_info->resume_title; ?>" type="text" class="validate" placeholder="Resume Title">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <?php echo form_error('mother_name'); ?>
                                        <?php echo form_error('father_name'); ?>
                                        <div class="control-group col s12 m6">
                                            <label class="control-label">Father's Name</label>
                                            <div class="controls">
                                                <input placeholder="Father's Name" name="father_name" required id="father_name" value="<?php echo $user_info->father_name; ?>" type="text" class="validate" placeholder="Resume Title">
                                            </div> 
                                        </div> 
                                        <div class="control-group col s12 m6">
                                            <label class="control-label">Mother's Name</label>
                                            <div class="controls">
                                                <input placeholder="Mother's Name" name="mother_name" required id="mother_name" value="<?php echo $user_info->mother_name; ?>" type="text" class="validate" placeholder="Mother's Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="control-group col m12 s12">
                                            <label class="control-label">Date of Birth</label>
                                            <div class="input-group">
                                                <?php echo form_error('date'); ?>
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar">
                                                    </i>
                                                </div>
                                                <input class="form-control" id="date" name="date" placeholder="Date of Birth" value="<?php echo $user_info->date_of_birth; ?>" type="text" placeholder="Date of Birth">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="control-group col m12 s12">
                                            <label class="control-label">Religion</label>
                                            <div class="controls">
                                                <input id="religion" type="text" name="religion" value="<?php echo $user_info->religion; ?>" class="validate" placeholder="Religion">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="control-group col m12 s12">
                                            <?php echo form_error('marital_status'); ?>
                                            <div class="controls">
                                                <label class="control-label">Marital Status</label>
                                                <select name="marital_status">
                                                    <option value="" disabled selected>Select One</option>
                                                    <option value="Single">Single</option>
                                                    <option value="Married">Married</option>
                                                    <option value="Unmarried">Unmarried</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="control-group col m12 s12">
                                            <label class="control-label">Nationality</label>
                                            <div class="controls">
                                                <?php echo form_error('nationality'); ?>
                                                <input name="nationality" required id="nationality" value="<?php echo $user_info->nationality; ?>" type="text" class="validate" placeholder="Nationality">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="control-group col m12 s12">
                                            <label class="control-label">Permanent Address</label>
                                            <div class="controls">
                                                <?php echo form_error('permanent_address'); ?>
                                                <input name="permanent_address" required id="permanent_address" value="<?php echo $user_info->permanent_address; ?>" type="text" class="validate" placeholder="Permanent Address">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="locationField" class="row">
                                        <div class="control-group col m12 s12">
                                            <label class="control-label">Present City</label>
                                            <div class="controls">
                                                <?php echo form_error('present_city'); ?>
                                                <input name="present_city" required value="<?php echo $user_info->present_city; ?>" id="autocomplete" onFocus="geolocate()" placeholder="Present City" type="text" class="validate autocomplete1" placeholder="Present City">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="control-group col m12 s12">
                                            <label class="control-label">Current Career Level</label>
                                            <div class="controls">
                                                <?php echo form_error('current_career_level'); ?>
                                                <select name="current_career_level">
                                                    <option value="" disabled selected>Select One</option>
                                                    <option value="Student">Student</option>
                                                    <option value="Entry Level">Entry Level</option>
                                                    <option value="Experienced (Non-Manager)">Experienced (Non-Manager)</option>
                                                    <option value="Manager (Manager/Supervisor of Staff)">Manager (Manager/Supervisor of Staff)</option>
                                                    <option value="Executive (SVP, VP, Department Head etc)">Executive (SVP, VP, Department Head etc)</option>
                                                    <option value="Senior Executive (President, CFO etc)">Senior Executive (President, CFO etc)</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="control-group col m12 s12">
                                            <label class="control-label">Education Level</label>
                                            <div class="controls">
                                                <?php echo form_error('education_level'); ?>
                                                <select name="education_level">
                                                    <option value="" disabled selected>Select One</option>
                                                    <option value="Under SSC">Under SSC</option>
                                                    <option value="SSC">SSC</option>
                                                    <option value="HSC">HSC</option>
                                                    <option value="Diploma">Diploma</option>
                                                    <option value="Bachelor/Honors">Bachelor/Honors</option>
                                                    <option value="Masters">Masters</option>
                                                    <option value="PHD">PHD</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
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
    document.forms['user'].elements['marital_status'].value = '<?php echo isset($user_info->marital_status) ? $user_info->marital_status : ' '; ?>';
    document.forms['user'].elements['current_career_level'].value = '<?php echo isset($user_info->current_career_level) ? $user_info->current_career_level : ' '; ?>';
    document.forms['user'].elements['education_level'].value = '<?php echo isset($user_info->education_level) ? $user_info->education_level : ' '; ?>';
</script>