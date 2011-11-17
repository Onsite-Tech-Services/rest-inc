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
  <link rel="stylesheet" href="css/skin.css">
  <script src="js/libs/modernizr-2.0.6.min.js"></script>
</head>

<body>
  <div id="container" class="portfolio">
      <header>
          <nav>
              <ul>
                  <li><a href="index.php">HOME</a></li>
                  <li><a href="about_home.php">ABOUT US</a></li>
                  <li><a class="active" href="">PORTFOLIO</a></li>
                  <li><a href="contact.php">CONTACT US</a></li>
              </ul>
          </nav>
          <h4 id="phoneNumber" class="visuallyhidden">413.655.0100</h4>
          <h1 id="logo" class="ir">Restorations Inc.</h1>
          <h2 class="visuallyhidden">GENERAL CONTRACTOR</h2>
          <h4 id="address" class="visuallyhidden">151 South St. Hinsdale, Ma 01235</h4>
      </header>
      <h3 class="visuallyhidden">Taylor Development LLC</h3>
      <div id="headerBottom">
          <a id="galleryLink" href="">PROJECT GALLERY</a>
      </div>
      <ul id="projectList">
          <li><a href="portfolio.php?project=Berkshire Hills">Berkshire Hills</a></li>
          <li><a href="portfolio.php?project=Shrine">Shrine</a></li>
          <li><a href="portfolio.php?project=Office">Office</a></li>
          <li><a href="portfolio.php?project=House">Home</a></li>
      </ul>
      <div id="main" role="main">
          <?php switch($_GET['project']){
            case 'Shrine':
          ?>
          <div id="projectText">
              <h3>Shrine of the Divine Mercies</h3>
              <h4>
                  Eden Hill
                  <br>
                  Stockbridge, MA
              </h4>
              <p>Begun in October 2008, Restorations Inc. was able to complete the entire Shrine project in time to
                  welcome the more than fifteen thousand visitors slated to arrive at their annual gathering the following month of May.
                  The five thousand square foot building features both a Mother Mercy shrine on the upper level
                  as well as one dedicated to The Holy Innocence in the basement of the structure.
                  The Marian Fathers were well pleased that the deadline was met and gave credit to Taylor's
                  firm in a front page article in The Berkshire Eagle, the local newspaper.
              </p>
          </div>
          <div id="imageDisplay">
              <img width="410" height="350" src="img/projects/shrine/img_first.jpg" alt="">
          </div>
          <ul id="carousel" class="jcarousel-skin-tango">
              <li><a href="img/projects/shrine/img02.jpg"><img src="img/projects/shrine/img02_tn.jpg" alt=""></a></li>
              <li><a href="img/projects/shrine/img01.jpg"><img src="img/projects/shrine/img01_tn.jpg" alt=""></a></li>
          </ul>
          <?php
                break;
              case 'Office':
          ?>
          <div id="imageDisplay">
              <img src="img/projects/office/img01.jpg" alt="">
          </div>
          <ul id="carousel" class="jcarousel-skin-tango">
              <li class="active"><a href="img/projects/office/img01.jpg"><img src="img/projects/office/img01_tn.jpg" alt=""></a></li>
              <li><a href="img/projects/office/img02.jpg"><img src="img/projects/office/img02_tn.jpg" alt=""></a></li>
              <li><a href="img/projects/office/img03.jpg"><img src="img/projects/office/img03_tn.jpg" alt=""></a></li>
          </ul>
          <?php
                break;
            case 'House':
          ?>
          <div id="imageDisplay">
              <img src="img/projects/house/img01.jpg" alt="">
          </div>
          <ul id="carousel" class="jcarousel-skin-tango">
              <li class="active"><a href="img/projects/house/img01.jpg"><img src="img/projects/house/img01_tn.jpg" alt=""></a></li>
              <li><a href="img/projects/house/img02.jpg"><img src="img/projects/house/img02_tn.jpg" alt=""></a></li>
              <li><a href="img/projects/house/img03.jpg"><img src="img/projects/house/img03_tn.jpg" alt=""></a></li>
          </ul>
          <?php
                break;
          default:
      ?>
      <div id="imageDisplay">
          <img src="img/projects/berkshireHills/img01.jpg" alt="">
      </div>
      <ul id="carousel" class="jcarousel-skin-tango">
          <li class="active"><a href="img/projects/berkshireHills/img01.jpg"><img src="img/projects/berkshireHills/img01_tn.jpg" alt=""></a></li>
          <li><a href="img/projects/berkshireHills/img02.jpg"><img src="img/projects/berkshireHills/img02_tn.jpg" alt=""></a></li>
          <li><a href="img/projects/berkshireHills/img03.jpg"><img src="img/projects/berkshireHills/img03_tn.jpg" alt=""></a></li>
          <li><a href="img/projects/berkshireHills/img04.jpg"><img src="img/projects/berkshireHills/img04_tn.jpg" alt=""></a></li>
      </ul>
      <?php
          }
          ?>
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
              <a href="http://onsitetechservices.com" target="_blank">onsitetechservices.com</a>
              <a target="_blank" style="float: right" href="includes/RestorationsSFAD.pdf">Smoke, Fire, and Water Division Brochure</a>
          </div>
      </footer>
  </div>

  <?php
  require_once 'includes/bottom.inc.php';
  ?>

</body>
</html>
