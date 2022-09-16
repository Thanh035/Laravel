<?php
    if(isset($_POST['query'])) {
        $query = $_POST['query'];
    $select_product = "SELECT * FROM product 
    WHERE description LIKE '%$query%' 
    OR product_name LIKE '%$query%' 
    AND status = '1' ";
    $productDisplay =  executeResult($select_product);

?>
<style>
    .search-main .title-header{
        font-size: 26px;
        font-weight: 400;
        display: inline-block;
        padding-right: 10px;
        background: #fff;
    }
</style>

<section class="bread-crumb" >
        <div class="container">
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
                                <span> KẾT QUẢ TÌM KIẾM VỚI TỪ KHÓA "<?php echo $query ?>"</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</section>

<section class="signup search-main">
    <div class="container">
        <div class="row">
            <?php
                if($productDisplay != null) {
                    echo'<h1 class="title-header">Có '.count($productDisplay).' kết quả tìm kiếm phù hợp</h1>';
                    foreach($productDisplay as $item) {?>
                        <div class="col-3" >
                            <div class="product-box">
                                <div class="product-thumbnail">
                                    <a href="index.php?page=details&id=<?php echo $item["id"]?>">
                                        <img src="img/product/<?php echo $item['thumbnail']?>" alt="<?php echo $item['thumbnail'] ?>">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name"><a href="index.php?page=details&id=<?php echo $item["id"]?>"><?php echo $item['product_name'] ?></a></h3>
                                    <div class="price-box">
                                        <div class="special-price">
                                            <span><?php echo number_format($item['price'], 0, ',', '.')?>₫</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            <?php } ?>
        </div>
      <?php  } else {
            echo "<h1 class='title-header'>Không tìm thấy bất kỳ kết quả nào với từ khóa trên.</h1>";
        }
            }
        ?>
    </div>
</section>