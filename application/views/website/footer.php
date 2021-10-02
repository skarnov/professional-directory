<br />
<footer id="colophon" class="site-footer clearfix">
    <div id="quaternary" class="sidebar-container " role="complementary">
        <div class="sidebar-inner">
            <div class="widget-area clearfix">
                <div id="azh_widget-2" class="widget widget_azh_widget">
                    <div data-section="section" class="foot-sec2">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-4">
                                    <h4>Address</h4>
                                    <p>House:29, Road:09, Flat:5B, Sector:4 Uttara, Dhaka, Bangladesh. </p>
                                    <p> <span class="strong">Phone: </span> <span class="highlighted">+8801 7092 97766</span> </p>
                                    <p> <span class="strong">Email: </span> <span class="highlighted">info@proffbd.com</span> </p>
                                </div>
                                <div class="col-sm-3">
                                    <h4>Support & Help</h4>
                                    <ul class="two-columns">
                                        <li> <a href="">About Us</a> </li>
                                        <li> <a href="">How it works </a> </li>
                                        <li> <a href="">Blog</a> </li>
                                        <li> <a href="">Advertise us</a> </li>
                                        <li> <a href="">Contact us</a> </li>
                                        <li> <a href="">Terms and Condition</a> </li>

                                    </ul>
                                </div>
                                <div class="col-sm-5 foot-social">
                                    <h4>Follow with us</h4>
                                    <p>Join the thousands of other There are many variations of passages of Lorem Ipsum available</p>
                                    <ul>
                                        <li><a href="#!"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                                        <li><a href="#!"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
                                        <li><a href="#!"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
                                        <li><a href="#!"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .widget-area -->
        </div>
        <!-- .sidebar-inner -->
    </div>
    <!-- #quaternary -->
</footer>
<?php if (!$this->session->userdata('user_id')) { ?>
    <div class="floating_right_panel">
        <a href="<?php echo base_url(); ?>home/index"><div class="floating_panel_handle"><img style="width:50px" src="<?php echo base_url(); ?>assets/frontend/images/resume.png"><p style="color:#fff;line-height:12px;font-size:12px;padding-top:5px">Create your CV</p></div></a>
    </div>
<?php } ?>
<section class="copy">
    <div class="container">
        <p>Copyrights © 2018 Proffbd.com &nbsp;&nbsp;All Rights Reserved. </p>
    </div>
</section>
<!--SCRIPT FILES-->
<script src="<?php echo base_url(); ?>assets/frontend/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/bootstrap.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/materialize.min.js" type="text/javascript"></script>
<?php
$ABC = array();
foreach ($all_resumes as $resume) {
    $ABC[$resume->name] = null;
}
?>
<script type='text/javascript'>
    var ABC = <?php echo!count($ABC) ? '{}' : json_encode($ABC) ?>;
</script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/custom.js"></script>
<script type="text/javascript">
    $('.floating_panel_handle').on('click', function () {
        var ths = $(this);
        var container = ths.closest('.floating_right_panel');
        if (container.hasClass('floating_right_panel_open')) {
            container.removeClass('floating_right_panel_open');
            ths.find('i').addClass('fa-chevron-circle-left').removeClass('fa-chevron-circle-right');
        } else {
            container.addClass('floating_right_panel_open');
            ths.find('i').removeClass('fa-chevron-circle-left').addClass('fa-chevron-circle-right');
        }
    });
</script>
<script>
    var placeSearch, autocomplete;
    var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
    };
    function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
                /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
                {types: ['geocode']});
        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
    }
    function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();
        for (var component in componentForm) {
            document.getElementById(component).value = '';
            document.getElementById(component).disabled = false;
        }
        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
            var addressType = place.address_components[i].types[0];
            if (componentForm[addressType]) {
                var val = place.address_components[i][componentForm[addressType]];
                document.getElementById(addressType).value = val;
            }
        }
    }
    // Bias the autocomplete object to the user's geographical location,
    // as supplied by the browser's 'navigator.geolocation' object.
    function geolocate() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
                var geolocation = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };
                var circle = new google.maps.Circle({
                    center: geolocation,
                    radius: position.coords.accuracy
                });
                autocomplete.setBounds(circle.getBounds());
            });
        }
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvey0q0kHdCf2HFQLOqYqJWpMS6Mnic0I&libraries=places&callback=initAutocomplete" async defer></script>