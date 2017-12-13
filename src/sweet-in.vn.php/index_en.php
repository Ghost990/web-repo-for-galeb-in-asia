<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Sweet In-Limited</title>

    <meta property="og:url"                content="<?php $_SERVER['REQUEST_URI'] ?>" />
    <meta property="og:type"               content="website" />
    <meta property="og:title"              content="Sweet In-Limited" />
    <meta property="og:description"        content="Where Tradition Meets Quality" />
    <meta property="og:image"              content="<?php $_SERVER['REQUEST_URI'] ?>/img/share.png" />

    <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/favicon-16x16.png">
    <link rel="manifest" href="img/favicons/manifest.json">
    <link rel="mask-icon" href="img/favicons/safari-pinned-tab.svg" color="#db0000">
    <meta name="theme-color" content="#ffffff">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.min.js"></script>

    <script src='https://www.google.com/recaptcha/api.js'></script>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css" />
  </head>
  <body data-anm=".anm">

  <div class="blocks">

    <div class="chocolate-left" data-enllax-ratio=".5" data-enllax-type="foreground"></div>
    <div class="chocolate-right" data-enllax-ratio=".5" data-enllax-type="foreground"></div>

    <nav id="menu" class="mobile-menu visible-mobile">
      <div class="slide-menu menu">
        <ul class="mobile-menu center list-unstyled">
          <li class="mobile-menuitem"><a href="#block-2">Our Product</a></li>
          <li class="mobile-menuitem"><a href="#block-3">Market Analysis</a></li>
          <li class="mobile-menuitem"><a href="#block-4">Our Company</a></li>
          <li class="mobile-menuitem"><a href="#block-5">Contact Us</a></li>
        </ul>
        <div class="langselector">
          <a href="index_en.php">
            <span class="language language-en active"></span>
          </a>
          <a href="index.php">
            <span class="language language-vn"></span>
          </a>
        </div>
      </div>
    </nav>

    <main id="panel">
    <div class="block block-1" id="block-1">
      <div class="container">
        <div class="row">
          <header class="header">
            <div class="mobile-menu visible-mobile">
              <div class="col-12 menu-trigger toggle-button" id="menu-trigger">
                <span class="icon"></span>
              </div>
            </div>

            <nav class="visible-desktop">
              <ul class="main-menu center">
                <li><a href="#block-2">Our Product</a></li>
                <li><a href="#block-3">Market Analysis</a></li>
                <li><a href="#block-4">Our Company</a></li>
                <li><a href="#block-5">Contact Us</a></li>
              </ul>
              <div class="langselector">
                <a href="index_en.php">
                  <span class="language language-en active"></span>
                </a>
                <a href="index.php">
                  <span class="language language-vn"></span>
                </a>
              </div>
            </nav>
          </header>
        </div>
        <div class="row logo-wrapper">
          <div class="logo anm"
          data-speed-x="-5"
          data-speed-y="-5"
          data-speed-scale="0"
          data-speed-rotate="0"
          data-speed-opacity="0">
          </div>
        </div>
      </div>
    </div>
    <div class="block block-2" id="block-2">
      <div class="container">
        <div class="maintitle">
          <h1>
            Our Product
          </h1>
          <span class="underline underline-gold"></span>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <img src="img/chocolate-product.png" class="img-fluid visible-desktop" data-enllax-ratio=".2" data-enllax-type="foreground" />
            <img src="img/chocolate-product.png" class="img-fluid visible-mobile" />
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <p>
              Mony rice is the favorite product among younger and older consumers. Perfect combination of puffed rice and fine cacao cream is what makes this brand one of the most-selling ones in the range of Pionir candies.
              <br/>
              Properly formed tablets, with shiny surface and charasteristic color of cocoa cream products. Characteristic odor and flavor of cocoa cream bars. Fine melting sense in the mouth during consumption, without sandy textures, equally distributed expanded rice on the cross section of tablets.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="block block-3" id="block-3">
      <div class="container">
        <div class="maintitle">
          <h1>
            Market Analysis
          </h1>
          <span class="underline underline-red"></span>
        </div>
        <div class="row">
          <h2>
            Industry Description and Outlook
          </h2>
          <p>
            In Europe chocolate factories are generally last long, traditional companies established hundreds of years ago. The Chocolate Factory - PIONIR d.o.o. Beograd, Serbia - has been established in the year 1917 in Subotica, an industrial city at the Northern tip of Serbia.
            The Asian market is growing rapidly and Southeast Asia has enjoyed remarkable economic progress in recent years; millions have been lifted out of poverty. Both the chocolate consumption and the chocolate market - especially in Vietnam - is in his newborn age.
          </p>
        </div>
        <br />
        <div class="row">
          <h2>
            Information About Our Target Market
          </h2>
          <p>
            Cream product with puffed rice target market is men and women of all ages in urban area. The brand is youthful in nature, and focuses on the consumer segment who love chocolate, and are willing to indulge themselves with chocolaty snacks. What draws consumers to this brand is its association with every daily compliment. It’s low prices, constant over the past 50 years, allows it to target the mass consumer market.
            <br /><br />
            In our target market many variants of “chocolate-covered wafer” widely available, but nether the wafer nor the chocolate has tradition in Asia.
          </p>
        </div>
        <br />
        <div class="row">
          <canvas id="myChart" width="400" height="300"></canvas>
            <script>
            var ctx = document.getElementById("myChart").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["Switzerland", "Germany", "Russia", "United Kingdom", "United States", "Austria", "Poland", "France", "China"],
                    datasets: [{
                        label: 'Chocolate consuming in countries',
                        data: [8.8, 8.4, 7.3, 6.8, 5.5, 5.5, 5, 3.9, 0.2],
                        backgroundColor: [
                            'rgba(109, 109, 109, 1)',
                            'rgba(109, 109, 109, 1)',
                            'rgba(109, 109, 109, 1)',
                            'rgba(109, 109, 109, 1)',
                            'rgba(109, 109, 109, 1)',
                            'rgba(109, 109, 109, 1)',
                            'rgba(109, 109, 109, 1)',
                            'rgba(109, 109, 109, 1)',
                            'rgba(109, 109, 109, 1)'
                          ]
                    }]
                },
                fillOpacity: 1,
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            }
                        }]
                    }
                }
            });
            </script>
        </div>
      </div>
    </div>
    <div class="block block-4" id="block-4">
      <div class="container">
        <div class="maintitle">
          <h1>
            Our Company
          </h1>
          <span class="underline underline-gold"></span>
        </div>
        <div class="row">
          <p>
            Sweet In-Limited has a lower coster, startup mindset. We believe Asia is at the transition from manufacturing to consuming.
            <br/>
            The cream product with puffed rice what we choosen for start met with many - must have - conditions:<br/>
             * Best Buy in his category<br/>
             * Trustfully, traditional manufacturer<br/>
             * Unique in Asia<br/>
            <br/>
            <a href="https://www.facebook.com/B%C3%A1nh-C%E1%BB%91m-G%E1%BA%A1o-Pionir-Mony-Rice-Nh%E1%BA%ADp-Kh%E1%BA%A9u-T%E1%BB%AB-Serbia-382454305506448/">Follow Us on Facebook &gt;&gt;</a>
          </p>
        </div>
        <div class="row">
          <div class="col-lg-6 col-xl-6 col-sm-12 col-xs-12 person">
            <div class="image">
              <img src="img/hien.png" class="img-fluid" />
            </div>
            <div class="info text-center">
              <h2 class="name">
                Nguyen My Hien
              </h2>
              <div>
                CEO
              </div>
              <div class="phone">
                +84-9-61766627
              </div>
              <div class="email">
                <a href="mailto:hien@sweet-in.vn">hien@sweet-in.vn</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-xl-6 col-sm-12 col-xs-12 person">
            <div class="image">
              <img src="img/dao.png" class="img-fluid" />
            </div>
            <div class="info text-center">
              <h2 class="name">
                Ngo Thuy Dao
              </h2>
              <div>
                Sales Director Nationwide
              </div>
              <div class="phone">
                +84-9-63270209
              </div>
              <div class="email">
                <a href="mailto:dao@sweet-in.vn">dao@sweet-in.vn</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-xl-6 col-sm-12 col-xs-12 person" style="margin: auto;">
            <div class="image">
              <img src="img/oliver.png" class="img-fluid" />
            </div>
            <div class="info text-center">
              <h2 class="name">
                Oliver Nagy
              </h2>
              <div>
                Procurement
              </div>
              <div class="phone">
                +84-1-229880451 | +85-25-8014149 | +381-64-4892313
              </div>
              <div class="email">
                <a href="mailto:oliver@sweet-in.vn">oliver@sweet-in.vn</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="block block-5" id="block-5">
      <div class="container">
        <div class="maintitle">
          <h1>
            Contact Us
          </h1>
          <span class="underline underline-red"></span>
        </div>
        <div class="row">
          <?php 
            //Language code for including translation file and reCAPTCHA language
            //see https://developers.google.com/recaptcha/docs/language
            $lang_code = 'en';
            include 'contact_form.php';
           ?>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="copytext text-center">
          <p>
            SWEET IN - LIMITED<br/>
            60 Nguyen Van Thu, Da Kao, District 1, HCMC<br/>
            Tax code:  0314206682<br/>
            +84-9-61766627
          </p>
        </div>
        <div class="copyright text-center">
          <p>
            <?php echo date("Y"); ?> - All Rights Reserved.
          </p>
        </div>
      </div>
    </div>
  </footer>
  <div id="back_top">
    <a href="#wrap">
        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
            <path fill="#ffffff" d="M7.41,15.41L12,10.83L16.59,15.41L18,14L12,8L6,14L7.41,15.41Z" />
        </svg>
    </a>
