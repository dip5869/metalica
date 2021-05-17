
<!--==========================================================
     ========================================================== -->
         <?php 
         
         include('header.php');
         
         include('../connection/dbcon.php');

         $qry="SELECT * FROM `m_banners` WHERE `b_position`=1 and `b_status`='Active' order by b_id desc ";
          //echo $qry;die;       
        $run=mysqli_query($con,$qry);
         
        $qry1="SELECT * FROM `m_banners` WHERE  `b_position`=2 and `b_status`='Active' order by b_id desc ";
        //echo $qry;die;       
      $run1=mysqli_query($con,$qry1);
       

      $qry2="SELECT * FROM `m_banners` WHERE `b_position`=3 and `b_status`='Active' order by b_id desc ";
      //echo $qry;die;       
     $run2=mysqli_query($con,$qry2);
     
         ?>
<!-- ==========================================================
     ========================================================== -->
  <!-- Start slider -->
  <section id="aa-slider" class="p-0">
    <div class="aa-slider-area">
      <div id="sequence" class="seq">
        <div class="seq-screen">
          <ul class="seq-canvas">
          <?php  
             foreach($run as $c): ?>
            <li>
              <div class="seq-model">
                <img data-seq src="http://localhost/metalic/admin/banner_images/<?php echo $c['b_image']; ?>" alt="Men slide img" />
              </div>
            </li>
                  <?php  endforeach; ?>                
          </ul>
        </div>
        <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
          <a class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
          <a class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
        </fieldset>
      </div>
    </div>
  </section>
  <section id="aa-product-brand">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-product-brand-area">
            <ul class="aa-product-brand-slider">
              <li class="product-slider">
                <a href="#"><img src="assets/img/organics2.png" alt="java img"></a>
                <h4>Personal Care</h4>
                <p>156 items</p>
              </li>
              <li class="product-slider">
                <a href="#"><img src="assets/img/organics1.png" alt="jquery img"></a>
               <h4>Personal Care</h4>
                <p>156 items</p>
              </li>
               <li class="product-slider">
                <a href="#"><img src="assets/img/organics3.png" alt="html5 img"></a>
                  <h4>Personal Care</h4>
                <p>156 items</p>
              </li>
                <li class="product-slider">
                <a href="#"><img src="assets/img/organics4.png" alt="css3 img"></a>
                <h4>Personal Care</h4>
                <p>156 items</p>
              </li>
                <li class="product-slider">
                <a href="#"><img src="assets/img/organics1.png" alt="wordPress img"></a>
                <h4>Personal Care</h4>
                <p>156 items</p>
              </li>
                <li class="product-slider">
                <a href="#"><img src="assets/img/organics2.png" alt="joomla img"></a>
                  <h4>Personal Care</h4>
                <p>156 items</p>
              </li>
                <li class="product-slider">
                <a href="#"><img src="assets/img/organics3.png" alt="java img"></a>
                  <h4>Personal Care</h4>
                <p>156 items</p>
              </li>
                <li class="product-slider">
                <a href="#"><img src="assets/img/organics4.png" alt="jquery img"></a>
                     <h4>Personal Care</h4>
                <p>156 items</p>
              </li>
                <li class="product-slider">
                <a href="#"><img src="assets/img/organics1.png" alt="html5 img"></a>
                  <h4>Personal Care</h4>
                <p>156 items</p>
              </li>
                <li class="product-slider">
                <a href="#"><img src="assets/img/organics2.png" alt="css3 img"></a>
                  <h4>Personal Care</h4>
                <p>156 items</p>
              </li>
                <li class="product-slider">
                <a href="#"><img src="assets/img/organics3.png" alt="wordPress img"></a>
                  <h4>Personal Care</h4>
                <p>156 items</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Client Brand -->
  <!-- / slider -->
  <section id="aa-promo">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-promo-area">
            <div class="row">
              <!-- promo left -->
              <div class="col-md-12 no-padding">                
                <div class="aa-promo-left">
                  <div class="aa-promo-banner">     
                  <?php foreach($run1 as $c): ?>               
                    <img src="http://localhost/metalic/admin/banner_images/<?php echo $c['b_image']; ?>" alt="img">   
                    <?php endforeach; ?>                 
                    <div class="aa-prom-content">
                                         
                    </div>
                  </div>
                </div>
              </div>              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="aa-product">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-product-area">
              <div class="aa-product-inner">
                 <ul class="nav nav-tabs aa-products-tab">
                    <li class="active"><a href="#men" data-toggle="tab">Cleaning & Households</a></li>
                    <li><a href="#women" data-toggle="tab">Daily Essentials</a></li>
                    <li><a href="#sports" data-toggle="tab">Groceries</a></li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane fade in active" id="men">
                      <ul class="aa-product-catg">
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="assets/img/ariel.jpg" alt=" shirt img" style="width: 100%;"></a>
                            <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                              <figcaption style="padding: 5px;"> 
                              <h4 class="aa-product-title"><a href="#">Ariel Powder</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                               <button type="button" class="btn btn-warning btn-sm btn-rounded text-center">Buy Now</button>
                            </figcaption>
                           
                          </figure>                        
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                              <span class="fa fa-heart-o"></span>
                            </a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal">
                              <span class="fa fa-search"></span>
                            </a>                          
                          </div>
                          <a class="aa-badge aa-sale" href="#">SALE!</a>
                        </li>
                        <li>
                          <figure >
                            <a class="aa-product-img" href="#"><img src="assets/img/surf_excel.jpg" alt=" shirt img" style="width: 100%;"></a>
                            <a class="aa-add-card-btn" href="#">
                              <span class="fa fa-shopping-cart"></span>Add To Cart
                            </a>
                             <figcaption style="padding: 5px;">
                              <h4 class="aa-product-title"><a href="#">Surf Excel</a></h4>
                              <span class="aa-product-price">$45.50</span>
                               <button type="button" class="btn btn-warning btn-sm btn-rounded text-center">Buy Now</button>
                            </figcaption>
                          </figure>                         
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                              <span class="fa fa-heart-o"></span>
                            </a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal">
                              <span class="fa fa-search"></span>
                            </a>
                          </div>
                           <a class="aa-badge aa-sold-out" href="#">Sold Out!</a>
                        </li>
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#">
                              <img src="assets/img/tide.jpg" alt=" shirt img" style="width: 100%;">
                            </a>
                            <a class="aa-add-card-btn" href="#">
                              <span class="fa fa-shopping-cart"></span>Add To Cart
                            </a>
                             <figcaption style="padding: 5px;">
                              <h4 class="aa-product-title">
                                <a href="#">Tide Powder</a>
                              </h4>
                              <span class="aa-product-price">$45.50</span>
                              <span class="aa-product-price"><del>$65.50</del>
                              </span>
                                   <button type="button" class="btn btn-warning btn-sm btn-rounded text-center">Buy Now</button>
                            </figcaption>
                          </figure>                         
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                              <span class="fa fa-heart-o"></span>
                            </a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal">
                              <span class="fa fa-search"></span>
                            </a>
                          </div>
                        </li>
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="assets/img/wheel.jpg" alt=" shirt img" style="width: 100%;"></a>
                            <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption style="padding: 5px;">
                              <h4 class="aa-product-title"><a href="#">Active Wheel Powder</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                                 <button type="button" class="btn btn-warning btn-sm btn-rounded text-center">Buy Now</button>
                            </figcaption>
                          </figure>                          
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                              <span class="fa fa-heart-o"></span>
                            </a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal">
                              <span class="fa fa-search"></span>
                            </a>
                          </div>
                          <a class="aa-badge aa-hot" href="#">HOT!</a>
                        </li>
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#">
                                  <img src="assets/img/sunlight.jpg" alt=" shirt img" style="width: 100%;">
                            </a>
                            <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption style="padding: 5px;">
                              <h4 class="aa-product-title"><a href="#">Sunlight</a></h4>
                              <span class="aa-product-price">$45.50</span>
                                <button type="button" class="btn btn-warning btn-sm btn-rounded text-center">Buy Now</button>
                            </figcaption>
                          </figure>                          
                          <div class="aa-product-hvr-content">
                           <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                        </li>
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#">
                              <img src="assets/img/vanish.jpg" alt=" shirt img" style="width: 100%;">
                            </a>
                            <a class="aa-add-card-btn" href="#">
                              <span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption style="padding: 5px;">
                              <h4 class="aa-product-title">
                                <a href="#">Vanish</a>
                              </h4>
                              <span class="aa-product-price">$45.50</span>
                              <span class="aa-product-price"><del>$65.50</del>
                              </span>
                                <button type="button" class="btn btn-warning btn-sm btn-rounded text-center" >Buy Now</button>
                            </figcaption>
                          </figure>                          
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                              <span class="fa fa-heart-o"></span>
                            </a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal">
                              <span class="fa fa-search"></span>
                            </a>
                          </div>
                        </li>
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#">
                                <img src="assets/img/tide.jpg" alt=" shirt img" style="width: 100%;">
                            </a>
                            <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption style="padding: 5px;">
                              <h4 class="aa-product-title"><a href="#">Tide</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                                <button type="button" class="btn btn-warning btn-sm btn-rounded text-center">Buy Now</button>
                            </figcaption>
                          </figure>                          
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                           <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <a class="aa-badge aa-sale" href="#">SALE!</a>
                        </li>
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="assets/img/ariel.jpg" alt=" shirt img" style="width: 100%;"></a>
                            <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption style="padding: 5px;">
                              <h4 class="aa-product-title"><a href="#">Ariel</a></h4>
                              <span class="aa-product-price">$45.50</span>
                                <button type="button" class="btn btn-warning btn-sm btn-rounded text-center">Buy Now</button>
                            </figcaption>
                          </figure>                         
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                           <a class="aa-badge aa-sold-out" href="#">Sold Out!</a>
                        </li>                        
                      </ul>
                      <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                    </div>
                    <div class="tab-pane fade" id="women">
                      <ul class="aa-product-catg">
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#">
                              <img src="assets/img/garbage-bags.jpg" alt=" shirt img" style="width: 100%;">
                            </a>
                            <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart text-center"></span>Add To Cart</a>
                            <figcaption style="padding: 5px;">
                              <h4 class="aa-product-title"><a href="#">This is Title</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                                <button type="button" class="btn btn-warning btn-sm btn-rounded text-center">Buy Now</button>
                            </figcaption>
                          </figure>                         
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                              <span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                            
                          </div>
                          <a class="aa-badge aa-sale" href="#">SALE!</a>
                        </li>
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#">
                              <img src="assets/img/hair-removal-cream.png" alt=" shirt img" style="width: 100%;">
                            </a>
                            <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart text-center"></span>Add To Cart</a>
                            <figcaption style="padding: 5px;">
                              <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                              <span class="aa-product-price">$45.50</span>
                                <button type="button" class="btn btn-warning btn-sm btn-rounded text-center">Buy Now</button>
                            </figcaption>
                          </figure>                         
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                           <a class="aa-badge aa-hot" href="#">HOT!</a>
                        </li>
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#">
                              <img src="assets/img/whisper.jpg" alt=" shirt img" style="width: 100%;">
                            </a>
                            <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart text-center"></span>Add To Cart</a>
                            <figcaption style="padding: 5px;">
                              <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                                <button type="button" class="btn btn-warning btn-sm btn-rounded text-center">Buy Now</button>
                            </figcaption>
                          </figure>                         
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                        </li>
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#">
                               <img src="assets/img/hair-color.jpeg" alt=" shirt img" style="width: 100%;">
                            </a>
                            <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart text-center"></span>Add To Cart</a>
                            <figcaption style="padding: 5px;">
                              <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                                <button type="button" class="btn btn-warning btn-sm btn-rounded text-center">Buy Now</button>
                            </figcaption>
                          </figure>                          
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <a class="aa-badge aa-sold-out" href="#">Sold Out!</a>
                        </li>
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#">
                                <img src="assets/img/toilet-paper.jpg" alt=" shirt img" style="width: 100%;">
                            </a>
                            <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart text-center"></span>Add To Cart</a>
                            <figcaption style="padding: 5px;">
                              <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                              <span class="aa-product-price">$45.50</span>
                                <button type="button" class="btn btn-warning btn-sm btn-rounded text-center">Buy Now</button>
                            </figcaption>
                          </figure>
                         
                          <div class="aa-product-hvr-content">
                           <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                        </li>
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#">
                              <img src="assets/img/handwash.jpg" alt=" shirt img" style="width: 100%;">
                            </a>
                            <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart text-center"></span>Add To Cart</a>
                            <figcaption style="padding: 5px;">
                              <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                                <button type="button" class="btn btn-warning btn-sm btn-rounded text-center">Buy Now</button>
                            </figcaption>
                          </figure>                          
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                              <span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                        </li>
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#">
                               <img src="assets/img/razor-blades.jpg" alt=" shirt img" style="width: 100%;">
                            </a>
                            <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart text-center"></span>Add To Cart</a>
                            <figcaption style="padding: 5px;">
                              <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                                <button type="button" class="btn btn-warning btn-sm btn-rounded text-center">Buy Now</button>
                            </figcaption>
                          </figure>                          
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                           <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <a class="aa-badge aa-sale" href="#">SALE!</a>
                        </li>
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="assets/img/soap.jpg" alt=" shirt img" style="width: 100%;"></a>
                            <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart text-center"></span>Add To Cart</a>
                            <figcaption style="padding: 5px;">
                              <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                              <span class="aa-product-price">$45.50</span>
                               <button type="button" class="btn btn-warning btn-sm btn-rounded text-center">Buy Now</button>
                            </figcaption>
                          </figure>                         
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
  <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal">
    <span class="fa fa-search"></span>
  </a>
                          </div>
                           <a class="aa-badge aa-sold-out" href="#">Sold Out!</a>
                        </li>                        
                      </ul>
                      <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                    </div>
                    <div class="tab-pane fade" id="sports">
                      <ul class="aa-product-catg">
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#">
                              <img src="assets/img/chilli-powder.jpg" alt=" shirt img" style="width: 100%;">
                            </a>
                            <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption style="padding: 5px;">
                              <h4 class="aa-product-title"><a href="#">This is Title</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                              <button type="button" class="btn btn-warning btn-sm btn-rounded text-center">Buy Now</button>
                            </figcaption>
                          </figure>                         
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                          
                          </div>
                          <a class="aa-badge aa-sale" href="#">SALE!</a>
                        </li>
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#">
                              <img src="assets/img/coffee.jpg" alt=" shirt img" style="width: 100%;">
                            </a>
                            <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption style="padding: 5px;">
                              <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                              <span class="aa-product-price">$45.50</span>
                              <button type="button" class="btn btn-warning btn-sm btn-rounded text-center">Buy Now</button>
                            </figcaption>
                          </figure>                         
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                           <a class="aa-badge aa-sold-out" href="#">Sold Out!</a>
                        </li>
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#">
                               <img src="assets/img/mustard_oil.jpg" alt=" shirt img" style="width: 100%;">
                            </a>
                            <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption style="padding: 5px;">
                              <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                              <button type="button" class="btn btn-warning btn-sm btn-rounded text-center">Buy Now</button>
                            </figcaption>
                          </figure>                          
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                        </li>
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#">
                                <img src="assets/img/olive-oil.jpg" alt=" shirt img" style="width: 100%;">
                            </a>
                            <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption style="padding: 5px;">
                              <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                              <button type="button" class="btn btn-warning btn-sm btn-rounded text-center">Buy Now</button>
                            </figcaption>
                          </figure>                         
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <a class="aa-badge aa-hot" href="#">HOT!</a>
                        </li>
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#">
                              <img src="assets/img/soyabean-oil.jpg" alt=" shirt img" style="width: 100%;">
                            </a>
                            <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption style="padding: 5px;">
                              <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                              <span class="aa-product-price">$45.50</span>
                              <button type="button" class="btn btn-warning btn-sm btn-rounded text-center">Buy Now</button>
                            </figcaption>
                          </figure>                          
                          <div class="aa-product-hvr-content">
                           <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                        </li>
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#">
                              <img src="assets/img/tomato-ketchup.jpg" alt=" shirt img" style="width: 100%;">
                            </a>
                            <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption style="padding: 5px;">
                              <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                              <button type="button" class="btn btn-warning btn-sm btn-rounded text-center">Buy Now</button>
                            </figcaption>
                          </figure>                         
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                        </li>
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#">
                               <img src="assets/img/turmeric-powder.jpg" alt=" shirt img" style="width: 100%;">
                            </a>
                            <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption style="padding: 5px;">
                              <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                              <button type="button" class="btn btn-warning btn-sm btn-rounded text-center">Buy Now</button>
                            </figcaption>
                          </figure>                          
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                              <span class="fa fa-heart-o"></span></a>
                           <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <a class="aa-badge aa-sale" href="#">SALE!</a>
                        </li>
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#">
                              <img src="assets/img/vinegar.jpg" alt=" shirt img" style="width: 100%;">
                            </a>
                            <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption style="padding: 5px;">
                              <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                              <span class="aa-product-price">$45.50</span>
                              <button type="button" class="btn btn-warning btn-sm btn-rounded text-center">Buy Now</button>
                            </figcaption>
                          </figure>                         
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                           <a class="aa-badge aa-sold-out" href="#">Sold Out!</a>
                        </li>                        
                      </ul>
                    </div>
                    <div class="tab-pane fade" id="electronics">
                       <ul class="aa-product-catg">
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#">
                              <img src="assets/img/moong-dal.jpg" alt=" shirt img" style="width: 100%;">
                            </a>
                            <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption style="padding: 5px;">
                              <h4 class="aa-product-title"><a href="#">This is Title</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                              <button type="button" class="btn btn-warning btn-sm btn-rounded text-center">Buy Now</button>
                            </figcaption>
                          </figure>                         
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                            
                          </div>
                          <a class="aa-badge aa-sale" href="#">SALE!</a>
                        </li>
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="assets/img/electronics/electronic-2.png" alt=" shirt img"></a>
                            <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption style="padding: 5px;">
                              <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                              <span class="aa-product-price">$45.50</span>
                              <button type="button" class="btn btn-warning btn-sm btn-rounded text-center">Buy Now</button>
                            </figcaption>
                          </figure>                         
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                           <a class="aa-badge aa-sold-out" href="#">Sold Out!</a>
                        </li>
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="assets/img/electronics/electronic-3.png" alt=" shirt img"></a>
                            <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption style="padding: 5px;">
                              <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                              <button type="button" class="btn btn-warning btn-sm btn-rounded text-center">Buy Now</button>
                            </figcaption>
                          </figure>                          
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                        </li>
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="assets/img/electronics/electronic-4.png" alt=" shirt img"></a>
                            <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                              <button type="button" class="btn btn-warning btn-sm btn-rounded text-center">Buy Now</button>
                            </figcaption>
                          </figure>                          
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <a class="aa-badge aa-hot" href="#">HOT!</a>
                        </li>
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="assets/img/electronics/electronic-5.png" alt=" shirt img"></a>
                            <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                              <span class="aa-product-price">$45.50</span>
                              <button type="button" class="btn btn-warning btn-sm btn-rounded text-center">Buy Now</button>
                            </figcaption>
                          </figure>                         
                          <div class="aa-product-hvr-content">
                           <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                        </li>
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="assets/img/electronics/electronic-6.png" alt=" shirt img"></a>
                            <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                              <button type="button" class="btn btn-warning btn-sm btn-rounded text-center">Buy Now</button>
                            </figcaption>
                          </figure>                         
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                        </li>
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="assets/img/electronics/electronic-7.png" alt=" shirt img"></a>
                            <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                              <button type="button" class="btn btn-warning btn-sm btn-rounded text-center">Buy Now</button>
                            </figcaption>
                          </figure>                          
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                           <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <a class="aa-badge aa-sale" href="#">SALE!</a>
                        </li>
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="assets/img/electronics/electronic-8.png" alt=" shirt img"></a>
                            <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                              <span class="aa-product-price">$45.50</span>
                              <button type="button" class="btn btn-warning btn-sm btn-rounded text-center">Buy Now</button>
                            </figcaption>
                          </figure>                          
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                           <a class="aa-badge aa-sold-out" href="#">Sold Out!</a>
                        </li>                        
                      </ul>
                      <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                    </div>
                  </div>              
                  <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">                      
                        <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">                              
                              <div class="aa-product-view-slider">                                
                                <div class="simpleLens-gallery-container" id="demo-1">
                                  <div class="simpleLens-container">
                                      <div class="simpleLens-big-image-container">
                                          <a class="simpleLens-lens-image" data-lens-image="assets/img/view-slider/large/polo-shirt-1.png">
                                              <img src="assets/img/view-slider/medium/polo-shirt-1.png" class="simpleLens-big-image" alt="img">
                                          </a>
                                      </div>
                                  </div>
                                  <div class="simpleLens-thumbnails-container">
                                      <a href="#" class="simpleLens-thumbnail-wrapper"
                                         data-lens-image="assets/img/view-slider/large/polo-shirt-1.png"
                                         data-big-image="assets/img/view-slider/medium/polo-shirt-1.png">
                                          <img src="assets/img/organics-sm3.png" alt="img">
                                      </a>                                    
                                      <a href="#" class="simpleLens-thumbnail-wrapper"
                                         data-lens-image="assets/img/view-slider/large/polo-shirt-3.png"
                                         data-big-image="assets/img/view-slider/medium/polo-shirt-3.png">
                                          <img src="assets/img/view-slider/thumbnail/polo-shirt-3.png" alt="img">
                                      </a>

                                      <a href="#" class="simpleLens-thumbnail-wrapper"
                                         data-lens-image="assets/img/view-slider/large/polo-shirt-4.png"
                                         data-big-image="assets/img/view-slider/medium/polo-shirt-4.png">
                                          <img src="assets/img/view-slider/thumbnail/polo-shirt-4.png" alt="img">
                                      </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="aa-product-view-content">
                                <h3>Lorem ipsum doller</h3>
                                <div class="aa-price-block">
                                  <span class="aa-product-view-price">$34.99</span>
                                  <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!</p>
                                <h4>Size</h4>
                                <div class="aa-prod-view-size">
                                  <a href="#">S</a>
                                  <a href="#">M</a>
                                  <a href="#">L</a>
                                  <a href="#">XL</a>
                                </div>
                                <div class="aa-prod-quantity">
                                  <form action="/action-page.php">
                                    <select name="options">
                                      <option value="0" selected="1">1</option>
                                      <option value="1">2</option>
                                      <option value="2">3</option>
                                      <option value="3">4</option>
                                      <option value="4">5</option>
                                      <option value="5">6</option>
                                    </select>
                                  </form>
                                  <p class="aa-prod-category">
                                    Category: <a href="#">Polo Lorem ipsum doller</a>
                                  </p>
                                </div>
                                <div class="aa-prod-view-bottom">
                                  <a href="#" class="aa-add-to-cart-btn"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                  <a href="#" class="aa-add-to-cart-btn">View Details</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>                        
                      </div>
                    </div>
                  </div>     
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="aa-banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">        
          <div class="row">
            <div class="aa-banner-area">
            <?php  
             foreach($run2 as $c): ?>
            <a href="#"><img src="http://localhost/metalic/admin/banner_images/<?php echo $c['b_image']; ?>" alt="fashion banner img" style="width: 100%;"></a>
         <?php endforeach; ?> </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="aa-popular-category" class="product-featured-slider">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-popular-category-area">
             <ul class="nav nav-tabs aa-products-tab">
                <li class="active"><a href="#popular" data-toggle="tab">Popular</a></li>
                <li><a href="#featured" data-toggle="tab">Featured</a></li>
                <li><a href="#latest" data-toggle="tab">Latest</a></li>                    
              </ul>
              <div class="tab-content">
                <div class="tab-pane fade in active" id="popular">
                  <ul class="aa-product-catg aa-popular-slider">
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="assets/img/organics1.png" alt="img"></a>
                        <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">Polo Lorem ipsum doller</a></h4>
                          <span class="aa-product-price">$45.50</span>
                          <span class="aa-product-price"><del>$65.50</del>
                          </span>
                           <button type="button" class="btn btn-warning btn-sm btn-rounded text-center">Buy Now</button>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                          <span class="fa fa-heart-o"></span>
                        </a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal">
                          <span class="fa fa-search"></span>
                        </a>                            
                      </div>
                      <a class="aa-badge aa-sale" href="#">SALE!</a>
                    </li>
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="assets/img/organics2.png" alt="img"></a>
                        <a class="aa-add-card-btn" href="#">
                          <span class="fa fa-shopping-cart"></span>Add To Cart</a>
                        <figcaption>
                          <h4 class="aa-product-title">
                            <a href="#">Lorem ipsum doller</a>
                          </h4>
                          <span class="aa-product-price">$45.50</span>
                           <button type="button" class="btn btn-warning btn-sm btn-rounded text-center">Buy Now</button>
                        </figcaption>
                      </figure>                      
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                          <span class="fa fa-heart-o"></span>
                        </a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal">
                          <span class="fa fa-search"></span>
                        </a>
                      </div>
                       <a class="aa-badge aa-sold-out" href="#">Sold Out!</a>
                    </li>
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="assets/img/organics3.png" alt="img"></a>
                        <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                      </figure>
                      <figcaption>
                        <h4 class="aa-product-title">
                          <a href="#">Lorem ipsum doller</a>
                        </h4>
                        <span class="aa-product-price">$45.50</span>
                         <button type="button" class="btn btn-warning btn-sm btn-rounded text-center">Buy Now</button>
                      </figcaption>
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                          <span class="fa fa-heart-o"></span>
                        </a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal">
                          <span class="fa fa-search"></span>
                        </a>
                      </div>
                       <a class="aa-badge aa-sold-out" href="#">Sold Out!</a>
                    </li>
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="assets/img/organics4.png" alt="img"></a>
                        <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                         <figcaption>
                          <h4 class="aa-product-title">
                            <a href="#">Lorem ipsum doller</a>
                          </h4>
                          <span class="aa-product-price">$45.50</span>
                          <span class="aa-product-price"><del>$65.50</del>
                          </span>
                           <button type="button" class="btn btn-warning btn-sm btn-rounded text-center">Buy Now</button>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                          <span class="fa fa-heart-o"></span>
                        </a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal">
                          <span class="fa fa-search"></span>
                        </a>
                      </div>
                    </li>
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="assets/img/organics1.png" alt="img"></a>
                        <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                        <figcaption>
                          <h4 class="aa-product-title">
                            <a href="#">Polo Lorem ipsum doller</a>
                          </h4>
                          <span class="aa-product-price">$45.50</span>
                          <span class="aa-product-price"><del>$65.50</del>
                          </span>
                           <button type="button" class="btn btn-warning btn-sm btn-rounded text-center">Buy Now</button>
                        </figcaption>
                      </figure>                      
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                          <span class="fa fa-heart-o"></span>
                        </a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal">
                          <span class="fa fa-search"></span>
                        </a>
                      </div>
                    </li>
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="assets/img/organics2.png" alt="img"></a>
                        <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                        <figcaption>
                          <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                          <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                           <button type="button" class="btn btn-warning btn-sm btn-rounded text-center">Buy Now</button>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                          <span class="fa fa-heart-o"></span>
                        </a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal">
                          <span class="fa fa-search"></span>
                        </a>
                      </div>
                      <a class="aa-badge aa-hot" href="#">HOT!</a>
                    </li>    
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="assets/img/organics3.png" alt="img"></a>
                        <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                         <figcaption>
                          <h4 class="aa-product-title">
                            <a href="#">Polo Lorem ipsum doller</a>
                          </h4>
                          <span class="aa-product-price">$45.50</span>
                          <span class="aa-product-price"><del>$65.50</del>
                          </span>
                           <button type="button" class="btn btn-warning btn-sm btn-rounded text-center">Buy Now</button>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                          <span class="fa fa-heart-o"></span>
                        </a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal">
                          <span class="fa fa-search"></span>
                        </a>
                      </div>
                      <a class="aa-badge aa-hot" href="#">HOT!</a>
                    </li> 
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="assets/img/organics4.png" alt="img"></a>
                        <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                         <figcaption>
                          <h4 class="aa-product-title">
                            <a href="#">This is Title</a>
                          </h4>
                          <span class="aa-product-price">$45.50</span>
                          <span class="aa-product-price"><del>$65.50</del>
                          </span>
                           <button type="button" class="btn btn-warning btn-sm btn-rounded text-center">Buy Now</button>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                          <span class="fa fa-heart-o"></span>
                        </a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal">
                          <span class="fa fa-search"></span>
                        </a>                            
                      </div>
                      <a class="aa-badge aa-sale" href="#">SALE!</a>
                    </li>                                                                                   
                  </ul>
                  <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                </div>
                <div class="tab-pane fade" id="featured">
                   <ul class="aa-product-catg aa-popular-slider">
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="assets/img/organics1.png" alt="img"></a>
                        <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">Polo Lorem ipsum doller</a></h4>
                          <span class="aa-product-price">$45.50</span>
                          <span class="aa-product-price"><del>$65.50</del>
                          </span>
                           <button type="button" class="btn btn-warning btn-sm btn-rounded text-center">Buy Now</button>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                          <span class="fa fa-heart-o"></span>
                        </a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal">
                          <span class="fa fa-search"></span>
                        </a>                            
                      </div>
                      <a class="aa-badge aa-sale" href="#">SALE!</a>
                    </li>

                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="assets/img/organics2.png" alt="img"></a>
                        <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                        <figcaption>
                          <h4 class="aa-product-title">
                            <a href="#">Lorem ipsum doller</a>
                          </h4>
                          <span class="aa-product-price">$45.50</span>
                           <button type="button" class="btn btn-warning btn-sm btn-rounded text-center">Buy Now</button>
                        </figcaption>
                      </figure>                      
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                          <span class="fa fa-heart-o"></span>
                        </a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal">
                          <span class="fa fa-search"></span>
                        </a>
                      </div>
                       <a class="aa-badge aa-sold-out" href="#">Sold Out!</a>
                    </li>
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="assets/img/organics3.png" alt="img"></a>
                        <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                      </figure>
                      <figcaption>
                        <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                        <span class="aa-product-price">$45.50</span>
                         <button type="button" class="btn btn-warning btn-sm btn-rounded text-center">Buy Now</button>
                      </figcaption>
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                          <span class="fa fa-heart-o"></span>
                        </a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal">
                          <span class="fa fa-search"></span>
                        </a>
                      </div>
                       <a class="aa-badge aa-sold-out" href="#">Sold Out!</a>
                    </li>
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="assets/img/organics4.png" alt="img"></a>
                        <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                          <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                           <button type="button" class="btn btn-warning btn-sm btn-rounded text-center">Buy Now</button>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                    </li>
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="assets/img/organics1.png" alt="img"></a>
                        <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                        <figcaption>
                          <h4 class="aa-product-title"><a href="#">Polo Lorem ipsum doller</a></h4>
                          <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                           <button type="button" class="btn btn-warning btn-sm btn-rounded text-center">Buy Now</button>
                        </figcaption>
                      </figure>                      
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                    </li>
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="assets/img/organics2.png" alt="img"></a>
                        <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                        <figcaption>
                          <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                          <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                           <button type="button" class="btn btn-warning btn-sm btn-rounded text-center">Buy Now</button>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                      <!-- product badge -->
                      <a class="aa-badge aa-hot" href="#">HOT!</a>
                    </li>    
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="assets/img/organics3.png" alt="img"></a>
                        <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">Polo Lorem ipsum doller</a></h4>
                          <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                           <button type="button" class="btn btn-warning btn-sm btn-rounded text-center">Buy Now</button>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                      <!-- product badge -->
                      <a class="aa-badge aa-hot" href="#">HOT!</a>
                    </li> 
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="assets/img/organics4.png" alt="img"></a>
                        <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">This is Title</a></h4>
                          <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                           <button type="button" class="btn btn-warning btn-sm btn-rounded text-center">Buy Now</button>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                            
                      </div>
                      <!-- product badge -->
                      <a class="aa-badge aa-sale" href="#">SALE!</a>
                    </li>                                                                                   
                  </ul>
                  <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                </div>
                <!-- / featured product category -->

                <!-- start latest product category -->
                <div class="tab-pane fade" id="latest">
                    <ul class="aa-product-catg aa-popular-slider">
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="assets/img/organics1.png" alt="img"></a>
                        <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">Polo Lorem ipsum doller</a></h4>
                          <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                           <button type="button" class="btn btn-warning btn-sm btn-rounded text-center">Buy Now</button>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                            
                      </div>
                      <!-- product badge -->
                      <a class="aa-badge aa-sale" href="#">SALE!</a>
                    </li>
                     <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="assets/img/organics2.png" alt="img"></a>
                        <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                        <figcaption>
                          <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                          <span class="aa-product-price">$45.50</span>
                           <button type="button" class="btn btn-warning btn-sm btn-rounded text-center">Buy Now</button>
                        </figcaption>
                      </figure>                      
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                      <!-- product badge -->
                       <a class="aa-badge aa-sold-out" href="#">Sold Out!</a>
                    </li>
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="assets/img/organics3.png" alt="img"></a>
                        <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                      </figure>
                      <figcaption>
                        <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                        <span class="aa-product-price">$45.50</span>
                         <button type="button" class="btn btn-warning btn-sm btn-rounded text-center">Buy Now</button>
                      </figcaption>
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                      <!-- product badge -->
                       <a class="aa-badge aa-sold-out" href="#">Sold Out!</a>
                    </li>
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="assets/img/organics4.png" alt="img"></a>
                        <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                          <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                           <button type="button" class="btn btn-warning btn-sm btn-rounded text-center">Buy Now</button>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                    </li>
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="assets/img/organics1.png" alt="img"></a>
                        <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                        <figcaption>
                          <h4 class="aa-product-title"><a href="#">Polo Lorem ipsum doller</a></h4>
                          <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                           <button type="button" class="btn btn-warning btn-sm btn-rounded text-center">Buy Now</button>
                        </figcaption>
                      </figure>                      
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                    </li>
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="assets/img/organics2.png" alt="img"></a>
                        <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                        <figcaption>
                          <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                          <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                           <button type="button" class="btn btn-warning btn-sm btn-rounded text-center">Buy Now</button>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                      <!-- product badge -->
                      <a class="aa-badge aa-hot" href="#">HOT!</a>
                    </li>    
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="assets/img/organics3.png" alt="img"></a>
                        <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">Polo Lorem ipsum doller</a></h4>
                          <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                           <button type="button" class="btn btn-warning btn-sm btn-rounded text-center">Buy Now</button>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                      <!-- product badge -->
                      <a class="aa-badge aa-hot" href="#">HOT!</a>
                    </li> 
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="assets/img/organics4.png" alt="img"></a>
                        <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">This is Title</a></h4>
                          <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                           <button type="button" class="btn btn-warning btn-sm btn-rounded text-center">Buy Now</button>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                            
                      </div>
                      <!-- product badge -->
                      <a class="aa-badge aa-sale" href="#">SALE!</a>
                    </li>                                                                                   
                  </ul>
                   <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                </div>
                <!-- / latest product category -->              
              </div>
            </div>
          </div> 
        </div>
      </div>
    </div>
  </section>
  <section id="aa-support">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-support-area">
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-truck"></span>
                <h4>FREE SHIPPING</h4>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-clock-o"></span>
                <h4>30 DAYS MONEY BACK</h4>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-phone"></span>
                <h4>SUPPORT 24/7</h4>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="aa-testimonial">  
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-testimonial-area">
            <ul class="aa-testimonial-slider">
              <li>
                <div class="aa-testimonial-single">
                <img class="aa-testimonial-img" src="assets/img/profile.jpg" alt="testimonial img">
                  <span class="fa fa-quote-left aa-testimonial-quote"></span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui!consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui.</p>
                  <div class="aa-testimonial-info">
                    <p>Allison</p>
                    <span>Designer</span>
                    <a href="#">Dribble.com</a>
                  </div>
                </div>
              </li>
              <li>
                <div class="aa-testimonial-single">
                <img class="aa-testimonial-img" src="assets/img/profile.jpg" alt="testimonial img">
                  <span class="fa fa-quote-left aa-testimonial-quote"></span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui!consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui.</p>
                  <div class="aa-testimonial-info">
                    <p>KEVIN MEYER</p>
                    <span>CEO</span>
                    <a href="#">Alphabet</a>
                  </div>
                </div>
              </li>
              <li>
                <div class="aa-testimonial-single">
                <img class="aa-testimonial-img" src="assets/img/profile.jpg" alt="testimonial img">
                  <span class="fa fa-quote-left aa-testimonial-quote"></span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui!consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui.</p>
                  <div class="aa-testimonial-info">
                    <p>Luner</p>
                    <span>COO</span>
                    <a href="#">Kinatic Solution</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="aa-latest-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-latest-blog-area">
            <h2>LATEST BLOG</h2>
            <div class="row">
              <div class="col-md-4 col-sm-4">
                <div class="aa-latest-blog-single">
                  <figure class="aa-blog-img">                    
                    <a href="#"><img src="assets/img/img1.jpg" alt="img"></a>  
                      <figcaption class="aa-blog-img-caption">
                      <a href="#"><i class="fa fa-eye"></i>5K</a>
                      <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                      <a href="#"><i class="fa fa-comment-o"></i>20</a>
                      <a href="#"><i class="fa fa-clock-o"></i>June 26, 2016</a>
                    </figcaption>                          
                  </figure>
                  <div class="aa-blog-info">
                    <h3 class="aa-blog-title"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, ad? Autem quos natus nisi aperiam, beatae, fugiat odit vel impedit dicta enim repellendus animi. Expedita quas reprehenderit incidunt, voluptates corporis.</p> 
                    <a href="#" class="aa-read-mor-btn">Read more <span class="fa fa-long-arrow-right"></span></a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="aa-latest-blog-single">
                  <figure class="aa-blog-img">                    
                    <a href="#"><img src="assets/img/img2.png" alt="img"></a>  
                      <figcaption class="aa-blog-img-caption">
                      <a href="#"><i class="fa fa-eye"></i>5K</a>
                      <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                      <a href="#"><i class="fa fa-comment-o"></i>20</a>
                      <a href="#"><i class="fa fa-clock-o"></i>June 26, 2016</a>
                    </figcaption>                          
                  </figure>
                  <div class="aa-blog-info">
                    <h3 class="aa-blog-title"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, ad? Autem quos natus nisi aperiam, beatae, fugiat odit vel impedit dicta enim repellendus animi. Expedita quas reprehenderit incidunt, voluptates corporis.</p> 
                     <a href="#" class="aa-read-mor-btn">Read more <span class="fa fa-long-arrow-right"></span></a>         
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="aa-latest-blog-single">
                  <figure class="aa-blog-img">                    
                    <a href="#"><img src="assets/img/img3.jpg" alt="img"></a>  
                      <figcaption class="aa-blog-img-caption">
                      <a href="#"><i class="fa fa-eye"></i>5K</a>
                      <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                      <a href="#"><i class="fa fa-comment-o"></i>20</a>
                      <a href="#"><i class="fa fa-clock-o"></i>June 26, 2016</a>
                    </figcaption>                          
                  </figure>
                  <div class="aa-blog-info">
                    <h3 class="aa-blog-title"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, ad? Autem quos natus nisi aperiam, beatae, fugiat odit vel impedit dicta enim repellendus animi. Expedita quas reprehenderit incidunt, voluptates corporis.</p> 
                    <a href="#" class="aa-read-mor-btn">Read more <span class="fa fa-long-arrow-right"></span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>    
      </div>
    </div>
  </section>
  <section id="aa-client-brand">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-client-brand-area">
            <ul class="aa-client-brand-slider">
              <li><a href="#"><img src="assets/img/FSSAI_logo.png" alt="java img"></a></li>
              <li><a href="#"><img src="assets/img/FSSAI_logo.png" alt="jquery img"></a></li>
              <li><a href="#"><img src="assets/img/FSSAI_logo.png" alt="html5 img"></a></li>
              <li><a href="#"><img src="assets/img/FSSAI_logo.png" alt="css3 img"></a></li>
              <li><a href="#"><img src="assets/img/FSSAI_logo.png" alt="wordPress img"></a></li>
              <li><a href="#"><img src="assets/img/FSSAI_logo.png" alt="joomla img"></a></li>
              <li><a href="#"><img src="assets/img/FSSAI_logo.png" alt="java img"></a></li>
              <li><a href="#"><img src="assets/img/FSSAI_logo.png" alt="jquery img"></a></li>
              <li><a href="#"><img src="assets/img/FSSAI_logo.png" alt="html5 img"></a></li>
              <li><a href="#"><img src="assets/img/FSSAI_logo.png" alt="css3 img"></a></li>
              <li><a href="#"><img src="assets/img/FSSAI_logo.png" alt="wordPress img"></a></li>
            </ul>
          </div>
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
<!-- ==========================================================
     ========================================================== -->
         <?php include('footer.php') ?>
<!-- ==========================================================
     ==========================================================-->