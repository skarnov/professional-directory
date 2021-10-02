<section class="tz-register">
    <div class="log-in-pop create_account_widget">
        <div class="tz-12">
            <div class="tz-2-com tz-2-main"  >
                <h4>Join us</h4>
                <div class="db-list-com tz-db-table">
                    <div class="hom-cre-acc-left hom-cre-acc-right">
                        <div class="">
                            <form enctype="multipart/form-data" action="<?php echo base_url(); ?>home/save_user" method="POST">
                                <?php if ($this->session->flashdata('save_user')): ?>
                                    <div class="row">
                                        <div class="alert alert-block alert-success">
                                            <a class="close" data-dismiss="alert" href="#">×</a>
                                            <p>
                                                <?php echo $this->session->flashdata('save_user'); ?>
                                            </p>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <div class="row">
                                    <div class="input-field col s12 m6">
                                        <?php echo form_error('first_name'); ?>
                                        <input name="first_name" required value="<?php echo set_value('first_name'); ?>" id="first_name" type="text" class="validate">
                                        <label for="first_name">First Name</label>
                                    </div>
                                    <div class="input-field col s12 m6">
                                        <?php echo form_error('last_name'); ?>
                                        <input name="last_name" required value="<?php echo set_value('last_name'); ?>" id="last_name" type="text" class="validate">
                                        <label for="last_name">Last Name</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12 m6">
                                        <?php echo form_error('email'); ?>
                                        <input name="email" required value="<?php echo set_value('email'); ?>" id="email" type="email" class="validate">
                                        <label for="email">Email</label>
                                    </div>
                                    <div class="input-field col s12 m6">
                                        <?php echo form_error('mobile'); ?>
                                        <input name="mobile" required value="<?php echo set_value('mobile'); ?>" id="mobile" type="text" class="validate">
                                        <label for="mobile">Mobile</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12 m6">
                                        <?php echo form_error('resume_id'); ?>
                                        <select name="resume_id">
                                            <option value="-1" disabled selected>Select Resume Category</option>
                                            <?php
                                            foreach ($all_resumes as $v_resume) {
                                                ?>
                                                <option value="<?php echo $v_resume->pk_resume_id; ?>" <?php echo set_select('resume_id', $v_resume->pk_resume_id, TRUE); ?>><?php echo $v_resume->name; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="input-field col s12 m6">
                                        <?php echo form_error('sex'); ?>
                                        <select name="sex">
                                            <option value="-1" disabled selected>Gender</option>
                                            <option value="Male" <?php echo set_select('sex', 'Male', TRUE); ?>>Male</option>
                                            <option value="Female" <?php echo set_select('sex', 'Female', TRUE); ?>>Female</option>
                                            <option value="Other" <?php echo set_select('sex', 'Other', TRUE); ?>>Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12 ">
                                        <?php echo form_error('password'); ?>
                                        <?php echo form_error('confirm_password'); ?>
                                    </div>
                                    <div class="input-field col s12 m6">
                                        <input name="password" required id="password" type="password" class="validate">
                                        <label for="password">Password</label>
                                    </div>
                                    <div class="input-field col s12 m6">
                                        <input name="confirm_password" required id="password" type="password" class="validate">
                                        <label for="password">Confirm Password</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <div id="html_element"></div>
                                        <div class="g-recaptcha" data-sitekey="6LcaLlQUAAAAALuL_xxfrQKWoRmIBvY_zvBOuwZ9"></div>
                                    </div>
                                </div>
                                <div class="input-field col s12 v2-mar-top-40">
                                    <button type="submit" class="waves-effect waves-light btn-large full-btn">Create Account</button> 
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>