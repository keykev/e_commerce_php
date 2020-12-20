<!-- Special Sale -->
<?php 
    $studio = array_map(function($item) {
        return $item['item_studio'];
    },$productShuffle);
    shuffle($studio);
    $uniqueStudios = array_unique($studio);
    
    //print_r($uniqueStudios); 

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(isset($_POST['special-sale-btn'])) {
            $cart->addToCart($_POST['user_id'],$_POST['item_id']);
        }
    }

    $in_cart = $cart->getCartId($product->getData('cart'));

?>
<section id = "special-sale">
        <div class="container">
            <h4 class = "font-rubik font-size-20">Special Price</h4>
            <div id="filters" class="button-group float-end font-size-16">
                <button class="btn is-checked" data-filter = "*">All Brands</button>
                <?php 
                    array_map(function($studio)  {
                        echo '<button class = "btn" data-filter = ".'.$studio.'">'.$studio.'</button>';
                    },$uniqueStudios)
                ?>
<!--                 
                <button class = "btn" data-filter = ".Wit-Studio">Wit Studio</button>
                <button class = "btn" data-filter = ".Mappa">Mappa</button>
                <button class = "btn" data-filter = ".Ufotable">Ufotable</button> -->
            </div>
            <div class="grid mt-5">
                <?php array_map(function($item) use($in_cart) { ?>
                    <div class="grid-item <?php echo $item['item_studio'] ?> border">
                        <div class="item py-2">
                            <div class="product font-raleway" style = "width:225px;">
                                <a href = "product.php?item_id=<?php echo $item['item_id']; ?>"><img src = "<?php echo $item['item_image']??"./assets/products/4.jpg" ?>" alt = "4" /></a>
                                <div class="text-center py-3">
                                    <h6><?php echo $item['item_name']??"unknown" ?></h6>
                                    <div class = "rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span>$<?php echo $item['item_price']??"unknown" ?></span>
                                    </div>
                                    <form method ="POST">
                                        <input type = "hidden" name = "user_id" value = "<?php echo 1 ?>" />
                                        <input type = "hidden" name = "item_id" value = "<?php echo $item['item_id'] ?>" />
                                        <?php 
                                            if(in_array($item['item_id'],$in_cart??[])) {
                                                echo '<button type = "submit" class = "btn btn-success font-size-14" name = "special-sale-btn" disabled>Add To Cart</button>';
                                            }
                                            else {
                                                echo '<button type = "submit" class = "btn btn-warning font-size-14" name = "special-sale-btn">Add To Cart</button>';
                                            }
                                        
                                        ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }, $productShuffle) ?>
            </div>
        </div>
    </section>