
<!doctype html>
<html class="no-js" lang="en">
<?php
include("config.php");
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Potauto - product details</title>
    <?php include("header-links.php");?>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->
  <!-- <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>  -->

  <link rel="stylesheet" href="assets\css\AutoScroll.css">

</head>

<body>

   <!--header area start-->
    
    <!--offcanvas menu area start-->
    <div class="off_canvars_overlay">
                
    </div>
    
    <!--offcanvas menu area end-->
    
   <?php include("header.php");?>
    <!--header area end-->

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li>Products</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    
    <div class="product_page_bg">
        <div class="container">
            <!--product details start-->
                         

            <!--Products list-->
        <section class="product_area related_products">
            <!-- <div class="row"> -->
                <div class="row col-md-12">
                   <?php
                   
                   if(isset($_GET["category"]))
                   {

                    $cat_name = $_GET["category"];
                    $sql="select * from products where Product_category = '$cat_name' ";

                    echo '<h3>'.$cat_name.'</h3>';
                   }
                  else if(isset($_GET["subcategory"]))
                   {

                    $subcat_name = $_GET["subcategory"];
                    $sql="select * from products where Product_sub_category = '$subcat_name' ";

                    echo '<h3>'.$subcat_name.'</h3>';
                   }
                   else
                   {
                    $sql="select * from products";
                   }
                   
        $result=$conn->query($sql);
        if($result->num_rows>0)
        {
             while($row = mysqli_fetch_assoc($result)) 
             {

                   ?>
                    <div class="col-sm-3 pro_card" >
                       <article class="single_product"  style=" border-top-right-radius: 4px; border-top-left-radius: 4px;border-style: solid;  border-color: coral;">
                                    <figure>
                                        <div class="product_thumb">
                                           <!--  <a class="primary_img" href="#"><img src="admin/<?php echo $row["image"];?>"   alt=""></a> -->
                                            <img src="admin/<?php echo $row["Product_image"];?>"   alt="" style="height:150px;">
                                            <div class="label_product">
                                                <!-- <span class="label_sale">-56%</span> -->
                                            </div>
                                            
                                        </div>
                                        <hr/>
                                        <div class="product_content">
                                            <div class="product_content_inner" style="text-align: center;">
                                                 <!-- <p class="manufacture_product"><a href="#">Parts</a></p> -->
                                                <div>
                                                   <h4 class="product_name" style="text-transform: uppercase;"><a href="#"><?php echo $row["Product_name"];?></a></h4>
                                                
                                                </div>
                                                
                                                <div class="price_box"> 
                                                      
                                                   <span class="current_price"><?php echo $row["Product_price"];?></span>
                                                </div>
                                                <div>  
                                                    <!--<button data-target="#myModal" role="button" class="btn btn-primary" data-toggle="modal"  style="box-shadow: 4px 4px 1px 1px #0e4677;">-->
                                                    <!--    Enquire Now-->
                                                    <!--</button>-->
                                                    <a href="#flagshipmodal" data-book-id="<?php echo $row["Product_category"];?>"  role="button" class="btn btn-primary" data-toggle="modal" style="box-shadow: 4px 4px 1px 1px #0e4677;">Enquire Now</a>
                                                    <!--<button data-bs-toggle="modal" data-book-id="<?php echo $row["Product_category"];?>" data-bs-target="#flagshipmodal" class="btn btn-primary" data-toggle="modal"  style="box-shadow: 4px 4px 1px 1px ##f9cf1f;">Enquire Now </button>-->
                                                </div>
                                            </div> 
                                               
                                        </div>
                                    </figure>
                                </article>
                    </div>  
                <?php
            }
        }
                ?>              
                  </div> 
            <!-- </div>  -->
        </section>
            <!--End Products List-->

            <!--product area start-->

           
            <!--product area end-->

            <!--product area start-->
           
            <!--product area end-->
        </div>
    </div>
    
     <!--brand area start-->
    <!--
     <div class="brand_area brand_padding">
        <div class="container">
            <div class="col-12">
                <div class="brand_container owl-carousel ">
                    <div class="brand_list">
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand1.jpg" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand2.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="brand_list">
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand3.jpg" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand4.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="brand_list">
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand5.jpg" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand6.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="brand_list">
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand7.jpg" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand8.jpg" alt=""></a>
                        </div>
                    </div>
                     <div class="brand_list">
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand1.jpg" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand2.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="brand_list">
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand3.jpg" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand4.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="brand_list">
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand5.jpg" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand6.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!--brand area end-->
    
    <!--newsletter area start-->
    
    <!--newsletter area end-->
    
    <!--footer area start-->
   <?php include("footer_older.php");?>
    <!--footer area end-->
   
    <!-- modal area start-->
   <!--  <div class="modal fade" id="modal_box" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal_body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="modal_tab">  
                                    <div class="tab-content product-details-large">
                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel" >
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/productbig1.jpg" alt=""></a>    
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/productbig2.jpg" alt=""></a>    
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/productbig3.jpg" alt=""></a>    
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab4" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/productbig4.jpg" alt=""></a>    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal_tab_button">    
                                        <ul class="nav product_navactive owl-carousel" role="tablist">
                                            <li >
                                                <a class="nav-link active" data-bs-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="assets/img/product/product2.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                 <a class="nav-link" data-bs-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><img src="assets/img/product/product6.jpg" alt=""></a>
                                            </li>
                                            <li>
                                               <a class="nav-link button_three" data-bs-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"><img src="assets/img/product/product9.jpg" alt=""></a>
                                            </li>
                                            <li>
                                               <a class="nav-link" data-bs-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false"><img src="assets/img/product/product3.jpg" alt=""></a>
                                            </li>

                                        </ul>
                                    </div>    
                                </div>  
                            </div> 
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2>Sit voluptatem rhoncus sem lectus</h2> 
                                    </div>
                                    <div class="modal_price mb-10">
                                        <span class="new_price">$64.99</span>    
                                        <span class="old_price" >$78.99</span>    
                                    </div>
                                    <div class="modal_description mb-15">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum vel recusandae </p>    
                                    </div> 
                                    <div class="variants_selects">
                                        <div class="variants_size">
                                           <h2>size</h2>
                                           <select class="select_option">
                                               <option selected value="1">s</option>
                                               <option value="1">m</option>
                                               <option value="1">l</option>
                                               <option value="1">xl</option>
                                               <option value="1">xxl</option>
                                           </select>
                                        </div>
                                        <div class="variants_color">
                                           <h2>color</h2>
                                           <select class="select_option">
                                               <option selected value="1">purple</option>
                                               <option value="1">violet</option>
                                               <option value="1">black</option>
                                               <option value="1">pink</option>
                                               <option value="1">orange</option>
                                           </select>
                                        </div>
                                        <div class="modal_add_to_cart">
                                            <form action="#">
                                                <input min="1" max="100" step="2" value="1" type="number">
                                                <button type="submit">add to cart</button>
                                            </form>
                                        </div>   
                                    </div>
                                    <div class="modal_social">
                                        <h2>Share this product</h2>
                                        <ul>
                                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>    
                                    </div>      
                                </div>    
                            </div>    
                        </div>     
                    </div>
                </div>    
            </div>
        </div>
    </div> -->
    <!-- modal area end-->




<!-- Whatsapp Widget Start  --> 

<script>
    var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?10006';
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url;
    var options = {
  "enabled":true,
  "chatButtonSetting":{
      "backgroundColor":"#4dc247",
      "ctaText":"Message us",
      "borderRadius":"25",
      "marginLeft":"0",
      "marginBottom":"50",
      "marginRight":"50",
      "position":"right"
  },
  "brandSetting":{
      "brandName":"Jiomex Auto India Pvt Ltd",
      "brandSubTitle":"Typically replies within a day",
      "brandImg":"https://cdn.clare.ai/wati/images/WATI_logo_square_2.png",
      "welcomeText":"Hi there!\nHow can I help you?",
      "messageText":"Hello, I have a question about {{page_link}}",
      "backgroundColor":"#0a5f54",
      "ctaText":"Start Chat",
      "borderRadius":"25",
      "autoShow":false,
      "phoneNumber":"918884463025"
  }
  };
    s.onload = function() {
        CreateWhatsappChatWidget(options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
  </script>


<!-- Whatsapp Widget End  --> 

<!-- JS
============================================ -->


<!-- Plugins JS -->
<script src="assets/js/plugins.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>

<!-- auto Scrool JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>




</body>

</html>