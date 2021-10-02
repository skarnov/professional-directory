<section>
    <div class="tz">
        <div class="tz-l">
            <div class="tz-l-2 left_menu">
                <ul>
                    <li>
                        <a href="<?php echo base_url(); ?>user/my_dashboard" class="tz-lma">My Dashboard</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>user/account">Account Settings</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>user/basic_info" >Basic Info</a>
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
                <h4>Dashboard</h4>
                <?php
                $count = $this->session->userdata('count');
                if ($count > '79') {
                    ?>
                    <form name="user" action="<?php echo base_url(); ?>user/update_username" method="POST">
                        <?php if ($this->session->flashdata('update_username')): ?>
                            <div class="row">
                                <div class="alert alert-block alert-success" style="margin:10px">
                                    <a class="close" data-dismiss="alert" href="#">×</a>
                                    <p>
                                        <?php echo $this->session->flashdata('update_username'); ?>
                                    </p>
                                </div>
                            </div>
                        <?php endif; ?>


                        <div class="control-group col s12 m12" style="padding:10px 10px 0px 10px">
                            <label class="control-label">Portfolio URL</label>
                            <div class="controls">
                                <?php echo form_error('username'); ?>
                                <div class="controls">
                                    <span style="float:left">www.proffbd.com/</span><input style="width: 80%;font-size: 14px;border-bottom: 1px solid #ddd;" name="username" required value="<?php echo $user_info->username; ?>" type="text" class="validate" placeholder="Enter Your Username">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 v2-mar-top-40"> <button type="submit" class="waves-effect waves-light btn-large full-btn">Update Info</button> </div>
                        </div>

                    </form>
                    <?php
                }
                ?>
                <div class="tz-2-main-com">
                    <div class="tz-2-main-1">
                        <div class="tz-2-main-2"> <img style="width:82px;"src="<?php echo base_url(); ?>assets/frontend/images/eye.png" alt="" /><span>Profile View</span><p>Public Seen your Profile last 30days</p>
                            <h5 class="dashboard_button"><?php echo $user_info->view_counter; ?></h5>
                        </div>
                    </div>
                    <div class="tz-2-main-1">
                        <div class="tz-2-main-2"> <img style="width:78px" src="<?php echo base_url(); ?>assets/frontend/images/resume.png" alt="" /><span>CV</span><p>complete your 100% information for better cv </p>
                            <a href="<?php echo base_url(); ?>user/download_cv"><h5 class="dashboard_button">Download your CV</h5></a>
                        </div>
                    </div>
                    <div class="tz-2-main-1">
                        <div class="tz-2-main-2"> <img style="width:82px;" src="<?php echo base_url(); ?>assets/frontend/images/profile.png" alt="" /><span>Profile</span><p>See your profile in Public View</p>
                            <a href="<?php echo base_url() . $user_info->username; ?>"><h5 class="dashboard_button">See Profile</h5></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
    </div>
</section>

<script>
    document.forms['user'].elements['marital_status'].value = '<?php echo isset($user_info->marital_status) ? $user_info->marital_status : ' '; ?>';
    document.forms['user'].elements['current_career_level'].value = '<?php echo isset($user_info->current_career_level) ? $user_info->current_career_level : ' '; ?>';
    document.forms['user'].elements['education_level'].value = '<?php echo isset($user_info->education_level) ? $user_info->education_level : ' '; ?>';
</script>