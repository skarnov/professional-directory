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
                        <a href="<?php echo base_url(); ?>user/summary">Summary</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>user/portfolio" > Portfolio</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>user/education" class="tz-lma">Education</a>
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
                <h4>Education</h4>
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
                        foreach ($all_educations as $education) {
                            ?>
                            <div class="">
                                <form>
                                    <div class="form-horizontal">
                                        <div class="row">
                                            <h5 class="tab_title"><?php echo $education->certification_name; ?></h5><br />
                                        </div>
                                        <div class="row">
                                           
                                            <label class="control-label"><b class="label_span">Result:&nbsp;&nbsp;</b> <?php echo $education->result; ?></label><br />
                                            <label class="control-label"><b class="label_span">Passing Year:&nbsp;&nbsp;</b> <?php echo $education->year; ?></label><br />
                                            <label class="control-label"><b class="label_span">Institution Name:&nbsp;&nbsp;</b><?php echo $education->institute_name; ?></label><br />
                                            <label class="control-label"><b class="label_span">Major Subject:&nbsp;&nbsp;</b><?php echo $education->major; ?></label><br />
                                            <label class="control-label"><b class="label_span">Duration:&nbsp;&nbsp;</b><?php echo $education->duration; ?></label><br />
                                            <label class="control-label"><b class="label_span">Achievement:&nbsp;&nbsp;</b><?php echo $education->achievement_name; ?></label>
                                        </div>
                                    </div>
                                    <br />
                                    <a style="float:right" class="btn btn-danger" onclick="return check_delete();" href="<?php echo base_url(); ?>user/delete_education/<?php echo $education->pk_education_id; ?>"><i class="fa fa-trash"></i>&nbsp;Delete this Information</a><br />
                                </form>
                            </div>
                            <?php
                        }
                        ?>
                        <hr/>
                        <div class="">
                            <form name="user" action="<?php echo base_url(); ?>user/save_education_info" method="POST">
                                <div class="form-horizontal">
                                    <div class="row">
                                        <div class="control-group col s12 m12"><h5 class="tab_title">Add New Education Info</h5><br /></div>
                                        <div class="control-group col s12 m12">
                                            <label class="control-label">Certification Name</label>
                                            <div class="controls">
                                                <?php echo form_error('certification_name'); ?>
                                                <select name="certification_name">
                                                    <option value="" disabled selected>Select one</option>  <option value="PSC/Equivalent">PSC/Equivalent</option>
                                                    <option value="JSC/Equivalent">JSC/Equivalent</option>
                                                    <option value="SSC/Equivalent">SSC/Equivalent</option>
                                                    <option value="HSC/Equivalent">HSC/Equivalent</option>
                                                    <option value="Diploma">Diploma</option>
                                                    <option value="Bachelor/Honors">Bachelor/Honors</option>
                                                    <option value="Masters">Masters</option>
                                                    <option value="PhD (Doctor of Philosophy)">PhD (Doctor of Philosophy)</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- Create New Technician-->
                                        <script type="text/javascript">
                                            function gradeEntry(val) {
                                                var element = document.getElementById('grade');
                                                if (val == 'Grade')
                                                    element.style.display = 'block';
                                                else
                                                    element.style.display = 'none';
                                            }
                                        </script>
                                        <div class="control-group col s12 m6">
                                            <label class="control-label">Result</label>
                                            <div class="controls">
                                                <?php echo form_error('result'); ?>
                                                <select name="result" onchange='gradeEntry(this.value);'>
                                                    <option value="" disabled selected>Select One</option>                                                
                                                    <option value="First Division/Class">First Division/Class</option>
                                                    <option value="Second Division/Class">Second Division/Class</option>
                                                    <option value="Third Division/Class">Third Division/Class</option>
                                                    <option value="Grade">Grade</option>
                                                    <option value="Appeared">Appeared</option>
                                                    <option value="Enrolled">Enrolled</option>
                                                    <option value="Awarded">Awarded</option>
                                                    <option value="Do Not Mention">Do Not Mention</option>
                                                    <option value="Pass">Pass</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div id="grade" id="grade" style='display:none;'>
                                            <div class="control-group col s12 m6">
                                                <label class="control-label">Enter Grade Point</label>
                                                <div class="controls">
                                                    <input name="grade_point" type="text" class="validate">
                                                </div>
                                            </div>
                                            <div class="control-group col s12 m6">
                                                <label class="control-label">Out of</label>
                                                <div class="controls">
                                                    <input name="out_of" type="text" class="validate">
                                                </div>
                                            </div>                                        
                                        </div>                                        
                                    </div>
                                    <div class="row">
                                        <?php echo form_error('year'); ?>
                                        <div class="control-group col s12 m12">
                                            <label class="control-label">Year</label>
                                            <div class="controls">
                                                <select name="year">
                                                    <option value="" disabled selected>Select Year</option>                                                
                                                    <option value="2023">2023</option>
                                                    <option value="2022">2022</option>
                                                    <option value="2021">2021</option>
                                                    <option value="2020">2020</option>
                                                    <option value="2019">2019</option>
                                                    <option value="2018">2018</option>
                                                    <option value="2017">2017</option>
                                                    <option value="2016">2016</option>
                                                    <option value="2015">2015</option>
                                                    <option value="2014">2014</option>
                                                    <option value="2013">2013</option>
                                                    <option value="2012">2012</option>
                                                    <option value="2011">2011</option>
                                                    <option value="2010">2010</option>
                                                    <option value="2009">2009</option>
                                                    <option value="2008">2008</option>
                                                    <option value="2007">2007</option>
                                                    <option value="2006">2006</option>
                                                    <option value="2005">2005</option>
                                                    <option value="2004">2004</option>
                                                    <option value="2003">2003</option>
                                                    <option value="2002">2002</option>
                                                    <option value="2001">2001</option>
                                                    <option value="2000">2000</option>
                                                    <option value="1999">1999</option>
                                                    <option value="1998">1998</option>
                                                    <option value="1997">1997</option>
                                                    <option value="1996">1996</option>
                                                    <option value="1995">1995</option>
                                                    <option value="1994">1994</option>
                                                    <option value="1993">1993</option>
                                                    <option value="1992">1992</option>
                                                    <option value="1991">1991</option>
                                                    <option value="1990">1990</option>
                                                    <option value="1989">1989</option>
                                                    <option value="1988">1988</option>
                                                    <option value="1987">1987</option>
                                                    <option value="1986">1986</option>
                                                    <option value="1985">1985</option>
                                                    <option value="1984">1984</option>
                                                    <option value="1983">1983</option>
                                                    <option value="1982">1982</option>
                                                    <option value="1981">1981</option>
                                                    <option value="1980">1980</option>
                                                    <option value="1979">1979</option>
                                                    <option value="1978">1978</option>
                                                    <option value="1977">1977</option>
                                                    <option value="1976">1976</option>
                                                    <option value="1975">1975</option>
                                                    <option value="1974">1974</option>
                                                    <option value="1973">1973</option>
                                                    <option value="1972">1972</option>
                                                    <option value="1971">1971</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="control-group col s12 m12">
                                            <label class="control-label">Institute Name</label>
                                            <div class="controls">
                                                <?php echo form_error('institute_name'); ?>
                                                <input name="institute_name" required id="institute_name" type="text" class="validate">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="control-group col s12 m12">
                                            <label class="control-label">Major</label>
                                            <div class="controls">
                                                <input name="major" id="major" type="text" class="validate">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="control-group col s12 m12">
                                            <label class="control-label">Duration (Years)</label>
                                            <div class="controls">
                                                <input name="duration" id="duration" type="text" class="validate">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="control-group col s12 m12">
                                            <label class="control-label">Achievement Name</label>
                                            <div class="controls">
                                                <input name="achievement_name" id="achievement_name" type="text" class="validate">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12"> <button type="submit" class="waves-effect waves-light btn-large full-btn">Save Education Info</button> </div>
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