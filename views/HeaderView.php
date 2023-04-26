
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>MU SHOP
    </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="./assets/admin/images/favicon.ico">
    
    <!-- CSS 
    ========================= -->


    <!-- Plugins CSS -->
    <link rel="stylesheet" href="./assets/admin/css/plugins.css">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="./assets/admin/css/style1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <header class="header_area header_three">
        <!--header top start-->
        <div class="header_top">
            <div class="container-fluid">   
                <div class="row align-items-center" style="height:60px;">
                    <div class="col-lg-7 col-md-12" style="padding-bottom: 70px;">
                        <div class="welcome_text">
                           <ul>
                           <?php if(isset($_SESSION['customer_email'])): ?>
                           <div class="col-xs-12 col-sm-6 col-md-6 customer" > <a href="#" style="text-decoration: none;font-size:15px;">Hi <?php echo $_SESSION['customer_email']; ?></a>&nbsp; &nbsp;<a href="index.php?controller=account&action=logout" style="text-decoration: none;font-size:15px;">Đăng xuất</a> </div>
                           <?php else: ?>
                               <li><a href="index.php?controller=account&action=login">Đăng nhập</a> </li>
                               <li><a href="index.php?controller=account&action=register">Đăng kí</a></li>
                               <?php endif; ?>
                           </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 " style="padding-bottom:50px;">
                        <div class="top_right text-right">
                            <ul>
                               <li class="top_links"><a href="#"> <i class="bi bi-arrow-down-short"></i></a>
                                    <ul class="dropdown_links">
                                        <li><a href="wishlist.html">My Wish List </a></li>
                                        <li><a href="my-account.html">My Account </a></li>
                                        <li><a href="#">Sign In</a></li>
                                        <li><a href="compare.html">Compare Products  </a></li>
                                    </ul>
                                </li> 
                                <div class="d-flex justify-content-between" >
  <ul class="list-unstyled">
    <li class="top_links" >
      <a href="https://www.manutd.com/en/Partners/Global/adidas">
        <img src="./assets/admin/images/adidas.png" alt="" style="height: 45px;padding:0 0 15px 100px">
      </a>
    </li>
  </ul>

  <ul class="list-unstyled">
    <li class="top_links">
      <a href="https://www.teamviewer.com/en/sponsorship/manutd/">
        <img src="./assets/admin/images/teamviewer.png" alt="" style="height: 45px;padding:0 0 15px 10px">
      </a>
    </li>
  </ul>

  <ul class="list-unstyled">
    <li class="top_links">
      <a href="https://tezos.com/manutd/">
        <img src="./assets/admin/images/tezos.png" alt="" style="height: 45px;padding-bottom:15px">
      </a>
    </li>
  </ul>
