<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Restorations Inc</title>
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/nivo-slider.css">
  <script src="js/libs/modernizr-2.0.6.min.js"></script>
</head>

<body>
  <div id="container" class="contact">
      <header>
          <nav>
              <ul>
                  <li><a href="index.php">HOME</a></li>
                  <li><a href="about_home.php">ABOUT US</a></li>
                  <li><a href="portfolio.php">PORTFOLIO</a></li>
                  <li><a class="active" href="">CONTACT US</a></li>
              </ul>
          </nav>
          <h4 id="phoneNumber" class="visuallyhidden">413.655.0100</h4>
          <h1 id="logo" class="ir">Restorations Inc.</h1>
          <h2 class="visuallyhidden">GENERAL CONTRACTOR</h2>
          <h4 id="address" class="visuallyhidden">151 South St. Hinsdale, Ma 01235</h4>
      </header>
      <h3 class="visuallyhidden">Taylor Development LLC</h3>
      <div id="headerBottom"></div>
      <div id="main" role="main">
          <form id="contactForm" action="sendMail.php">
              <div id="contactLeft">
                  <label for="name">Name</label>
                  <input type="text" name="name" id="name">
                  <br>
                  <label for="phone">Telephone #</label>
                  <input type="text" name="phone" id="phone">
                  <br>
                  <label for="email">Email Address</label>
                  <input type="text" name="email" id="email">
                  <br>
                  <button type="submit" id="contactBtn">CONTACT US</button>
              </div>
              <div id="contactRight">
                  <label for="message">Questions / Comments</label>
                  <textarea name="message" id="message"></textarea>
              </div>
          </form>
      </div>
      <footer>
          <div id="footerTop"></div>
          <div id="footerSFW"><a href="about_sfw.php">Our Smoke, Fire, and Water Division</a></div>
          <div id="footerText">
              <p>
                  Our specialized division of dedicated professionals stands at the ready to aid you in speedily
                  returning the damaged area back to a habitable living space.
              </p>
              <p>
                  Our experience coupled with cutting-edge technology,
                  such as infrared moisture sensing cameras and specialized drying equipment,
                  can help to minimize the disruption caused by such unfortunate events.
                  You can be assured that our competitive rates and timely response have kept us at the
                  head of the line in the view of many local as well as national insurance agencies.
              </p>
          </div>
          <div id="footerBottom">
              <a target="_blank" style="float: left" href="includes/restorations_final.pdf">General Contracting Brochure</a>
              hosted and developed by <a href="http://onsitetechservices.com" target="_blank">onsitetechservices.com</a>
              <a target="_blank" style="float: right" href="includes/RestorationsSFAD.pdf">Smoke, Fire, and Water Division Brochure</a>
          </div>
      </footer>
  </div>

  <?php
  require_once 'includes/bottom.inc.php';
  ?>

</body>
</html>
