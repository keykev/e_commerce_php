<?php 
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        if(isset($_POST['delete-cart-submit'])) {
            $deleteRecord = $cart->deleteCart($_POST['item_id']);
        }

        if(isset($_POST["wishlist-submit"])) {
            $cart->saveForLater($_POST['item_id']);
        }
    }

?>


<!-- Shopping Cart -->
<section id="cart" class="py-3">
            <div class="container-fluid w-75">
                <h5 class = "font-baloo font-size-20">Shopping Cart</h5>
                <!-- Shopping Cart -->
                <div class="row">
                    <div class="col-sm-9">
                        <!-- Cart Item -->
                        <?php 
                        foreach($product->getData('cart') as $item): 
                            $cartItem = $product->getProduct($item['item_id']);
                            //print_r ($cart);
                            $subTotal[] = array_map(function($item) {
                        ?>
                                <div class="row border-top py-3 mt-3">
                                    <div class="col-sm-2">
                                        <img src = "<?php echo $item['item_image'] ?>" style = "height:150px;" alt = "product 7" class = "img-fluid"/>
                                    </div>
                                    <div class="col-sm-8">
                                        <h5 class = "font-baloo font-size-20"><?php echo $item['item_name']?></h5>
                                        <small>By <?php echo $item['item_studio'] ?></small>
                                        <!-- Product rating -->
                                        <div class="d-flex">
                                            <div class = "rating text-warning font-size-12">
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                            </div>
                                            <a href="#" class="px-2 font-raleway font-size-14">20,359 ratings</a>
                                        </div>
                                        <!-- Product Qty -->
                                        <div class="d-flex qty pt-2">
                                            <div class="d-flex font-raleway w-25">
                                                <button class = "qty-up border bg-light" data-id = "<?php echo $item['item_id']??'0'?>"><i class="fas fa-angle-up"></i></button>
                                                <input type = "text" data-id = "<?php echo $item['item_id']??'0' ?>" class = "qty_input border px-2 w-100 bg-light" disabled value = "1" />
                                                <button type = "submit" data-id = "<?php echo $item['item_id']??'0' ?>" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                            </div>
                                            <form method = "POST">
                                                <input type = "hidden" value = "<?php echo $item['item_id']??0 ?>" name = "item_id" />
                                                <button class = "btn font-baloo text-danger px-3 border-end" name = "delete-cart-submit">Delete</button>
                                            </form>
                                            <form method = "POST">
                                                <input type = "hidden" value = "<?php echo $item['item_id']??0 ?>" name = "item_id" />
                                                <button class = "btn font-baloo text-danger px-3" name = "wishlist-submit">Save For Later</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 text-end">
                                        <div class="font-size-20 text-danger font-baloo">
                                            $<span id = "product_price" data-id = "<?php echo $item['item_id']??'0'?>"><?php echo $item['item_price'] ?></span>
                                        </div>
                                    </div>

                                </div>
                        <?php 
                                return $item['item_price'];
                                },$cartItem);
                                print_r($subTotal);
                            endforeach; 
                            //print_r($subTotal);
                        ?>
                    </div>
                    <!-- Subtotal section -->
                    <div class="col-sm-3">
                        <div class="subtotal text-center mt-2 border">
                            <h6 class = "font-raleway font-size-12 text-success py-3"><i class="fas fa-check"></i>Your Order is Eligible for FREE Delivery</h6>
                            <div class="border-top py-4">
                                <h5 class = "font-baloo font-size-20">Subtotal(<?php echo isset($subTotal) ? count($subTotal) : 0 ?> items):  <span class = "text-danger">$<span id = "deal-price"><?php echo isset($subTotal) ? $cart->getSum($subTotal):0 ?></span></span></h5>
                                <button type = "submit" class = "btn btn-warning mt-3">Proceed to Buy</button>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>