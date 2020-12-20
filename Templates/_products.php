<!-- Product -->
<?php 
    $item_id = $_GET['item_id'];
    //echo $item_id;
    foreach($product->getData() as $item):
        if($item['item_id'] == $item_id):
?>
    <section id="product" class = "py-3">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="<?php echo $item['item_image']; ?>" alt="product 1" class = "img-fluid" />
                            <div class="row pt-4 font-size-16 font-baloo">
                                <div class="col">
                                    <button class = "btn btn-danger form-control">Proceed to Buy</button>
                                </div>
                                <div class="col">
                                    <button class = "btn btn-warning form-control">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <h5 class = "font-baloo font-size-20"><?php echo $item['item_name'] ?></h5>
                            <small>by <?php echo $item['item_studio'] ?></small>
                            <div class="d-flex">
                                <div class = "rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <a href = "#" class = "px-2 font-raleway font-size-14">20,534 ratings | 1000+ answered questions</a> 
                            </div>
                            <hr class = 'm-0' />

                            <!-- Product Price -->
                            <table class = "my-3">
                                <tr class = "font-size-14 font-raleway">
                                    <td>Original Price: </td>
                                    <td><strike>$69.99</strike></td>
                                </tr>
                                <tr class = "font-raleway font-size-14">
                                    <td>Deal Price: </td>
                                    <td class = "font-size-20 text-danger">$<span><?php echo $item['item_price'] ?></span><small class = "font-size-12 text-dark">Includes All Taxes</small></td>
                                </tr>
                                <tr class = "font-raleway font-size-14">
                                    <td>You save:</td>
                                    <td class = "font-size-16 text-danger">$<span>19.99</span></td>
                                </tr>
                            </table>

                            <!-- policy -->
                            <div id="policy">
                                <div class="d-flex">
                                    <div class="return text-center mx-5">
                                        <div class="font-size-20 my-2 color-secondary">
                                            <span class = "fas fa-retweet border rounded-pill p-3"></span>
                                        </div>
                                        <a href="#" class="font-raleway font-size-12">10 days <br>Replacement </br></a>
                                    </div>
                                    <div class="return text-center mx-5">
                                        <div class="font-size-20 my-2 color-secondary">
                                            <span class="fas fa-truck border p-3 rounded-pill"></span>
                                        </div>
                                        <a href="#" class="font-raleway font-size-12">Daily Tuition<br> Delivered </br></a>
                                    </div>
                                    <div class="return text-center mx-5">
                                        <div class="font-size-20 my-2 color-secondary">
                                            <span class="fas fa-check-double border p-3 rounded-pill"></span>
                                        </div>
                                        <a href="#" class="font-raleway font-size-12">1 year<br> Warranty </br></a>
                                    </div>
                                </div>
                            </div>
                            <hr />

                            <!-- order details -->
                            <div class="order-details font-raleway d-flex flex-column text-dark">
                                <small>Delivered by: Decemeber 25- January 5</small>
                                <small>Sold By: <a href = ""><?php echo $item['item_studio'] ?></a>(4.5/5 | 18,192 ratings)</small>
                                <small><i class="fas fa-map-marker-alt color-primary"></i> Delivered to the address- 42321</small>
                            </div>

                            <!-- color & qty-->
                            <div class="row">
                                <div class="col-6">
                                    <div class="color my-3">
                                        <div class="d-flex justify-content-between">
                                            <h6 class = "font-baloo">Color: </h6>
                                            <div class="p-2 rounded-circle color-yellow-bg"><button class ="btn font-size-14"></button></div>
                                            <div class="p-2 rounded-circle color-primary-bg"><button class ="btn font-size-14"></button></div>
                                            <div class="p-2 rounded-circle color-secondary-bg"><button class ="btn font-size-14"></button></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="qty d-flex">
                                        <h6>Qty: </h6>
                                        <div class="px-4 d-flex font-raleway">
                                            <button class = "qty-up border bg-light"><i class="fas fa-angle-up" data-id= "pro1"></i></button>
                                            <input type = "text" class = "qty_input border px-2 w-50 bg-light" data-id= "pro1" disabled value = "1" />
                                            <button class="qty-down border bg-light" data-id= "pro1"><i class="fas fa-angle-down"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Size -->
                            <div class="size my-3">
                                <h6 class="font-baloo">Size: </h6>
                                <div class="d-flex justify-content-between w-75">
                                    <div class="font-rubik border p-2">
                                        <button class = "btn p-0 font-size-14">Hardcover</button>
                                    </div>
                                    <div class="font-rubik border p-2">
                                        <button class="btn p-0 font-size-14">Softcover</button>
                                    </div>
                                    <div class="font-rubik border p-2">
                                        <button class="btn p-0 font-size-14">Binding</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Product description -->
                        <div class="col-12">
                            <h6 class = "font-rubic">Product Description</h6>
                            <hr />
                            <p class = "font-raleway font-size-14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, exercitationem officiis! In molestias deserunt excepturi consequuntur, beatae labore distinctio earum architecto placeat porro totam quaerat rem facere magni, sint iure tempore animi natus adipisci dignissimos maiores ad cumque ut. Sint, dolore! Saepe labore nulla iste, veritatis explicabo nostrum similique optio!</p>
                            <p class = "font-raleway font-size-14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, exercitationem officiis! In molestias deserunt excepturi consequuntur, beatae labore distinctio earum architecto placeat porro totam quaerat rem facere magni, sint iure tempore animi natus adipisci dignissimos maiores ad cumque ut. Sint, dolore! Saepe labore nulla iste, veritatis explicabo nostrum similique optio!</p>
                        </div>
                    </div>
                </div>
    </section>
<?php 
        endif;
    endforeach;
?>