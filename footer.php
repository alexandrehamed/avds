<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mx-auto" id="leftrowfoot">
                <a href="">CONDITIONS GENERALES DE VENTE</a>
                <br><br>
                <a href="">PROTECTION DES DONNEES</a>
                <br><br>
                <a href="">MENTION LEGALES</a>
            </div>
            <div class="col-lg-5 col-md-4 col-sm-12 col-xs-12 offset-md-4" id="righrowfoot">

                <p>
                    AUTOMOBILES DU VAL DE SEINE 95530 LA FRETTE SUR SEINE
                </p>

                <p>
                    Tel : 06 78 76 54 38 <br> ou 01 23 43 33 33
                </p>
            </div>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"
        integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4"
        crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/2353d4322c.js"></script>

 <!-- <script>
    $(function() {

        $("#contactForm input,#contactForm textarea").jqBootstrapValidation({
            preventSubmit: true,
            submitError: function($form, event, errors) {
                // additional error messages or events
            },
            submitSuccess: function($form, event) {
                event.preventDefault(); // prevent default submit behaviour
                // get values from FORM
                var lastname = $("input#lastname").val();
                var name = $("input#name").val();
                var email = $("input#email").val();
                var object = $("input#object").val();
                var message = $("textarea#message").val();
                var firstName = name; // For Success/Failure Message
                // Check for white space in name for Success/Fail message
                if (firstName.indexOf(' ') >= 0) {
                    firstName = name.split(' ').slice(0, -1).join(' ');
                }
                $this = $("#sendMessageButton");
                $this.prop("disabled", true); // Disable submit button until AJAX call is complete to prevent duplicate messages
                $.ajax({
                    url: "contact.php",
                    type: "POST",
                    data: {
                        lastname: lastname,
                        name: name,
                        object: object,
                        email: email,
                        message: message
                    },
                    cache: false,
                    success: function() {
                        // Success message
                        $('#success').html("<div class='alert alert-success'>");
                        $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                            .append("</button>");
                        $('#success > .alert-success')
                            .append("<strong>Your message has been sent. </strong>");
                        $('#success > .alert-success')
                            .append('</div>');
                        //clear all fields
                        $('#contactForm').trigger("reset");
                    },
                    error: function() {
                        // Fail message
                        $('#success').html("<div class='alert alert-danger'>");
                        $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                            .append("</button>");
                        $('#success > .alert-danger').append($("<strong>").text("Sorry " + firstName + ", it seems that my mail server is not responding. Please try again later!"));
                        $('#success > .alert-danger').append('</div>');
                        //clear all fields
                        $('#contactForm').trigger("reset");
                    },
                    complete: function() {
                        setTimeout(function() {
                            $this.prop("disabled", false); // Re-enable submit button when AJAX call is complete
                        }, 1000);
                    }
                });
            },
            filter: function() {
                return $(this).is(":visible");
            },
        });

        $("a[data-toggle=\"tab\"]").click(function(e) {
            e.preventDefault();
            $(this).tab("show");
        });
    });

    /*When clicking on Full hide fail/success boxes */
    $('#name').focus(function() {
        $('#success').html('');
    });
</script> -->
</body>
</html>