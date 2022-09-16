<style>
    .all_Product .main-content .search-text{
        width: 100%;
        border-radius: 1px;
}
</style>

<title>Sản phẩm</title>
    <section class="bread-crumb container">
            <div class="row">
                <div class="col-12">
                    <div class="list-inline">
                        <ul>
                            <li>
                                <i class="fa-solid fa-house"></i>
                                <a href="index.php">
                                    <span>Trang chủ</span>
                                </a>
                            </li>
                            <li>
                                <i class="fa-solid fa-angle-right"></i>
                            </li>
                            <li>
                                <span>Sản phẩm</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
    </section>

    <section class="sidebar_Aproduct container">
            <div class="row">
                <div class="col-3">
                    <div class="title-sidebar">
                        <ul>
                            <div class="in-title-sidebar">
                                <strong>DANH MỤC</strong>
                            </div>
                            <li>
                                <a href="index.php">
                                    <i class="fa-solid fa-caret-right"></i>
                                    <span>Home</span>
                                </a>
                            </li>
<?php 
        $select_category = "select * from category ";
        $categoryList = executeResult($select_category);

    foreach($categoryList as $items) {
        echo "
        <li>   
            <a href='index.php?page=category&id=".$items["id"]."'>
                <i class='fa-solid fa-caret-right'></i>
                <span>".$items['name']."</span> 
            </a>                            
        </li>
        ";
    }
?>
                        </ul>
                    </div>
                </div>
                <div class="col-9">
                    <div class="all_Product">
                        <div class="title_Product">
                            <div class="tt hidden-sm hidden-xs inline-block" style="font-weight: bold;">
                                <div class="view-mode">
                                        <?php 
                                                // $per_page_record = 4;
                                                // if (!isset ($_GET['view']) ) {
                                                // $view = 1;
                                                // } else {
                                                // $view = $_GET['view'];
                                                // }
                                                // $start_from = ($view-1) * $per_page_record;

                                        $id = $_GET['id'];
                                        $query_category= "select * from category  where id = '$id' ";
                                        $category_name = executeResult($query_category,1);
                                        echo $category_name['name'];
                                    ?>
                                </div>
                                <div class="hidden-sm hidden-xs" style="font-size: 12px;">
                                    (
                                        <?php 
                                             $countProduct = executeResult("SELECT COUNT(id) AS countProduct FROM product WHERE category_id = $id AND status = 1",1) ;
                                            echo $countProduct['countProduct'];
                                        ?>
                                        sản phẩm
                                    )
                                </div>
                            </div>
                            <!-- <div class="sort-by" id="sort-by">
                                <ul>
                                    <li class="in-sort-by">
                                        <span>Sắp xếp theo
                                            <i class="fa-solid fa-angle-down"></i>
                                        </span>
                                        <ul>
                                            <li><a href="">Mặc định</a></li>
                                            <li><a href="">A → Z</a></li>
                                            <li><a href="">Z → A</a></li>
                                            <li><a href="">Giá tăng dần</a></li>
                                            <li><a href="">Giá giảm dần</a></li>
                                            <li><a href="">Hàng mới nhất</a></li>
                                            <li><a href="">Hàng cũ nhất</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>                       -->
                        </div>
                        <div class="main-content container">
                            <div class="row">
                        
<?php 
$query_productByCategory = "SELECT *,product.id as product_id from product inner join category WHERE product.category_id = category.id AND category.id = '$id' AND product.status = 1";
$productInfo = executeResult($query_productByCategory);
foreach($productInfo as $item) {?>
                                <div class="col-3" >
                                    <div class="product-box">
                                        <div class="product-thumbnail">
                                            <a href="index.php?page=details&id=<?php echo $item["product_id"]?>">
                                                <img src="img/product/<?php echo $item['thumbnail']?>" alt="<?php echo $item['thumbnail'] ?>">
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-name"><a href="index.php?page=details&id=<?php echo $item["product_id"]?>"><?php echo $item['product_name'] ?></a></h3>
                                            <div class="price-box">
                                                <div class="special-price">
                                                    <span><?php echo number_format($item['price'], 0, ',', '.')?>₫</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
<?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>