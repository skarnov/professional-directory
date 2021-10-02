<section class="tz-register">
    <div class="log-in-pop">
        <div class="log-in-pop-right">
            <a href="#" class="pop-close" data-dismiss="modal">
                <img src="images/cancel.html" alt="" />
            </a>
            <h4>Forgot Password</h4>
            <form action="<?php echo base_url(); ?>home/check_validity" method="POST" class="s12">
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
                    <?php echo form_error('value'); ?>
                    <div class="control-group col s12 m12">
                        <label class="control-label">Email</label>
                        <div class="controls">
                            <input type="text" name="value" required class="validate">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="input-field s4">
                        <input type="submit" value="Done" class="waves-effect waves-light log-in-btn"> 
                    </div>
                </div>
                <div>
                    <div class="input-field s12"> <a style="color:red" href="<?php echo base_url(); ?>home/index">Create a new account</a> </div>
                </div>
            </form>
        </div>
    </div>
</section>