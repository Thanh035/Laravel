<?php 
        $id = getGET('id');
        $select_product = "select product.*,category.name as category_name from product inner join category where product.id = '$id'and product.category_id = category.id";
        $productDetail = executeResult($select_product,1);
        if($productDetail == null) {
            header('Location: index.php');
            die();
        }

        //Write API
        if(isset($_POST['add_to_cart'])) {
            $amount = $_POST['quantity'];
            $select_product = "select * from product where id = '$id'";
            $productList = executeResult($select_product,true);
    
            $product_name = $productList['product_name'];
            $price = $productList['price'];
            $thumbnail = $productList['thumbnail'];
            
            $cart = []; //tao mang gio hang rong
            if(isset($_COOKIE['cart'])) { 
                $json = $_COOKIE['cart']; //Khoi tao json
                $cart = json_decode($json,true);//Chuyen chuoi json sang dang mang
            } 
            
                    $isFind = false;
                    foreach($cart as $item) {
                        if($item['id'] == $id) {
                            $item['amount'] = $item['amount']+$amount;
                            $item['total_price'] = $item['amount']*$item['price'];
                            $isFind = true;
                            break;
                        }
                    }
                    
                    if($isFind==false) {
                        $cart[] = [
                            'id'=>$id,
                            'product_name'=>$product_name,
                            'price'=>$price ,
                            'amount'=>$amount ,
                            'thumbnail'=>$thumbnail,
                            'total_price'=>$price*$amount 
                        ];
                    }
                    //Update cookie
                    setcookie('cart', json_encode($cart),time() + 30*24*60*60,'/');
        }
?>
    <title><?php echo $productDetail['product_name']?></title>
    <section class="bread-crumb">
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
                                <a href="index.php?page=category&id=1">
                                    <span>Sản phẩm</span>
                                </a>                                        
                            </li>
                            <li>
                                <i class="fa-solid fa-angle-right"></i>
                            </li>
                            <li>
                                <span><?php echo $productDetail['product_name']?></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="detail_Product">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="detail_image">
                        <img src="img/product/<?php echo $productDetail['thumbnail']?>" width="100%" alt="product_img">
                    </div>
                </div>
                <div class="col-6">
                    <form class="detail_info" method="post">
                        <h1 class="title_detail_info"><?php echo $productDetail['product_name']?></h1>
                        <div class="brand_detail_info">
                            <span class="line"> | </span>
                            <span><b>Danh mục: </b></span>
                            <?php echo $productDetail['category_name']?>
                        </div>
                        <div class="price_detail_info">
                            <div class="special-price">
                                <span><?php echo number_format($productDetail['price'], 0, ',', '.')?>₫</span>
                            </div>
                        </div>
                        <div class="rte description">
                            <?php echo $productDetail['description']?>
                        </div>
                        <div class="custom custom-btn-number f-left">																			
                            <span class="qtyminus" data-field="quantity"><i class="fa fa-caret-left"></i></span>
                            <input type="text" class="qty" data-field="quantity" title="Só lượng" value="1" maxlength="12" id="qty" name="quantity">									
                            <span class="qtyplus" data-field="quantity">
                                <i class="fa fa-caret-right"></i>
                            </span>										
                        </div>
                        <!-- <button type="button" class="btn"  -->
                        <!-- onclick="addToCart(<?php echo $id?>)"> -->
                        <!-- Thêm vào giỏ hàng -->
                        <!-- </button> -->
                        <button type="submit" name="add_to_cart">Thêm vào giỏ hàng</button>
                    </form>
                </div>
                <div class="col-12">
                    <div class="mo-ta">
                        <ul class="text-mo-ta">
                            <li>
                                <h3>
                                    <span>Mô tả</span>
                                </h3>
                            </li>
                        </ul>
                        <div class="box-mo-ta">
                            <div class="chi-tiet-mo-ta">
                                <?php echo $productDetail['description']?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- <script type="text/javascript">
	function addToCart(id) {
		$.post(
            'api/cookie.php',
             { 'action': 'add',
			'id': id,
			'amount': 1 },
         function(data) {
			location.reload() }
        );
	}
</script> -->