<section class="tz-register">
    <div class="log-in-pop">
        <div class="log-in-pop-right">
            <a href="#" class="pop-close" data-dismiss="modal">
                <img src="images/cancel.html" alt="" />
            </a>
            <h4>Change Password</h4>
            <form action="<?php echo base_url(); ?>home/check_password_validity" method="POST" class="s12">
                <?php if ($this->session->flashdata('exception')): ?>
                    <div class="s12">
                        <div class="alert alert-block alert-danger">
                            <a class="close" data-dismiss="alert" href="#">×</a>
                            <p>
                                <?php echo $this->session->flashdata('exception'); ?>
                            </p>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if ($this->session->flashdata('success')): ?>
                    <div class="s12">
                        <div class="alert alert-block alert-success">
                            <a class="close" data-dismiss="alert" href="#">×</a>
                            <p>
                                <?php echo $this->session->flashdata('success'); ?>
                            </p>
                        </div>
                    </div>
                <?php endif; ?>
                <div>
                    <?php echo form_error('temp_password'); ?>
                    <div class="control-group col s12 m12">
                        <label class="control-label">Enter Temporary Password</label>
                        <div class="controls">
                            <input type="text" name="temp_password" required class="validate">
                        </div>
                    </div>
                </div>
                <div>
                    <?php echo form_error('password'); ?>
                    <div class="control-group col s12 m12">
                        <label class="control-label">Enter New Password</label>
                        <div class="controls">
                            <input type="password" name="password" required class="validate">
                        </div>
                    </div>
                </div>
                <div>
                    <?php echo form_error('confirm_password'); ?>
                    <div class="control-group col s12 m12">
                        <label class="control-label">Confirm New Password</label>
                        <div class="controls">
                            <input type="password" name="confirm_password" required class="validate">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="input-field s4">
                        <input type="submit" value="Submit" class="waves-effect waves-light log-in-btn"> 
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>