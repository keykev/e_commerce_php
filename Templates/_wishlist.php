

<?php 
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        if(isset($_POST['delete-cart-submit'])) {
            $deleteRecord = $cart->deleteCart($_POST['item_id']);
        }

        if(isset($_POST['cart-submit'])) {
            echo "Cart submit is working";
            $cart->saveForLater($_POST['item_id'],'cart','wishlist');
        }
    }

?>


<!-- Shopping Cart -->
<section id="cart" class="py-3">
    <div class="container-fluid w-75">
        <h5 class = "font-baloo font-size-20">Wishlist</h5>
        <!-- Shopping Cart -->
        <div class="row">
            <div class="col-sm-9">
                <!-- Cart Item -->
                <?php 
                    foreach($product->getData('wishlist') as $item): 
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
                                    <form method = "POST">
                                        <input type = "hidden" value = "<?php echo $item['item_id']??0 ?>" name = "item_id" />
                                        <button class = "btn font-baloo text-danger px-3 border-end" name = "delete-cart-submit">Delete</button>
                                    </form>
                                    <form method = "POST">
                                        <input type = "hidden" name = "item_id" value = "<?php echo $item['item_id']; ?>" />
                                        <button class = "btn font-baloo text-danger px-3" name = "cart-submit">Add to Cart</button>
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
                        //print_r($subTotal);
                    endforeach; 
                    //print_r($subTotal);
                ?>
            </div>                    
        </div>
    </div>
</section>