<!doctype html>

<html class="no-js" lang="en">

<head>



    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>

<!-- header-area-end -->
<div class="container">
    <div class="col-md-5">
        <div class="form-area">
            <form id="contactfrm" role="form">

                <br style="clear:both">
                <h3 style="margin-bottom: 25px; text-align: center;">Contact Form</h3>
                <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="message" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>

                </div>

                <button type="submit" id="submit"  name="submit" class="btn btn-primary pull-right">Submit Form</button>
                <div id="status" class="alert" role="alert"></div>
            </form>
        </div>
    </div>
</div>


<!-- footer-area-end -->




<script src="js/jquery-1.11.1.min.js"></script>
<!-- bootstrap js -->
<script src="js/bootstrap.min.js"></script>

<script>

    // this is the id of the form
    $(document).ready(function(){

        $("#contactfrm").submit(function(e) {
          //  e.preventDefault();
            $.ajax({
                type: "POST",
                url: 'mail.php',
                data: $(this).serialize(), // serializes the form's elements.
                success: function(data)
                {
                    $('#status').html('<div class="alert-success"> Success</div>');
                    $('#contactfrm')[0].reset();
                }
            });
            return false;
        });

    });
</script>
</body>


</html>

