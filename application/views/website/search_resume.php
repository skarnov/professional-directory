<h1 style="background:url('<?php echo base_url(); ?>assets/frontend/images/search_bg.jpg')no-repeat center center fixed; -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;padding: 127px 0px 84px 0px;color:#fff" class="text-center"><?php echo $search; ?></h1>
<!--END LISTING LEAD FORM-->
<section class="dir-alp-1 dir-pa-sp-top" style="padding: 17px 0px 17px 0px">
    <div class="container">
        <div class="row">
            <div class="dir-alp-con dir-alp-con-1">
                <div class="col-md-3 dir-alp-con-left">
                    <div class="dir-alp-l3 dir-alp-l-com">
                        <h4>Specialization/Skill Filter</h4>
                        <div class="dir-alp-l-com1 dir-alp-p3">
                            <form action="#">
                                <ul>
                                    <?php
                                    $i = 1;
                                    foreach ($all_skills as $skill) {
                                        ?>
                                        <li>
                                            <input type="radio" name="skill" id="<?php echo $i; ?>" value="<?php echo $skill->pk_skill_id; ?>" onclick="filterSearch(this.value);" />
                                            <label for="<?php echo $i; ?>"><?php echo $skill->name; ?></label>
                                        </li>
                                        <?php
                                        $i++;
                                    }
                                    ?>
                                </ul>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 dir-alp-con-right" id="search_filter">
                    <div class="dir-alp-con-right-1">
                        <div class="row">
                            <?php
                            foreach ($search_result as $value) {
                                ?>
                                <div class="home-list-pop list-spac list-spac-1">
                                    <!--LISTINGS IMAGE-->
                                    <div class="col-md-3">
                                        <?php
                                        if ($value['profile_picture_thumb']) {
                                            ?>
                                            <img src="<?php echo base_url(); ?>media_library/user_images/<?php echo $value['profile_picture_thumb']; ?>" alt="<?php echo $value['first_name']; ?>" /> 
                                            <?php
                                        } else {
                                            ?>
                                            <img src="<?php echo base_url(); ?>media_library/images/user.png" alt="" /> 
                                            <?php
                                        }
                                        ?>
                                    </div>
                                    <!--LISTINGS: CONTENT-->
                                    <div class="col-md-9 home-list-pop-desc inn-list-pop-desc"><a href="<?php echo base_url(); ?><?php echo $value['username']; ?>"><h3><?php echo $value['first_name'] . ' ' . $value['last_name']; ?></h3></a>
                                        <h4><?php echo $value['resume']; ?></h4>
                                        <h5><?php echo $value['employment']; ?></h5>
                                        <p>
                                            <b>Specialized in:</b> 
                                            <?php
                                            foreach ($value['skills'] as $skill) {
                                                echo $skill['name'];
                                            }
                                            ?>
                                        </p>
                                        <p><b>Address:</b> <?php echo $value['present_city']; ?></p>
                                        <div class="list-number">
                                            <ul>
                                                <li><img src="<?php echo base_url(); ?>assets/frontend/images/icon/phone.png" alt=""> 0<?php echo $value['mobile']; ?></li>
                                                <li><img src="<?php echo base_url(); ?>assets/frontend/images/icon/mail.png" alt=""> <?php echo $value['email']; ?></li>
                                            </ul>
                                        </div> 
                                        <div class="list-enqu-btn">
                                            <ul>
                                                <li><a href="<?php echo base_url(); ?><?php echo $value['username']; ?>"><i class="fa fa-link" aria-hidden="true"></i>Click to See <?php echo $value['first_name'] . ' ' . $value['last_name']; ?>'s Profile</a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>