<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Romania</title>
    <link rel="stylesheet" href="../assets/css/rooms.css" >
    <link rel="stylesheet" href="../assets/css/index.css">
    
	<link href="https://n.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/4b44ac96c3.js"></script>
</head>
<body>
    <?php 
    include '../components/header.php';
    ?>
    <section id="hero-rooms">
        <div class="inner-content">
            <h2> Rooms / Suites </h2>
        </div>
    </section>
<section class="standard-room">
    <div class="standard-bg"></div>
    <div class="standard-details">
    <h2 class="room-type">
        Standard Room</h2>
        <p class="room-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
        <h1 class="room-price">$250 / Night </h1>  
    <button class="btn-book-now">Book Now <i class="fa fa-arrow-right" style="margin-left: 13px" aria-hidden="true"></i></button>
    </div>
    
</section>
<section class="deluxe-room-page">
    <div class="deluxe-details">
        <h1 class="room-type">Deluxe Room</h1>
        <p class="room-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
        <h1 class="room-price">$270 / Night </h1>  
    <button class="btn-book-now">Book Now <i class="fa fa-arrow-right" style="margin-left: 13px"  aria-hidden="true"></i></button>
    </div>  
     <div class="deluxe-bg"></div>
</section>

<section class="luxurius-room">
    <div class="luxurius-bg"></div>
    <div class="luxurius-details">
        <h1 class="room-type">Luxurius Room</h1>
        <p class="room-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p> <h1 class="room-price">$300 / Night </h1>  
    <button class="btn-book-now">Book Now <i class="fa fa-arrow-right" style="margin-left: 13px"  aria-hidden="true"></i></button>
    </div>
   
</section>
<section id="sub-footer">
    <div class="background-overlay">
      <div class="inner-content">
        <h2>Begin your amazing experience here</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid fugiat, ab perspiciatis accusantium officia veniam?</p>
        <button href="#">Book Now</button>
      </div>
    </div>
  </section>
  <!--<footer> FOOTER START
    FOOTER END
  </footer>-->
  <?php
  include '../components/footer.php';
  ?>
  <script src="../assets/js/script.js"></script>
</body>
</html>