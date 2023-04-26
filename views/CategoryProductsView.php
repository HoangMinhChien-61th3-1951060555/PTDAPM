<?php 
    //load file layout vao day
    self::$fileLayout = "LayoutTrangTrong.php";
 ?>
<div class="shop_area shop_reverse">
        <div class="container">
            <div class="shop_inner_area">
                <div class="row">
                    <div class="col-lg-3 col-md-12">
                       <!--sidebar widget start-->
                        <div class="sidebar_widget">
                            <div class="widget_list widget_filter">
                                <h2>Filter by price</h2>
                                <form action="#"> 
                                    <div id="slider-range"></div>   
                                    <button type="submit">Filter</button>
                                    <input type="text" name="text" id="amount" />   

                                </form> 
                            </div>
                            <div class="widget_list widget_categories">
                                <h2>Product categories</h2>
                                <ul>
                                    <li><a href="#">Categories1 <span>6</span></a> </li>
                                    <li><a href="#"> Categories2 <span>10</span></a> </li>
                                    <li><a href="#">Categories3 <span>4</span></a> </li>
                                    <li><a href="#"> Categories4 <span>4</span></a> </li>
                                    <li><a href="#">Categories5 <span>3</span></a> </li>

                                </ul>
                            </div>

                            <div class="widget_list widget_categories">
                                <h2>Manufacturer</h2>
                                <ul>
                                    <li><a href="#">Calvin Klein <span>6</span></a> </li>
                                    <li><a href="#"> Chanel <span>10</span></a> </li>
                                    <li><a href="#">Christian Dior <span>4</span></a> </li>
                                    <li><a href="#"> ferragamo <span>4</span></a> </li>
                                    <li><a href="#">hermes <span>10</span></a> </li>
                                    <li><a href="#">louis vuitton <span>8</span></a> </li>
                                    <li><a href="#">Tommy Hilfiger <span>7</span></a> </li>
                                    <li><a href="#">Versace <span>6</span></a> </li>

                                </ul>
                            </div>
                            <div class="widget_list widget_categories">
                                <h2>Select By Color</h2>
                                <ul>
                                    <li><a href="#">Black <span>6</span></a> </li>
                                    <li><a href="#"> Blue <span>10</span></a> </li>
                                    <li><a href="#">Brown <span>4</span></a> </li>
                                    <li><a href="#"> Green <span>4</span></a> </li>
                                    <li><a href="#">Pink <span>7</span></a> </li>
                                    <li><a href="#">White<span>8</span></a> </li>
                                    <li><a href="#">Yellow <span>5</span></a> </li>

                                </ul>
                            </div>
                            <div class="widget_list tag-cloud">
                                <h2>Popular Tags</h2>
                                <div class="tag_widget">
                                    <ul>
                                        <li><a href="#">Creams</a></li>
                                        <li><a href="#">Eyebrow Pencil</a></li>
                                        <li><a href="#">Eyeliner</a></li>
                                        <li><a href="#">Eye Shadow</a></li>
                                        <li><a href="#">Lotions</a></li>
                                        <li><a href="#">Mascara</a></li>
                                        <li><a href="#">Oils</a></li>
                                        <li><a href="#">Powders</a></li>
                                        <li><a href="#">Shampoos</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <!--sidebar widget end-->
                    </div>

 <div class="special-collection col-lg-9 col-md-12" >
          <div class="tabs-container">
            <div class="row" >
              <div class="head-tabs head-tab1 col-lg-3">
                <h2>
                    <?php 
                        $conn = Connection::getInstance();
                        $query = $conn->query("select name from categories where id = $category_id");
                        //lay mot ban ghi
                        $category = $query->fetch(PDO::FETCH_OBJ);
                        echo isset($category->name) ? $category->name : "";
                     ?>
                </h2>
              </div>              
              <div class="col-lg-3 pull-right text-right">
                <?php 
                    $order = isset($_GET["order"]) ? $_GET["order"] : "";
                 ?>
                <select class="form-control" onchange="location.href = 'index.php?controller=products&action=category&id=<?php echo $category_id; ?>&order='+this.value;">
                  <option value="0">Sắp xếp</option>
                  <option <?php if($order == "priceAsc"): ?> selected <?php endif; ?> value="priceAsc">Giá tăng dần</option>
                  <option <?php if($order == "priceDesc"): ?> selected <?php endif; ?> value="priceDesc">Giá giảm dần</option>
                  <option <?php if($order == "nameAsc"): ?> selected <?php endif; ?> value="nameAsc">Sắp xếp A-Z</option>
                  <option <?php if($order == "nameDesc"): ?> selected <?php endif; ?> value="nameDesc">Sắp xếp Z-A</option>
                </select>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="tabs-content row">
            <div id="content-tabb1" class="content-tab content-tab-proindex" style="display:none">
              <div class="clearfix"> 
               <?php foreach($data as $rows): ?> 
                <!-- box product -->
                <div class="col-xs-6 col-md-3 col-sm-6 ">
                  <div class="product-grid" id="product-1168979" style="height: 400px; overflow: hidden;width:160px;">
                    <div class="image"> <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><img src="assets/upload/products/<?php echo $rows->photo; ?>" title="product ..." alt="product ..." class="img-responsive"></a> </div>
                    <div class="info">
                      <h3 class="name"><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></h3>
                      <p class="price-box"> <span class="special-price"> <span class="price product-price" style="text-decoration:line-through;"> <?php echo number_format($rows->price); ?></span> ₫ </span> </p>
                      <p class="price-box"> <span class="special-price"> <span class="price product-price"> <?php echo number_format($rows->price - ($rows->price * $rows->discount)/100); ?> </span>₫ </span> </p>
                      <p class="price-box"> 
                        <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=1"><img src="assets/frontend/images/star.jpg"></a> 
                        <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=2"><img src="assets/frontend/images/star.jpg"></a> 
                        <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=3"><img src="assets/frontend/images/star.jpg"></a> 
                        <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=4"><img src="assets/frontend/images/star.jpg"></a> 
                        <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=5"><img src="assets/frontend/images/star.jpg"></a> </p>
                      <div class="action-btn">
                        <form>
                          <a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>" class="button">Add to Cart</a>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end box product -->
                <?php endforeach; ?>
                <!-- paging -->
                <div style="clear: both;"></div>
                <div style="margin-top: -50px;"  class="&#x70;&#x61;&#x67;&#x69;&#x6E;&#x61;&#x74;&#x69;&#x6F;&#x6E;&#x2D;&#x63;&#x6F;&#x6E;&#x74;&#x61;&#x69;&#x6E;&#x65;&#x72;">
                  <ul class="pagination">
                    <li class="page-item"><span>Trang</span></li>
                    <?php for($i = 1; $i <= $numPage; $i++): ?>
                    <li class="page-item"><a class="page-link" href="index.php?controller=Products&action=category&id=<?php echo $category_id; ?>&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                    <?php endfor; ?>
                  </ul>
                </div>
                <!-- end paging --> 
              </div>
            </div>
          </div>
        </div>
        </div>
</div>
</div>
</div>