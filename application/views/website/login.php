<section class="tz-register">
    <div class="log-in-pop">
        <div class="log-in-pop-left" >
            <h1>Hello... </h1>
            <p>Don't have an account? Create your account. It's take less then a minutes</p>
            <a href="<?php echo base_url(); ?>home/index" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Join us</a>
            <!--            <h4>Login with social media</h4>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>home/login_with_facebook"><i class="fa fa-facebook"></i> Facebook</a></li>
                            <li><a href="#"><i class="fa fa-google"></i> Google+</a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
                        </ul>--><br /><br /><br /><br /><br /><br /><br /><br />
        </div>

        <div class="log-in-pop-right">
            <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.html" alt="" />
            </a>
            <h4>Login</h4>
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
            <?php if ($this->session->flashdata('exception')): ?>
                <div class="alert alert-block alert-danger">
                    <a class="close" data-dismiss="alert" href="#">×</a>
                    <p>
                        <?php echo $this->session->flashdata('exception'); ?>
                    </p>
                </div>
            <?php endif; ?>
            <p>Don't have an account? Create your account. It's take less then a minutes</p>
            <form action="<?php echo base_url(); ?>login/check_user_login" method="POST" class="s12">
                <div>
                    <?php echo form_error('value'); ?>
                    <div class="control-group col s12 m12">
                        <label class="control-label">User name or Email or Mobile</label>
                        <div class="controls">
                            <input type="text" name="value" required class="validate">
                        </div>
                    </div>
                </div>
                <div>
                    <?php echo form_error('password'); ?>
                    <div class="control-group col s12 m12">
                        <label class="control-label">Password</label>
                        <div class="controls">
                            <input type="password" name="password" required class="validate">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="input-field s4">
                        <input type="submit" value="Login" class="waves-effect waves-light log-in-btn"> 
                    </div>
                </div>
                <div>
                    <div class="input-field s12"> <a style="color:red"href="<?php echo base_url(); ?>home/forgot_password">Forgot password</a> | <a style="color:red" href="<?php echo base_url(); ?>home/index">Create a new account</a> </div>
                </div>
            </form>
        </div>
    </div>
</section>