<section>
    <div class="tz">
        <!--LEFT SECTION-->
        <div class="tz-l">
            <div class="tz-l-2 left_menu" >
                <ul>
                    <li>
                        <a href="<?php echo base_url(); ?>user/my_dashboard">My Dashboard</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>user/account" >Account Settings</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>user/basic_info">Basic Info</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>user/summary" >Summary</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>user/portfolio" > Portfolio</a>
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
                        <a href="<?php echo base_url(); ?>user/membership" class="tz-lma"> Membership</a>
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
                <h4>Membership</h4>
                <div class="db-list-com tz-db-table">
                    <div class="hom-cre-acc-left hom-cre-acc-right">
                        <?php
                        foreach ($all_memberships as $membership) {
                            ?>
                            <div class="">
                                <form>
                                    <div class="form-horizontal">
										<label class="control-label"><b class="label_span">Membership Name:&nbsp;&nbsp;</b> <?php echo $membership->name; ?> </label><br />
										<label class="control-label"><b class="label_span">Institution /Organization Name:&nbsp;&nbsp;</b> <?php echo $membership->institute; ?></label><br />
										<label class="control-label"><b class="label_span">Expiry Date:&nbsp;&nbsp;</b> <?php echo $membership->expiry_date; ?></label><br />
										 <a style="float:right" class="btn btn-danger" onclick="return check_delete();" href="<?php echo base_url(); ?>user/delete_membership/<?php echo $membership->pk_membership_id; ?>">Delete</a>
                                    </div>
                                </form>
                            </div>
                            <?php
                        }
                        ?>
                        <div class="">
                            <form name="user" action="<?php echo base_url(); ?>user/save_membership_info" method="POST">
                                <div class="form-horizontal">
                                    <div class="row">
                                         <div class="control-group col s12 m12">
									  		<label class="control-label">Membership Name</label>
											<div class="controls">
                                            <?php echo form_error('name'); ?>
                                            <input name="name" required id="name" type="text" class="validate"placeholder="Membership Name">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                         <div class="control-group col s12 m12">
									  		<label class="control-label">Institution Name</label>
											<div class="controls">
                                            <input name="institute" id="Institution Name" type="text" class="validate"placeholder="Awards Name">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                       <div class="control-group col s12 m12">
									  		<label class="control-label">Expiry Date</label>
											<div class="controls">
                                            <input name="expiry_date" id="expair_date" type="text" class="validate"placeholder="Expiry Date">
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <div class="row">
                                    <div class="input-field col s12 v2-mar-top-40"> <button type="submit" class="waves-effect waves-light btn-large full-btn">Save</button> </div>
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