<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="../assets/css/owl.theme.default.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/index.css">
  <title>RISE INN</title>
</head>

<body>

  <!----header start-->

  <?php
  include '../components/header.php';
  ?>

  <!----header end -->

  <section id="hero">
    <div class="background-overlay">
      <div class="hero-content">
        <p>Welcome to Hotel Rise INN</p>
        <h1>Experience home away from home</h1>
      </div>
    </div>
  </section>
  <section id="tour">
    <div id="inner-tour">
      <div class="input-box">
        <div class="box-content">
          <p class="formatted-check-in-date"></p>
          <input type="date" name="check-in-date" value="2020-06-03" id="check-in-date">
          <label for="check-in-date">Check-In</label>
        </div>
      </div>
      <div class="input-box">
        <div class="box-content">
          <p class="formatted-check-out-date"></p>
          <input type="date" name="check-out-date" value="2020-06-04" id="check-out-date">
          <label for="check-out-date">Check-Out</label>
        </div>
      </div>


      <div class="input-box">
        <div class="box-content">
          <select name="guests" id="guests">
            <option style="color: #F8885A; padding-left: 10px" value="1 Adult">1 Adult</option>
            <option style="color: #F8885A; padding-left: 10px" value="2 Adults" selected>2 Adults</option>
            <option style="color: #F8885A; padding-left: 10px" value="3 Adults">3 Adults</option>
          </select>
          <label>Guests</label>
        </div>
      </div>
      <div class="input-box">
        <input type="submit" value="Check Rates">
      </div>
    </div>
  </section>

  <section id="about-us">
    <div class="watermark-tag">Explore.</div>
    <div class="inner-content">
      <h4>About Us</h4>

      <h2>Your comfort begins here</h2>
      <div class="about-us-content">
        <img src="../assets/images/footer img.jpg" alt="about-us" />
        <div class="sub-content">
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non dignissimos alias id eaque autem doloremque sint sit ea harum a obcaecati cum debitis, vero voluptatibus eligendi illo ipsum natus earum soluta, fugit dolor. Sunt sequi aut tenetur error porro voluptas culpa, fugit repudiandae, sit dignissimos neque eveniet, at inventore quaerat.</p>
          <a href="#">Explore</a>
        </div>
      </div>
    </div>
  </section>
  <section id="rooms">
    <div class="watermark-tag">Suites.</div>
    <div class="inner-content">
      <h4>Rooms</h4>
      <h2>Rooms / Suites.</h2>
      <div class="room-gallery">
        <div class="luxury-room">
          <div class="overlay"></div>
          <img src="../assets/images/luxury room.jpg" alt="Luxury room">
          <p>Luxury Room <span>$300/Night</span></p>
        </div>
        <div class="room-group">
          <div class="deluxe-room">
            <div class="overlay"></div>
            <img src="../assets/images/deluxe room.jpg" alt="Deluxe room">
            <p>Deluxe Room <span>$270/Night</span></p>
          </div>
          <div class="standard-room">
            <div class="overlay"></div>
            <img src="../assets/images/standard room.jpg" alt="Standard room">
            <p>Standard Room <span>$250/Night</span></p>
          </div>
        </div>
      </div>
      <div class="slider-indicators">
        <a href="#luxury-room" class="slider-indicator current-slide"></a>
        <a href="#deluxe-room" class="slider-indicator"></a>
        <a href="#standard-room" class="slider-indicator"></a>
      </div>
      <div class="room-gallery-mobile">
        <div class="luxury-room" id="luxury-room">
          <div class="overlay"></div>
          <img src="../assets/images/luxury room.jpg" alt="Luxury room">
          <p>Luxury Room <span>$300/Night</span></p>
        </div>
        <div class="deluxe-room" id="deluxe-room">
          <div class="overlay"></div>
          <img src="../assets/images/deluxe room.jpg" alt="Deluxe room">
          <p>Deluxe Room <span>$270/Night</span></p>
        </div>
        <div class="standard-room" id="standard-room">
          <div class="overlay"></div>
          <img src="../assets/images/standard room.jpg" alt="Standard room">
          <p>Standard Room <span>$250/Night</span></p>
        </div>
      </div>
      <a class="suites-link" href="#">See All</a>
    </div>
  </section>


  <div class="owl-carousel owl-theme">
    <img class="owl-lazy" data-src="https://placehold.it/350x450&text=1" data-src-retina="https://placehold.it/350x250&text=1-retina" alt="">
    <img class="owl-lazy" data-src="https://placehold.it/350x650&text=2" data-src-retina="https://placehold.it/350x250&text=2-retina" alt="">
    <picture>
      <source class="owl-lazy" media="(min-width: 650px)" data-srcset="https://placehold.it/350x250&text=3-large">
      <source class="owl-lazy" media="(min-width: 350px)" data-srcset="https://placehold.it/350x250&text=3-medium">
      <img class="owl-lazy" data-src="https://placehold.it/350x250&text=3-fallback" alt="">
    </picture>
    <img class="owl-lazy" data-src="https://placehold.it/350x250&text=4" alt="">
    <img class="owl-lazy" data-src="https://placehold.it/350x250&text=5" alt="">
    <img class="owl-lazy" data-src="https://placehold.it/350x250&text=6" alt="">
    <img class="owl-lazy" data-src="https://placehold.it/350x250&text=7" alt="">
    <img class="owl-lazy" data-src="https://placehold.it/350x250&text=8" alt="">
    <img class="owl-lazy" data-src="https://placehold.it/350x400&text=9" alt="">
    <img class="owl-lazy" data-src="https://placehold.it/350x400&text=10" alt="">
    <img class="owl-lazy" data-src="https://placehold.it/350x450&text=11" alt="">
  </div>

  <section id="facilities">
    <div class="inner-content">
      <h4>Why us?</h4>
      <h2>Our Facilities</h2>
      <div class="facilities-group">
        <div class="facility">
          <div class="overlay"></div>
          <img src="../assets/images/swimming pool.jpg" alt="swimming pool" />
          <p>Swimming Pool</p>
        </div>
        <div class="facility">
          <div class="overlay"></div>
          <img src="../assets/images/footer img.jpg" alt="mordern gym">
          <p>Modern Gym</p>
        </div>
        <div class="facility">
          <div class="overlay"></div>
          <img src="../assets/images/restaurant.jpg" alt="24/7 Restaurant">
          <p>24/7 Restaurant</p>
        </div>
      </div>
      <div class="slider-indicators">
        <a href="#swimming-pool" class="slider-indicator-2 current-slide-2"></a>
        <a href="#modern-gym" class="slider-indicator-2"></a>
        <a href="#restaurant" class="slider-indicator-2"></a>
      </div>
      <div class="facilities-group-mobile">
        <div class="facility" id="swimming-pool">
          <div class="overlay"></div>
          <img src="../assets/images/swimming pool.jpg" alt="swimming pool" />
          <p>Swimming Pool</p>
        </div>
        <div class="facility" id="modern-gym">
          <div class="overlay"></div>
          <img src="../assets/images/footer img.jpg" alt="mordern gym">
          <p>Modern Gym</p>
        </div>
        <div class="facility" id="restaurant">
          <div class="overlay"></div>
          <img src="../assets/images/restaurant.jpg" alt="24/7 Restaurant">
          <p>24/7 Restaurant</p>
        </div>
      </div>
      <a class="facilities-link" href="#">See All</a>
    </div>
  </section>
  <section id="testimonials">
    <div class="inner-content">
      <h4>Testimonials</h4>
      <h2>What they say about us</h2>
      <div class="slider-indicators">
        <a href="#testimonial-1" class="slider-indicator-3 current-slide-3"></a>
        <a href="#testimonial-2" class="slider-indicator-3"></a>
        <a href="#testimonial-3" class="slider-indicator-3"></a>
      </div>
      <div class="testimonials-group">
        <div class="testimonial" id="testimonial-1">
          <h5>An Amazing Experience!</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod iure officia cupiditate obcaecati doloremque consequuntur molestiae recusandae perspiciatis ea error, minus repudiandae!</p>
          <div class="personal-info">
            <img src="../assets/images/avatar.jpg" alt="avatar">
            <p>Rose Kennedy<small>From Egypt</small></p>
          </div>
        </div>
        <div class="testimonial" id="testimonial-2">
          <h5>An Amazing Experience!</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod iure officia cupiditate obcaecati doloremque consequuntur molestiae recusandae perspiciatis ea error, minus repudiandae!</p>
          <div class="personal-info">
            <img src="../assets/images/avatar.jpg" alt="avatar">
            <p>Rose Kennedy<small>From Egypt</small></p>
          </div>
        </div>
        <div class="testimonial" id="testimonial-3">
          <h5>An Amazing Experience!</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod iure officia cupiditate obcaecati doloremque consequuntur molestiae recusandae perspiciatis ea error, minus repudiandae!</p>
          <div class="personal-info">
            <img src="../assets/images/avatar.jpg" alt="avatar">
            <p>Rose Kennedy<small>From Egypt</small></p>
          </div>
        </div>
      </div>
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


  <!--footer start-->

  <?php
  include '../components/footer.php';
  ?>

  <!----footer end -->
</body>

<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/owl.carousel.min.js"></script>
<script src="../assets/js/script.js"></script>

</html>