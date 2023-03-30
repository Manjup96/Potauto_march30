<!doctype html>
<html class="no-js" lang="en">
<?php
include("../config.php");
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

  <link rel="stylesheet" href="../assets\css\AutoScroll.css">

</head>

<body>

   <!--header area start-->
    
    <!--offcanvas menu area start-->
    <div class="off_canvars_overlay">
                
    </div>
    
    <!--offcanvas menu area end-->
    
 

   <style type="text/css">
    
    .dropdown-content {

  display:none;position:absolute;background-color:#f6f6f6;width:-webkit-fill-available;overflow:auto;z-index:1000;height:220px;border:1px solid #ddd
}
html,body{
	overflow-x:hidden;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}


.dropdown a:hover {background-color: #ddd;}


.show {display: block;}
</style>
  <div class="offcanvas_menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="canvas_open">
                        <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                    </div>
                    <div class="offcanvas_menu_wrapper">
                        <div class="canvas_close">
                              <a href="javascript:void(0)"><i class="ion-android-close"></i></a>  
                        </div>
                       
                        <div class="search_container">
                            <form action="#">
                               <div class="hover_category">
                                                      
                               </div>
                                <div class="search_box">
                                    <input placeholder="Search product..." type="text" name="search_bar1" id="search_bar1" onkeyup="filterFunctionmobile()"onclick="myFunctionmobile()"autocomplete="off">
                                      <div class="dropdown-content" id="myDropdown1">
                                    <?php include("../config.php");
                                    $sql="select * from products";
                                    $result=$conn->query($sql);if($result->num_rows>0){while($row=mysqli_fetch_assoc($result)){ ?><a href="../product/<?php echo $row["Product_name"]; ?>"><?php echo $row["Product_name"]; ?></a><?php }} ?></div>
                                    <!-- <button type="submit">Search</button>  -->
                                </div>
                            </form>
                        </div> 
                        <div id="menu" class="text-left ">
                            <ul class="offcanvas_main_menu">
                                <li class="menu-item-has-children active">
                                    <a href="../index.php">Home</a>
                                   
                                </li>
                                

                                
                                <li class="menu-item-has-children">
                                    <a href="../about.php">About Us</a>
                                </li>
                                <li class="menu-item-has-children"><a href="../ourbrands.php">Our Brands</a>
                                       <i class="fa fa-angle-down" style="float:right;cursor:pointer;" onclick="dis_submenu()"></i>
                                        <ul class="sub_menu" id="mobile_sub_menu" style="display: none;" >
                                                <li><a href="../brands/Geomex">Geomex</a></li>
                                                <li><a href="../brands/Potauto">Potauto</a></li>
                                                 <li><a href="../brands/Oxilite">Oxilite</a></li>
                                                <li><a href="../brands/Biolite">Biolite</a></li>
                                                
                                            </ul>
                                        </li>

                                <li class="menu-item-has-children">
                                    <a href="#">Products</a>
                                     <i class="fa fa-angle-down" style="float:right;cursor:pointer;" onclick="dis_submenu()"></i>
                                        <ul class="sub_menu" id="mobile_sub_menu" style="display: none;" >
                                         <?php
            $sql="SELECT DISTINCT product_category FROM product_cat_subcat_details";
        $result=$conn->query($sql);
        
        if($result->num_rows>0)
        {
             while($row = mysqli_fetch_assoc($result)) 
             {
                
        ?>
       <li><a href="../product.php?category=<?php echo $row["product_category"]; ?>">
           <?php echo $row["product_category"]; ?></a></li>
        <?php
    }
            
        }
    ?>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="../contact-us.php"> Contact Us</a> 
                                </li>
                               <li class="menu-item-has-children">
                                    <a href="#">Download brochure </a><i class="fa fa-angle-down" style="float:right;cursor:pointer;" onclick="dis_submenu2()"></i>
                                        <ul class="sub_menu" id="mobile_sub_menu2">
                                        
                                        <li><a href="#" data-toggle="modal" data-target="#modal_box_potauto">Potauto</a></li>
                                            <li><a href="#" data-toggle="modal" data-target="#modal_box_biolite">Biolite</a></li>
                                        </ul>
                                    </li>
                                            <div class="call_support">
                            <p><i class="icon-phone-call" aria-hidden="true"></i> <span>Call us: <a href="tel:08884463025">08884463025</a></span></p>

                        </div>
                        <div class="call_support" style="color:#f9cf1f; font-weight: bold;font-size:15px">
                        <span><i class="fa fa-envelope-o" aria-hidden="true"></i>   <a href="mailto:info@potauto.in">info@potauto.in</a></span>
</div>
                            </ul>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--offcanvas menu area end-->
    
    <header>
        <div class="main_header" >

            <!--header middel start-->
            <div class=".d-sm-none .d-md-block">
            <div class="header_middle">
                <div class="container">
                    <div class="row align-items-center" style="justify-content:end;">
                       <!--  <div class="col-lg-2 col-md-4 col-sm-4 col-4">
                            <div class="logo">
                                <a href="index.php"><img src="images/output-onlinepngtools.png" alt=""></a>
                            </div>
                        </div> -->
                        <div class="col-md-3">
                        <div class="call_support text-right">
                                <p><i class="icon-phone-call" aria-hidden="true"></i> <span>Call us:  <a href="tel:08884463013">08884463013</a></span></p>
                            </div>
                        </div>
                         <div class="col-md-2">
                        <div class="call_support text-right">
                            <p><i class="fa fa-envelope-o" aria-hidden="true"></i>   <a href="mailto:info@potauto.in">info@potauto.in</a></p>
                            </div>
                        </div>
                        <div class="col-md-2">
                             <div class="call_support text-right offcanvas_footer" style="margin-top: 0px !important;padding-bottom:3px !important;">
                            <!-- <span><a href="#"><i class="fa fa-envelope-o"></i> info@potauto.in </a></span> -->
                            <ul style="margin-top:3px !important;">
                            <li><a class="facebook" href="https://www.facebook.com/JiomexAuto"><i class="icon-facebook"></i></a></li>
                                  <li><a class="" href="https://wa.me/918884463013?text=Hello"><i class="fa fa-whatsapp"></i></a></li>
                                   <!--<li><a class="youtube" href="#"><i class="icon-youtube"></i></a></li>-->
                                   <!--<li><a class="google" href="#"><i class="icon-google"></i></a></li>-->
                                   <li><a class="instagram2" href="https://www.instagram.com/jiomexautoindiapvt/"><i class="icon-instagram2"></i></a></li>
                            </ul>
                        </div>
                            
                        </div>
                                            </div>
                </div>
            </div>
</div>
            <!--header middel end-->

            <!--header bottom satrt-->
            <div class="header_bottom sticky-header" style="padding-top:10px;padding-bottom:10px;">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-2 col-md-12">
                             <div class="logo">
                                <a href="../index.php"><img src="../images/potautologo.jpeg" alt="" width="83%"></a>
                            </div>
                        </div>
                       
                        <div class="col-lg-8">
                            <div class="main_menu menu_position text-left"> 
                                <nav>  
                                    <ul>
                                        <li><a class="active"  href="../index.php">home<!-- <i class="fa fa-angle-down"></i> --></a>

                                        </li>
                                        <li><a href="../about.php">About Us</a></li>
                                        <li><a href="../ourbrands.php">Our Brands</a>
                                        <ul class="sub_menu">
                                                <li><a href="../brands/Geomex">Geomex</a></li>
                                                <li><a href="../brands/Potauto">Potauto</a></li>
                                                 <li><a href="../brands/Oxilight">Oxilight</a></li>
                                                <li><a href="../brands/Biolite">Biolite</a></li>
                                                
                                            </ul>
                                        </li>
                                         <li><a href="#">Products</a>
                                         <ul class="sub_menu">
                                         <?php
            $sql="SELECT DISTINCT product_category FROM product_cat_subcat_details";
        $result=$conn->query($sql);
        
        if($result->num_rows>0)
        {
             while($row = mysqli_fetch_assoc($result)) 
             {
                
        ?>
       <li>
           <a href="../product.php?category=<?php echo $row["product_category"]; ?>"> <?php echo $row["product_category"]; ?></a>
           </li>
        <?php
    }}
    ?>
                                    </ul>
                                        
                                        </li>
                                        
                                        <li><a href="../contact-us.php"> Contact Us</a></li>
                                        
                                        
                                            
                                      <li class="menu-item-has-children">
                                    <a href="#">Download brochure </a><i class="fa fa-angle-down" style="float:right;cursor:pointer;" onclick="dis_submenu2()"></i>
                                        <ul class="sub_menu" id="mobile_sub_menu2">
                                        
                                        <li><a href="#" data-toggle="modal" data-target="#modal_box_potauto">Potauto</a></li>
                                            <li><a href="#" data-toggle="modal" data-target="#modal_box_biolite">Biolite</a></li>
                                        </ul>
                                    </li>
                                               

                                    </ul>  
                                </nav> 
                            </div>
                        </div>
                        <div class="col-lg-2">
                             <div class="header_right_box">
                                <div class="search_container">
                                    <form action="#">
                                     
                                        <div class="search_box"> 
                           <input placeholder="Search product..." type="text" name="search_bar" id="search_bar" onkeyup="filterFunction()"onclick="myFunction()"autocomplete="off">
                               
                                <div class="dropdown-content" id="myDropdown">
                                    <?php include("config.php");
                                    $sql="select * from products";
                                    $result=$conn->query($sql);if($result->num_rows>0){while($row=mysqli_fetch_assoc($result)){ ?><a href="../product/<?php echo $row["Product_name"]; ?>"><?php echo $row["Product_name"]; ?></a><?php }} ?></div>
                               <!--      <button type="submit" style="float: left;width: 15px;">
                                        </button> -->
                             
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header bottom end-->
        </div> 
    </header>
    

<script type="text/javascript">
  function handleSelect(elm)
  {
     window.location = elm.value+".php";
  }
</script>




<script type="text/javascript">

function myFunctionmobile()
{
    document.getElementById("myDropdown1").classList.toggle("show");
}

function filterFunctionmobile() {

  var input, filter, ul, li, a, i;
  input = document.getElementById("search_bar1");
  filter = input.value.toUpperCase();

  div = document.getElementById("myDropdown1");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}
</script>
<script type="text/javascript">

function myFunction()
{
    document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {

  var input, filter, ul, li, a, i;
  input = document.getElementById("search_bar");
  filter = input.value.toUpperCase();

  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}
</script>

<script type="text/javascript">
    function dis_submenu()
    {
      
        if (document.getElementById("mobile_sub_menu").style.display == "none")
        {
            document.getElementById("mobile_sub_menu").style.display = "block";
        }
        else if (document.getElementById("mobile_sub_menu").style.display == "block")
        {
            document.getElementById("mobile_sub_menu").style.display = "none";
        }

    }
     function dis_submenu1()
    {
      
        if (document.getElementById("mobile_sub_menu1").style.display == "none")
        {
            document.getElementById("mobile_sub_menu1").style.display = "block";
        }
        else if (document.getElementById("mobile_sub_menu1").style.display == "block")
        {
            document.getElementById("mobile_sub_menu1").style.display = "none";
        }

    }
</script>




<!-- Download PDF Javascript Code start -->

<script>
    
        function downloadPdf(URL, fileName){
            let link = document.createElement("a");
            
            link.setAttribute("download", fileName);
            link.href = URL;

            document.body.appendChild(link);
            link.click();
            link.remove();
        }
    </script>
<!-- Download PDF Javascript Code End -->
    <!--header area end-->

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="..\index.php">Home</a></li>
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
            <div class="row">
                <div class="row col-md-12">
                   <?php
                   if(isset($_GET["name"]))
                   {

                    $name = $_GET["name"];
                    $sql="select * from products where Product_name = '$name' ";

                    // echo '<h3>'.$cat_name.'</h3>';
                  // }
                  
                   
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
                                            <img src="../admin/<?php echo $row["Product_image"];?>"   alt="">
                                            <div class="label_product">
                                                <!-- <span class="label_sale">-56%</span> -->
                                            </div>
                                            
                                        </div>
                                        <div class="product_content">
                                            <div class="product_content_inner" style="text-align: center;">
                                                 <!-- <p class="manufacture_product"><a href="#">Parts</a></p> -->
                                                <h4 class="product_name" style="text-transform: uppercase;"><a href="#"><?php echo $row["Product_name"];?></a></h4>
                                                 
                                                <!--<div class="price_box"> -->
                                                      
                                                <!--   <span class="current_price"><?php #echo $row["Product_price"];?></span>-->
                                                <!--</div>-->
                                                <div>  
                                                
                                                 <a href="#new_flagship_modals" data-book-id="Category: <?php echo $row["Product_category"];?> --- Product Name: <?php echo $row["Product_name"];?>"  role="button" class="btn btn-primary" data-toggle="modal" style="box-shadow: 4px 4px 1px 1px #0e4677;">
                                                 Enquire Now</a> 
                                                 
                                                 <?php #include("new_flagship_modals.php"); ?>
                                                 <?php #include("ourflagship_products.php"); ?>
                                                 <?php #include("products-flagship-modals.php"); ?>
                                                    <!--<button data-target="#myModal" role="button" class="btn btn-primary" data-toggle="modal"  style="box-shadow: 4px 4px 1px 1px #0e4677;">-->
                                                    <!--    Enquire Now-->
                                                    <!--</button>-->
                                                </div>
                                            </div> 
                                               
                                        </div>
                                    </figure>
                                </article>
                    </div>  
                <?php
            }
        }
                   }
                ?>              
                  </div> 
            </div> 
        </section>
            <!--End Products List-->

         
        </div>
    </div>


<?php include("footer_older.php");?>


    
<?php include("potauto_download_brochure_form.php"); ?>
                    <?php include("biolite_download_brochure_form.php"); ?>
<?php include("new_flagship_modals.php"); ?>

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
<script src="../assets/js/plugins.js"></script>

<!-- Main JS -->
<script src="../assets/js/main.js"></script>

<!-- auto Scrool JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>


<!-- flagship modals -->



</body>

</html>