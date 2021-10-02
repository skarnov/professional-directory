<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $title; ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/frontend/images/aq.png" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css?family=Poppins%7CQuicksand:500,700" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/font-awesome.min.css">
        <link href="<?php echo base_url(); ?>assets/frontend/css/materialize.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/frontend/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/frontend/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/frontend/css/responsive.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/frontend/css/ARNOV.css" rel="stylesheet">
        
    </head>

    <body>
       
        <section id="background1" class="dir1-home-head">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="dir-ho-tl">
                            <ul>
                                <li>
                                    <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/frontend/images/beta.png" alt=""> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="dir-ho-tr">
                            <ul>
                                <li></li>
                                <?php if ($this->session->userdata('user_id')) { ?>
                                    <li><a href="<?php echo base_url(); ?>user/logout">Signout (<?php echo $this->session->userdata('user_name'); ?>)</a> </li>
                                    <li><a href="<?php echo base_url(); ?>user/my_dashboard"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a> </li>                               
                                <?php } else { ?>
                                    <li><a href="<?php echo base_url(); ?>home/login">Sign In</a> </li>             
                                    <li><a href="<?php echo base_url(); ?>home/index"><i class="fa fa-plus" aria-hidden="true"></i> Join us</a> </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container dir-ho-t-sp">
                <div class="row">
                    <div class="dir-hr1">
                        <div class="dir-ho-t-tit">
                            <?php if ($this->session->flashdata('exception')): ?>
                                <h1 style="color:red">
                                    <?php echo $this->session->flashdata('exception'); ?>
                                </h1>
                            <?php endif; ?>
                            <h1>Find Industry Experts<br /> in Seconds…</h1> 
                            <p>Looking for Doctors, Lawyers, Graduates and other professionals? Search Now!</p>
                        </div>
                        <form action="<?php echo base_url(); ?>cms/search_resume" method="POST" class="tourz-search-form">
                            <div class="input-field enter_city">
                                <input type="text" name="search" id="autocomplete" placeholder="Enter a location" onFocus="geolocate()">
                                <label for="autocomplete"></label>
                            </div>
                            <div class="input-field">
                                <input type="text" name="resume" id="select-search" placeholder="Find expert professionals and companies contact address, phone number"  class="autocomplete">
                                <label for="select-search" class="search-hotel-type"></label>
                            </div>      
                            <div class="input-field">
                                <input type="submit" value="search" class="waves-effect waves-light tourz-sear-btn"> 
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--TOP SEARCH SECTION-->
        <!--BEST THINGS-->
        <section class="com-padd com-padd-redu-bot1">
            <div class="container dir-hom-pre-tit">
                <div class="row">
                    <div class="com-title">
                        <h2>Find Industry Experts <span>in Seconds… </span></h2>
                        <p>Looking for Doctors, Lawyers, Graduates and other professionals? Search Now!</p>
                    </div>
                    <?php
                    foreach ($top_resume as $resume) {
                        ?>
                        <div class="col-md-6">
                            <div>
                                <!--POPULAR LISTINGS-->
                                <div class="home-list-pop" style="">
                                    <!--POPULAR LISTINGS IMAGE-->
                                    <div class="col-md-3 col-sm-6"> 
                                        <?php
                                        if ($resume['profile_picture']) {
                                            ?>
                                           <div> <img src="<?php echo base_url(); ?>media_library/user_images/<?php echo $resume['profile_picture_thumb'] ?>" alt="<?php echo $resume['first_name'] . ' ' . $resume['last_name'] ?>" /> </div>
                                            <?php
                                        } else {
                                            ?>
                                            <img src="<?php echo base_url(); ?>media_library/images/user.png" alt="" /> 
                                            <?php
                                        }
                                        ?>
                                    </div>
                                    <!--POPULAR LISTINGS: CONTENT-->
                                    <div class="col-md-9 col-sm-6 home-list-pop-desc"> <a href="<?php echo base_url(); ?><?php echo $resume['username']; ?>"><h3><?php echo $resume['first_name'] . ' ' . $resume['last_name']; ?></h3></a>
                                        <h4><?php echo $resume['resume']; ?></h4>
                                        <p><?php echo $resume['resume_title']; ?></p> 
                                        <div class="hom-list-share">
                                            <ul>
                                                <li><a href="<?php echo base_url(); ?><?php echo $resume['username']; ?>"><i class="fa fa-link" aria-hidden="true"></i>See full profile</a> </li>
                                                <li><a href="#!"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo $resume['view_counter']; ?></a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </section>
        <!--FOOTER SECTION-->
        <?php echo $footer; ?>
    </body>
</html>