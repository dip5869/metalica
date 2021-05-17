
<!---==========================================================
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
        <h2>Profile</h2>
        <ol class="breadcrumb">
          <li><a href="index.php">Home</a></li>         
          <li class="active">Profile</li>
        </ol>
      </div>
    </div>
  </div>
</section>
<section id="aa-product-category">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 col-md-9 col-sm-8 col-md-push-3" style="margin-top: 1rem;">
        <div id="account-info" class="tabcontent text-left active">
          <h3> MY DASHBOARD</h3>
          <h6>Hello, MARK JECNO !</h6>
          <p>From your My Account Dashboard you have the ability to view a snapshot of your recent account activity and update your account information. Select a link below to view or edit information.</p>
          <div class="row">
            <div class="col-sm-12 text-left">
              <h2>Account Information</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="row">
                <div class="col-sm-12" style="position: relative;">
                  <label for="Phone Number">Full Name</label>
                  <input type="text" name="" placeholder="Enter your name" class="account-text-box">
                  <a href="#" class="text-danger edit-btn-link">Edit</a>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12" style="position: relative; margin-top: 15px;">
                  <label for="Email Id">Email Id</label>
                  <input type="mail" name="" placeholder="Enter your mail details" class="account-text-box">
                  <a href="#" class="text-danger edit-btn-link">Edit</a>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12" style="position: relative; margin-top: 15px;">
                  <label for="Phone Number">Contact Information</label>
                  <input type="number" name="" placeholder="Enter your contacct number" class="account-text-box">
                  <a href="#" class="text-danger edit-btn-link">Edit</a>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12" style="position: relative; margin-top: 20px; margin-bottom: 20px;">
                  <button type="button" class="btn btn-add-cart" style="border-radius: 50px;">Save Details</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="account-form" class="tabcontent" style="display: none;">
          <div id="signupbox" class="mainbox col-md-12 mt-50">
            <div class="panel panel-info">
              <div class="panel-heading">
                <div class="panel-title">Profile Details</div>
              </div>  
              <div class="panel-body" >
                <form  class="form-horizontal" method="post" >
                  <input type='hidden' name='csrfmiddlewaretoken' value='XFe2rTYl9WOpV8U6X5CfbIuOZOELJ97S' />
                  <div id="div_id_select" class="form-group required">
                    <label for="id_select"  class="control-label col-md-4  requiredField"> Select
                      <span class="asteriskField">*</span> 
                    </label>
                    <div class="controls col-md-8 mb-10">
                      <label class="radio-inline">
                        <input type="radio" checked="checked" name="select" id="id_select_1" value="S" class="mb-10">Knowledge Seeker
                      </label>
                      <label class="radio-inline"> 
                        <input type="radio" name="select" id="id_select_2" value="P" class="mb-10">Knowledge Provider 
                      </label>
                    </div>
                  </div> 
                  <div id="div_id_As" class="form-group required">
                    <label for="id_As"  class="control-label col-md-4  requiredField">As
                      <span class="asteriskField">*</span> 
                    </label>
                    <div class="controls col-md-8 mb-10">
                      <label class="radio-inline"> 
                        <input type="radio" name="As" id="id_As_1" value="I" class="mb-10">Individual
                      </label>
                      <label class="radio-inline"> 
                        <input type="radio" name="As" id="id_As_2" value="CI" class="mb-10">Company/Institute 
                      </label>
                    </div>
                  </div>
                  <div id="div_id_username" class="form-group required">
                    <label for="id_username" class="control-label col-md-4  requiredField"> Username
                      <span class="asteriskField">*</span> 
                    </label>
                    <div class="controls col-md-8 ">
                      <input class="input-md  textinput textInput form-control mb-10" id="id_username" maxlength="30" name="username" placeholder="Choose your username" type="text" />
                    </div>
                  </div>
                  <div id="div_id_email" class="form-group required">
                    <label for="id_email" class="control-label col-md-4  requiredField"> E-mail
                      <span class="asteriskField">*</span> 
                    </label>
                    <div class="controls col-md-8 ">
                      <input class="input-md emailinput form-control mb-10" id="id_email" name="email" placeholder="Your current email address" type="email" />
                    </div>     
                  </div>
                  <div id="div_id_password1" class="form-group required">
                    <label for="id_password1" class="control-label col-md-4  requiredField">Password
                      <span class="asteriskField">*</span>
                    </label>
                    <div class="controls col-md-8 "> 
                      <input class="input-md textinput textInput form-control mb-10" id="id_password1" name="password1" placeholder="Create a password" type="password" />
                    </div>
                  </div>
                  <div id="div_id_password2" class="form-group required">
                    <label for="id_password2" class="control-label col-md-4  requiredField"> Re:password
                      <span class="asteriskField">*</span> 
                    </label>
                    <div class="controls col-md-8 ">
                      <input class="input-md textinput textInput form-control mb-10" id="id_password2" name="password2" placeholder="Confirm your password" type="password" />
                    </div>
                  </div>
                  <div id="div_id_name" class="form-group required"> 
                    <label for="id_name" class="control-label col-md-4  requiredField"> full name
                      <span class="asteriskField">*</span> 
                    </label> 
                    <div class="controls col-md-8 "> 
                      <input class="input-md textinput textInput form-control mb-10" id="id_name" name="name" placeholder="Your Frist name and Last name" type="text" />
                    </div>
                  </div>
                  <div id="div_id_gender" class="form-group required">
                    <label for="id_gender"  class="control-label col-md-4  requiredField"> Gender
                      <span class="asteriskField">*</span> 
                    </label>
                    <div class="controls col-md-8 mb-10">
                      <label class="radio-inline"> 
                        <input type="radio" name="gender" id="id_gender_1" value="M"  class="mb-10">Male</label>
                        <label class="radio-inline"> 
                          <input type="radio" name="gender" id="id_gender_2" value="F"  class="mb-10">Female </label>
                        </div>
                      </div>
                      <div id="div_id_company" class="form-group required"> 
                        <label for="id_company" class="control-label col-md-4  requiredField"> company name
                          <span class="asteriskField">*</span> 
                        </label>
                        <div class="controls col-md-8 "> 
                          <input class="input-md textinput textInput form-control mb-10" id="id_company" name="company" placeholder="your company name" type="text" />
                        </div>
                      </div> 
                      <div id="div_id_catagory" class="form-group required">
                        <label for="id_catagory" class="control-label col-md-4  requiredField"> catagory
                          <span class="asteriskField">*</span> 
                        </label>
                        <div class="controls col-md-8 "> 
                          <input class="input-md textinput textInput form-control mb-10" id="id_catagory" name="catagory" placeholder="skills catagory" type="text" />
                        </div>
                      </div> 
                      <div id="div_id_number" class="form-group required">
                        <label for="id_number" class="control-label col-md-4  requiredField"> contact number
                          <span class="asteriskField">*</span>
                        </label>
                        <div class="controls col-md-8 ">
                          <input class="input-md textinput textInput form-control mb-10" id="id_number" name="number" placeholder="provide your number" type="text" />
                        </div> 
                      </div> 
                      <div id="div_id_location" class="form-group required">
                        <label for="id_location" class="control-label col-md-4  requiredField"> Your Location
                          <span class="asteriskField">*</span> 
                        </label>
                        <div class="controls col-md-8 ">
                          <input class="input-md textinput textInput form-control mb-10" id="id_location" name="location" placeholder="Your Pincode and City" type="text" />
                        </div> 
                      </div>
                      <div class="form-group">
                        <div class="controls col-md-offset-4 col-md-8 ">
                          <div id="div_id_terms" class="checkbox required">
                            <label for="id_terms" class=" requiredField">
                              <input class="input-ms checkboxinput mb-10" id="id_terms" name="terms" type="checkbox" />
                              Agree with the terms and conditions
                            </label>
                          </div>   
                        </div>
                      </div> 
                      <div class="form-group"> 
                        <div class="aab controls col-md-4 "></div>
                        <div class="controls col-md-8 ">
                          <input type="submit" name="Signup" value="Signup" class="btn btn-primary btn btn-info" id="submit-id-signup" />
                          or <input type="button" name="Signup" value="Sign Up with Facebook" class="btn btn btn-primary" id="button-id-signup" />
                        </div>
                      </div> 
                    </form>
                  </div>
                </div>
              </div> 
            </div>
            <div id="loginform" class="tabcontent" style="position: relative; height: 100vh; display: none;">
              <div class="is-login" id="mainContainer">
                <div class="card card--login shadow-2dp is-active" id="logInForm">
                  <div class="card__content">
                    <div class="inputfield">
                      <input class="inputfield__input" type="text">
                      <label class="inputfield__label">Username</label>
                      <span class="inputfield__underline"></span>
                    </div>
                    <div class="inputfield">
                      <input class="inputfield__input" type="password">
                      <label class="inputfield__label">Password</label>
                      <span class="inputfield__underline"></span>
                    </div>
                    <span class="toggle toggle--block toggle--center">
                      <input class="toggle__input" type="checkbox" id="remember">
                      <label class="toggle__label" for="remember">Remember me?</label>
                      <label class="toggle__checkbox" for="remember">
                        <span class="sr-only">Toggle remember me.</span>
                        <svg class="toggle__checkbox-mark" viewBox="0 0 18 18" aria-label="check">
                          <path d="M6.61 11.89L3.5 8.78 2.44 9.84 6.61 14l8.95-8.95L14.5 4z"/></svg>
                        </label>
                      </span>
                      <p class="text-center">
                        <a href="#" data-toggle="form" data-target="amnesiaForm" data-type="amnesia">Forgot your password?</a>
                      </p>
                    </div>
                    <div class="card__action">
                      <button class="btn btn--primary btn--block" type="button">
                        Sign in
                      </button>
                    </div>
                    <div class="card__action">
                      <button class="btn btn--secondry btn--block" data-toggle="form" data-target="registerForm" data-type="register" type="button">
                        Register
                      </button>
                    </div>
                  </div>
                  <div class="card card--amnesia shadow-2dp" id="amnesiaForm">
                    <div class="card__content">
                      <div class="inputfield">
                        <input class="inputfield__input" type="email">
                        <label class="inputfield__label">Email</label>
                        <span class="inputfield__underline"></span>
                      </div>
                    </div>
                    <div class="card__action">
                      <button class="btn btn--flat btn--primary" type="button">
                        Reset password
                      </button>
                      <button class="btn btn--flat" data-toggle="form" data-target="logInForm" data-type="login" type="button">
                        Cancel
                      </button>
                    </div>
                  </div>
                  <div class="card card--register shadow-2dp" id="registerForm">
                    <div class="card__content">
                      <div class="inputfield">
                        <input class="inputfield__input" type="email">
                        <label class="inputfield__label">Email <i class="required">*</i></label>
                        <span class="inputfield__underline"></span>
                      </div>
                      <div class="inputfield">
                        <input class="inputfield__input" type="text">
                        <label class="inputfield__label">Username <i class="required">*</i></label>
                        <span class="inputfield__underline"></span>
                      </div>
                      <div class="inputfield">
                        <input class="inputfield__input" type="password">
                        <label class="inputfield__label">Password <i class="required">*</i></label>
                        <span class="inputfield__underline"></span>
                      </div>
                      <div class="inputfield">
                        <input class="inputfield__input" type="password">
                        <label class="inputfield__label">Password Confirm <i class="required">*</i></label>
                        <span class="inputfield__underline"></span>
                      </div>
                      <span class="toggle toggle--block">
                        <input class="toggle__input" type="checkbox" id="subscribe">
                        <label class="toggle__label" for="subscribe">Subscribe to our newsletter?</label>
                        <label class="toggle__checkbox" for="subscribe">
                          <span class="sr-only">Toggle newsletter subscription.</span>
                          <svg class="toggle__checkbox-mark" viewBox="0 0 18 18" aria-label="check"><path d="M6.61 11.89L3.5 8.78 2.44 9.84 6.61 14l8.95-8.95L14.5 4z"/></svg>
                        </label>
                      </span>
                      <span class="toggle toggle--block">
                        <input class="toggle__input" type="checkbox" id="terms">
                        <label class="toggle__label" for="terms">Agree to terms and conditions? <i class="required">*</i></label>
                        <label class="toggle__checkbox" for="terms">
                          <span class="sr-only">Toggle terms and conditions agreement.</span>
                          <svg class="toggle__checkbox-mark" viewBox="0 0 18 18" aria-label="check"><path d="M6.61 11.89L3.5 8.78 2.44 9.84 6.61 14l8.95-8.95L14.5 4z"/></svg>
                        </label>
                      </span>
                      <p class="text-center">Fields marked <i class="required">*</i> are required.</p>
                    </div>
                    <div class="card__action">
                      <button class="btn btn--primary btn--block" type="button">
                        Create account
                      </button>
                    </div>
                    <div class="card__action">
                      <button class="btn btn--secondry btn--block" data-toggle="form" data-target="logInForm" data-type="login" type="button">
                        Log in
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tabcontent" id="checkout" style="padding: 0px; display: none;">
                <div class="row" id="checkout">
                  <div class="col-md-12">
                    <div class="checkout-area">
                      <form action="/action-page.php">
                        <div class="col-md-12">
                          <div class="checkout-right">
                            <h4>Order Summary</h4>
                            <div class="aa-order-summary-area">
                              <table class="table table-responsive">
                                <thead>
                                  <tr>
                                    <th>Product</th>
                                    <th>Total</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Lorem Ipsum <strong> x  1</strong></td>
                                    <td>$150</td>
                                  </tr>
                                  <tr>
                                    <td>Polo Lorem Ipsum <strong> x  1</strong></td>
                                    <td>$250</td>
                                  </tr>
                                  <tr>
                                    <td>Lorem Ipsum <strong> x  1</strong></td>
                                    <td>$350</td>
                                  </tr>
                                </tbody>
                                <tfoot>
                                  <tr>
                                    <th>Subtotal</th>
                                    <td>$750</td>
                                  </tr>
                                  <tr>
                                    <th>Tax</th>
                                    <td>$35</td>
                                  </tr>
                                  <tr>
                                    <th>Total</th>
                                    <td>$785</td>
                                  </tr>
                                </tfoot>
                              </table>
                            </div>
                            <h4>Payment Method</h4>
                            <div class="aa-payment-method">                    
                              <label for="cashdelivery"><input type="radio" id="cashdelivery" name="optionsRadios"> Cash on Delivery </label>
                              <label for="paypal"><input type="radio" id="paypal" name="optionsRadios" checked> Via Paypal </label>
                              <img src="https://www.paypalobjects.com/webstatic/mktg/logo/AM_mc_vs_dc_ae.jpg" border="0" alt="PayPal Acceptance Mark">    
                              <input type="submit" value="Place Order" class="aa-browse-btn">                
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tabcontent" id="Whishlist" style="display: none;">
                <div class="col-md-12" style="position: relative;">
                  <div class="checkout-left">
                    <div class="row">
                      <div class="col-md-12">
                        <p class="" style="float: left;">My Whishlist (20)</p>
                      </div>
                    </div>
                    <hr class="hr-line-mr">
                    <div class="row">
                      <div class="col-md-3">
                        <img src="assets/img/coffee.jpg" style="width: 100%;">
                        <div class="qty mt-5">
                          <span class="minus bg-dark">-</span>
                          <input type="number" class="count" name="qty" value="1">
                          <span class="plus bg-dark">+</span>
                        </div>
                      </div>
                      <div class="col-md-6 text-left">
                        <p class="text-left">coffee Nescafe coffee Nescafe</p>
                        <button type="button" class="btn rating-btn btn-success btn-sm">3.3  
                          <i class="fa fa-star text-white" aria-hidden="true"></i> 
                        </button>
                        <span class="text-left">(20)</span>
                        <h3 class="" style="">
                          <i class="fa fa-inr" aria-hidden="true"></i> 
                          1920<sub><strike><small>2000</small></strike> /-</sub>
                        </h3>
                        <a href="">
                          <p class="text-success">Move To Cart</p>
                        </a>
                      </div>
                      <div class="col-md-3" style="float: right;">
                        <a href=""><i class="fa fa-trash" aria-hidden="true"></i></a> 
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-3">
                        <img src="assets/img/coffee.jpg" style="width: 100%;">
                        <div class="qty mt-5">
                          <span class="minus bg-dark">-</span>
                          <input type="number" class="count" name="qty" value="1">
                          <span class="plus bg-dark">+</span>
                        </div>
                      </div>
                      <div class="col-md-6 text-left">
                        <p class="text-left">coffee Nescafe coffee Nescafe</p>
                        <button type="button" class="btn btn-danger rating-btn btn-sm">1.3  
                          <i class="fa fa-star text-white" aria-hidden="true"></i> 
                        </button><span class="text-left">(20)</span>
                        <h3 class="" style=""><i class="fa fa-inr" aria-hidden="true"></i> 1920<sub>
                          <strike><small>2000</small></strike> /-</sub>
                        </h3>
                        <a href="">
                          <p class="text-success">Move To Cart</p>
                        </a>
                      </div>
                      <div class="col-md-3" style="float: right;">
                        <a href=""><i class="fa fa-trash" aria-hidden="true"></i></a> 
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-3">
                        <img src="assets/img/coffee.jpg" style="width: 100%;">
                        <div class="qty mt-5">
                          <span class="minus bg-dark">-</span>
                          <input type="number" class="count" name="qty" value="1">
                          <span class="plus bg-dark">+</span>
                        </div>
                      </div>
                      <div class="col-md-6 text-left">
                        <p class="text-left">coffee Nescafe coffee Nescafe</p>
                        <button type="button" class="btn btn-danger rating-btn btn-sm">1.3  <i class="fa fa-star text-white" aria-hidden="true"></i> </button><span class="text-left">(20)</span>
                        <h3 class="" style="">
                          <i class="fa fa-inr" aria-hidden="true"></i> 1920<sub><strike><small>2000</small></strike> /-</sub>
                        </h3>
                        <a href="">
                          <p class="text-success">Move To Cart</p>
                        </a>
                      </div>
                      <div class="col-md-3" style="float: right;">
                        <a href=""><i class="fa fa-trash" aria-hidden="true"></i></a> 
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-3">
                        <img src="assets/img/coffee.jpg" style="width: 100%;">
                        <div class="qty mt-5">
                          <span class="minus bg-dark">-</span>
                          <input type="number" class="count" name="qty" value="1">
                          <span class="plus bg-dark">+</span>
                        </div>
                      </div>
                      <div class="col-md-6 text-left">
                        <p class="text-left">coffee Nescafe coffee Nescafe</p>
                        <button type="button" class="btn btn-danger rating-btn btn-sm">1.3  <i class="fa fa-star text-white" aria-hidden="true"></i> </button><span class="text-left">(20)</span>
                        <h3 class="" style=""><i class="fa fa-inr" aria-hidden="true"></i> 1920<sub><strike><small>2000</small></strike> /-</sub></h3>
                        <a href="">
                          <p class="text-success">Move To Cart</p>
                        </a>
                      </div>
                      <div class="col-md-3" style="float: right;">
                        <a href=""><i class="fa fa-trash" aria-hidden="true"></i></a> 
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tabcontent" id="newsletter" style="display: none;">
                <div class="row" id="aa-subscribe">
                  <div class="col-md-12">
                    <div class="aa-subscribe-area">
                      <h3>Subscribe our newsletter </h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, velit!</p>
                      <form action="/action-page.php" class="aa-subscribe-form">
                        <input type="email" name="Enter your email" placeholder="Enter your Email">
                        <input type="submit" value="Subscribe">
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div id="invoice" class="tabcontent" style="display: none;">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="card">
                      <div class="card-header">
                        Invoice
                        <strong>01/01/01/2018</strong> 
                        <span class="float-right"> <strong>Status:</strong> Pending</span>
                      </div>
                      <div class="card-body">
                        <div class="row mb-4">
                          <div class="col-sm-6">
                            <h6 class="mb-3">From:</h6>
                            <div>
                              <strong>Webz Poland</strong>
                            </div>
                            <div>Madalinskiego 8</div>
                            <div>71-101 Szczecin, Poland</div>
                            <div>Email: info@webz.com.pl</div>
                            <div>Phone: +48 444 666 3333</div>
                          </div>
                          <div class="col-sm-6">
                            <h6 class="mb-3">To:</h6>
                            <div>
                              <strong>Bob Mart</strong>
                            </div>
                            <div>Attn: Daniel Marek</div>
                            <div>43-190 Mikolow, Poland</div>
                            <div>Email: marek@daniel.com</div>
                            <div>Phone: +48 123 456 789</div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="table-responsive-sm">
                              <table class="table table-striped table-responsive" style="width: 100%;">
                                <thead>
                                  <tr>
                                    <th class="center">#</th>
                                    <th>Item</th>
                                    <th>Description</th>
                                    <th class="right">Unit Cost</th>
                                    <th class="center">Qty</th>
                                    <th class="right">Total</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="center">1</td>
                                    <td class="left strong">Origin License</td>
                                    <td class="left">Extended License</td>
                                    <td class="right">$999,00</td>
                                    <td class="center">1</td>
                                    <td class="right">$999,00</td>
                                  </tr>
                                  <tr>
                                    <td class="center">2</td>
                                    <td class="left">Custom Services</td>
                                    <td class="left">Instalation and Customization (cost per hour)</td>
                                    <td class="right">$150,00</td>
                                    <td class="center">20</td>
                                    <td class="right">$3.000,00</td>
                                  </tr>
                                  <tr>
                                    <td class="center">3</td>
                                    <td class="left">Hosting</td>
                                    <td class="left">1 year subcription</td>
                                    <td class="right">$499,00</td>
                                    <td class="center">1</td>
                                    <td class="right">$499,00</td>
                                  </tr>
                                  <tr>
                                    <td class="center">4</td>
                                    <td class="left">Platinum Support</td>
                                    <td class="left">1 year subcription 24/7</td>
                                    <td class="right">$3.999,00</td>
                                    <td class="center">1</td>
                                    <td class="right">$3.999,00</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                            <div class="row">
                              <div class="col-sm-offset-6 col-sm-6 ml-auto">
                                <table class="table table-clear">
                                  <tbody>
                                    <tr>
                                      <td class="left">
                                        <strong>Subtotal</strong>
                                      </td>
                                      <td class="right">$8.497,00</td>
                                    </tr>
                                    <tr>
                                      <td class="left">
                                        <strong>Discount (20%)</strong>
                                      </td>
                                      <td class="right">$1,699,40</td>
                                    </tr>
                                    <tr>
                                      <td class="left">
                                        <strong>VAT (10%)</strong>
                                      </td>
                                      <td class="right">$679,76</td>
                                    </tr>
                                    <tr>
                                      <td class="left">
                                        <strong>Total</strong>
                                      </td>
                                      <td class="right">
                                        <strong>$7.477,36</strong>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tabcontent" id="my-orders" style="display: none; border: none!important;">
                <div class="row">
                  <div class="card text-center card-my-order" id="card-delivery">
                    <div class="card-header">
                      <div class="row">
                        <div class="col-sm-6">
                          <p class="order-placed">Placed Thu, 9 Jul, 4.54 PM</p>
                        </div>
                        <div class="col-sm-6">
                          <button type="button" class="btn btn-default btn-report">Report an issue</button>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-2">
                          <h4 class="card-title">Delivered</h4>
                        </div>
                        <div class="col-sm-6">
                          <p class="card-title text-left">Super Store - Vimannagar . <span> <i class="fa fa-inr" aria-hidden="true"></i> 849</span> 
                          </p>
                          <p class="card-text text-left">Order ID: ORD7588623600 . <span>5 Items</span></p>
                        </div>
                        <div class="col-sm-4">
                          <a href="view-order.php">View 5 items Ordered <i class="fa fa-angle-right" aria-hidden="true"></i></a> 
                        </div>
                      </div>
                    </div>
                    <div class="card-footer text-muted">
                      <a href="#">View Address and Billing Details  <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="card text-center card-my-order" id="card-delivery">
                    <div class="card-header">
                      <div class="row">
                        <div class="col-sm-6">
                          <p class="order-placed">Placed Thu, 9 Jul, 4.54 PM</p>
                        </div>
                        <div class="col-sm-6">
                          <button type="button" class="btn btn-default btn-report">Report an issue</button>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-2">
                          <h4 class="card-title">Delivered</h4>
                        </div>
                        <div class="col-sm-6">
                          <p class="card-title text-left">Super Store - Vimannagar . <span> <i class="fa fa-inr" aria-hidden="true"></i> 849</span> 
                          </p>
                          <p class="card-text text-left">Order ID: ORD7588623600 . <span>5 Items</span></p>
                        </div>
                        <div class="col-sm-4">
                          <a href="view-order.php">View 5 items Ordered <i class="fa fa-angle-right" aria-hidden="true"></i></a>  
                        </div>
                      </div>
                    </div>
                    <div class="card-footer text-muted">
                      <a href="#">View Address and Billing Details  <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="card text-center card-my-order" id="card-delivery">
                    <div class="card-header">
                      <div class="row">
                        <div class="col-sm-6">
                          <p class="order-placed">Placed Thu, 9 Jul, 4.54 PM</p>
                        </div>
                        <div class="col-sm-6">
                          <button type="button" class="btn btn-default btn-report">Report an issue</button>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-2">
                          <h4 class="card-title">Delivered</h4>
                        </div>
                        <div class="col-sm-6">
                          <p class="card-title text-left">Super Store - Vimannagar . <span> <i class="fa fa-inr" aria-hidden="true"></i> 849</span> 
                          </p>
                          <p class="card-text text-left">Order ID: ORD7588623600 . <span>5 Items</span></p>
                        </div>
                        <div class="col-sm-4">
                          <a href="view-order.php">View 5 items Ordered <i class="fa fa-angle-right" aria-hidden="true"></i></a>  
                        </div>
                      </div>
                    </div>
                    <div class="card-footer text-muted">
                      <a href="#">View Address and Billing Details  <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tabcontent" id="address" style="display: none;">
                <div class="row">
                  <div class="col-sm-12">
                    <a href="" class="" data-toggle="modal" data-target="#add_address">
                      <div class="add-address-box1">
                        <span><i class="fa fa-plus" aria-hidden="true"></i></span>
                        <span>Add Address</span> 
                      </div>
                    </a>
                  </div>
                </div>
                <div class="row mt-10">
                  <div class="col-sm-6">
                    <div class="card address-card-box2">
                      <div class="card-header address-card-header-box2">
                        <p class="mb-0 p-5">Deafault</p> 
                      </div>
                      <div class="card-body">
                        <div class="p-10">
                          <p><strong>Aniket Chakor</strong></p>
                          <address>
                            Guruprasad apt<br/>
                            S 3 flat no-102<br/>
                            PUNE, <br/>
                            MAHARASHTRA 411011<br/>
                            India.<br/>
                            Phone number :+91 7588623600
                          </address>
                        </div>
                      </div> 
                      <div class="card-footer">
                        <div class="add-footer-links">
                          <a href="">Edit</a> &nbsp; | &nbsp;<a href="">Remove</a>&nbsp; | &nbsp;<a href="">Set As Default</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="card address-card-box2">
                      <div class="card-header address-card-header-box2">
                        <p class="mb-0 p-5">Deafault</p> 
                      </div>
                      <div class="card-body">
                        <div class="p-10">
                          <p><strong>Aniket Chakor</strong></p>
                          <address>
                            Guruprasad apt<br/>
                            S 3 flat no-102<br/>
                            PUNE, <br/>
                            MAHARASHTRA 411011<br/>
                            India.<br/>
                            Phone number :+91 7588623600
                          </address>
                        </div>
                      </div> 
                      <div class="card-footer">
                        <div class="add-footer-links">
                          <a href="">Edit</a> &nbsp; | &nbsp;<a href="">Remove</a>&nbsp; | &nbsp;<a href="">Set As Default</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mt-10">
                  <div class="col-sm-6">
                    <div class="card address-card-box2">
                      <div class="card-header address-card-header-box2">
                        <p class="mb-0 p-5">Deafault</p> </div>
                        <div class="card-body">
                          <div class="p-10">
                            <p><strong>Aniket Chakor</strong></p>
                            <address>
                              Guruprasad apt<br/>
                              S 3 flat no-102<br/>
                              PUNE, <br/>
                              MAHARASHTRA 411011<br/>
                              India.<br/>
                              Phone number :+91 7588623600
                            </address>
                          </div>
                        </div> 
                        <div class="card-footer">
                          <div class="add-footer-links">
                            <a href="">Edit</a> &nbsp; | &nbsp;<a href="">Remove</a>&nbsp; | &nbsp;<a href="">Set As Default</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="card address-card-box2">
                        <div class="card-header address-card-header-box2">
                          <p class="mb-0 p-5">Deafault</p> 
                        </div>
                        <div class="card-body">
                          <div class="p-10">
                            <p><strong>Aniket Chakor</strong></p>
                            <address>
                              Guruprasad apt<br/>
                              S 3 flat no-102<br/>
                              PUNE, <br/>
                              MAHARASHTRA 411011<br/>
                              India.<br/>
                              Phone number :+91 7588623600
                            </address>
                          </div>
                        </div> 
                        <div class="card-footer">
                          <div class="add-footer-links">
                            <a href="">Edit</a> &nbsp; | &nbsp;<a href="">Remove</a>&nbsp; | &nbsp;<a href="">Set As Default</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-4 col-md-pull-9" style="margin-top: 1rem;">
                <aside class="aa-sidebar">
                  <div class="" style="padding: 10px 40px;
                  border: 1px solid #f1f1f1;">
                  <img src="assets/img/profile.jpg" style="border-radius: 50%;"> 
                  <p class="text-center">Hello Aniket</p>
                </div>
                <div class="aa-sidebar-widget">
                  <div class="tab">
                    <button class="tablinks submenu" onclick="openCity(event, 'account-info')" id="defaultOpen">Account Info
                    </button>
                    <button class="tablinks submenu" onclick="openCity(event, 'my-orders')">My Orders</button>
                    <button class="tablinks submenu" onclick="openCity(event, 'Whishlist')">My Whishlist</button>
                    <button class="tablinks submenu" onclick="openCity(event, 'newsletter')">News Letter</button>
                    <button class="tablinks submenu" onclick="openCity(event, 'checkout')">Checkout</button>
                    <button class="tablinks submenu" onclick="openCity(event, 'account-form')">My Account</button>
                    <button class="tablinks submenu" onclick="openCity(event, 'address')">Add Address</button>
                    <button class="tablinks submenu" onclick="openCity(event, 'invoice')">invoice</button>
                    <button class="tablinks submenu" onclick="openCity(event, 'invoice')">Logout</button>
                  </div>
                </div>
              </aside>
            </div>
          </div>
        </div>   
      </section>
  <section id="aa-subscribe">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-subscribe-area">
            <h3>Subscribe our newsletter </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, velit!</p>
            <form action="/action-page.php" class="aa-subscribe-form">
              <input type="email" name="Enter your email" placeholder="Enter your Email">
              <input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ====================modal box======================== -->
  <div class="modal" id="add_address">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add a New Address</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form class="form-detail" action="#" method="post" id="myform">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <div class="form-control">
                    <input type="text" name="name" id="name" class="input-text border-0" placeholder="Name" required>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <div class="form-control">
                    <input type="text" name="phone" id="phone" class="input-text border-0" placeholder="10-digit Mobile Number" required>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <div class="form-control">
                    <input type="number" name="pincode" id="pincode" class="input-text border-0" placeholder="Pincode" required>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <div class="form-control">
                    <input type="text" name="locality" id="locality" class="input-text border-0" placeholder="Locality" required>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <div class="form-control">
                    <select name="address" id="address" class="input-text border-0" placeholder="Address and Street" style="width: 100%;" required>
                      <option value="place">Place</option>
                      <option value="Street">Street</option>
                      <option value="District">District</option>
                      <option value="City">City</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <div class="form-control">
                    <input type="text" name="city" id="city" class="input-text border-0" placeholder="City/District/Town" required>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <div class="form-control">
                    <input type="text" name="state" id="state" class="input-text border-0" placeholder="State" required>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <div class="form-control">
                    <select name="place" id="place" class="input-text border-0" placeholder="City/District/Town" required>
                      <option value="place">Place</option>
                      <option value="Street">Street</option>
                      <option value="District">District</option>
                      <option value="City">City</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <div class="form-control">
                    <input type="text" name="state" id="state" class="input-text border-0" placeholder="State" required>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <div class="form-control">
                    <input type="text" name="landmark" id="landmark" class="input-text border-0" placeholder="Landmark (Optional)" required>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <div class="form-control">
                    <input type="number" name="alternate_number" id="alternate_number" class="input-text border-0" placeholder="Alternate Number" required>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <button type="button" class="btn btn-success">Submit</button>
              </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
 
<!-- ==========================================================
     ========================================================== -->
         <?php include('footer.php') ?>
<!-- ==========================================================
     ==========================================================



    