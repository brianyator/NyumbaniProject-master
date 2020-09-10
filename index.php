<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    
    try {
      $conn = new PDO("mysql:host=$servername;dbname=nyumbani", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //echo "Connected successfully";
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
    
    $stmt = $conn->prepare("SELECT * FROM property");
    $stmt->execute();
    $result = $stmt->fetchAll();
    $stmt = null;
    
?>
<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Aler Template" />
    <meta name="keywords" content="Aler, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Nyumbani</title>

    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap"
      rel="stylesheet"
    />

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css" />
    <link rel="stylesheet" href="css/nice-select.css" type="text/css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css" />
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
  </head>

  <body>
    <!-- Page Preloder -->
    <div id="preloder">
      <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Wrapper Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
      <div class="canvas-close">
        <span class="icon_close"></span>
      </div>
      <div class="logo">
        <a href="./index.html">
          <img src="img/logony.png" alt="" />
        </a>
      </div>
      <div id="mobile-menu-wrap"></div>
      <div class="om-widget">
        <ul>
          <li><i class="icon_mail_alt"></i>info@nyumbani.com</li>
          <li>
            <i class="fa fa-mobile-phone"></i> 254 708-223-122<span
              >125-668-886</span
            >
          </li>
        </ul>
        <a href="./property-submit.html" class="hw-btn">Sell With Us ? </a>
      </div>
      <div class="om-social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-youtube-play"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-pinterest-p"></i></a>
      </div>
    </div>
    <!-- Offcanvas Menu Wrapper End -->

    <!-- Header Section Begin -->
    <header class="header-section">
      <div class="hs-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-2">
              <div class="logo">
                <a href="./index.html"><img src="img/logony.png" alt="" /></a>
              </div>
            </div>
            <div class="col-lg-10">
              <div class="ht-widget">
                <ul>
                  <li><i class="icon_mail_alt"></i>info@nyumbani.com</li>
                  <li>
                    <i class="fa fa-mobile-phone"></i>+254 708 122 332
                    <span>020-232-442</span>
                  </li>
                </ul>
                <a href="./property-submit.html" class="hw-btn"
                  >Sell With Us
                </a>
              </div>
            </div>
          </div>
          <div class="canvas-open">
            <span class="icon_menu"></span>
          </div>
        </div>
      </div>
      <div class="hs-nav">
        <div class="container">
          <div class="row">
            <div class="col-lg-9">
              <nav class="nav-menu">
                <ul>
                  <li class="active"><a href="./index.html">Home</a></li>
                  <li>
                    <a href="./property.html">Properties</a>
                  </li>
                  <li><a href="./profile.html">Profile</a></li>
                  <li><a href="./contact.html">Contact</a></li>
                </ul>
              </nav>
            </div>
            <div class="col-lg-3">
              <div class="hn-social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-youtube-play"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-pinterest-p"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section">
      <div class="container">
        <div class="hs-slider owl-carousel">
          <?php
              foreach($result as $row){ ?>
                <div class="hs-item set-bg" data-setbg="img/hero/hero-1.jpg">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="hc-inner-text">
                      <div class="hc-text">
                        <h4><?php echo $row['title'];?></h4>
                        <p><span class="icon_pin_alt"></span> <?php echo $row['location'];?></p>
                        <div class="label"><?php echo $row['contract_type'];?></div>
                        <h5>$ <?php echo $row['price'];?><span>/month</span></h5>
                      </div>
                      <div class="hc-widget">
                        <ul>
                          <li><i class="fa fa-object-group"></i> <?php echo $row['area'];?></li>
                          <li><i class="fa fa-bathtub"></i> <?php echo $row['bathrooms'];?></li>
                          <li><i class="fa fa-bed"></i> <?php echo $row['bedrooms'];?></li>
                          <li><i class="fa fa-automobile"></i><?php echo $row['garages'];?></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div> 
              <?php }
          ?>
          
          <div class="hs-item set-bg" data-setbg="img/hero/hero-1.jpg">
            <div class="row">
              <div class="col-lg-12">
                <div class="hc-inner-text">
                  <div class="hc-text">
                    <h4>543 Muthaiga Drive</h4>
                    <p><span class="icon_pin_alt"></span> Nairobi, Muthaiga</p>
                    <div class="label">For Rent</div>
                    <h5>Ksh.65,000<span>/month</span></h5>
                  </div>
                  <div class="hc-widget">
                    <ul>
                      <li><i class="fa fa-object-group"></i> 2, 283</li>
                      <li><i class="fa fa-bathtub"></i> 03</li>
                      <li><i class="fa fa-bed"></i> 05</li>
                      <li><i class="fa fa-automobile"></i> 01</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="hs-item set-bg" data-setbg="img/hero/hero-2.jpg">
            <div class="row">
              <div class="col-lg-12">
                <div class="hc-inner-text">
                  <div class="hc-text">
                    <h4>543 Muthaiga Drive</h4>
                    <p><span class="icon_pin_alt"></span> Nairobi, Muthaiga</p>
                    <div class="label">For Rent</div>
                    <h5>Ksh.65,000<span>/month</span></h5>
                  </div>
                  <div class="hc-widget">
                    <ul>
                      <li><i class="fa fa-object-group"></i> 2, 283</li>
                      <li><i class="fa fa-bathtub"></i> 03</li>
                      <li><i class="fa fa-bed"></i> 05</li>
                      <li><i class="fa fa-automobile"></i> 01</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="hs-item set-bg" data-setbg="img/hero/hero-3.jpg">
            <div class="row">
              <div class="col-lg-12">
                <div class="hc-inner-text">
                  <div class="hc-text">
                    <h4>543 Muthaiga Drive</h4>
                    <p><span class="icon_pin_alt"></span> Nairobi, Muthaiga</p>
                    <div class="label">For Rent</div>
                    <h5>Ksh.65,000<span>/month</span></h5>
                  </div>
                  <div class="hc-widget">
                    <ul>
                      <li><i class="fa fa-object-group"></i> 2, 283</li>
                      <li><i class="fa fa-bathtub"></i> 03</li>
                      <li><i class="fa fa-bed"></i> 05</li>
                      <li><i class="fa fa-automobile"></i> 01</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero Section End -->

    <!-- Search Section Begin -->
    <section class="search-section spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="section-title">
              <h4>Where would you rather live?</h4>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="change-btn">
              <div class="cb-item">
                <label for="cb-rent" class="active">
                  For Rent
                  <input type="radio" id="cb-rent" />
                </label>
              </div>
              <div class="cb-item">
                <label for="cb-sale">
                  For Sale
                  <input type="radio" id="cb-sale" />
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="search-form-content">
          <form action="property.php" class="filter-form" method="get">
            <select class="sm-width" name="city">
              <?php foreach($result as $row)?>
              <option value="city">Choose City</option>
              <option value="city">City 2</option>
            </select>
            <select class="sm-width">
              <option value="location">Location</option>
            </select>
            <select class="sm-width">
              <option value="status">Property Status</option>
            </select>
            <select class="sm-width">
              <option value="type">Property Type</option>
            </select>
            <select class="sm-width">
              <option value="">No Of Bedrooms</option>
            </select>
            <select class="sm-width">
              <option value="">No Of Bathrooms</option>
            </select>
            <div class="room-size-range-wrap sm-width">
              <div class="price-text">
                <label for="roomsizeRange">Size:</label>
                <input type="text" id="roomsizeRange" readonly />
              </div>
              <div id="roomsize-range" class="slider"></div>
            </div>
            <div class="price-range-wrap sm-width">
              <div class="price-text">
                <label for="priceRange">Price:</label>
                <input type="text" id="priceRange" readonly />
              </div>
              <div id="price-range" class="slider"></div>
            </div>
            <button type="submit" class="search-btn sm-width">Search</button>
          </form>
        </div>

        <div class="more-option">
          <div class="accordion" id="accordionExample">
            <div class="card">
              <div class="card-heading active">
                <a data-toggle="collapse" data-target="#collapseOne">
                  More Search Options
                </a>
              </div>
              <div
                id="collapseOne"
                class="collapse"
                data-parent="#accordionExample"
              >
                <div class="card-body">
                  <div class="mo-list">
                    <div class="ml-column">
                      <label for="air"
                        >Air conditioning
                        <input type="checkbox" id="air" />
                        <span class="checkbox"></span>
                      </label>
                      <label for="lundry"
                        >Laundry
                        <input type="checkbox" id="lundry" />
                        <span class="checkbox"></span>
                      </label>
                      <label for="refrigerator"
                        >Refrigerator
                        <input type="checkbox" id="refrigerator" />
                        <span class="checkbox"></span>
                      </label>
                      <label for="washer"
                        >Washer
                        <input type="checkbox" id="washer" />
                        <span class="checkbox"></span>
                      </label>
                    </div>
                    <div class="ml-column">
                      <label for="barbeque"
                        >Barbeque
                        <input type="checkbox" id="barbeque" />
                        <span class="checkbox"></span>
                      </label>
                      <label for="lawn"
                        >Lawn
                        <input type="checkbox" id="lawn" />
                        <span class="checkbox"></span>
                      </label>
                      <label for="sauna"
                        >Sauna
                        <input type="checkbox" id="sauna" />
                        <span class="checkbox"></span>
                      </label>
                      <label for="wifi"
                        >Wifi
                        <input type="checkbox" id="wifi" />
                        <span class="checkbox"></span>
                      </label>
                    </div>
                    <div class="ml-column">
                      <label for="dryer"
                        >Dryer
                        <input type="checkbox" id="dryer" />
                        <span class="checkbox"></span>
                      </label>
                      <label for="microwave"
                        >Microwave
                        <input type="checkbox" id="microwave" />
                        <span class="checkbox"></span>
                      </label>
                      <label for="pool"
                        >Swimming Pool
                        <input type="checkbox" id="pool" />
                        <span class="checkbox"></span>
                      </label>
                      <label for="window"
                        >Window Coverings
                        <input type="checkbox" id="window" />
                        <span class="checkbox"></span>
                      </label>
                    </div>
                    <div class="ml-column last-column">
                      <label for="gym"
                        >Gym
                        <input type="checkbox" id="gym" />
                        <span class="checkbox"></span>
                      </label>
                      <label for="shower"
                        >OutdoorShower
                        <input type="checkbox" id="shower" />
                        <span class="checkbox"></span>
                      </label>
                      <label for="tv"
                        >Tv Cable
                        <input type="checkbox" id="tv" />
                        <span class="checkbox"></span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Search Section End -->

    <!-- Property Section Begin -->
    <section class="property-section latest-property-section spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <div class="section-title">
              <h4>AVAILABLE PROPERTY</h4>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="property-controls">
              <ul>
                <li data-filter="all">All</li>
                <li data-filter=".apart">Apartment</li>
                <li data-filter=".house">House</li>
                <li data-filter=".office">Office</li>
                <li data-filter=".hotel">Hotel</li>
                <li data-filter=".restaurent">Restaurent</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row property-filter">
          <?php foreach($result as $row){?>
            <div class="col-lg-4 col-md-6 mix all house">
            <div class="property-item">
              <div
                class="pi-pic set-bg"
                data-setbg="img/property/property-1.jpg"
              >
                <div class="label">For <?php echo $row['contract_type']?></div>
              </div>
              
              <div class="pi-text">
                <a href="#" class="heart-icon"
                  ><span class="icon_heart_alt"></span
                ></a>
                <div class="pt-price">Ksh.<?php echo $row['price']?><span>/month</span></div>
                <h5><a href="./property-details.html"><?php echo $row['title']?></a></h5>
                <p><span class="icon_pin_alt"></span> <?php echo $row['location']?></p>
                <ul>
                  <li><i class="fa fa-object-group"></i><?php echo $row['area']?></li>
                  <li><i class="fa fa-bathtub"></i> <?php echo $row['bathrooms']?></li>
                  <li><i class="fa fa-bed"></i> <?php echo $row['bedrooms']?></li>
                  <li><i class="fa fa-automobile"></i> <?php echo $row['garages']?></li>
                </ul>
                <div class="pi-agent">
                  <div class="pa-item">
                    <div class="pa-info">
                      <img src="img/maleowner.jpg" alt="" />
                      <h6><?php echo $row['agent']?></h6>
                    </div>
                    <div class="pa-text">254-455-688</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php }?>
          <!--End of dynamic property-->
          
          <div class="col-lg-4 col-md-6 mix all house">
            <div class="property-item">
              <div
                class="pi-pic set-bg"
                data-setbg="img/property/property-1.jpg"
              >
                <div class="label">For rent</div>
              </div>
              
              <div class="pi-text">
                <a href="#" class="heart-icon"
                  ><span class="icon_heart_alt"></span
                ></a>
                <div class="pt-price">Ksh.280,900<span>/month</span></div>
                <h5><a href="./property-details.html">Tamarind</a></h5>
                <p><span class="icon_pin_alt"></span> Hardy Rd, 461</p>
                <ul>
                  <li><i class="fa fa-object-group"></i> 2, 283</li>
                  <li><i class="fa fa-bathtub"></i> 03</li>
                  <li><i class="fa fa-bed"></i> 05</li>
                  <li><i class="fa fa-automobile"></i> 01</li>
                </ul>
                <div class="pi-agent">
                  <div class="pa-item">
                    <div class="pa-info">
                      <img src="img/maleowner.jpg" alt="" />
                      <h6>Simon Kimani</h6>
                    </div>
                    <div class="pa-text">254-455-688</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mix all restaurent hotel">
            <div class="property-item">
              <div
                class="pi-pic set-bg"
                data-setbg="img/property/property-2.jpg"
              >
                <div class="label c-red">For rent</div>
              </div>
              <div class="pi-text">
                <a href="#" class="heart-icon"
                  ><span class="icon_heart_alt"></span
                ></a>
                <div class="pt-price">Ksh.40,000</div>
                <h5><a href="./property-details.html">Unimont Aurum</a></h5>
                <p><span class="icon_pin_alt"></span> Madaraka , 56</p>
                <ul>
                  <li><i class="fa fa-object-group"></i> 2, 283</li>
                  <li><i class="fa fa-bathtub"></i> 03</li>
                  <li><i class="fa fa-bed"></i> 05</li>
                  <li><i class="fa fa-automobile"></i> 01</li>
                </ul>
                <div class="pi-agent">
                  <div class="pa-item">
                    <div class="pa-info">
                      <img src="img/femaleowner.jpg" alt="" />
                      <h6>Jane Mbogi</h6>
                    </div>
                    <div class="pa-text">254-455-688</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mix all apart office">
            <div class="property-item">
              <div
                class="pi-pic set-bg"
                data-setbg="img/property/property-2.jpg"
              >
                <div class="label c-red">For rent</div>
              </div>
              <div class="pi-text">
                <a href="#" class="heart-icon"
                  ><span class="icon_heart_alt"></span
                ></a>
                <div class="pt-price">Ksh.50,000</div>
                <h5><a href="./property-details.html"> Kilimani Heights</a></h5>
                <p>
                  <span class="icon_pin_alt"></span> No. 15, 16, 17-1A And 17-2,
                  Kilimani,
                </p>
                <ul>
                  <li><i class="fa fa-object-group"></i> 2, 283</li>
                  <li><i class="fa fa-bathtub"></i> 03</li>
                  <li><i class="fa fa-bed"></i> 05</li>
                  <li><i class="fa fa-automobile"></i> 01</li>
                </ul>
                <div class="pi-agent">
                  <div class="pa-item">
                    <div class="pa-info">
                      <img src="img/maleowner.jpg" alt="" />
                      <h6>Trevor Easton</h6>
                    </div>
                    <div class="pa-text">254-455-688</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mix all hotel restaruent">
            <div class="property-item">
              <div
                class="pi-pic set-bg"
                data-setbg="img/property/property-4.jpg"
              >
                <div class="label c-red">For rent</div>
              </div>
              <div class="pi-text">
                <a href="#" class="heart-icon"
                  ><span class="icon_heart_alt"></span
                ></a>
                <div class="pt-price">Ksh.30,000</div>
                <h5><a href="./property-details.html">Limuru Place</a></h5>
                <p><span class="icon_pin_alt"></span>Limuru , 23 , Nairobi</p>
                <ul>
                  <li><i class="fa fa-object-group"></i> 2, 283</li>
                  <li><i class="fa fa-bathtub"></i> 03</li>
                  <li><i class="fa fa-bed"></i> 05</li>
                  <li><i class="fa fa-automobile"></i> 01</li>
                </ul>
                <div class="pi-agent">
                  <div class="pa-item">
                    <div class="pa-info">
                      <img src="img/femaleowner.jpg" alt="" />
                      <h6>Dr Mokaya</h6>
                    </div>
                    <div class="pa-text">254-455-688</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mix all office hotel">
            <div class="property-item">
              <div
                class="pi-pic set-bg"
                data-setbg="img/property/property-5.jpg"
              >
                <div class="label c-magenta">For rent</div>
              </div>
              <div class="pi-text">
                <a href="#" class="heart-icon"
                  ><span class="icon_heart_alt"></span
                ></a>
                <div class="pt-price">Ksh.80,000</div>
                <h5><a href="./property-details.html">Konza</a></h5>
                <p>
                  <span class="icon_pin_alt"></span> Badlapur East, Beyond Thane
                </p>
                <ul>
                  <li><i class="fa fa-object-group"></i> 2, 283</li>
                  <li><i class="fa fa-bathtub"></i> 03</li>
                  <li><i class="fa fa-bed"></i> 05</li>
                  <li><i class="fa fa-automobile"></i> 01</li>
                </ul>
                <div class="pi-agent">
                  <div class="pa-item">
                    <div class="pa-info">
                      <img src="img/maleowner.jpg" alt="" />
                      <h6>Sam </h6>
                    </div>
                    <div class="pa-text">123-455-688</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mix house apart office">
            <div class="property-item">
              <div
                class="pi-pic set-bg"
                data-setbg="img/property/property-6.jpg"
              >
                <div class="label">For rent</div>
              </div>
              <div class="pi-text">
                <a href="#" class="heart-icon"
                  ><span class="icon_heart_alt"></span
                ></a>
                <div class="pt-price">Ksh.70,000<span>/month</span></div>
                <h5><a href="./property-details.html">GoldCrest Residency</a></h5>
                <p>
                  <span class="icon_pin_alt"></span> No.7, Sector- 11, Mombasa,
                  Nyali
          
                </p>
                <ul>
                  <li><i class="fa fa-object-group"></i> 2, 283</li>
                  <li><i class="fa fa-bathtub"></i> 03</li>
                  <li><i class="fa fa-bed"></i> 05</li>
                  <li><i class="fa fa-automobile"></i> 01</li>
                </ul>
                <div class="pi-agent">
                  <div class="pa-item">
                    <div class="pa-info">
                      <img src="img/femaleowner.jpg" alt="" />
                      <h6>Miss Sundae</h6>
                    </div>
                    <div class="pa-text">123-455-688</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Property Section End -->

    <!-- Chooseus Section Begin -->
    <section
      class="chooseus-section spad set-bg"
      data-setbg="img/chooseus/chooseus-bg.jpg"
    >
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="chooseus-text">
              <div class="section-title">
                <h4>Why choose us</h4>
              </div>
              <p>
                Lorem Ipsum has been the industry’s standard dummy text ever
                since the 1500s, when an unknown printer took a galley of type
                and scrambled it to make a type specimen book.
              </p>
            </div>
            <div class="chooseus-features">
              <div class="cf-item">
                <div class="cf-pic">
                  <img src="img/chooseus/chooseus-icon-1.png" alt="" />
                </div>
                <div class="cf-text">
                  <h5>Find your future home</h5>
                  <p>
                    We help you find a new home by offering a smart real estate.
                  </p>
                </div>
              </div>
              <div class="cf-item">
                <div class="cf-pic">
                  <img src="img/chooseus/chooseus-icon-2.png" alt="" />
                </div>
                <div class="cf-text">
                  <h5>Buy or rent homes</h5>
                  <p>
                    Millions of houses and apartments in your favourite cities
                  </p>
                </div>
              </div>
              <div class="cf-item">
                <div class="cf-pic">
                  <img src="img/chooseus/chooseus-icon-3.png" alt="" />
                </div>
                <div class="cf-text">
                  <h5>Experienced agents</h5>
                  <p>Find an agent who knows your market best</p>
                </div>
              </div>
              <div class="cf-item">
                <div class="cf-pic">
                  <img src="img/chooseus/chooseus-icon-4.png" alt="" />
                </div>
                <div class="cf-text">
                  <h5>List your own property</h5>
                  <p>Sign up now and sell or rent your own properties</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Chooseus Section End -->

    <!-- Feature Property Section Begin -->
    <section class="feature-property-section spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 p-0">
            <div class="feature-property-left">
              <div class="section-title">
                <h4>Featured Listings</h4>
              </div>
              <ul>
                <li>Apartment</li>
                <li>House</li>
                <li>Office</li>
                <li>Hotel</li>
                <li>Villa</li>
                <li>Restaurent</li>
              </ul>
              <a href="./property.html">View all property</a>
            </div>
          </div>
          <div class="col-lg-8 p-0">
            <div class="fp-slider owl-carousel">
              <div
                class="fp-item set-bg"
                data-setbg="img/feature-property/fp-1.jpg"
              >
                <div class="fp-text">
                  <h5 class="title">Home in Karen</h5>
                  <p>
                    <span class="icon_pin_alt"></span> Hardy Rd,
                    61
                  </p>
                  <div class="label">For Rent</div>
                  <h5>Ksh.80,000<span>/month</span></h5>
                  <ul>
                    <li><i class="fa fa-object-group"></i> 2, 283</li>
                    <li><i class="fa fa-bathtub"></i> 03</li>
                    <li><i class="fa fa-bed"></i> 05</li>
                    <li><i class="fa fa-automobile"></i> 01</li>
                  </ul>
                </div>
              </div>
              <div
                class="fp-item set-bg"
                data-setbg="img/feature-property/fp-2.jpg"
              >
                <div class="fp-text">
                  <h5 class="title">Home in Muthaiga</h5>
                  <p>
                    <span class="icon_pin_alt"></span>Kiambu Rd,
                    461
                  </p>
                  <div class="label">For Rent</div>
                  <h5>Ksh.90,000<span>/month</span></h5>
                  <ul>
                    <li><i class="fa fa-object-group"></i> 2, 283</li>
                    <li><i class="fa fa-bathtub"></i> 03</li>
                    <li><i class="fa fa-bed"></i> 05</li>
                    <li><i class="fa fa-automobile"></i> 01</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Feature Property Section End -->

    <!-- Team Section Begin -->
    <section class="team-section spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-8">
            <div class="section-title">
              <h4>Your Realtors</h4>
            </div>
          </div>
          <div class="col-lg-4 col-md-4">
            <div class="team-btn">
              <a href="#"><i class="fa fa-user"></i>Our Agents</a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="ts-item">
              <div class="ts-text">
                <img src="img/maleagent.jpg" alt="" />
                <h5>Sam Kimani</h5>
                <span>254-455-688</span>
                <p>
                  Ipsum dolor amet, consectetur adipiscing elit, eiusmod tempor
                  incididunt lorem.
                </p>
                <div class="ts-social">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-envelope-o"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="ts-item">
              <div class="ts-text">
                <img src="img/ladyagent.jpg" alt="" />
                <h5>Jennifer Silva</h5>
                <span>254-455-688</span>
                <p>
                  Ipsum dolor amet, consectetur adipiscing elit, eiusmod tempor
                  incididunt lorem.
                </p>
                <div class="ts-social">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-envelope-o"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="ts-item">
              <div class="ts-text">
                <img src="img/maleagent2.jpg" alt="" />
                <h5>Stanley Omollo</h5>
                <span>123-455-688</span>
                <p>
                  Ipsum dolor amet, consectetur adipiscing elit, eiusmod tempor
                  incididunt lorem.
                </p>
                <div class="ts-social">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-envelope-o"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Team Section End -->

   
   

    <!-- Contact Section Begin -->
    <section class="contact-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="contact-info">
              <div class="ci-item">
                <div class="ci-icon">
                  <i class="fa fa-map-marker"></i>
                </div>
                <div class="ci-text">
                  <h5>Address</h5>
                  <p>
                  Madaraka, Strathmore University, Nairobi - Kenya
                  </p>
                </div>
              </div>
              <div class="ci-item">
                <div class="ci-icon">
                  <i class="fa fa-mobile"></i>
                </div>
                <div class="ci-text">
                  <h5>Phone</h5>
                  <ul>
                    <li>254-711-811</li>
                    <li>254-668-886</li>
                  </ul>
                </div>
              </div>
              <div class="ci-item">
                <div class="ci-icon">
                  <i class="fa fa-headphones"></i>
                </div>
                <div class="ci-text">
                  <h5>Sales</h5>
                  <p>info@nyumbani.com</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="cs-map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d735515.5813275519!2d-80.41163541934742!3d43.93644386501528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882a55bbf3de23d7%3A0x3ada5af229b47375!2sMono%2C%20ON%2C%20Canada!5e0!3m2!1sen!2sbd!4v1583262687289!5m2!1sen!2sbd"
          height="450"
          style="border: 0"
          allowfullscreen=""
        ></iframe>
      </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="fs-about">
              <div class="fs-logo">
                <a href="#">
                  <img src="img/logony.png" alt="" />
                </a>
              </div>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua ut
                aliquip ex ea
              </p>
              <div class="fs-social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-youtube-play"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-pinterest-p"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-sm-6">
            <div class="fs-widget">
              <h5>Help</h5>
              <ul>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Contact Support</a></li>
                <li><a href="#">Knowledgebase</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">FAQs</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-sm-6">
            <div class="fs-widget">
              <h5>Links</h5>
              <ul>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Create Property</a></li>
                <li><a href="#">My Properties</a></li>
                <li><a href="#">Register</a></li>
                <li><a href="#">Login</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            
          </div>
        </div>
        <div class="copyright-text">
          <p>
            
            Copyright &copy; Nyumbani
            <script>
              document.write(new Date().getFullYear());
            </script>
            All rights reserved 
          </p>
        </div>
      </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.richtext.min.js"></script>
    <script src="js/image-uploader.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
