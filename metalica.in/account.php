

<!--==========================================================
     ========================================================== -->
         <?php include('header.php') ?>
<!-- ==========================================================
     ========================================================== -->

  <!-- catg header banner section -->
  <section id="aa-catg-head-banner" style="padding-top: 0px;">
    <img src="assets/img/slider/banner.png" alt="fashion img" style="width: 100%;">
    <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Account Page</h2>
        <ol class="breadcrumb">
          <li><a href="index.php">Home</a></li>                   
          <li class="active">Account</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

 <!-- Cart view section -->
 <section id="aa-myaccount">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="aa-myaccount-area">         
            <div class="row">
              <div class="col-md-6">
                <div class="aa-myaccount-login">
                <h4>Login</h4>
                 <form action="" class="aa-login-form">
                  <label for="username">Username or Email address<span>*</span></label>
                   <input type="text" placeholder="Username or email">
                   <label for="password1">Password<span>*</span></label>
                    <input type="password" id="password1" placeholder="Password">
                    <button type="submit" class="aa-browse-btn">Login</button>
                    <div style="display: inline-flex;">
                    <label for="remember1">
                    <input type="checkbox" id="remember1" class="rememberme"> Remember me </label>
                    <!-- <p class="aa-lost-password"><a href="#">Lost your password?</a></p> -->
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-md-6">
                <div class="aa-myaccount-register">                 
                 <h4>Register</h4>
                 <form action="" class="aa-login-form">
                    <label for="username">Username or Email address<span>*</span></label>
                    <input type="text" id="username" placeholder="Username or email">
                    <label for="password">Password<span>*</span></label>
                    <input type="password" id="password" placeholder="Password">
                    <button type="submit" class="aa-browse-btn">Register</button>                    
                  </form>
                </div>
              </div>
            </div>          
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- / Cart view section -->
<!-- ==========================================================
     ========================================================== -->
         <?php include('footer.php') ?>
<!-- ==========================================================
     ==========================================================