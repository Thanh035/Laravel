<title><?php echo $infoList['title'] ?></title>
<section class="slide_first">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12" style="padding: 0;">
                    <div class="slide-show-skate" width="100px">
                    <?php
        $select_gallery= "select * from gallery";
        $galleryList = executeResult($select_gallery);
        foreach($galleryList as $item) {
            echo "
                <div class='in-sss'>
                    <a href='index.php?page=category&id=1'>
                        <img src='img/banner/".$item['thumbnail']."' width='100%' height='auto'>
                    </a>
                </div>
            ";
        }
    ?>
                    </div>
                </div>
            </div>
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
                                    <li class="" >
                                        <a href="javascript:void(0);" onclick="process('tab_<?php echo $item['id'] ?>')" >
                                            <span style="color: black;"><?php echo $item['name'] ?></span>
                                        </a>
                                    </li>
  <?php }?>                                  
                                </ul>
                                <div class="content_tabs">
                                    <div class="products">
                                        <div class="owl-stage-outer">
    <?php
        foreach($categoryList as $item) {
            $tab = $item['id'];
            $query_product = "SELECT * FROM product WHERE status = 1 AND category_id = '$tab' ";
            $list = executeResult($query_product);
     ?>
                                            <div class="owl-stage-2 container" id="tab_<?php echo $tab ?>">
                                                <div class="owl-item-2 row">
                            <?php 
                            $count = 0;
                            foreach($list as $product) { ?>                        
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
                            <?php
                            if(++$count == 12) {
                                break;
                            }
                        }  ?>                        
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

   

