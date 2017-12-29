<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>Search</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Links -->

    <link rel="stylesheet" href="css/search.css">


    <!--JS-->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/rd-smoothscroll.min.js"></script> 

    <!--[if lt IE 9]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
    <script src='js/device.min.js'></script>
  </head>
  <body>
  <div class="page">
  <!--========================================================
                            HEADER
  =========================================================-->
    
 <header class="head">
      <div id="stuck_container" class="stuck_container">
        <nav class="navbar navbar-default navbar-static-top ">
          <div class="navbar-header">
            <h1 class="navbar-brand">
              <a data-type='rd-navbar-brand' href="./">Ariosto
                <small>Consulting co.</small>
              </a>
            </h1>
          </div>

          <ul class="navbar-nav sf-menu" data-type="navbar">
            <li>
              <a href="./"><span>Home</span></a>
            </li>
            <li class="dropdown">
              <a href="index-1.html"><span>About</span></a>
              <ul class="dropdown-menu">
                <li>
                  <a href="#">Quisque nulla </a>
                </li>
                <li>
                  <a href="#">Vestibulum libero nis</a>
                </li>
                <li class="sub">
                  <a href="#">Porta vel scelerisque eget</a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="#">Latest</a>
                    </li>
                    <li>
                      <a href="#">Archive</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#">Malesuada at neque</a>
                </li>
                <li>
                  <a href="#">Vivamus eget nibh</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="index-2.html"><span>Services</span></a>
            </li>
            <li>
              <a href="index-3.html"><span>Projects</span></a>
            </li>

            <li>
              <a href="index-4.html"><span>Contacts</span></a>
            </li>
          </ul>
        </nav>

        <div class="sform">
          <a class="search-form_toggle" href="#"></a>
        </div>

        <form class="search-form" action="search.php" method="GET" accept-charset="utf-8">
          <label class="search-form_label">
            <input class="search-form_input" type="text" name="s" autocomplete="off" placeholder="Search"/>
            <span class="search-form_liveout"></span>
          </label>
          <button class="search-form_submit fa-search" type="submit"></button>
        </form>

      </div>

    </header>

  <!--========================================================
                            CONTENT
  =========================================================-->
  <main>
    <section id="content" class="content well">
        <div class="container">

            <h3 class="text-center txt-sec">Search Results</h3>
            <div id="search-results"></div>
        </div>
    </section>
  </main>  

  <!--========================================================
                            FOOTER
  =========================================================-->
   <footer>

        <section class="foot-top">
          <div class="container">
            <div class="row col-3_mod">
              <div class="col-md-3 col-sm-6 col-xs-12">
                <h6>
                  Services
                </h6>
                <ul class="list">
                  <li><a href="#">Epsum factorial</a></li>
                  <li><a href="#">Olypian quarrels</a></li>
                  <li><a href="#">Gorilla congolium sic</a></li>
                  <li><a href="#">Souvlaki ignitus</a></li>
                  <li><a href="#">Carborundum e</a></li>
                  <li><a href="#">pluribus</a></li>
                  <li><a href="#">Defacto lingo est</a></li>
                  <li><a href="#">Iigpay atinlay</a></li>
                  <li><a href="#">Marquee selectus non</a></li>
                  <li><a href="#">Provisio incongruous</a></li>
                  <li><a href="#">Feline nolo conten</a></li>
                </ul>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
                <h6>
                  Industries
                </h6>
                <ul class="list">
                  <li><a href="#">Carborundum e pluribus</a></li>
                  <li><a href="#">Defacto lingo est</a></li>
                  <li><a href="#">Iigpay atinlay</a></li>
                  <li><a href="#">Marquee selectus non</a></li>
                  <li><a href="#">Provisio incongruous</a></li>
                  <li><a href="#">Feline nolo conten</a></li>
                </ul>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
                <h6>
                  GLOBAL NETWORK
                </h6>
                <ul class="list">
                  <li><a href="#">Asia Pacific</a></li>
                  <li><a href="#">Canada</a></li>
                  <li><a href="#">Europe, Middle East & Africa</a></li>
                  <li><a href="#">Latin America</a></li>
                  <li><a href="#">United States</a></li>
                </ul>
                <h6>
                  About
                </h6>
                <ul class="list">
                  <li><a href="#">Epsum factorial</a></li>
                  <li><a href="#">Olypian quarrels</a></li>
                  <li><a href="#">Gorilla congolium sic</a></li>
                  <li><a href="#">Souvlaki ignitus</a></li>
                  <li><a href="#">Carborundum e pluribus</a></li>
                  <li><a href="#">Defacto lingo est</a></li>
                </ul>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
                <ul class="inline-list">
                  <li><a href="#" class="fa  fa-google-plus">google-plus</a></li>
                  <li><a href="#" class="fa fa-twitter">twitter</a></li>
                  <li><a href="#" class="fa fa-facebook">facebook</a></li>
                  <li><a href="#" class="fa fa-pinterest">pinterest</a></li>
                  <li><a href="#" class="fa  fa-instagram">instagram</a></li>
                </ul>
                <p class="small">
                  Quisque nulla. Vestiero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus eget
                  nibh. Etiarsus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis
                  in faucibus orci luctus et ultricposuere cubilia Curae; Suspendisse sollicitudin velit s
                  pharetra augue n augue. Nam elit magna, hendametincidunt ac, viva sed, nulla.
                </p>
                <a href="callto:#" class="phone">+1 959 603 6035</a>

                <p class="rights">
                  &#169; <span id="copyright-year"></span> Ariosto. Consulting Company
                  <a href="index-5.html">Privacy Policy</a>
                </p>
              </div>
            </div>
          </div>
        </section>
        <section class="foot-mid">
          <div class="container">

            <ul class="list-inline">
              <li><a href="index.html">home</a></li>
              <li><a href="index-1.html">about</a></li>
              <li><a href="index-2.html">Services</a></li>
              <li><a href="index-3.html">Projects</a></li>
              <li><a href="index-4.html">Contacts</a></li>
            </ul>

          </div>
        </section>

      </footer>
  </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->         
    <script src="js/bootstrap.min.js"></script>
    <script src="js/tm-scripts.js"></script>    
  <!-- </script> -->


  </body>
</html>
