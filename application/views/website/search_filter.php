<div class="dir-alp-con-right-1">
    <div class="row">
        <?php
        foreach ($search_result as $value) {
            foreach ($value['user'] as $user) {
                
//                echo '<pre>';
//                print_r($value['employment']);
//                exit();
                
            ?>
            <div class="home-list-pop list-spac list-spac-1">
                <!--LISTINGS IMAGE-->
                <div class="col-md-3">
                    <?php
                    if ($user['profile_picture_thumb']) {
                        ?>
                        <img src="<?php echo base_url(); ?>media_library/user_images/<?php echo $user['profile_picture_thumb']; ?>" alt="<?php echo $user['first_name']; ?>" /> 
                        <?php
                    } else {
                        ?>
                        <img src="<?php echo base_url(); ?>media_library/images/user.png" alt="" /> 
                        <?php
                    }
                    ?>
                </div>
                <!--LISTINGS: CONTENT-->
                <div class="col-md-9 home-list-pop-desc inn-list-pop-desc"><a href="<?php echo base_url(); ?>cms/resume_details/<?php echo $user['pk_user_id']; ?>"><h3><?php echo $user['first_name'] . ' ' . $user['last_name']; ?></h3></a>
                    <h4><?php echo $user['resume_title']; ?></h4>
                    <h5><?php echo $value['employment']; ?></h5>
                    <p>
                        <b>Specialized in:</b> 
                        <?php
                        foreach ($value['skills'] as $skill) {
                            echo $skill['name'];
                        }
                        ?>
                    </p>
                    <p><b>Address:</b> <?php echo $user['present_city']; ?></p>
                    <div class="list-number">
                        <ul>
                            <li><img src="<?php echo base_url(); ?>assets/frontend/images/icon/phone.png" alt=""> 0<?php echo $user['mobile']; ?></li>
                            <li><img src="<?php echo base_url(); ?>assets/frontend/images/icon/mail.png" alt=""> <?php echo $user['email']; ?></li>
                        </ul>
                    </div> 
                    <div class="list-enqu-btn">
                        <ul>
                            <li><a href="<?php echo base_url(); ?><?php echo $user['username']; ?>"><i class="fa fa-link" aria-hidden="true"></i>Click to See <?php echo $user['first_name'] . ' ' . $user['last_name']; ?>'s Profile</a> </li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php
            }
        }
        ?>
    </div>
</div>