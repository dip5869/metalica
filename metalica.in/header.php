<?php
error_reporting(0);
session_start();
// session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Metalica | Home</title>
    <!-- Font awesome -->
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.smartmenus.bootstrap.css">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.simpleLens.css">
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/nouislider.css">
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">
    <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->
    <!-- Top Slider CSS -->
    <link href="assets/css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">
    <!-- Main style sheet -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <!-- ===================counter up number======================= -->
    <link rel="stylesheet" type="text/css" href="assets/counter/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/navbar.css">

    <!-- =======================less style sheet============================================= -->
    <link rel="stylesheet/less" type="text/css" href="assets/css/style.less" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.11.1/less.min.js"></script>
    <!-- ======================================================= -->
    <!-- =========================Responsive css=========================== -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <!-- =========================navbar megamenu css and js files=========================== -->
    <link rel="stylesheet" type="text/css" href="assets/menu/color1.css">
    <!--   <link rel="stylesheet" type="text/css" href="assets/menu/themify-icons.css"> -->
    <!-- =========================navbar megamenu css and js files=========================== -->
    <link rel="stylesheet" type="text/css" href="assets/css/custom.css">
    <link rel="stylesheet" type="text/css" href="assets/css/inline-main.css">
</head>

<body>



    <!-- header start -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
    <header id="aa-header">
        <!-- <div class="mobile-fix-option"></div> -->
        <div class="container-fluid" style="    border-bottom: 1px solid #00000029;">
            <div class="aa-header-top top-container">
                <div class="row">
                    <div class="col-md-12" style="padding: 0px;">
                        <div class="aa-header-top-area">
                            <div class="aa-header-top-left">
                                <div class="cellphone">
                                    <!-- <p><span class="fa fa-envelope"></span>info@meta.com</p> -->
                                </div>
                            </div>
                            <div class="aa-header-top-right">
                                <ul class="aa-head-top-nav-right">
                                    <li>
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <a href="profile.php">Account</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ---------------------------------- -->
        <div class="container-fluid top-header-box">
            <div class="row">
                <div class="col-sm-3" style="display: inline-flex;">
                    <div class="navbar" style="align-self: center;">
                        <a href="javascript:void(0)" onclick="openNav()">
                            <div class="bar-style"><i class="fa fa-bars sidebar-bar" aria-hidden="true"></i>
                            </div>
                        </a>
                        <div id="mySidenav" class="sidenav">
                            <a href="javascript:void(0)" class="sidebar-overlay" onclick="closeNav()"></a>
                            <nav>
                                <div onclick="closeNav()">
                                    <div class="sidebar-back text-left">
                                        <i class="fa fa-angle-left pr-2" aria-hidden="true"></i> Back
                                    </div>
                                </div>
                                <ul id="sub-menu" class="sm pixelstrap sm-vertical">
                                    <li> <a href="index.php">Home</a>
                                    </li>
                                    <li> <a href="about-us.php">About Us</a>
                                    </li>
                                    <!-- <li> <a href="#">Cleaning Products</a>
                                        <ul>
                                            <li><a href="#">Washing Powders</a>
                                                <ul>
                                                    <li><a href="#">Surf Excel</a></li>
                                                    <li><a href="#">Ariel</a></li>
                                                    <li><a href="#">Tide</a></li>
                                                    <li><a href="#">Sunlight</a></li>
                                                    <li><a href="#">Active Wheel</a></li>
                                                    <li><a href="#">Vanish</a></li>
                                                    <li><a href="#">& Other Leading Brands</a> </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Dishwashers & Liquids</a>
                                                <ul>
                                                    <li><a href="#">Vim</a></li>
                                                    <li><a href="#">Rin</a></li>
                                                    <li><a href="#">Exo</a></li>
                                                    <li><a href="#">Xpert</a></li>
                                                    <li><a href="#">Sparkel</a></li>
                                                    <li><a href="#">Pril</a></li>
                                                    <li><a href="#">& Other Leading Brands</a> </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Toilet Cleaners & Freshners</a>
                                                <ul>
                                                    <li><a href="#">Harpic</a></li>
                                                    <li><a href="#">Domex</a></li>
                                                    <li><a href="#">Lyzol</a></li>
                                                    <li><a href="#">Odonil</a></li>
                                                    <li><a href="#">Sparkel</a></li>
                                                    <li><a href="#">Air Fresh</a></li>
                                                    <li><a href="#">Aer</a></li>
                                                    <li><a href="#">& Other Leading Brands</a> </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Kitchen & Floor Cleaners</a>
                                                <ul>
                                                    <li><a href="#">Lyzol</a></li>
                                                    <li><a href="#">Sparkel</a></li>
                                                    <li><a href="#">Colin</a></li>
                                                    <li><a href="#">Different Phenyl Brands</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li> -->
                                    <!-- <li><a href="#">Daily Essentials</a>
                                        <ul>
                                            <li><a href="#">Toilet Papers</a></li>
                                            <li><a href="#">Toilet Brush</a></li>
                                            <li><a href="#">Kitchen Tissue</a></li>
                                            <li><a href="#">Garbage Bags</a></li>
                                            <li><a href="#">Scotch Brite</a></li>
                                            <li><a href="#">Sanitary Pads</a></li>
                                            <li><a href="#">Mosquito Liquids & Repellent</a></li>
                                            <li><a href="#">Naptholin Balls</a></li>
                                            <li><a href="#">Rubber Bands</a></li>
                                            <li><a href="#">Tooth Paste</a></li>
                                            <li><a href="#">Tooth Brush</a></li>
                                            <li><a href="#">Soap</a></li>
                                            <li><a href="#">Liquid Handwash</a></li>
                                            <li><a href="#">Shampoo & Conditioner</a></li>
                                            <li><a href="#">Hair Colour</a></li>
                                            <li><a href="#">Hair Oil</a></li>
                                            <li><a href="#">Hair Gel</a></li>
                                            <li><a href="#">Hand Sanitizer</a></li>
                                            <li><a href="#">Razor & Blades</a></li>
                                            <li><a href="#">Shaving Foam & Gel</a></li>
                                            <li><a href="#">Hair Removal Creams</a></li>
                                            <li><a href="#">Tissues</a></li>
                                            <li><a href="#">Napkins</a></li>
                                        </ul>
                                    </li> -->
                                    <!-- <li> <a href="#">Groceries</a>
                                        <ul>
                                            <li><a href="#">Oils</a>
                                                <ul>
                                                    <li><a href="#">Mastard Oil</a></li>
                                                    <li><a href="#">Soyabean Oil</a></li>
                                                    <li><a href="#">Olive Oil</a></li>
                                                    <li><a href="#">of all leading brands</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Masala</a>
                                                <ul>
                                                    <li><a href="#">Chilli Powder</a></li>
                                                    <li><a href="#">Turmeric Powder</a></li>
                                                    <li><a href="#">Cumin Powder(Jeera)</a></li>
                                                    <li><a href="#">Corainder Powder(Dhania)</a></li>
                                                    <li><a href="#">Black Cumin Powder(Kala Jeera)</a></li>
                                                    <li><a href="#">Garam Masala & All Other Masalas</a></li>
                                                    <li><a href="#">Panch Phoron</a></li>
                                                    <li><a href="#">Cardimon(Elaichi)</a></li>
                                                    <li><a href="#">Ajwain</a></li>
                                                    <li><a href="#">Salt</a></li>
                                                    <li><a href="#">Blacksalt</a></li>
                                                    <li><a href="#">Tea</a></li>
                                                    <li><a href="#">Coffee</a></li>
                                                    <li><a href="#">Besan</a></li>
                                                    <li><a href="#">Flour</a></li>
                                                    <li><a href="#">Poppy Seeds(Posto)</a></li>
                                                    <li><a href="#">Sooji</a></li>
                                                    <li><a href="#">Channa</a></li>
                                                    <li><a href="#">Kabuli Channa</a></li>
                                                    <li><a href="#">Motor Dana</a></li>
                                                    <li><a href="#">Sattu</a></li>
                                                    <li><a href="#">Channachur</a></li>
                                                    <li><a href="#">Bhujia</a></li>
                                                    <li><a href="#">Dal</a></li>
                                                    <li><a href="#">Jam</a></li>
                                                    <li><a href="#">Jelly</a></li>
                                                    <li><a href="#">Tomato Ketchup</a></li>
                                                    <li><a href="#">Chilli Sauce</a></li>
                                                    <li><a href="#">Soya Sauce</a></li>
                                                    <li><a href="#">Mustard Sauce(Kasundi)</a></li>
                                                    <li><a href="#">Nimki</a></li>
                                                    <li><a href="#">Maida</a></li>
                                                    <li><a href="#">Sugar</a></li>
                                                    <li><a href="#">Pickels(Achar)</a></li>
                                                    <li><a href="#">Powder Milk</a></li>
                                                    <li><a href="#">Kaju</a></li>
                                                    <li><a href="#">Kishmish</a></li>
                                                    <li><a href="#">Almond Badam</a></li>
                                                    <li><a href="#">Viniger</a></li>
                                                    <li><a href="#">Papad</a></li>
                                                    <li><a href="#">Muri</a></li>
                                                    <li><a href="#">Popcorn</a></li>
                                                </ul>
                                            </li>

                                            <li> <a href="#">Dal</a>
                                                <ul>
                                                    <li><a href="#">Moog Dal</a></li>
                                                    <li><a href="#">Masoor Dal</a></li>
                                                    <li><a href="#">Kalai/Biuli Dal</a></li>
                                                    <li> <a href="#">Arhar Dal</a></li>
                                                    <li><a href="#">Matar Dal</a></li>
                                                    <li><a href="#">Tarka Dal</a></li>
                                                    <li><a href="#">Channa Dal</a></li>
                                                    <li><a href="#">Rajma</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li> -->
                                    <!-- <li> <a href="#">Dairy Products</a>
                                        <ul>
                                            <li><a href="#">Ghee</a></li>
                                            <li><a href="#">Butter</a></li>
                                            <li><a href="#">Margerine</a></li>
                                            <li> <a href="#">Mayonese</a></li>
                                            <li><a href="#">Cheese</a></li>
                                            <li> <a href="#">Dahi</a></li>
                                        </ul>
                                    </li> -->
                                    <!-- <li><a href="#">Food Products</a>
                                        <ul>
                                            <li><a href="#">Veg Noodles</a></li>
                                            <li><a href="#">Chicken Noodles</a></li>
                                            <li><a href="#">Chowmin</a></li>
                                            <li> <a href="#">Maggie</a></li>
                                            <li><a href="#">Pasta</a></li>
                                            <li> <a href="#">Poha</a></li>
                                            <li><a href="#">Oats</a></li>
                                            <li> <a href="#">Chocos</a></li>
                                            <li><a href="#">Kelloggs</a></li>
                                            <li> <a href="#">Horlicks</a></li>
                                            <li><a href="#">Boosts</a></li>
                                            <li> <a href="#">Complans</a></li>
                                            <li><a href="#">Bournvita</a></li>
                                            <li> <a href="#">Soyabeans</a></li>
                                            <li><a href="#">Cakes</a></li>
                                            <li> <a href="#">Biscuits</a></li>
                                            <li><a href="#">Fruit Juice</a></li>

                                        </ul>
                                    </li> -->
                                    <!-- <li><a href="#">Pooja Items</a>

                                        <ul>
                                            <li><a href="#">Agarbatti</a></li>
                                            <li><a href="#">Dhoop Sticks</a></li>
                                            <li><a href="#">Dhuna</a></li>
                                            <li> <a href="#">Candles</a></li>
                                            <li><a href="#">Nakul Dana</a></li>
                                            <li> <a href="#">Shatabdi(Batasha)</a></li>
                                            <li><a href="#">Kapur</a></li>
                                            <li> <a href="#">Cotton Thread</a></li>
                                            <li><a href="#">Match Box</a></li>
                                        </ul>
                                    </li> -->
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="brand-logo">
                        <a href="index.php">
                            <h1 style="color:#fff">metalica</h1>
                            <!-- <img src="assets/img/logo-header.png" class="img-fluid lazyload" alt="" style="width: 50%;"> -->
                        </a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <form method="post" class="search-form">
                        <!-- <div class="dropdown" id="search-city">
          <button class="dropbtn"><i class="fa fa-map-marker" aria-hidden="true"></i> Select Your City</button>
          <div class="dropdown-content">
              <select>
                <option>Pune</option>
                <option>Mumbai</option>
                <option>Nashik</option>
              </select>
          </div>
        </div> -->
                        <div class="aa-search-box">
                            <input type="text" name="search" class="search-city-input-box"
                                placeholder="Search products here..">
                            <button type="submit" name="submit_search" class="search-btn"><span class="fa fa-search"></span>Search</button>
                        </div>
                    </form>
                </div>
                <div class="col-sm-2" style="margin-top: 15px; border-right: 1px solid #fff;">
                    <!--  <button class="login-account"><strong>My Account</strong><br/><span>Login/Sign Up</span> </button>
      <div class="panel my-account-dropdown">
        <ul class="sign-dropdown-box">
          <li>
            <button type="button" class="btn btn-login-signup" style="width: 100%;" data-toggle="modal" data-target="#signin-signup">Login or Signup</button>
          </li>
          <li>
            <a href="">FAQ</a>
          </li>
          <li>
            <a href="">Offers</a>
          </li>
        </ul>
      </div> -->
                    <div class="dropdown">
                        <button class="btn btn-default login-account dropdown-toggle" type="button"
                            data-toggle="dropdown">
                            <strong>My Account</strong><br /><span>Login/Sign Up</span>
                            <span class="caret"></span></button>

                        ?>
                        <ul class="dropdown-menu my-account-dropdown">
                            <li>
                                <?php
            if ($_SESSION['cust_id'] != "") {
              ?>
              <a href="logout.php" class="btn btn-login-signup" style="width: 100%;">Logout</a>
                                

                                <?php
            } else {
              ?>
                                <button type="button" class="btn btn-login-signup" style="width: 100%;"
                                    data-toggle="modal" data-target="#signin-signup">Login or Signup</button>

                                <?php
                } ?>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="col-sm-1" style="margin-top: 30px;">
                    <ul class="header-user">
                        <li class="">
                            <a href="wishlist.php"><i class="fa fa-heart" aria-hidden="true"
                                    style="color: #fff;"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="">
                <nav id="main-nav">
                    <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                    <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                        <li>
                            <div class="mobile-back text-right">Back<i class="fa fa-angle-right pl-2"
                                    aria-hidden="true"></i></div>
                        </li>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="about-us.php">About Us</a>
                        </li>
                        <?php
            if ($_SESSION['cust_id'] != "") {
              ?>
                        <li>
                            <a href="profile.php">Profile </a>
                        </li>
                        <?php  }  ?>
                        <li>
                            <a href="contact.php">Contact Us</a>
                        </li>
                        <!-- <li>
                            <a href="product.php">Product</a>
                        </li> -->
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- ---------------------------------- -->
    <div id="setting_box" class="setting-box">
        <a href="javascript:void(0)" class="overlay" onclick="closeSetting()"></a>
        <div class="setting_box_body">
            <div>
                <div class="sidebar-back">
                    <p class="mb-0"> <span class="text-left"> My Cart<span class="" style="color: #218137;"> (5
                                Items)</span> </span>
                        <a href="javascript:void(0)" onclick="closeSetting()" class="text-right close-cart">&times;</a>
                    </p>
                </div>
            </div>
            <div class="setting-body">
                <div class="setting-title">
                    <h4>View Product List</h4>
                </div>
                <div class="setting-contant">
                    <div class="row demo-section">
                        <div class="col-sm-4 col-12 text-center demo-effects">
                            <img src="assets/img/coffee.png" class="cart-product-img" alt="img">
                        </div>
                        <div class="col-sm-8 col-12 text-left demo-effects">
                            <button type="button" class="btn btn-default offer-sm-btn btn-xs">50% Off</button>
                            <p class="mb-0">Product Title</p>
                            <p class="mb-0 fs-12"> <i class="fa fa-check-circle" aria-hidden="true"></i>
                                <strong>Available in - 500gm</strong>
                            </p>

                            <div class="qty mt-5" style="text-align: left;">
                                <p style="margin-bottom: 0px; margin-top: 5px;">Quantity: </p>
                                <span class="minus bg-dark">-</span>
                                <input type="number" class="count" name="qty" value="1">
                                <span class="plus bg-dark">+</span>
                            </div>
                            <p><strong><i class="fa fa-inr" aria-hidden="true"></i>500.99 <i class="fa fa-tag"
                                        aria-hidden="true"></i> </strong>
                                <small> <strike><i class="fa fa-inr" aria-hidden="true"></i>500.99 </strike> </small>
                            </p>
                        </div>
                        <span class="close-product">&times;</span>
                    </div>
                    <hr>
                    <div class="row demo-section">
                        <div class="col-sm-4 col-12 text-center demo-effects">
                            <img src="assets/img/coffee.png" class="cart-product-img" alt="img">
                        </div>
                        <div class="col-sm-8 col-12 text-left demo-effects">
                            <button type="button" class="btn btn-default offer-sm-btn btn-xs">50% Off</button>
                            <p class="mb-0">Product Title</p>
                            <p class="mb-0 fs-12"> <i class="fa fa-check-circle" aria-hidden="true"></i>
                                <strong>Available in - 500gm</strong>
                            </p>

                            <div class="qty mt-5" style="text-align: left;">
                                <p style="margin-bottom: 0px; margin-top: 5px;">Quantity: </p>
                                <span class="minus bg-dark">-</span>
                                <input type="number" class="count" name="qty" value="1">
                                <span class="plus bg-dark">+</span>
                            </div>
                            <p><strong><i class="fa fa-inr" aria-hidden="true"></i>500.99 <i class="fa fa-tag"
                                        aria-hidden="true"></i> </strong>
                                <small> <strike><i class="fa fa-inr" aria-hidden="true"></i>500.99 </strike> </small>
                            </p>
                        </div>
                        <span class="close-product">&times;</span>
                    </div>
                    <hr>
                    <div class="row demo-section">
                        <div class="col-sm-4 col-12 text-center demo-effects">
                            <img src="assets/img/coffee.png" class="cart-product-img" alt="img">
                        </div>
                        <div class="col-sm-8 col-12 text-left demo-effects">
                            <button type="button" class="btn btn-default offer-sm-btn btn-xs">50% Off</button>
                            <p class="mb-0">Product Title</p>
                            <p class="mb-0 fs-12"> <i class="fa fa-check-circle" aria-hidden="true"></i>
                                <strong>Available in - 500gm</strong>
                            </p>

                            <div class="qty mt-5" style="text-align: left;">
                                <p style="margin-bottom: 0px; margin-top: 5px;">Quantity: </p>
                                <span class="minus bg-dark">-</span>
                                <input type="number" class="count" name="qty" value="1">
                                <span class="plus bg-dark">+</span>
                            </div>
                            <p><strong><i class="fa fa-inr" aria-hidden="true"></i>500.99 <i class="fa fa-tag"
                                        aria-hidden="true"></i> </strong>
                                <small> <strike><i class="fa fa-inr" aria-hidden="true"></i>500.99 </strike> </small>
                            </p>
                        </div>
                        <span class="close-product">&times;</span>
                    </div>
                    <hr>
                </div>
                <div class="setting-contant">
                    <ul class="color-box">
                        <li>
                            <input id="ColorPicker1" value="#ff4c3b" name="Background">
                            <span>theme deafult color</span>
                        </li>
                    </ul>
                </div>
                <div class="buy_btn">
                    <div class="row">
                        <div class="col-sm-8 text-left">
                            <p><small>Sub Total</small></p>
                            <p>Delivery Charges</p>
                            <h4>Your Total Savings</h4>
                        </div>
                        <div class="col-sm-4 text-right">
                            <p><small><i class="fa fa-inr" aria-hidden="true"></i>499.99</small> </p>
                            <p><i class="fa fa-inr" aria-hidden="true"></i>40.00</p>
                            <h4><i class="fa fa-inr" aria-hidden="true"></i>539.99</h4>
                        </div>
                    </div>
                    <a href="#" target="_blank" class="btn btn-block purchase_btn">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> &nbsp;&nbsp; Proceed To Checkout
                        <span style="float: right;"><i class="fa fa-inr" aria-hidden="true"></i>539.99</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- --------------------------------------- -->
    <!-- theme setting -->
    <!-- -------------------------------------------- -->
    <div id="signin-signup" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-center">Phone Number Verification</h4>
                </div>
                <div class="modal-body">
                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                            <div class="row">
                                <div class="col-sm-6 col-sm-offset-3">
                                    <div class="login-help weight--semibold">
                                        <div>
                                            <div class="login-help weight--semibold text-center">Enter your phone number
                                                to</div>
                                            <div class="login-help weight--semibold text-center">Login/Sign up</div>
                                        </div>
                                    </div>
                                    <form>
                                        <div class="login-phone">
                                            <input type="tel" maxlength="10" class="login-phone__input input"
                                                data-test-id="phone-no-text-box" id="phno" value="">
                                            <input type="hidden" class="form-control" id="custid">

                                        </div>
                                        <div id="hideshow" style="display: none;">
                                            <label for="">OTP</label>
                                            <input type="number" maxlength="4" class="form-control" id="otp"
                                                value="0101">
                                        </div>
                                        <button type="button" onclick="login()"
                                            class="btn weight--semibold login-button btn--gray margin-50"
                                            data-test-id="login-next-button" id="nextbtn" style="display: block;">Next
                                            <button type="button" onclick="checkotp()"
                                                class="btn weight--semibold login-button btn--gray margin-50"
                                                data-test-id="login-next-button" id="loginbtn"
                                                style="display: none;">Login
                                            </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php 
if(isset($_POST['submit_search'])){
    echo "<script>window.location.href='index.php';</script>";

}

?>


    <script>
    function login(name) {

        const phno = document.getElementById('phno').value;

        $.ajax({
            type: "POST",
            url: "login.php",
            data: "phno=" + phno,
            success: function(data) {
                if (data) {
                    document.getElementById("hideshow").style.display = "block";
                    document.getElementById("nextbtn").style.display = "none";
                    document.getElementById("loginbtn").style.display = "block";
                    document.getElementById("custid").value = data;
                }
            }
        });

    }


    function checkotp(name) {
        const otp = document.getElementById('otp').value;
        const custid = document.getElementById('custid').value;
        if (otp != '') {
            $.ajax({
                type: "POST",
                url: "checkotp.php",
                data: {
                    otp: otp,
                    custid: custid
                },
                success: function(data) {
                    if (data) {
                        console.log(data)
                        if (data == 1) {
                            location.reload();
                        }
                    }
                }
            });
        }

    }

    var acc = document.getElementsByClassName("login-account");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }



    </script>