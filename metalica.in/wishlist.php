
<!-- ==========================================================
     ========================================================== -->
         <?php
          include('header.php');
            include('../connection/dbcon.php');
         $cust_id = $_SESSION['cust_id'];
         $sql = "select * from m_wishlist left join m_product on m_product.prod_id=m_wishlist.product_id where cust_id=$cust_id order by wish_id desc";

         $run=mysqli_query($con,$sql);

         ?>
<!-- ==========================================================
     ========================================================== -->
  <section id="aa-catg-head-banner" style="padding-top: 0px;">
   <img src="assets/img/slider/banner.png" alt="fashion img" style="width: 100%;">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Wishlist Page</h2>
        <ol class="breadcrumb">
          <li><a href="index.php">Home</a></li>                   
          <li class="active">Wishlist</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <section id="cart-view">
    <div class="container">
      <div class="col-md-12 whishlist-top-box1">
        <div class="checkout-left">
          <div class="row">
            <div class="col-md-12">
              <p class="" style="float: left;">My Whishlist (<span id="allwishlists"></span>)</p>
            </div>
          </div>
          <hr class="hr-line-mr">
          <?php
          // print_r($run);die;
          $cnt = 0;
            foreach($run as $r):
              $cnt++
          ?>
          <div class="row">
            <div class="col-md-3 text-center">
              <img src="http://localhost/metalic/admin/product_images/<?php echo $r['prod_imageone']?>" style="width: 50%;">
            </div>
            <div class="col-md-6 text-left">
              <p class="text-left"><?php echo $r['prod_name']  ?></p>
              <span class="text-left"></span>
              <h3 class="" >
                <i class="fa fa-inr" aria-hidden="true"></i> 
                <?php echo $r['prod_price'] ?><sub><strike><small><?php echo $r['prod_aprice'] ?></small></strike> /-</sub><sub></sub>
              </h3>
            
            </div>
            <div class="col-md-3 text-right">
             <i class="fa fa-trash" aria-hidden="true" onclick="delete_wishlist('<?php echo $r['prod_id'] ?>');"></i>
            </div>
          </div>
          <?php 
        
        endforeach; ?>
          <hr>
          
        </div>
      </div>
    </div>
  </section>
  <!-- <section id="aa-subscribe">
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
  </section> -->
  <!-- / Subscribe section -->
<!-- ==========================================================
     ========================================================== -->
         <?php include('footer.php') ?>
         <script>
         function delete_wishlist(prod_id){
          $.ajax({
                type: "POST",
                url: "deletewishlist.php",
                data: {
                  prod_id: prod_id,
                    custid: <?php  echo $_SESSION['cust_id']; ?>
                },
                success: function(data) {
                    if (data) {
                        if (data == 1) {
                          window.location.href='wishlist.php'
                        }
                    }
                }
            });
         }

        
         document.getElementById('allwishlists').innerHTML = <?php echo $cnt ?>;
         </script>
<!-- ==========================================================
     ========================================================== -->