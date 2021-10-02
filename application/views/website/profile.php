<div class="container">
    <div class="col-md-12">
        <?php if ($this->session->flashdata('save_owner')): ?>
            <div class="alert success-message alert-dismissable fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <?php echo $this->session->flashdata('save_owner'); ?>
            </div>
        <?php endif; ?>
    </div>
    <form onsubmit="if(document.getElementById('agree').checked) { return true; } else { alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy'); return false; }" action="<?php echo base_url(); ?>tmt_online/save_owner" method="POST" class="form-horizontal" data-toggle="validator" role="form" enctype="multipart/form-data">
        <h2>Owner Registration Form</h2>
        <div class="form-group">
            <label class="col-sm-3 control-label">Full Name <span style="color:red">*</span></label>
            <div class="col-sm-9">
                <div class="text-danger"><?php echo form_error('full_name'); ?></div>
                <input type="text" required name="full_name" value="<?php echo set_value('full_name'); ?>" data-error="Please Enter Your Full Name" class="form-control">
                <div class="help-block with-errors text-danger"></div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Username</label>
            <div class="col-sm-9">
                <input type="text" name="user_name" value="<?php echo set_value('user_name'); ?>" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Profile Picture</label>
            <div class="col-sm-9">
                <input type="file" name="profile_picture" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Email</label>
            <div class="col-sm-9">
                <div class="text-danger"><?php echo form_error('email'); ?></div>
                <input type="email" name="email" value="<?php echo set_value('email'); ?>" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Password <span style="color:red">*</span></label>
            <div class="col-sm-9">
                <div class="text-danger"><?php echo form_error('password'); ?></div>
                <input type="password" pattern="{6,32}" name="password" required value="<?php echo set_value('password'); ?>" data-pattern-error="Minimum of 6 Characters" data-error="Please Enter Password" class="form-control">
                <div class="help-block with-errors text-danger"></div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Mobile <span style="color:red">*</span></label>
            <div class="col-sm-9">
                <div class="text-danger"><?php echo form_error('mobile'); ?></div>
                <input type="tel" pattern= "[0-9]{11}" name="mobile" required value="<?php echo set_value('mobile'); ?>" data-pattern-error="Please Enter Valid Mobile Number" data-error="Please Enter Your Mobile Number" class="form-control">
                <div class="help-block with-errors text-danger"></div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">ID Type</label>
            <div class="col-sm-9">
                <select name="meta[id_type]" class="form-control">
                    <option value="NID">NID</option>
                    <option value="Passport">Passport</option>
                    <option value="Driving License">Driving License</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">ID Number <span style="color:red">*</span></label>
            <div class="col-sm-9">
                <input type="text" name="meta[id_number]" required value="<?php echo set_value('meta[id_number]'); ?>" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">ID Card Upload <span style="color:red">*</span></label>
            <div class="col-sm-9">
                <input type="file" name="id_card_upload" required class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Present Address</label>
            <div class="col-sm-9">
                <textarea type="text" name="meta[present_address]" class="form-control"><?php echo set_value('meta[present_address]'); ?></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Permanent Address</label>
            <div class="col-sm-9">
                <textarea type="text" name="meta[permanent_address]" class="form-control"><?php echo set_value('meta[permanent_address]'); ?></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Company Name</label>
            <div class="col-sm-9">
                <input type="text" name="meta[company_name]" value="<?php echo set_value('meta[company_name]'); ?>" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Company Mobile Number</label>
            <div class="col-sm-9">
                <input type="text" name="meta[company_mobile_number]" value="<?php echo set_value('meta[company_mobile_number]'); ?>" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Company Address</label>
            <div class="col-sm-9">
                <textarea type="text" name="meta[company_address]" value="<?php echo set_value('meta[company_address]'); ?>" class="form-control"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Manager Name</label>
            <div class="col-sm-9">
                <input type="text" name="meta[contact_person_name]" value="<?php echo set_value('meta[contact_person_name]'); ?>" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Manager Mobile Number</label>
            <div class="col-sm-9">
                <input type="text" name="meta[contact_person_mobile_number]" value="<?php echo set_value('meta[contact_person_mobile_number]'); ?>" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Manager Address</label>
            <div class="col-sm-9">
                <input type="text" name="meta[contact_person_address]" value="<?php echo set_value('meta[contact_person_address]'); ?>" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Other Documents Upload</label>
            <div class="col-sm-9">
                <input type="file" name="other_documents_upload" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="checkbox" value="check" id="agree" > I Accept <a href="termsconditions.php">Terms & Conditions</a>
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
                <input type="submit" name="submit" value="Register" class="btn btn-primary btn-block"/>
            </div>
        </div>
    </form>
</div>