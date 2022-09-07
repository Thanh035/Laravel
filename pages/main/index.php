<section class="slide_first">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12" style="padding: 0;">
                    <div class="slide-show-skate" width="100px">
                        <div class="in-sss">
                            <a href="">
                                <img src="img/slideforall/slider_1.webp" width="100%" height="auto" alt="">
                            </a>
                        </div>
                        <div class="in-sss">
                            <a href="">
                                <img src="img/slideforall/slider_2.webp" width="100%" height="auto" alt="">
                            </a>
                        </div>
                        <div class="in-sss">
                            <a href="">
                                <img src="img/slideforall/slider_3.webp" width="100%" height="auto" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="slide_second">
        <div class="container">
            <div class="in_banner_first">
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                        <div class="owl-item">
                            <div class="item">
                                <a href="">
                                    <img src="https://bizweb.dktcdn.net/100/345/407/themes/706150/assets/banner-1.png?1656415239934" width="100%" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="item">
                                <a href="">
                                    <img src="https://bizweb.dktcdn.net/100/345/407/themes/706150/assets/banner-2.png?1656415239934" width="100%" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="item">
                                <a href="">
                                    <img src="https://bizweb.dktcdn.net/100/345/407/themes/706150/assets/banner-3.png?1656415239934" width="100%" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="item">
                                <a href="">
                                    <img src="https://bizweb.dktcdn.net/100/345/407/themes/706150/assets/banner-1.png?1656415239934" width="100%" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="item">
                                <a href="">
                                    <img src="https://bizweb.dktcdn.net/100/345/407/themes/706150/assets/banner-2.png?1656415239934" width="100%" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="item">
                                <a href="">
                                    <img src="https://bizweb.dktcdn.net/100/345/407/themes/706150/assets/banner-3.png?1656415239934" width="100%" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="item">
                                <a href="">
                                    <img src="https://bizweb.dktcdn.net/100/345/407/themes/706150/assets/banner-1.png?1656415239934" width="100%" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="item">
                                <a href="">
                                    <img src="https://bizweb.dktcdn.net/100/345/407/themes/706150/assets/banner-2.png?1656415239934" width="100%" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="item">
                                <a href="">
                                    <img src="https://bizweb.dktcdn.net/100/345/407/themes/706150/assets/banner-3.png?1656415239934" width="100%" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="banner_first">
        <div class="container in_bf">
            <a href="" class="img-banner1 i_b">
                <img src="https://bizweb.dktcdn.net/100/345/407/themes/706150/assets/banner.png?1656415239934" width="100%" alt="">
            </a>
        </div>
    </section>
    <section class="tab_product">
        <div class="container">
            <div class="title-section">
                <h2> FEATURE PRODUCT </h2>
            </div>
            <div class="e_tabs">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="title_tabs">
                                <ul>
<?php 
    $select_category="select * from category";
    $categoryList = executeResult($select_category);
        foreach($categoryList as $item) {
?>
                                    <li class="">
                                        <a href="javascript:void(0);" onclick="process('tab_<?php echo $item['id'] ?>')">
                                            <span><?php echo $item['name'] ?></span>
                                        </a>
                                    </li>
  <?php }?>                                  
                                </ul>
                                <div class="content_tabs">
                                    <div class="products">
                                        <div class="owl-stage-outer">
    <?php
        foreach($categoryList as $item) {
            $count = $item['id'];
            $query_product = "SELECT * FROM product WHERE status = 1 AND category_id = '$count' ";
            $list = executeResult($query_product);
     ?>
                                            <div class="owl-stage-2 container" id="tab_<?php echo $count ?>">
                                                <div class="owl-item-2 row">
                            <?php foreach($list as $product) { ?>                        
                                                    <div class="item col-lg-3 col-md-6 col-sm-6">
                                                        <div class="product-box">
                                                            <div class="product-thumbnail">
                                                                <a href="index.php?page=details&id=<?php echo $product["id"]?>">
                                                                    <img src="img/product/<?php echo $product['thumbnail']?>" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="product-info">
                                                                <h3 class="product-name">
                                                                    <a href="index.php?page=details&id=<?php echo $product["id"]?>">
                                                                        <?php echo $product['product_name']?>
                                                                    </a>
                                                                </h3>
                                                                <div class="price-box">
                                                                    <div class="special-price">
                                                                        <span><?php echo number_format($product['price'], 0, ',', '.')?>₫</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                            <?php }  ?>                        
                                                </div>
                                            </div>    
      <?php }?>                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="banner_second mb-0">
        <div class="sale-off" style="background-image: url(//bizweb.dktcdn.net/100/345/407/themes/706150/assets/sale_bg.png?1656415239934);background-size: cover; padding: 60px 0 50px;">
            <div class="container">
                <div class="title-section">
                    <h2 style="font-weight: 500 !important;">
                        <a href="index.php?page=category&id=1">
                            Skateboarding
                        </a>
                    </h2>
                </div>
                <div class="title-section view_more">
                    <a href="index.php?page=category&id=1">Xem thêm
                        <i class="fa-solid fa-circle-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="slide_third bg_gray mb-0">
        <div class="container in-slide_third">
            <div class="owl-carosel">
                <div class="owl-stage-3">
                    <div class="owl-item">
                        <div class="brand-item">
                            <a href="">
                                <img src="img/slideforall/brand/brand1.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="brand-item">
                            <a href="">
                                <img src="img/slideforall/brand/brand2.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="brand-item">
                            <a href="">
                                <img src="img/slideforall/brand/brand3.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="brand-item">
                            <a href="">
                                <img src="img/slideforall/brand/brand4.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="brand-item">
                            <a href="">
                                <img src="img/slideforall/brand/brand5.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="brand-item">
                            <a href="">
                                <img src="img/slideforall/brand/brand6.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="brand-item">
                            <a href="">
                                <img src="img/slideforall/brand/brand7.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="brand-item">
                            <a href="">
                                <img src="img/slideforall/brand/brand8.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="brand-item">
                            <a href="">
                                <img src="img/slideforall/brand/brand9.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="brand-item">
                            <a href="">
                                <img src="img/slideforall/brand/brand10.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
<script>
    function process(tabShow){
        $('.owl-stage-2').hide();
        
        $('#'+tabShow).show();
    }
</script>
<script>
    $('.owl-stage-2').hide();

    $( '.owl-stage-2' ).each(function( index ) {
    if(index == 0){
        $( this ).show();
    }
    });
</script>
<script>
    function addCart()
    {
        var count_item_pr= parseInt($('.count_item_pr').html());
        count_item_pr++;
        $('.count_item_pr').html(count_item_pr);
    }
</script>
