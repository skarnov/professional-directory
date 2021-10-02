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
                        <a href="<?php echo base_url(); ?>user/portfolio"> Portfolio</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>user/education">Education</a>
                    </li>
                    <li>
                    <a href="<?php echo base_url(); ?>user/employment_history" class="tz-lma">Employment History</a>
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
                <h4>Employment History</h4>
                <div class="db-list-com tz-db-table">
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
                    <div class="hom-cre-acc-left hom-cre-acc-right">
                        <?php
                        foreach ($all_employments as $employment) {
                            ?>
                            <div class="">
                                <form>
                                    <div class="form-horizontal">
                                        <h5>From <?php echo $employment->start_date; ?> To 
                                            <?php
                                            $end_date = $employment->end_date;
                                            if ($end_date) {
                                                echo $end_date;
                                            } else {
                                                echo 'Continuing';
                                            }
                                            ?>
                                            (<?php
                                            if ($end_date) {
                                                echo $employment->total_experience;
                                            } else {
                                                $start_date = $employment->start_date;
                                                $datetime1 = date_create($start_date);
                                                $datetime2 = date_create($end_date);
                                                $interval = date_diff($datetime1, $datetime2);
                                                echo $interval->y . ' Year, ' . $interval->m . ' Months, ' . $interval->d . ' Days';
                                            }
                                            ?>)
                                        </h5>
                                        <label class="control-label"><b class="label_span">Company Name:&nbsp;&nbsp;</b><?php echo $employment->company_name; ?></label><br />
                                        <label class="control-label"><b class="label_span">Designation:&nbsp;&nbsp;</b><?php echo $employment->designation; ?></label><br />
                                        <label class="control-label"><b class="label_span">Job Responsibility:&nbsp;&nbsp;</b><?php echo $employment->responsibilities; ?></label><br />
                                        <a style="float:right" class="btn btn-danger" onclick="return check_delete();" href="<?php echo base_url(); ?>user/delete_employment_history/<?php echo $employment->pk_employment_id; ?>"><i class="fa fa-trash"></i>&nbsp;Delete this Information</a><br />
                                    </div>
                                </form>
                            </div>
                            <?php
                        }
                        ?>
                        <div class="">
                            <form name="user" action="<?php echo base_url(); ?>user/save_employment_info" method="POST">
                                <div class="form-horizontal">
                                    <div class="row">
                                        <div class="control-group col m12 s12">
                                            <label class="control-label">Start Date</label>
                                            <div class="input-group">
                                                <?php echo form_error('date'); ?>
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar">
                                                    </i>
                                                </div>
                                                <input class="form-control" id="date" name="date" placeholder="Job Start Date"  type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="control-group col m12 s12">
                                            <div class="checkbox checkbox-primary pl5">
                                                <input type="checkbox" name="continuing" id="continuing" value="on" class="custom-control-input">
                                                <label for="continuing" style="font-size: 20px;">Continuing</label>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                        document.getElementById('continuing').onchange = function () {
                                            document.getElementById('date2').disabled = this.checked;
                                        };
                                    </script>
                                    <div class="row">
                                        <div class="control-group col m12 s12">
                                            <label class="control-label">End Date</label>
                                            <div class="input-group">
                                                <?php echo form_error('date2'); ?>
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar">
                                                    </i>
                                                </div>
                                                <input class="form-control" id="date2" name="date2" placeholder="Job End Date" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="control-group col s12 m12">
                                            <label class="control-label">Company Name</label>
                                            <div class="controls">
                                                <?php echo form_error('company_name'); ?>
                                                <input name="company_name" required id="company_name" type="text" class="validate" placeholder="Company Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="control-group col s12 m12">
                                            <label class="control-label">Designation</label>
                                            <div class="controls">
                                                <?php echo form_error('designation'); ?>
                                                <input name="designation" required id="designation" type="text" class="validate" placeholder="Designation">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="control-group col s12 m12">
                                            <label class="control-label">Responsibilities</label>
                                            <div class="controls">
                                                <textarea name="responsibilities" id="responsibilities" class="validate"></textarea placeholder="Responsibilities">
                                            </div>
                                        </div>
                                    </div>
                                </div>
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