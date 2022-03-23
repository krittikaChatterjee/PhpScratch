    <?php include('header.php') ?>
        <!--slider area start-->
        <section style="">
		<div class="container">
        <div class="slider-area pos-rltv  carosule-pagi cp-line">
            <div class="active-slider pageslider">
            <?php
                $banner_res = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `banner`"));
            ?>    
                <div class="single-slider pos-rltv">
                    <div class="slider-img">
                        <img src="Admin/category_image/sub_category/<?=$banner_res['main_image']?>" alt="" style="width:1920px;height:700px;">
                    </div>
                </div>
                <div class="single-slider  pos-rltv">
                    <div class="slider-img">
                        <img src="Admin/category_image/sub_category/<?=$banner_res['sub_img1']?>" alt="" style="width:1920px;height:700px;">
                    </div>
                </div>
                <div class="single-slider  pos-rltv">
                    <div class="slider-img">
                        <img src="Admin/category_image/sub_category/<?=$banner_res['sub_img2']?>" alt="" style="width:1920px;height:700px;">
                    </div>
                </div>
            </div>
        </div>
			</div>
			</section>
        <!--slider area start-->

        <!--delivery service start-->
        <div class="delivery-service-area ptb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="single-service shadow-box text-center">
                            <img src="images/icons/garantee.png" alt="">
                            <h5>Money Back Guarantee</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-service shadow-box text-center">
                            <img src="images/icons/coupon.png" alt="">
                            <h5>Gift Coupon</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-service shadow-box text-center">
                            <img src="images/icons/delivery.png" alt="">
                            <h5>Free Shipping</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-service shadow-box text-center">
                            <img src="images/icons/support.png" alt="">
                            <h5>24x7 Support</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--delivery service start-->

        <!--branding-section-area start-->
      
        <!--branding-section-area end-->

        <!--new arrival area start-->
        <div class="new-arrival-area pt-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="heading-title heading-style pos-rltv mb-50 text-center">
                            <h5 class="uppercase">New Arrival</h5>
                        </div>
                        <div class="total-new-arrival new-arrival-slider-active carsoule-btn row">
                            <?php
                            
                                $newArriSql = mysqli_query($conn,"SELECT * FROM product LEFT JOIN qty_per_unit ON product.product_id = qty_per_unit.product_id WHERE product.status = 'Y' AND product.new_arrival_status = 'Y'");
                                $i=1;
                                while($newArriRes = mysqli_fetch_assoc($newArriSql)) {
                                    ?>
                                        
                                        <div class="product-item">
                                            <!-- single product start-->
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <div class="single-prodcut-img  product-overlay pos-rltv">
                                                        <a href="single-product.php?id=<?=base64_encode($newArriRes['qty_id'])?>"> 
                                                            <img alt="" src="Admin/product_image/<?=$newArriRes['image1']?>" style="width:270px; height:387px;"> 
                                                            <img alt="" src="Admin/product_image/<?=$newArriRes['image2']?>" style="width:270px; height:387px;"
                                                                class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="product-icon socile-icon-tooltip text-center">
                                                        <ul>
                                                            <li>
<a href="javascript:void(0);" data-tooltip="Add To Cart" class="add-cart" data-placement="left" onclick="addCrtee(<?=$newArriRes['qty_id']?>,1)">
    <i class="fa fa-cart-plus"></i>
</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);" data-tooltip="Wishlist" class="w-list" onclick="wishlisteee(<?=$newArriRes['qty_id']?>)">
                                                                    <?php
                                                                    if($user_id == '') {
                                                                        ?> <i class="fa fa-heart-o"></i> <?php
                                                                    } else {
                                                                        $check_this_prd_wished = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `wishlist` WHERE `user_id` = '$user_id' AND `qty_id` = '".$newArriRes['qty_id']."'"));
                                                                        if($check_this_prd_wished < 1) {
                                                                            // wish kora nei
                                                                            ?> <i class="fa fa-heart-o wishIcon_<?=$newArriRes['qty_id']?>"></i> <?php
                                                                        } else {
                                                                            // wish kor ache 
                                                                            ?> <i class="fa fa-heart wishIcon_<?=$newArriRes['qty_id']?>"></i> <?php
                                                                        }
                                                                    }
                                                                        
                                                                    ?>
                                                                 <i class="fa fa-times wishDekhateHbe_<?=$newArriRes['qty_id']?>" style="display:none"></i>   
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);" data-tooltip="Quick View" class="q-view" data-bs-toggle="modal" data-bs-target="#productModal" tabindex="0" onclick="callingQView(<?=$newArriRes['qty_id']?>)">
                                                                        <i class="fa fa-eye"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-text">
                                                    <div class="prodcut-name"> <a href="single-product.php?id=<?=base64_encode($newArriRes['qty_id'])?>"><?=$newArriRes['product_name']?></a>
                                                    </div>
                                                    <div class="prodcut-ratting-price">
                                                        <div class="prodcut-price">
                                                            <div class="new-price"> 
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <b>&#8377;<?=$newArriRes['selling_priceee']?></b>
                                                                    </div>   
                                                                    <div class="col-sm-3">
                                                                        <span style="color:grey"><i><s>&#8377;<?=$newArriRes['product_price']?></s> </i></span>
                                                                    </div>  
                                                                    
                                                                    <div class="col-sm-6">
                                                                        <span>
                                                                            <?=$newArriRes['coloree']?>  |  <?=$newArriRes['sizeee']?>
                                                                        </span>
                                                                    </div>  
                                                                </div>    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single product end-->
                                        </div>
                                
                                    <?php
                                    $i++;
                                }
                            ?> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--new arrival area end-->

        <!--banner area start-->
        <div class="banner-area pt-70">
            <div class="container">
                <div class="row">
                    <!--first-->
                    
                    <?php
                        $newArrivalOnly2SQl = mysqli_query($conn,"SELECT * FROM product LEFT JOIN qty_per_unit ON product.product_id = qty_per_unit.product_id WHERE product.status = 'Y' AND product.new_arrival_status = 'Y' ORDER BY qty_per_unit.qty_id DESC LIMIT 2");
                        while($newArrivalOnly2Res = mysqli_fetch_assoc($newArrivalOnly2SQl)) {
                            ?>
                            <div class="col-lg-6">
                                <div class="single-banner gray-bg">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="sb-img text-center">
                                                <a href="single-product.php?id=<?=base64_encode($newArrivalOnly2Res['qty_id'])?>">
                                                    <img src="Admin/product_image/<?=$newArrivalOnly2Res['image1']?>" alt="" style="width:217px; height:404px;">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="sb-content mt-60">
                                                <div class="banner-text">
                                                    <h5 class="lato">New Arrival</h5>
                                                    <h2 class="montserrat"><?=$newArrivalOnly2Res['product_name']?></h2>
                                                    <h3 class="montserrat">
                                                        <b>&#8377;<?=$newArrivalOnly2Res['selling_priceee']?></b>
                                                        <span style="color:grey"><i><s>&#8377;<?=$newArrivalOnly2Res['product_price']?></s> </i></span>
                                                    </h3>
                                                    <div class="banner-list">
                                                        <ul>
                                                            <li> Color: <?=$newArrivalOnly2Res['coloree']?></li>
                                                            <li> Size : <?=$newArrivalOnly2Res['sizeee']?></li>
                                                            <!--<li>Best quality</li>-->
                                                        </ul>
                                                    </div>
                                                    <div class="social-icon-wraper mt-25">
                                                        <div class="social-icon socile-icon-style-1">
                                                            <ul>
                                                                <li>
<a href="javascript:void(0);" data-tooltip="Add To Cart" class="add-cart" data-placement="left" onclick="addCrtee(<?=$newArrivalOnly2Res['qty_id']?>,1)">
    <i class="fa fa-cart-plus"></i>
</a>                                                                    
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0);" data-tooltip="Wishlist" class="w-list" onclick="wishlisteee(<?=$newArrivalOnly2Res['qty_id']?>)">
                                                                        <?php
                                                                        if($user_id == '') {
                                                                            ?> <i class="fa fa-heart-o"></i> <?php
                                                                        } else {
                                                                            $check_this_prd_wished = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `wishlist` WHERE `user_id` = '$user_id' AND `qty_id` = '".$newArrivalOnly2Res['qty_id']."'"));
                                                                            if($check_this_prd_wished < 1) {
                                                                                // wish kora nei
                                                                                ?> <i class="fa fa-heart-o wishIcon_<?=$newArrivalOnly2Res['qty_id']?>"></i> <?php
                                                                            } else {
                                                                                // wish kor ache 
                                                                                ?> <i class="fa fa-heart wishIcon_<?=$newArrivalOnly2Res['qty_id']?>"></i> <?php
                                                                            }
                                                                        }
                                                                            
                                                                        ?>
                                                                     <i class="fa fa-times wishDekhateHbe_<?=$newArrivalOnly2Res['qty_id']?>" style="display:none"></i>   
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0);" data-tooltip="Quick View" class="q-view" data-bs-toggle="modal" data-bs-target="#productModal" tabindex="0" onclick="callingQView(<?=$newArrivalOnly2Res['qty_id']?>)">
                                                                            <i class="zmdi zmdi-eye"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    ?>
                </div>
            </div>
        </div>
        <!--banner area end-->

        <!--discunt-featured-onsale-area start -->
        <div class="discunt-featured-onsale-area pt-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-area tab-cars-style">
                            <div class="title-tab-product-category">
                                <div class="col-lg-12 text-center">
                                    <ul class="nav mb-40 heading-style-2" role="tablist">
                                        <li role="presentation">
                                            <a class="active" href="#newarrival"
                                                aria-controls="newarrival" role="tab" data-bs-toggle="tab">
                                                New Arrival
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#bestsellr" aria-controls="bestsellr"
                                                role="tab" data-bs-toggle="tab">
                                                Best Seller
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#specialoffer" aria-controls="specialoffer"
                                                role="tab" data-bs-toggle="tab">
                                                Special Offer
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                            
                            <div class="content-tab-product-category">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    
                                    <!--new arrival-->
                                    <div role="tabpanel" class="tab-pane fade in active" id="newarrival">
                                        <div class="total-new-arrival new-arrival-slider-active carsoule-btn">
                                        <?php
                                            $newArrivalAllSql = mysqli_query($conn,"SELECT * FROM product LEFT JOIN qty_per_unit ON product.product_id = qty_per_unit.product_id WHERE product.status = 'Y' AND product.new_arrival_status = 'Y' ORDER BY qty_per_unit.qty_id DESC");
                                            while($newArrivalAllRes = mysqli_fetch_assoc($newArrivalAllSql)) {
                                                ?>
                                                
                                                <div class="product-item">
                                                <!-- single product start-->
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <div class="single-prodcut-img  product-overlay pos-rltv">
                                                                <a href="single-product.php?id=<?=base64_encode($newArrivalAllRes['qty_id'])?>"> 
                                                                    <img alt="" src="Admin/product_image/<?=$newArrivalAllRes['image1']?>" class="primary-image" style="width:270px; height:387px;">
                                                                    <img alt="" src="Admin/product_image/<?=$newArrivalAllRes['image2']?>" class="secondary-image" style="width:270px; height:387px;"> 
                                                                </a>
                                                            </div>
                                                            <div class="product-icon socile-icon-tooltip text-center">
                                                                <ul>
                                                                    <li>
<a href="javascript:void(0);" data-tooltip="Add To Cart" class="add-cart" data-placement="left" onclick="addCrtee(<?=$newArrivalAllRes['qty_id']?>,1)">
    <i class="fa fa-cart-plus"></i>
</a>                                                                         
                                                                        
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" data-tooltip="Wishlist" class="w-list" onclick="wishlisteee(<?=$newArrivalAllRes['qty_id']?>)">
                                                                            <?php
                                                                            if($user_id == '') {
                                                                                ?> <i class="fa fa-heart-o"></i> <?php
                                                                            } else {
                                                                                $check_this_prd_wished = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `wishlist` WHERE `user_id` = '$user_id' AND `qty_id` = '".$newArrivalAllRes['qty_id']."'"));
                                                                                if($check_this_prd_wished < 1) {
                                                                                    // wish kora nei
                                                                                    ?> <i class="fa fa-heart-o wishIcon_<?=$newArrivalAllRes['qty_id']?>"></i> <?php
                                                                                } else {
                                                                                    // wish kor ache 
                                                                                    ?> <i class="fa fa-heart wishIcon_<?=$newArrivalAllRes['qty_id']?>"></i> <?php
                                                                                }
                                                                            }
                                                                                
                                                                            ?>
                                                                         <i class="fa fa-times wishDekhateHbe_<?=$newArrivalAllRes['qty_id']?>" style="display:none"></i>   
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" data-tooltip="Quick View" class="q-view" data-bs-toggle="modal" data-bs-target="#productModal" tabindex="0" onclick="callingQView(<?=$newArrivalAllRes['qty_id']?>)">
                                                                            <i class="fa fa-eye"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product-text">
                                                            <div class="prodcut-name"> 
                                                                <a href="single-product.php?id=<?=base64_encode($newArrivalAllRes['qty_id'])?>">
                                                                    <?=$newArrivalAllRes['product_name']?>
                                                                </a> 
                                                            </div>
                                                            <div class="prodcut-ratting-price">
                                                                <div class="prodcut-price">
                                                                    <div class="new-price">
                                                                        <div class="row">
                                                                            <div class="col-sm-3">
                                                                                <b>&#8377;<?=$newArrivalAllRes['selling_priceee']?></b>
                                                                            </div>   
                                                                            <div class="col-sm-3">
                                                                                <span style="color:grey"><i><s>&#8377;<?=$newArrivalAllRes['product_price']?></s> </i></span>
                                                                            </div>  
                                                                            
                                                                            <div class="col-sm-6">
                                                                                <span>
                                                                                    <?=$newArrivalAllRes['coloree']?>  |  <?=$newArrivalAllRes['sizeee']?>
                                                                                </span>
                                                                            </div>  
                                                                        </div> 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <!-- single product end-->
                                                </div>
                                                
                                                
                                                
                                                <?php
                                            }
                                        ?>
                                        </div>
                                    </div>
                                    <!--new arrival-->
                                    
                                    
                                    
                                    <!--best seller-->
                                    <div role="tabpanel" class="tab-pane  fade in" id="bestsellr">
                                        <div class="total-new-arrival new-arrival-slider-active carsoule-btn">
                                            <?php
                                            $bestSellerAllSql = mysqli_query($conn,"SELECT * FROM product LEFT JOIN qty_per_unit ON product.product_id = qty_per_unit.product_id WHERE product.status = 'Y' AND product.bestseller_product = 'Y' ORDER BY qty_per_unit.qty_id DESC");
                                            while($bestSellerAllRes = mysqli_fetch_assoc($bestSellerAllSql)) {
                                                ?>
                                                <div class="product-item">
                                                <!-- single product start-->
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <div class="single-prodcut-img  product-overlay pos-rltv">
                                                                <a href="single-product.php?id=<?=base64_encode($bestSellerAllRes['qty_id'])?>"> 
                                                                    <img alt="" src="Admin/product_image/<?=$bestSellerAllRes['image1']?>" class="primary-image" style="width:270px; height:387px;">
                                                                    <img alt="" src="Admin/product_image/<?=$bestSellerAllRes['image2']?>" class="secondary-image" style="width:270px; height:387px;">  
                                                                </a>
                                                            </div>
                                                            <div class="product-icon socile-icon-tooltip text-center">
                                                                <ul>
                                                                    <li>
<a href="javascript:void(0);" data-tooltip="Add To Cart" class="add-cart" data-placement="left" onclick="addCrtee(<?=$bestSellerAllRes['qty_id']?>,1)">
    <i class="fa fa-cart-plus"></i>
</a>                                                                         
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" data-tooltip="Wishlist" class="w-list" onclick="wishlisteee(<?=$bestSellerAllRes['qty_id']?>)">
                                                                            <?php
                                                                            if($user_id == '') {
                                                                                ?> <i class="fa fa-heart-o"></i> <?php
                                                                            } else {
                                                                                $check_this_prd_wished = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `wishlist` WHERE `user_id` = '$user_id' AND `qty_id` = '".$bestSellerAllRes['qty_id']."'"));
                                                                                if($check_this_prd_wished < 1) {
                                                                                    // wish kora nei
                                                                                    ?> <i class="fa fa-heart-o wishIcon_<?=$bestSellerAllRes['qty_id']?>"></i> <?php
                                                                                } else {
                                                                                    // wish kor ache 
                                                                                    ?> <i class="fa fa-heart wishIcon_<?=$bestSellerAllRes['qty_id']?>"></i> <?php
                                                                                }
                                                                            }
                                                                                
                                                                            ?>
                                                                         <i class="fa fa-times wishDekhateHbe_<?=$bestSellerAllRes['qty_id']?>" style="display:none"></i>   
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" data-tooltip="Quick View" class="q-view" data-bs-toggle="modal" data-bs-target="#productModal" tabindex="0" onclick="callingQView(<?=$bestSellerAllRes['qty_id']?>)">
                                                                            <i class="fa fa-eye"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product-text">
                                                            <div class="prodcut-name"> 
                                                                <a href="single-product.php?id=<?=base64_encode($bestSellerAllRes['qty_id'])?>"> <?=$bestSellerAllRes['product_name']?> </a> 
                                                            </div>
                                                            <div class="prodcut-ratting-price">
                                                                <div class="prodcut-price">
                                                                    <div class="new-price">
                                                                        <div class="row">
                                                                            <div class="col-sm-3">
                                                                                <b>&#8377;<?=$bestSellerAllRes['selling_priceee']?></b>
                                                                            </div>   
                                                                            <div class="col-sm-3">
                                                                                <span style="color:grey"><i><s>&#8377;<?=$bestSellerAllRes['product_price']?></s> </i></span>
                                                                            </div>  
                                                                            
                                                                            <div class="col-sm-6">
                                                                                <span>
                                                                                    <?=$bestSellerAllRes['coloree']?>  |  <?=$bestSellerAllRes['sizeee']?>
                                                                                </span>
                                                                            </div>  
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single product end-->
                                                </div>
                                                
                                                
                                                
                                                
                                                
                                                <?php
                                            }
                                            
                                            ?>
                                        </div>
                                    </div>
                                    <!--best seller-->
                                    
                                    
                                    
                                    <!--spcl offer-->
                                    <div role="tabpanel" class="tab-pane  fade in" id="specialoffer">
                                        <div class="total-new-arrival new-arrival-slider-active carsoule-btn">
                                            <?php
                                            $spclOfferAllSql = mysqli_query($conn,"SELECT * FROM product LEFT JOIN qty_per_unit ON product.product_id = qty_per_unit.product_id WHERE product.status = 'Y' AND product.spcl_offer_status = 'Y' ORDER BY qty_per_unit.qty_id DESC");
                                            while($spclOfferAllRes = mysqli_fetch_assoc($spclOfferAllSql)) {
                                                ?>
                                                <div class="product-item">
                                                <!-- single product start-->
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <div class="single-prodcut-img  product-overlay pos-rltv">
                                                                <a href="single-product.php?id=<?=base64_encode($spclOfferAllRes['qty_id'])?>"> 
                                                                    <img alt="" src="Admin/product_image/<?=$spclOfferAllRes['image1']?>" class="primary-image" style="width:270px; height:387px;">
                                                                    <img alt="" src="Admin/product_image/<?=$spclOfferAllRes['image2']?>" class="secondary-image" style="width:270px; height:387px;">
                                                                </a>
                                                            </div>
                                                            <div class="product-icon socile-icon-tooltip text-center">
                                                                <ul>
                                                                    <li>
<a href="javascript:void(0);" data-tooltip="Add To Cart" class="add-cart" data-placement="left" onclick="addCrtee(<?=$spclOfferAllRes['qty_id']?>,1)">
    <i class="fa fa-cart-plus"></i>
</a>                                                                          
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" data-tooltip="Wishlist" class="w-list" onclick="wishlisteee(<?=$spclOfferAllRes['qty_id']?>)">
                                                                            <?php
                                                                            if($user_id == '') {
                                                                                ?> <i class="fa fa-heart-o"></i> <?php
                                                                            } else {
                                                                                $check_this_prd_wished = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `wishlist` WHERE `user_id` = '$user_id' AND `qty_id` = '".$spclOfferAllRes['qty_id']."'"));
                                                                                if($check_this_prd_wished < 1) {
                                                                                    // wish kora nei
                                                                                    ?> <i class="fa fa-heart-o wishIcon_<?=$spclOfferAllRes['qty_id']?>"></i> <?php
                                                                                } else {
                                                                                    // wish kor ache 
                                                                                    ?> <i class="fa fa-heart wishIcon_<?=$spclOfferAllRes['qty_id']?>"></i> <?php
                                                                                }
                                                                            }
                                                                                
                                                                            ?>
                                                                         <i class="fa fa-times wishDekhateHbe_<?=$spclOfferAllRes['qty_id']?>" style="display:none"></i>   
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" data-tooltip="Quick View" class="q-view" data-bs-toggle="modal" data-bs-target="#productModal" tabindex="0" onclick="callingQView(<?=$spclOfferAllRes['qty_id']?>)">
                                                                            <i class="fa fa-eye"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product-text">
                                                            <div class="prodcut-name">
                                                                <a href="single-product.php?id=<?=base64_encode($spclOfferAllRes['qty_id'])?>"><?=$spclOfferAllRes['product_name']?></a> 
                                                            </div>
                                                            <div class="prodcut-ratting-price">
                                                                <div class="prodcut-price">
                                                                    <div class="new-price"> 
                                                                        <div class="row">
                                                                            <div class="col-sm-3">
                                                                                <b>&#8377;<?=$spclOfferAllRes['selling_priceee']?></b>
                                                                            </div>   
                                                                            <div class="col-sm-3">
                                                                                <span style="color:grey"><i><s>&#8377;<?=$spclOfferAllRes['product_price']?></s> </i></span>
                                                                            </div>  
                                                                            
                                                                            <div class="col-sm-6">
                                                                                <span>
                                                                                    <?=$spclOfferAllRes['coloree']?>  |  <?=$spclOfferAllRes['sizeee']?>
                                                                                </span>
                                                                            </div>  
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <!-- single product end-->
                                                </div>
                                                
                                                
                                                <?php
                                            }
                                            ?>
                                          
                                        </div>
                                    </div>
                                    <!--spcl offer-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--discunt-featured-onsale-area end-->

        <!--testimonial-area-start-->
        <div class="testimonial-area overlay ptb-70 mt-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="heading-title color-lightgrey mb-40 text-center">
                            <h5 class="uppercase">Testimonial</h5>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="total-testimonial active-slider carosule-pagi pagi-03">
                            
                            <?php
                            $testiSql = mysqli_query($conn,"SELECT * FROM `add_testimonial` ORDER BY id DESC");
                            while($testiRes = mysqli_fetch_assoc($testiSql)){
                                ?>
                                
                                <div class="single-testimonial">
                                    <div class="testimonial-img">
                                        <img src="Admin/testimonial_img/<?=$testiRes['img']?>" alt="" style="height:120px; width:120px;">
                                    </div>
                                    <div class="testimonial-content color-lightgrey">
                                        <div class="name-degi pos-rltv">
                                            <h5><?=$testiRes['name']?></h5>
                                            <p><?=$testiRes['designation']?></p>
                                        </div>
                                        <div class="testi-text">
                                            <p><?=$testiRes['description']?></p>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                
                                
                                
                                
                                
                                <?php
                            } 
                            ?>
                            
                            
                            <!--<div class="single-testimonial">-->
                            <!--    <div class="testimonial-img">-->
                            <!--        <img src="images/team/testi-03.jpg" alt="">-->
                            <!--    </div>-->
                            <!--    <div class="testimonial-content color-lightgrey">-->
                            <!--        <div class="name-degi pos-rltv">-->
                            <!--            <h5>Alexandra</h5>-->
                            <!--            <p>Developer</p>-->
                            <!--        </div>-->
                            <!--        <div class="testi-text">-->
                            <!--            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <!--<div class="single-testimonial">-->
                            <!--    <div class="testimonial-img">-->
                            <!--        <img src="images/team/testi-02.jpg" alt="">-->
                            <!--    </div>-->
                            <!--    <div class="testimonial-content color-lightgrey">-->
                            <!--        <div class="name-degi pos-rltv">-->
                            <!--            <h5>Bernadette</h5>-->
                            <!--            <p>Facebook Liker</p>-->
                            <!--        </div>-->
                            <!--        <div class="testi-text">-->
                            <!--            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod-->
                            <!--                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,-->
                            <!--                quis nostrud exercitation ullamco.</p>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <!--<div class="single-testimonial">-->
                            <!--    <div class="testimonial-img">-->
                            <!--        <img src="images/team/testi-01.jpg" alt="">-->
                            <!--    </div>-->
                            <!--    <div class="testimonial-content color-lightgrey">-->
                            <!--        <div class="name-degi pos-rltv">-->
                            <!--            <h5>Amanda</h5>-->
                            <!--            <p>Designer</p>-->
                            <!--        </div>-->
                            <!--        <div class="testi-text">-->
                            <!--            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod-->
                            <!--                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,-->
                            <!--                quis nostrud exercitation ullamco.</p>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--testimonial-area-end-->

        <!--new-arrival on-sale Top-ratted area start-->
       <div class="arrival-ratted-sale-area pt-70">
            <div class="container">
                <div class="row">
                    
                    
                    <!--new arrival-->
                    <div class="col-md-4">
                        <div class="heading-title heading-style pos-rltv mb-50 text-center">
                            <h5 class="uppercase">New Arrival</h5>
                        </div>
                        
                        <div class="ctg-slider-active">
                            <div class="single-ctg new-arrival-ctg">
                                
                            <?php
                                $newArrivalFirSql = mysqli_query($conn,"SELECT * FROM product LEFT JOIN qty_per_unit ON product.product_id = qty_per_unit.product_id WHERE product.status = 'Y' AND product.new_arrival_status = 'Y' ORDER BY qty_per_unit.qty_id DESC LIMIT 2");
                                while($newArrivalFirRes = mysqli_fetch_assoc($newArrivalFirSql)) {
                                   ?>
                                   <div class="single-ctg-item">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12 col-sm-6">
                                                <div class="product-ctg-img pos-rltv product-overlay">
                                                    <a href="single-product.php?id=<?=base64_encode($newArrivalFirRes['qty_id'])?>">
                                                        <img src="Admin/product_image/<?=$newArrivalFirRes['image1']?>"
                                                            alt="" style="height:170px; width:170px;">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-6">
                                                <div class="product-ctg-content">
                                                    <p><?=$newArrivalFirRes['product_name']?></p>
                                                    <p class="font-bold">
                                                        &#8377;<?=$newArrivalFirRes['selling_priceee']?>
                                                        <span style="color:grey"><i><s>&#8377;<?=$newArrivalFirRes['product_price']?></s> </i></span>
                                                    </p>
                                                    <div class="social-icon socile-icon-style-1 mt-15">
                                                        <ul>
                                                            <li>
<a href="javascript:void(0);" data-tooltip="Add To Cart" class="add-cart" data-placement="left" onclick="addCrtee(<?=$newArrivalFirRes['qty_id']?>,1)">
    <i class="fa fa-cart-plus"></i>
</a>                                                             
                                                            </li>
                                                            <li>
<a href="javascript:void(0);" data-tooltip="Quick View" class="q-view" data-bs-toggle="modal" data-bs-target="#productModal" tabindex="0" onclick="callingQView(<?=$newArrivalFirRes['qty_id']?>)">
    <i class="zmdi zmdi-eye"></i>
</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                   
                                   
                                   <?php
                                }
                            ?>
                            </div>
                            <div class="single-ctg new-arrival-ctg">
                                <?php
                                $newArrivalFir1Sql = mysqli_query($conn,"SELECT * FROM product LEFT JOIN qty_per_unit ON product.product_id = qty_per_unit.product_id WHERE product.status = 'Y' AND product.new_arrival_status = 'Y' ORDER BY qty_per_unit.qty_id DESC LIMIT 2 OFFSET 2");
                                while($newArrivalFir1Res = mysqli_fetch_assoc($newArrivalFir1Sql)) {
                                    ?>
                                        <div class="single-ctg-item">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12 col-sm-6">
                                                    <div class="product-ctg-img pos-rltv product-overlay">
                                                        <a href="single-product.php?id=<?=base64_encode($newArrivalFir1Res['qty_id'])?>">
                                                            <img src="Admin/product_image/<?=$newArrivalFir1Res['image1']?>"
                                                            alt="" style="height:170px; width:170px;">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-sm-6">
                                                    <div class="product-ctg-content">
                                                        <p><?=$newArrivalFir1Res['product_name']?></p>
                                                        <p class="font-bold">
                                                            &#8377;<?=$newArrivalFir1Res['selling_priceee']?>
                                                            <span style="color:grey"><i><s>&#8377;<?=$newArrivalFir1Res['product_price']?></s> </i></span>
                                                        </p>
                                                        <div class="social-icon socile-icon-style-1 mt-15">
                                                            <ul>
                                                                <li>
<a href="javascript:void(0);" data-tooltip="Add To Cart" class="add-cart" data-placement="left" onclick="addCrtee(<?=$newArrivalFir1Res['qty_id']?>,1)">
    <i class="fa fa-cart-plus"></i>
</a>                                                                     
                                                                </li>
                                                                <li>
<a href="javascript:void(0);" data-tooltip="Quick View" class="q-view" data-bs-toggle="modal" data-bs-target="#productModal" tabindex="0" onclick="callingQView(<?=$newArrivalFir1Res['qty_id']?>)">
    <i class="zmdi zmdi-eye"></i>
</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <!--new arrival-->
                    
                    <!--on sale-->
                    <div class="col-md-4">
                        <div class="single-ctg on-sale-ctg">
                            <div class="heading-title heading-style pos-rltv mb-50 text-center">
                                <h5 class="uppercase">On Sale</h5>
                            </div>
                            <div class="ctg-slider-active">
                                <div class="single-ctg new-arrival-ctg">
                                <?php
                                $onSaleSql = mysqli_query($conn,"SELECT * FROM product LEFT JOIN qty_per_unit ON product.product_id = qty_per_unit.product_id WHERE product.status = 'Y' AND product.on_sale_status = 'Y' ORDER BY qty_per_unit.qty_id DESC LIMIT 2");
                                while($onSaleRes = mysqli_fetch_assoc($onSaleSql)){
                                    ?>
                                    
                                    <div class="single-ctg-item">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12 col-sm-6">
                                                <div class="product-ctg-img pos-rltv product-overlay">
                                                    <a href="single-product.php?id=<?=base64_encode($onSaleRes['qty_id'])?>">
                                                        <img src="Admin/product_image/<?=$onSaleRes['image1']?>"
                                                            alt="" style="height:170px; width:170px;">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-6">
                                                <div class="product-ctg-content">
                                                    <p><?=$onSaleRes['product_name']?></p>
                                                    <p class="font-bold">
                                                        &#8377;<?=$onSaleRes['selling_priceee']?>
                                                        <span style="color:grey"><i><s>&#8377;<?=$onSaleRes['product_price']?></s> </i></span>
                                                    </p>
                                                    <div class="social-icon socile-icon-style-1 mt-15">
                                                        <ul>
                                                            <li>
<a href="javascript:void(0);" data-tooltip="Add To Cart" class="add-cart" data-placement="left" onclick="addCrtee(<?=$onSaleRes['qty_id']?>,1)">
    <i class="fa fa-cart-plus"></i>
</a>                                                                 
                                                            </li>
                                                            <li>
<a href="javascript:void(0);" data-tooltip="Quick View" class="q-view" data-bs-toggle="modal" data-bs-target="#productModal" tabindex="0" onclick="callingQView(<?=$onSaleRes['qty_id']?>)">
    <i class="zmdi zmdi-eye"></i>
</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    <?php
                                }
                                
                                ?>
                                </div>
                                
                                
                                
                                
                                
                                <div class="single-ctg new-arrival-ctg">
                                    <?php
                                    $onSale1Sql = mysqli_query($conn,"SELECT * FROM product LEFT JOIN qty_per_unit ON product.product_id = qty_per_unit.product_id WHERE product.status = 'Y' AND product.on_sale_status = 'Y' ORDER BY qty_per_unit.qty_id DESC LIMIT 2 OFFSET 2");
                                    while($onSale1Res = mysqli_fetch_assoc($onSale1Sql)){
                                        ?>
                                        
                                        <div class="single-ctg-item">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12 col-sm-6">
                                                    <div class="product-ctg-img pos-rltv product-overlay">
                                                        <a href="single-product.php?id=<?=base64_encode($onSale1Res['qty_id'])?>">
                                                            <img src="Admin/product_image/<?=$onSale1Res['image1']?>"
                                                            alt="" style="height:170px; width:170px;">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-sm-6">
                                                    <div class="product-ctg-content">
                                                        <p><?=$onSale1Res['product_name']?></p>
                                                        <p class="font-bold">
                                                            &#8377;<?=$onSale1Res['selling_priceee']?>
                                                            <span style="color:grey"><i><s>&#8377;<?=$onSale1Res['product_price']?></s> </i></span>
                                                        </p>
                                                        <div class="social-icon socile-icon-style-1 mt-15">
                                                            <ul>
                                                                <li>
<a href="javascript:void(0);" data-tooltip="Add To Cart" class="add-cart" data-placement="left" onclick="addCrtee(<?=$onSale1Res['qty_id']?>,1)">
    <i class="fa fa-cart-plus"></i>
</a>                                                                    
                                                                </li>
                                                                <li>
<a href="javascript:void(0);" data-tooltip="Quick View" class="q-view" data-bs-toggle="modal" data-bs-target="#productModal" tabindex="0" onclick="callingQView(<?=$onSale1Res['qty_id']?>)">
    <i class="zmdi zmdi-eye"></i>
</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--on sale-->
                    
                    
                    <!--top rated-->
                    <div class="col-md-4">
                        <div class="single-ctg top-rated-ctg">
                            <div class="heading-title heading-style pos-rltv mb-50 text-center">
                                <h5 class="uppercase">Top Rated</h5>
                            </div>
                            
                            
                            <div class="ctg-slider-active">
                                <div class="single-ctg new-arrival-ctg">
                                    <?php
                                    $topRatedSql = mysqli_query($conn,"SELECT * FROM product LEFT JOIN qty_per_unit ON product.product_id = qty_per_unit.product_id WHERE product.status = 'Y' AND product.top_rated = 'Y' ORDER BY qty_per_unit.qty_id DESC LIMIT 2");
                                    while($topRatedRes = mysqli_fetch_assoc($topRatedSql)) {
                                        ?>
                                        <div class="single-ctg-item">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12 col-sm-6">
                                                    <div class="product-ctg-img pos-rltv product-overlay">
                                                        <a href="single-product.php?id=<?=base64_encode($topRatedRes['qty_id'])?>">
                                                            <img src="Admin/product_image/<?=$topRatedRes['image1']?>"
                                                                alt="" style="height:170px; width:170px;">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-sm-6">
                                                    <div class="product-ctg-content">
                                                        <p><?=$topRatedRes['product_name']?></p>
                                                        <p class="font-bold">
                                                            &#8377;<?=$topRatedRes['selling_priceee']?>
                                                            <span style="color:grey"><i><s>&#8377;<?=$topRatedRes['product_price']?></s> </i></span>
                                                        </p>
                                                        <div class="social-icon socile-icon-style-1 mt-15">
                                                            <ul>
                                                                <li>
<a href="javascript:void(0);" data-tooltip="Add To Cart" class="add-cart" data-placement="left" onclick="addCrtee(<?=$topRatedRes['qty_id']?>,1)">
    <i class="fa fa-cart-plus"></i>
</a>                                                                      
                                                                </li>
                                                                <li>
<a href="javascript:void(0);" data-tooltip="Quick View" class="q-view" data-bs-toggle="modal" data-bs-target="#productModal" tabindex="0" onclick="callingQView(<?=$topRatedRes['qty_id']?>)">
    <i class="zmdi zmdi-eye"></i>
</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                                
                                
                                
                                
                                <div class="single-ctg new-arrival-ctg">
                                    <?php
                                    $topRated1Sql = mysqli_query($conn,"SELECT * FROM product LEFT JOIN qty_per_unit ON product.product_id = qty_per_unit.product_id WHERE product.status = 'Y' AND product.top_rated = 'Y' ORDER BY qty_per_unit.qty_id DESC LIMIT 2 OFFSET 2");
                                    while($topRated1Res = mysqli_fetch_assoc($topRated1Sql)){
                                       ?>
                                        <div class="single-ctg-item">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12 col-sm-6">
                                                    <div class="product-ctg-img pos-rltv product-overlay">
                                                        <a href="single-product.php?id=<?=base64_encode($topRated1Res['qty_id'])?>">
                                                            <img src="Admin/product_image/<?=$topRated1Res['image1']?>"
                                                                alt="" style="height:170px; width:170px;">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-sm-6">
                                                    <div class="product-ctg-content">
                                                        <p><?=$topRated1Res['product_name']?></p>
                                                        <p class="font-bold">
                                                            &#8377;<?=$topRated1Res['selling_priceee']?>
                                                            <span style="color:grey"><i><s>&#8377;<?=$topRated1Res['product_price']?></s> </i></span>
                                                        </p>
                                                        <div class="social-icon socile-icon-style-1 mt-15">
                                                            <ul>
                                                                <li>
<a href="javascript:void(0);" data-tooltip="Add To Cart" class="add-cart" data-placement="left" onclick="addCrtee(<?=$topRated1Res['qty_id']?>,1)">
    <i class="fa fa-cart-plus"></i>
</a>                                                                     
                                                                </li>
                                                                <li>
<a href="javascript:void(0);" data-tooltip="Quick View" class="q-view" data-bs-toggle="modal" data-bs-target="#productModal" tabindex="0" onclick="callingQView(<?=$topRated1Res['qty_id']?>)">
    <i class="zmdi zmdi-eye"></i>
</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--top rated-->
                </div>
            </div>
        </div>
        <!--new-arrival on-sale Top-ratted area end-->

        <!--brand area are start-->
        <div class="brand-area ptb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="total-brand">
                            <?php
                            $logoSql = mysqli_query($conn,"SELECT * FROM `add_logos`");
                            while($logoRes = mysqli_fetch_assoc($logoSql)) {
                                ?>
                                <div class="brand-item">
                                    <div class="single-brand shadow-box">
                                        <a href="#">
                                            <img src="Admin/logos_img/<?=$logoRes['img']?>" alt="" style="width:168px; height:66px;">
                                        </a>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                            
                            
                            
                            
                            
                            
                            
                           
                            <!--<div class="brand-item">-->
                            <!--    <div class="single-brand shadow-box"><a href="#"><img src="images/brand/02.png"-->
                            <!--                alt=""></a></div>-->
                            <!--</div>-->
                            <!--<div class="brand-item">-->
                            <!--    <div class="single-brand shadow-box"><a href="#"><img src="images/brand/03.png"-->
                            <!--                alt=""></a></div>-->
                            <!--</div>-->
                            <!--<div class="brand-item">-->
                            <!--    <div class="single-brand shadow-box"><a href="#"><img src="images/brand/04.png"-->
                            <!--                alt=""></a></div>-->
                            <!--</div>-->
                            <!--<div class="brand-item">-->
                            <!--    <div class="single-brand shadow-box"><a href="#"><img src="images/brand/05.png"-->
                            <!--                alt=""></a></div>-->
                            <!--</div>-->
                            <!--<div class="brand-item">-->
                            <!--    <div class="single-brand shadow-box"><a href="#"><img src="images/brand/06.png"-->
                            <!--                alt=""></a></div>-->
                            <!--</div>-->
                            <!--<div class="brand-item">-->
                            <!--    <div class="single-brand shadow-box"><a href="#"><img src="images/brand/01.png"-->
                            <!--                alt=""></a></div>-->
                            <!--</div>-->
                            <!--<div class="brand-item">-->
                            <!--    <div class="single-brand shadow-box"><a href="#"><img src="images/brand/02.png"-->
                            <!--                alt=""></a></div>-->
                            <!--</div>-->
                            <!--<div class="brand-item">-->
                            <!--    <div class="single-brand shadow-box"><a href="#"><img src="images/brand/03.png"-->
                            <!--                alt=""></a></div>-->
                            <!--</div>-->
                            <!--<div class="brand-item">-->
                            <!--    <div class="single-brand shadow-box"><a href="#"><img src="images/brand/04.png"-->
                            <!--                alt=""></a></div>-->
                            <!--</div>-->
                            
                            
                            
                            
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--brand area are start-->

        <!--blog area are start-->
        <div class="blog-area pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="heading-title heading-style pos-rltv mb-50 text-center">
                            <h5 class="uppercase">Blog</h5>
                        </div>
                        <div class="total-blog">
                        <?php
                        $blog_sql = mysqli_query($conn,"SELECT * FROM `blog` ORDER BY id DESC");
                        while($blog_res = mysqli_fetch_assoc($blog_sql)) {
                            $blog_id = $blog_res['id'];
                            ?>
                            <div class="blog-item">
                                <div class="single-blog">
                                    <div class="blog-img pos-rltv product-overlay">
                                        <a href="single-blog.php?id=<?=base64_encode($blog_id)?>">
                                            <img src="Admin/blog_img/<?=$blog_res['thumbnail_img']?>" alt="" style="width:370px; height:270px;">
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-title">
                                            <h5 class="uppercase font-bold">
                                                <a href="single-blog.php?id=<?=base64_encode($blog_id)?>"><?=$blog_res['title']?></a>
                                            </h5>
                                            <div class="like-comments-date">
                                                <ul>
                                                    <li><a href="#"></a>
                                                    </li>
                                                    <li><a href="#"></a>
                                                    </li>
                                                    <li class="blog-date">
                                                        <a href="single-blog.php?id=<?=base64_encode($blog_id)?>">
                                                            <i class="zmdi zmdi-calendar-alt"></i><?=$blog_res['date']?>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="blog-text">
                                                <p>
                                                    <?php
                                                    $blog_desc = substr($blog_res['description'],0,150);
                                                    echo $blog_desc."...";
                                                    ?>
                                                </p>
                                            </div>
                                            <a class="read-more montserrat" href="single-blog.php?id=<?=base64_encode($blog_id)?>">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <?php
                        }
                        ?>    
                            
                            
                            
                            <!--<div class="blog-item">-->
                            <!--    <div class="single-blog">-->
                            <!--        <div class="blog-img pos-rltv product-overlay">-->
                            <!--            <a href="#">-->
                            <!--                <img src="images/blog/01.jpg" alt="">-->
                            <!--            </a>-->
                            <!--        </div>-->
                            <!--        <div class="blog-content">-->
                            <!--            <div class="blog-title">-->
                            <!--                <h5 class="uppercase font-bold"><a href="#">New fashion collection 2019</a>-->
                            <!--                </h5>-->
                            <!--                <div class="like-comments-date">-->
                            <!--                    <ul>-->
                            <!--                        <li><a href="#"><i class="zmdi zmdi-favorite-outline"></i>13-->
                            <!--                                Like</a>-->
                            <!--                        </li>-->
                            <!--                        <li><a href="#"><i class="zmdi zmdi-comment-outline"></i>03-->
                            <!--                                Comments</a>-->
                            <!--                        </li>-->
                            <!--                        <li class="blog-date"><a href="#"><i-->
                            <!--                                    class="zmdi zmdi-calendar-alt"></i>16 jun 2019</a></li>-->
                            <!--                    </ul>-->
                            <!--                </div>-->
                            <!--                <div class="blog-text">-->
                            <!--                    <p>It is a long established fact that a reader will be distracted by the-->
                            <!--                        readable content of a page when looking at its layout. The point of-->
                            <!--                        using.</p>-->
                            <!--                </div>-->
                            <!--                <a class="read-more montserrat" href="single-blog.html">Read More</a>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <!--<div class="blog-item">-->
                            <!--    <div class="single-blog">-->
                            <!--        <div class="blog-img pos-rltv product-overlay">-->
                            <!--            <a href="#"><img src="images/blog/02.jpg" alt=""></a>-->
                            <!--        </div>-->
                            <!--        <div class="blog-content">-->
                            <!--            <div class="blog-title">-->
                            <!--                <h5 class="uppercase font-bold"><a href="#">New fashion collection 2019</a>-->
                            <!--                </h5>-->
                            <!--                <div class="like-comments-date">-->
                            <!--                    <ul>-->
                            <!--                        <li><a href="#"><i class="zmdi zmdi-favorite-outline"></i>13-->
                            <!--                                Like</a>-->
                            <!--                        </li>-->
                            <!--                        <li><a href="#"><i class="zmdi zmdi-comment-outline"></i>03-->
                            <!--                                Comments</a>-->
                            <!--                        </li>-->
                            <!--                        <li class="blog-date"><a href="#"><i-->
                            <!--                                    class="zmdi zmdi-calendar-alt"></i>16 jun 2019</a></li>-->
                            <!--                    </ul>-->
                            <!--                </div>-->
                            <!--                <div class="blog-text">-->
                            <!--                    <p>It is a long established fact that a reader will be distracted by the-->
                            <!--                        readable content of a page when looking at its layout. The point of-->
                            <!--                        using.</p>-->
                            <!--                </div>-->
                            <!--                <a class="read-more montserrat" href="single-blog.html">Read More</a>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <!--<div class="blog-item">-->
                            <!--    <div class="single-blog">-->
                            <!--        <div class="blog-img pos-rltv product-overlay">-->
                            <!--            <a href="#"><img src="images/blog/03.jpg" alt=""></a>-->
                            <!--        </div>-->
                            <!--        <div class="blog-content">-->
                            <!--            <div class="blog-title">-->
                            <!--                <h5 class="uppercase font-bold"><a href="#">New fashion collection 2019</a>-->
                            <!--                </h5>-->
                            <!--                <div class="like-comments-date">-->
                            <!--                    <ul>-->
                            <!--                        <li><a href="#"><i class="zmdi zmdi-favorite-outline"></i>13-->
                            <!--                                Like</a>-->
                            <!--                        </li>-->
                            <!--                        <li><a href="#"><i class="zmdi zmdi-comment-outline"></i>03-->
                            <!--                                Comments</a>-->
                            <!--                        </li>-->
                            <!--                        <li class="blog-date"><a href="#"><i-->
                            <!--                                    class="zmdi zmdi-calendar-alt"></i>16 jun 2019</a></li>-->
                            <!--                    </ul>-->
                            <!--                </div>-->
                            <!--                <div class="blog-text">-->
                            <!--                    <p>It is a long established fact that a reader will be distracted by the-->
                            <!--                        readable content of a page when looking at its layout. The point of-->
                            <!--                        using.</p>-->
                            <!--                </div>-->
                            <!--                <a class="read-more montserrat" href="single-blog.html">Read More</a>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <!--<div class="blog-item">-->
                            <!--    <div class="single-blog">-->
                            <!--        <div class="blog-img pos-rltv product-overlay">-->
                            <!--            <a href="#"><img src="images/blog/01.jpg" alt=""></a>-->
                            <!--        </div>-->
                            <!--        <div class="blog-content">-->
                            <!--            <div class="blog-title">-->
                            <!--                <h5 class="uppercase font-bold"><a href="#">New fashion collection 2019</a>-->
                            <!--                </h5>-->
                            <!--                <div class="like-comments-date">-->
                            <!--                    <ul>-->
                            <!--                        <li><a href="#"><i class="zmdi zmdi-favorite-outline"></i>13-->
                            <!--                                Like</a>-->
                            <!--                        </li>-->
                            <!--                        <li><a href="#"><i class="zmdi zmdi-comment-outline"></i>03-->
                            <!--                                Comments</a>-->
                            <!--                        </li>-->
                            <!--                        <li class="blog-date"><a href="#"><i-->
                            <!--                                    class="zmdi zmdi-calendar-alt"></i>16 jun 2019</a></li>-->
                            <!--                    </ul>-->
                            <!--                </div>-->
                            <!--                <div class="blog-text">-->
                            <!--                    <p>It is a long established fact that a reader will be distracted by the-->
                            <!--                        readable content of a page when looking at its layout. The point of-->
                            <!--                        using.</p>-->
                            <!--                </div>-->
                            <!--                <a class="read-more montserrat" href="single-blog.html">Read More</a>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--blog area are end-->
<?php include('footer.php') ?>



