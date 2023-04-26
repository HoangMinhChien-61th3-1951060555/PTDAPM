
<!doctype html>
<html class="no-js" lang="en">

<head>
<base href="http://localhost/PHP-DEV/php-project/">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fashion eCommerce HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta http-equiv="content-language" content="vi" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="robots" content="noodp,index,follow" />
    <meta name='revisit-after' content='1 days' />
    <link rel="shortcut icon" type="image/x-icon" href="./assets/admin/images/favicon.ico">
    <link rel="stylesheet" href="./assets/admin/css/plugins.css">
    <link rel="stylesheet" href="./assets/admin/css/style1.css">
    <link href='assets/frontend/100/047/633/themes/517833/assets/font-awesome.min221b.css?1481775169361' rel='stylesheet' type='text/css' />
<link href='assets/frontend/100/047/633/themes/517833/assets/bootstrap.min221b.css?1481775169361' rel='stylesheet' type='text/css' />
<link href='assets/frontend/100/047/633/themes/517833/assets/owl.carousel221b.css?1481775169361' rel='stylesheet' type='text/css' />
<link href='assets/frontend/100/047/633/themes/517833/assets/responsive221b.css?1481775169361' rel='stylesheet' type='text/css' />
<link href='assets/frontend/100/047/633/themes/517833/assets/styles.scss221b.css?1481775169361' rel='stylesheet' type='text/css' />
<script src='assets/frontend/100/047/633/themes/517833/assets/jquery.min221b.js?1481775169361' type='text/javascript'></script>
<script src='assets/frontend/100/047/633/themes/517833/assets/bootstrap.min221b.js?1481775169361' type='text/javascript'></script>
<script src='assets/frontend/assets/themes_support/api.jquerya87f.js?4' type='text/javascript'></script>
<link href='assets/frontend/100/047/633/themes/517833/assets/bw-statistics-style221b.css?1481775169361' rel='stylesheet' type='text/css' />
</head>
<body class="index">
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/62bc88bfb0d10b6f3e79f64d/1g6o7cb46';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v14.0" nonce="7VbshJLR">

</script><div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v14.0" nonce="HT6NkWq6"></script>
<?php include "views/HeaderView.php"; ?>

<div class="content">
  <div class="container">
    <h1 style="display:none;">MU Store</h1>
    <div class="row" style="padding-top:10px">
      <div class="col-xs-12 col-md-3"> 
        <!-- end support -->
        <div class="support" style=" border:2px solid rgb(204, 187, 35); padding-left:10px;">
          <div class="lienhe" style="margin-bottom:5px;">
            <h2 style="margin-bottom:5px;text-transform:uppercase;font-size:25px; color:rgb(35, 164, 204);">Liên hệ trực tiếp</h2>
          </div>
          <hr>
          <div class="block-content">
            <div class="sp">
            <i class="fa fa-phone"></i>
              <p style="text-transform:uppercase;">Hỗ trợ khách hàng</p>
              <p>Mihchien: 02727272727</p>  
            </div>
<hr>
            <div class="sp"> <i class="fa fa-phone"></i>
              <p style="text-transform:uppercase;">Hỗ trợ khách hàng</p>
              <p>Mihchien: 02727272727</p>
            </div>
