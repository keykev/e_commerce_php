<!-- Top Sale -->
<?php  shuffle($productShuffle);?>

<?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(isset($_POST['top-sale-btn'])) {
            $cart->addToCart($_POST['user_id'],$_POST['item_id']);
        }
    }

?>
<section id="top-sale">
    <div class="container py-5">
        <h4 class = "font-rubik font-size-20">Top Sale</h4>
        <hr />
        <!-- Owl Carousel -->
        <div class="owl-carousel owl-theme">
            <?php foreach($productShuffle as $item): ?>
                <div class="item py-2">
                    <div class="product font-raleway">
                        <a href = "product.php?item_id=<?php echo $item['item_id'] ?>"><img src = "<?php echo $item['item_image']??'./assets/products/1.jpg';?>" alt = "1" /></a>
                        <div class="text-center py-3">
                            <h6><?php echo $item['item_name']??"Attack On Titan Season 1 DVDS" ?></h6>
                            <div class = "rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$<?php echo $item['item_price'] ?></span>
                            </div>
                            <form method = "POST">
                                <input type = "hidden" name = "item_id" value = "<?php echo $item['item_id'] ?>" />
                                <input type ="hidden" name = "user_id" value = "<?php echo 1 ?>" />
                                <?php 
                                    if(in_array($item['item_id'],$cart->getCartId($product->getData('cart'))??[])){
                                        echo '<button type = "submit" name = "top-sale-btn" class = "btn btn-success font-size-14" disabled>Already in Cart</button>';
                                    }
                                    else {
                                        echo '<button type = "submit" name = "top-sale-btn" class = "btn btn-warning font-size-14">Add To Cart</button>';
                                    }
                                ?>
                            </form>    
                        </div>
                    </div>
                </div>
            <?php endforeach?>
        </div>
    </div> 
</section>