</div>

                        
                            </ul>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
        <div class="header_middel">
            <div class="container-fluid">
                <div class="middel_inner">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="search_bar header-search">
                                <form action="#">                          
                                <input type="text" onkeypress="searchForm(event);" value="" placeholder="Nhập từ khóa tìm kiếm..." id="key" class="input-control">
                                <button style="margin-bottom:10px;" type="submit"> <i class="fa fa-search" onclick="return search();"></i> </button>
                                </form>
                            </div>
                            <div class="smart-search">
                          <ul>
          
                          </ul>
                          </div>
                        </div>
                        <style type="text/css">
                         .header-search{position: relative;}
                         .smart-search{position: absolute; width: 100%; background: white; height: 350px; overflow: scroll;z-index: 1; display: none;}
                         .smart-search ul{padding: 0px; margin: 0px; list-style: none;}
                         .smart-search ul li{border-bottom: 1px solid #dddddd;}
                         .smart-search img{width: 70px; margin-right: 5px;}
                        </style>
                        <script type="text/javascript">
      //khi an phim enter thi nhay den trang tim kiem theo ten
      function searchForm(event){
        //bat phim ener tu ban phim (phim enter co keyCode = 13)
        if(event.keyCode == 13){
          //lay gia tri cua the html co id=key
          let key = document.getElementById("key").value;
          //di chuyen den url tim kiem
          location.href = "index.php?controller=search&action=name&key="+key;
        }
      }
      function search(){
        //lay gia tri cua the html co id=key
        let key = document.getElementById("key").value;
        //di chuyen den url tim kiem
        location.href = "index.php?controller=search&action=name&key="+key;
      }
      //---
      //de thuc hien cac dong code ben duoi thi website can phai load thu vien jquery
      /*
        de kiem tra xem website da load thu vien jquery chua thi thuc hien test bang doan code sau
      */
      //$(document).ready(function(){alert('jquery da duoc load vao trang');});
      $(".input-control").keyup(function(){
        var strKey = $("#key").val();
        if(strKey.trim() == ""){
          $(".smart-search").attr("style","display:none;");
        }else{
          $(".smart-search").attr("style","display:block;");
          //---
          //lay du lieu bang ajax
          $.get("index.php?controller=search&action=ajaxSearch&key="+strKey,function(data){
            //clear cac the li ben trong ul
            $(".smart-search ul").empty();
            //them du lieu vao ul
            $(".smart-search ul").append(data);
          });
          //---
        }
      });
      //---
    </script>
                        <div class="col-lg-4">
                            <div class="logo">
                                <a href="index.html"><img src="./assets/admin/images/logo/logo.png" alt="" ></a>
                            </div>
                        </div>
                        <?php 
                        $numberProduct = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
                         ?>
                        <div class="col-lg-4">
                            <div class="cart_area">
                                <div class="cart_link">
                                    <a href="#"><i class="fa fa-shopping-basket"></i> <?php echo $numberProduct; ?> <span>item(s)</span></a>
                                    <div class="mini_cart">
   
                             <?php foreach($_SESSION['cart'] as $product): ?>  
                           <li class="cart_item top" >
                          <div class="image"> <a href="index.php?controller=products&action=detail&id=<?php echo $product['id']; ?>"> <img alt="<?php echo $product['name']; ?>" src="assets/upload/products/<?php echo $product['photo']; ?>" title="<?php echo $product['name']; ?>" class="img-responsive"> </a> </div>
                          <div class="info">
                          <h3><a href="index.php?controller=products&action=detail&id=<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a></h3>
                           <p><?php echo $product['number']; ?> x <?php echo number_format(($product['price'] - ($product['price'] * $product['discount'])/100)); ?>₫</p>
                          </div>
                          <div> <a href="index.php?controller=cart&action=delete&id=<?php echo $product['id']; ?>"> <i class="fa fa-times"></i></a> </div>
                         </li>
                         <?php endforeach; ?>
                        </ul>
                          <a href="index.php?controller=cart&action=checkout" class="button" style="padding-bottom:5px;">Thanh toán</a> </div>
                                 </div>
                                    </div>
                                    <!--mini cart end-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
        <div class="header_bottom sticky-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="main_menu_inner">
                            <div class="main_menu"> 
                                <nav>  
                                    <ul>
                                        <li class="active" ><a href="home" style="text-decoration:none;">Trang chủ </a></li>
                                        <li class="nav-item dropdown" >
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Sản phẩm</a>
          <ul class="dropdown-menu dropdown-menu-secondary" aria-labelledby="navbarDarkDropdownMenuLink" >
                                      <?php 
                                  //co the ket noi csdl de truy van o day
                             $conn = Connection::getInstance();
                             $query = $conn->query("select * from categories where parent_id = 0 order by id desc");
                            $categories = $query->fetchAll(PDO::FETCH_OBJ);
                             ?>
                          <?php foreach($categories as $rows): ?>
                            <li><a href="products/category/<?php echo $rows->id; ?>/<?php echo Unicode::removeUnicode($rows->name); ?>"><?php echo $rows->name; ?></a></li>
                             <?php 
              $querySub = $conn->query("select * from categories where parent_id = {$rows->id} order by id desc");
              $categoriesSub = $querySub->fetchAll(PDO::FETCH_OBJ);
             ?>
             <?php foreach($categoriesSub as $rowsSub): ?>
            <li style="padding-left:20px;"><a href="index.php?controller=products&action=category&id=<?php echo $rowsSub->id; ?>"><?php echo $rowsSub->name; ?></a></li>
              <?php endforeach; ?>
            <?php endforeach; ?>
          </ul>
        </li>
                                        <li style="padding-right:20px;text-decoration: none;"><a href="cart" style="text-decoration: none;">Giỏ hàng</a></li>
                                        <li ><a href="news" style="text-decoration: none;">Tin tức</a></li>
                                        <li ><a href="contact" style="text-decoration: none;">Liên hệ</a></li>
                                    </ul>   
                                </nav> 
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>

    </header>
   
    



<!-- JS
============================================ -->

<!-- Plugins JS -->
<script src="./assets/admin/js/plugins.js"></script>

<!-- Main JS -->
<script src="./assets/admin/js/main1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>