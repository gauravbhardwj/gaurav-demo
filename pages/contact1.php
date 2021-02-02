<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/contact.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
   
    <title>Romania</title>
</head>

<body>
    <!----header start-->
    <?php
    include '../components/header.php';
    
    ?>

    <!----header end -->
    <section id="hero-contact">
        <div class="inner-content">
            <h2>Contact Us</h2>
            <p>We will love to hear from you</p>
        </div>
        </div>
    </section>

    <!-- form section -->
    <section class="contact-form">
        <div class="contacts">
            <div class="address">
                <h1>Address</h1>
                <div class="icon-group">
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i></p>
                    <p>6, Kingway Road Ikoyi, <br> Lagos</p>
                </div>
            </div>
            <div class="phone">
                <h1>Phone</h1>
                <div class="icon-group">
                    <p><i class="fa fa-phone" aria-hidden="true"></i></p>
                    <div>
                        <p>+234-444-444-444</p>
                        <p>+234-444-444-444</p>
                    </div>
                </div>
            </div>
            <div class="email">
                <h1>Email</h1>
                <div class="icon-group">
                    <p><i class="fa fa-envelope-o" aria-hidden="true"></i></p>
                    <p>enquires@romaniahotels.com</p>
                </div>
            </div>
        </div>

        <hr id="divider" />

        <div class="form">
            <form>
                <h1>Drop a message</h1>
                <div class="input-group">
                    <label for="name" id="name">Name</label>
                    <input type="text" name="name" id="name" />
                </div>
                <div class="input-group">
                    <label for="name" id="name">Email</label>
                    <input type="email" name="name" id="name" />
                </div>
                <div class="input-group">
                    <label for="name" id="phone">Phone Number</label>
                    <input type="number" name="name" id="phone" />
                </div>
                <div class="input-group">
                    <label for="name" id="message">Message</label>
                    <textarea name="message" id="message" cols="10" rows="2"></textarea>
                </div>
                <input type="submit" value="Send" />
            </form>
        </div>
    </section>

    <section id="sub-footer">
        <div class="background-overlay">
            <div class="inner-content">
                <h2>Begin your amazing experience here</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing
                    elit. Aliquid fugiat, ab perspiciatis accusantium
                    officia veniam?
                </p>
                <button href="#">Book Now</button>
            </div>
        </div>
    </section>
    <?php
  include '../components/footer.php';
  ?>

    <!--<footer>FOOTER START
        
    FOOTER END </footer>-->
    <script src="assets/js/script.js"></script>
</body>

</html>