</div>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="js/jquery.enllax.min.js"></script>
    <script src="js/anm.min.js"></script>
    <script src="js/slideout.min.js"></script>
    <script>
      $(window).enllax();

      anm.on();

      $('a[href^="#"]').on('click', function(event) {

        var target = $( $(this).attr('href') );

        if( target.length ) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: target.offset().top
            }, 1500);
        }

    });

    /* ------ BACT TO TOP ------ */
    var pxShow = 200;//height on which the button will show
    var fadeInTime = 500;//how slow/fast you want the button to show
    var fadeOutTime = 500;//how slow/fast you want the button to hide
    var scrollSpeed = 700;//how slow/fast you want the button to scroll to top. can be a value, 'slow', 'normal' or 'fast'
    $(window).scroll(function() {
        if ($(window).scrollTop() >= pxShow) {
            $("#back_top").fadeIn(fadeInTime);
        } else {
            $("#back_top").fadeOut(fadeOutTime);
        }
    });

    $('#back_top a').click(function() {
        $('html, body').animate({scrollTop: 0}, scrollSpeed);
        return false;
    });

    var slideout = new Slideout({
        'panel': document.getElementById('panel'),
        'menu': document.getElementById('menu'),
        'padding': 256,
        'tolerance': 70
      });

      // Toggle button
      document.querySelector('.toggle-button').addEventListener('click', function() {
        slideout.toggle();
      });


      $(document).ready(function() {
        $('.mobile-menuitem').on('click', function(ev) {
            slideout.close();
        });
    });

    </script>
  </body>
</html>
