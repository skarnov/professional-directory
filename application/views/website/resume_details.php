<section>
    <div class="v3-list-ql">
        <div class="container">
            <div class="row">
                <div class="v3-list-ql-inn">
                    <ul>
                        <li class="active"><a href="#ld-abour"><i class="fa fa-briefcase"></i>Experience</a>
                        </li>
                        <li><a href="#ld-ser"><i class="fa fa-graduation-cap"></i> Education</a>
                        </li>
                        <li><a href="#ld-gal"><i class="fa fa-certificate"></i> Certification</a>
                        </li>
                        <li><a href="#ld-roo"><i class="fa fa-hashtag"></i>Specialization</a>
                        </li>
                        <li><a href="#ld-vie"><i class="fa fa-pagelines"></i> Portfolio</a>
                        </li>
                        <li><a href="#ld-rew"><i class="fa fa-info"></i> Others Informations</a>
                        </li>
<!--                                <li><a href="#ld-rer"><i class="fa fa-star"></i>Review</a>
                        <li><a href="#" data-dismiss="modal" data-toggle="modal" data-target="#list-quo"><i class="fa fa-plane" aria-hidden="true"></i> Request for Appointment</a> </li>-->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pg-list-1" style="background:url(<?php echo base_url(); ?>/assets/frontend/images/bg.jpeg);padding-top:100px;">
    <div class="container">
        <div class="row">
            <div class="pg-list-1-left">
                <div style="width:150px">
                    <?php
                    if ($resume['profile_picture']) {
                        ?>
                        <img style="width:100%;"src="<?php echo base_url(); ?>media_library/user_images/<?php echo $resume['profile_picture']; ?>" alt="" style="height: 120px;">
                        <?php
                    } else {
                        ?>
                        <img style="width:100%;" src="<?php echo base_url(); ?>media_library/images/user.png" alt="" /> 
                        <?php
                    }
                    ?>
                </div>
                <h3><?php echo $resume['first_name'] . ' ' . $resume['last_name']; ?></h3>
                <h4><?php echo $resume['resume_title']; ?></h4>

                <div class="list-number pag-p1-phone">
                    <ul>
                        <li><i class="fa fa-phone" aria-hidden="true"></i> 0<?php echo $resume['mobile']; ?></li>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo $resume['email']; ?></li>
                    </ul>
                </div><br />

                <!--                        <ul class="profile_social_icon">
                                            <li><a href="#!"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                                            <li><a href="#!"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
                                            <li><a href="#!"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                                            <li><a href="#!"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
                                            <li><a href="#!"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
                                            <li><a href="#!"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> </li>
                                        </ul>-->
            </div>
            <div class="pg-list-1-right">
                <div class="list-enqu-btn pg-list-1-right-p1">
                    <div class="profile_summery"><?php echo $resume['summary']; ?></div>
<!--                            <div class="list-rat-ch"> <span>5.0</span> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </div>-->
                </div>
            </div>
        </div>
    </div>
