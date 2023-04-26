<?php 
    //load file layout vao day
    self::$fileLayout = "LayoutTrangTrong.php";
 ?>
     <div class="breadcrumbs_area other_bread">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.php">home</a></li>
                            <li>/</li>
                            <li>cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <div class="shopping_cart_area">
        <div class="container">  
            <form action="#"> 
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc">
                            <div class="cart_page table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product_remove">Delete</th>
                                            <th class="product_thumb">Image</th>
                                            <th class="product_name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product_quantity">Quantity</th>
                                            <th class="product_total">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
            <?php foreach($_SESSION['cart'] as $product): ?>
              <tr>
                <td><a href="index.php?controller=cart&action=delete&id=<?php echo $product['id']; ?>" data-id="2479395"><i class="fa fa-trash"></i></a></td>
                <td><img src="assets/upload/products/<?php echo $product['photo']; ?>" class="img-responsive" /></td>
                <td><a href="index.php?controller=products&action=detail&id=<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a></td>
                <td> <?php echo number_format(($product['price'] - ($product['price'] * $product['discount'])/100)); ?>₫ </td>
                <td><input type="number" id="qty" min="1" class="input-control" value="<?php echo $product['number']; ?>" name="product_<?php echo $product['id']; ?>" required="Không thể để trống"></td>
                <td><p><b><?php echo number_format($product['number']*($product['price'] - ($product['price'] * $product['discount'])/100)); ?>₫</b></p></td>
                
              </tr>
            <?php endforeach; ?> 
            </tbody>
            <!-- co the goi ham trong CartModel -->
            <?php if((new CartController())->cartNumber()): ?>
            <tfoot>
              <tr>
                <td colspan="6"><a href="index.php?controller=cart&action=destroy" ></a> 
               
                <div class="cart_submit">
                                <button type="submit">Cập nhật</button>
                            </div>      
              </tr>
            </tfoot>
            <?php endif; ?>
          </table>

        </div>
        <div class="coupon_area">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code left">
                                <h3>Coupon</h3>
                                <div class="coupon_inner">   
                                    <p>Enter your coupon code if you have one.</p>                                
                                    <input placeholder="Coupon code" type="text">
                                    <button type="submit">Apply coupon</button>
                                </div>    
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code right">
                                <h3>Cart Totals</h3>
                                <div class="coupon_inner">
                                   <div class="cart_subtotal">
                                       <p>Subtotal</p>
                                       <p class="cart_amount"></p>
                                   </div>
                                   <div class="cart_subtotal ">
                                       <p>Shipping</p>
                                       <p class="cart_amount"><span>Flat Rate:</span></p>
                                   </div>
                                   <a href="#">Calculate shipping</a>

                                   <div class="cart_subtotal">
                                       <p>Total</p>
                                       <p class="cart_amount"></p>
                                   </div>
                                   <div class="checkout_btn">
                                       <a href="#">Proceed to Checkout</a>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--coupon code area end-->
                
            </form> 
        </div>     
    </div>

      </form>
      <?php if((new CartController())->cartNumber()): ?>
      
        
      <?php endif; ?>
    </div>  