
<?php include('inc/header.php'); ?>


<style>
@media (max-width: 767px)
{
.contact-detail .address {
	display:none;  
} 

}
</style>

    <!-- Start Banner -->

    <div class="inner-banner contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-lg-9">
                    <div class="content">
                        <h1 style="margin-top: 4%;">Contact Us</h1>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- End Banner -->

    <!-- Start Contact Us -->
    <section class="our-impotance have-question padding-lg">
        <div class="container">

            <div class="inner">

                <h6> <b>Head Office : Willimbula Estate, Horagas deka Junction, Weliveriya</b></h6>
            </div>
            <div class="inner" style="margin-top: 1%"><h6><b>Branches (Coming Soon) : Thabuttegama, Medawachchiya, Vavuniya, Jaffna</b></h6></div>

            <div class="inner" style="margin-top: 1%;"><h6 style="text-transform: lowercase"><b><i class="fa fa-envelope-o"></i> : info@balacademy.lk </b></h6></div>

            <div class="inner" style="margin-top: 1%">

                <h6><b><i class="fa fa-phone"></i>  : 077 62 45 255 / 033 22 47 447 / 070 30 22 333</b></h6>

            </div>




        </div>
    </section>


    <section class="form-wrapper padding-lg" style="margin-top: -10%">
        <div class="container">
            <h2>Inquiry Form</h2><br>
            <form name="contact-form" id="contactfrm">
                <div class="row input-row">
                    <div class="col-sm-6">
                        <input name="name" type="text" required placeholder="Name">
                    </div>


                </div>
                <div class="row input-row">
                    <div class="col-sm-6">
                        <select name="course" required>
                            <option value="Course Not Selected">Select a Course</option>
                            <option value="The English Camp (Residential English Course)">The English Camp (Residential
                                English Course)
                            </option>
                            <option value="Non Residential Course">Non Residential Course</option>

                            <option value="Week End Intensive Course">Week End Intensive Course</option>

                            <option value="Adults Course">Adults Course</option>
                        </select>
                    </div>


                    <div class="col-sm-4">
                        <input name="email" type="email" required placeholder="Email">
                    </div>

                </div>
                <div class="row input-row">
                    <div class="col-sm-6">
                        <input name="address" type="text" required placeholder="Address">
                    </div>
                    <div class="col-sm-4">
                        <input name="phone" type="text" required placeholder="Phone Number">
                    </div>



                </div>
                <div class="row input-row">
                    <div class="col-sm-10">
                        <input name="message" type="text" placeholder="Message">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <br>
                        <button class="btn">Submit<span class="icon-more-icon"></span></button>
                        <div id="status"></div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>

        // this is the id of the form
        $(document).ready(function () {

            $("#contactfrm").submit(function (e) {
                //  e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: 'mail.php',
                    data: $(this).serialize(), // serializes the form's elements.
                    success: function (data) {
                        $('#status').html('<div  class="msg-success">Your Query Sent Successfully We will Contact you Soon</div>');
                        $('#contactfrm')[0].reset();
                    }
                });
                return false;
            });

        });
    </script>

    <!-- end Contact Us -->

    <!-- Start Google Map -->

    <section class="google-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d63357.911540844056!2d80.0787342!3d7.0246255!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2ffc978c8f579%3A0x12e7046029d3d5a3!2sBritish+Language+Academy!5e0!3m2!1sen!2slk!4v1507424138898" width="100%" height="650" frameborder="0" style="border:0" allowfullscreen></iframe>
        <div class="container">
            <div class="contact-detail">
                <div class="address">
                    <div class="inner">
                        <h3>British Advance Language Academy</h3>
                        <p>Willimbula Estate, Horagas deka Junction, Weliveriya</p>
                    </div>
                    <div class="inner">
                        <h3>077 62 45 255</h3>
                    </div>
                    <div class="inner" style="text-transform: lowercase"><a href="info@balacademy.lk">info@balacademy.lk</a></div>

                </div>

            </div>
        </div>
    </section>

    <!-- End Google Map -->

    <!-- Start Have Questions -->


    <!-- End Have Questions -->
<div style="margin-top: -2%">
<?php include('inc/footer.php'); ?>
</div>