</section>
<section class="list-pg-bg">
    <div class="container">
        <div class="row">
            <div class="com-padd">
                <div class="list-pg-lt list-page-com-p" style="width:100%;">
                    <div class="pglist-p1 pglist-bg pglist-p-com" id="ld-abour">
                        <div class="pglist-p-com-ti">
                            <h3><span>Experience</span> </h3>
                        </div>
                        <div class="list-pg-inn-sp">
                            <div class="how-border how-com-mob-bot-space">
                                <div class="how-com">
                                    <ul>
                                        <?php
                                        foreach ($resume['experiences'] as $experience) {
                                            ?>

                                            <li> 
                                                <img src="<?php echo base_url(); ?>assets/frontend/images/employment.png" alt="employment">
                                                <h4><?php echo $experience['designation']; ?></h4>
                                                <h5 class="h5_view_profile"><?php echo $experience['company_name']; ?></h5>

                                                <?php
                                                $end_date = $experience['end_date'];
                                                if ($end_date) {
                                                    ?>
                                                    <h5 class="h5_view_profile"><?php echo $experience['start_date'] . ' To ' . $end_date; ?></h5><br />
                                                    <?php
                                                } else {
                                                    ?>
                                                    <h5 class="h5_view_profile"><?php echo $experience['start_date'] . ' To Continuing...'; ?></h5><br />

                                                    <?php
                                                }
                                                ?>
                                                <p><?php echo $experience['responsibilities']; ?></p>
                                            </li>
                                            <hr/>
                                            <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pglist-p2 pglist-bg pglist-p-com" id="ld-ser">
                        <div class="pglist-p-com-ti">
                            <h3><span>Education</span> </h3>
                        </div>
                        <div class="list-pg-inn-sp">
                            <div class="how-border how-com-mob-bot-space">
                                <div class="how-com">
                                    <ul>
                                        <?php
                                        foreach ($resume['educations'] as $education) {
                                            ?>
                                            <li> 
                                                <img src="<?php echo base_url(); ?>assets/frontend/images/education.png" alt="education">
                                                <h4><?php echo $education['certification_name']; ?></h4>
                                                <h5 class="h5_view_profile"><?php echo $education['institute_name']; ?></h5>
                                                <h5  class="h5_view_profile"><?php echo $education['year']; ?></h5>
                                                <p>Subject: <?php echo $education['major']; ?></p>
                                                <p>Duration: <?php echo $education['duration']; ?></p>
                                            </li>
                                            <?php
                                        }
                                        ?>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pglist-p3 pglist-bg pglist-p-com" id="ld-gal">
                        <div class="pglist-p-com-ti">
                            <h3><span>Training Certification</span> </h3>
                        </div>
                        <div class="list-pg-inn-sp">
                            <div class="how-border how-com-mob-bot-space">

                                <div class="how-com">
                                    <ul>
                                        <?php
                                        foreach ($resume['certifications'] as $certifications) {
                                            ?>
                                            <li> 
                                                <img src="<?php echo base_url(); ?>assets/frontend/images/certificate.png" width="60px" alt="education">
                                                <h4><?php echo $certifications['name'] ?></h4>
                                                <p><?php echo $certifications['institute'] ?></p>
                                                <p><?php echo $certifications['period'] ?></p>
                                                <p><?php echo $certifications['location'] ?></p>
                                            </li>
                                            <?php
                                        }
                                        ?>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--END LISTING DETAILS: LEFT PART 3-->
                    <!--LISTING DETAILS: LEFT PART 4-->
                    <div class="pglist-p3 pglist-bg pglist-p-com" id="ld-roo">
                        <div class="pglist-p-com-ti">
                            <h3><span>Specialization</span></h3> </div>
                        <div class="list-pg-inn-sp">
                            <!--LISTINGS IMAGE-->

                            <div class="how-border how-com-mob-bot-space">



                                <div class="list-room-type list-rom-ami">
                                    <ul>
                                        <?php
                                        foreach ($resume['skills'] as $skill) {
                                            ?>

                                            <li><?php echo $skill['name']; ?></li>
                                            <?php
                                        }
                                        ?>
                                    </ul>
                                </div> 

                            </div> 
                        </div>
                    </div>
                    <!--END 360 DEGREE MAP: LEFT PART 8-->
                    <div class="pglist-p3 pglist-bg pglist-p-com" id="ld-vie">
                        <div class="pglist-p-com-ti">
                            <h3><span>Portfolio</span> </h3> </div>


                        <div style="padding-top:10px">

                            <div class="row span-none">

                                <?php
                                foreach ($resume['portfolios'] as $portfolio) {
                                    ?>

                                    <div class="col-md-6 col-sm-6">
                                        <div class="hom-pro" style="margin-bottom:20px"> 

                                            <h4><?php echo $portfolio['name'] ?></h4>
                                            <p><?php echo $portfolio['description'] ?></p> 
                                            <a target="b_blank" href="<?php echo $portfolio['link'] ?>">Live Link</a> </div>
                                    </div>


                                    <?php
                                }
                                ?>






                            </div>
                        </div>


                    </div>
                    <!--END 360 DEGREE MAP: LEFT PART 8-->
                    <!--LISTING DETAILS: LEFT PART 6-->
                    <div class="pglist-p3 pglist-bg pglist-p-com" id="ld-rew">
                        <div class="pglist-p-com-ti">
                            <h3><span>Others Information</span></h3> </div>
                        <div class="pg-elem">

                            <ul class="collapsible" data-collapsible="accordion">
                                <li class="">
                                    <div class="collapsible-header"><i class="material-icons">whatshot</i>Language</div>
                                    <?php
                                    foreach ($resume['languages'] as $language) {
                                        ?>
                                        <div class="collapsible-body" style="display: none;">
                                            <?php echo $language['name']; ?>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </li>
                                <li class="">
                                    <div class="collapsible-header"><i class="material-icons">whatshot</i>Membership</div>
                                    <?php
                                    foreach ($resume['memberships'] as $membership) {
                                        ?>
                                        <div class="collapsible-body" style="display: none;">
                                            <?php echo $membership['name']; ?>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </li>
                                <li class="">
                                    <div class="collapsible-header"><i class="material-icons">whatshot</i>Honors & Awards</div>



                                    <?php
                                    foreach ($resume['honors_and_awards'] as $honors_and_award) {
                                        ?>
                                        <div class="collapsible-body" style="display: none;">
                                            <?php echo $honors_and_award['name']; ?><br/>
                                            <p>Date: <?php echo $honors_and_award['date']; ?></p>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </li>
                                <li class="">
                                    <div class="collapsible-header"><i class="material-icons">whatshot</i>Hobbies & Interest</div>


                                    <?php
                                    foreach ($resume['hobbies_and_interests'] as $hobbies_and_interest) {
                                        ?>
                                        <div class="collapsible-body" style="display: none;">
                                            <?php echo $hobbies_and_interest['name']; ?><br/>
                                            <p><?php echo $hobbies_and_interest['description']; ?></p>
                                        </div>
                                        <?php
                                    }
                                    ?>

                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--END LISTING DETAILS: LEFT PART 6-->
                    <!--LISTING DETAILS: LEFT PART 5-->
                    <!--END LISTING DETAILS: LEFT PART 5-->
                </div>
            </div>
        </div>
    </div>
</section>