<hr>
            <div class="sp">
            <i class="fa fa-phone"></i>
              <p style="text-transform:uppercase;">Email liên hệ</p>
              <p>hoangminhchienlep@gmail.com</p>
            </div>
          </div>
        </div>
        <div class="panel panel-default" style="margin-top:15px;">
          <div class="panel-heading"> Tìm theo mức giá </div>
          <div class="panel-body">
            <ul class="list-group" style="border:0px;">
              <li class="list-group-item" style="border:0px;">Giá từ &nbsp;&nbsp;
                <input type="number" min="0" value="0" id="fromPrice" class="form-control" />
              </li>
              <li class="list-group-item" style="border:0px;">Đến &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="number" min="0" value="0" id="toPrice" class="form-control"/>
              </li>
              <li class="list-group-item" style="border:0px; text-align:center">
                <input type="button" class="btn btn-warning" value="Tìm mức giá" onclick="location.href = 'index.php?controller=search&action=price&fromPrice=' + document.getElementById('fromPrice').value + '&toPrice=' + document.getElementById('toPrice').value;" />
              </li>
            </ul>
          </div>
        </div>
        <!-- end support online --> 
        
        <!-- end adv --> 
        
      </div>
      <div class="col-xs-12 col-md-9"> 
        <!-- main -->
        
        <?php self::renderBody(); ?>
        
        <!-- end main --> 
      </div>
    </div>
    
    
  </div>
</div>
        <div class="widebanner"> <a href="#"><img src="https://tpc.googlesyndication.com/simgad/14419981218393653262" style="width:1500px;justify-content: center;" alt="#" class="img-responsive"></a> </div>
<br>
<footer class="footer_widgets">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                        <div class="widgets_container">
                            <h3>Information</h3>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="">About Us</a></li>
                                    <li><a href="#">Delivery Information</a></li>
                                    <li><a href="">Privacy Policy</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="">Contact Us</a></li>
                                    <li><a href="#">Returns</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                        <div class="widgets_container">
                            <h3>Extras</h3>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="#">Brands</a></li>
                                    <li><a href="#">Gift Certificates</a></li>
                                    <li><a href="#">Affiliate</a></li>
                                    <li><a href="#">Specials</a></li>
                                    <li><a href="">Site Map</a></li>
                                    <li><a href="">My Account</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="widgets_container contact_us">
                            <h3>Contact Us</h3>
                            <div class="footer_contact">
                                <p>Address: Hanoi,VietNam</p>
                                <p>Phone: <a href="tel:+(+012)800456789-987">(+012) 800 456 789 - 987</a> </p>
                                <p>Email: hoangminhchienlep@example.com</p>
                                <ul>
                                    <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" title="google-plus"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" title="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" title="youtube"><i class="fa fa-youtube"></i></a></li>
                                </ul>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="widgets_container newsletter">
                            <h3>Join Our Newsletter Now</h3>
                            <div class="newleter-content">
                                <p>Exceptional quality. Ethical factories. Sign up to enjoy free U.S. shipping and returns on your first order.</p>
                                 <div class="subscribe_form">
                                    <form id="mc-form" class="mc-form footer-newsletter" >
                                        <input id="mc-email" type="email" autocomplete="off" placeholder="Enter you email address here..." />
                                        <button id="mc-submit">Subscribe !</button>
                                    </form>
                                    <!-- mailchimp-alerts Start -->
                                    <div class="mailchimp-alerts text-centre">
                                        <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                        <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                        <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                    </div><!-- mailchimp-alerts end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
               <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="copyright_area">
                            <p> &copy; 2021 <strong> </strong> Mede with ❤️ by <a href="https://hasthemes.com/" target="_blank"><strong>HasThemes</strong></a></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer_custom_links">
                            <ul>
                                <li><a href="#">Order History</a></li>
                                <li><a href="wishlist.html">Wish List</a></li>
                                <li><a href="#">Newsletter</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
  
<script src='assets/frontend/100/047/633/themes/517833/assets/owl.carousel.min221b.js?1481775169361' type='text/javascript'></script> 
<script src='assets/frontend/100/047/633/themes/517833/assets/responsive-menu221b.js?1481775169361' type='text/javascript'></script> 
<script src='assets/frontend/100/047/633/themes/517833/assets/elevate-zoom221b.js?1481775169361' type='text/javascript'></script> 
<script src='assets/frontend/100/047/633/themes/517833/assets/main221b.js?1481775169361' type='text/javascript'></script> 
<script src='assets/frontend/100/047/633/themes/517833/assets/ajax-cart221b.js?1481775169361' type='text/javascript'></script>
</body>
</html>