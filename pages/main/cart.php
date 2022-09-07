<style>
    .cart_desktop_page {
    margin: 0px;
}
</style>
<title>Giỏ hàng</title>

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
                                <span>Giỏ hàng</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php 
     $cart = [];
     if(isset($_COOKIE['cart'])) {
         $json = $_COOKIE['cart'];
         $cart = json_decode($json, true);
        $totals_price = 0;
    ?>
                 <div class="box-heading container" style="margin-bottom: 30px;">
                    <h1 style="font-size: 25px;" class="title-header">
                        <span>Giỏ hàng của bạn</span>
                    </h1>
                </div>
                
<section class="col-main cart_desktop_page cart-page text-center">
            <div class="row title-head col-12">
                                <div class="col-5 text-center">
                                    <h6>
                                        <span>
                                            <b>Sản phẩm</b>
                                        </span>
                                    </h6>
                                </div>
                                <div class="col-2 text-center">
                                    <h6>
                                        <span>
                                            <b>Đơn giá</b>
                                        </span>
                                    </h6>
                                </div>
                                <div class="col-2 text-center">
                                    <h6>
                                        <span>
                                            <b>Số lượng</b>
                                        </span>
                                    </h6>
                                </div>
                                <div class="col-2 text-center">
                                    <h6>
                                        <span>
                                            <b>Thành tiền</b>
                                        </span>
                                    </h6>
                                </div>
                                <div class="col-1"></div>
                            </div>

            </div>

            <div class="main container hidden-xs">
                        <form  method="post" class="main container hidden-xs">
                            <?php 
                                    foreach($cart as $cart_item) {
                                        $cart_item["total_price"] = $cart_item["price"] * $cart_item["amount"];
                                        $totals_price += $cart_item["total_price"];
                                echo '
                            <div class="row" >
                                <div class="col-2">
                                    <div class="img-detail-cart">
                                        <a href="index.php?page=details&id='. $cart_item["id"].'">
                                            <img src="img/product/'. $cart_item['thumbnail'].'" width="100%" alt="'. $cart_item['thumbnail'].'">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="name-detail-cart">
                                        <h6 style="font-weight:100;">
                                            <span>
                                                '.$cart_item["product_name"] .'
                                            </span>
                                        </h6>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="price-detail-cart">                              
                                        <b>
                                            <span>
                                            ' .number_format($cart_item['price'], 0, ',', '.').'
                                            </span>
                                            <u>
                                                <span>
                                                đ
                                                </span>
                                            </u>
                                        </b>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="custom custom-btn-number number f-left">																			
                                        <span class="qtyminus minus" data-field="quantity"><i class="fa-solid fa-minus"></i></span>
                                        <input type="text" class="qty" data-field="quantity" title="Só lượng" value="'. $cart_item['amount'] .' maxlength="12" id="qty" name="quantity">									
                                        <span class="qtyplus plus" data-field="quantity"><i class="fa-solid fa-plus"></i></i></span>	
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="total-price-detail-cart">                              
                                        <b>
                                            <span>
                                                '.number_format($cart_item['amount'] * $cart_item['price'], 0, ',', '.') .'
                                            </span>
                                            <u>
                                                <span>
                                                đ
                                                </span>
                                            </u>
                                        </b>
                                    </div>
                                </div>
                                <div class="col-1">
                                    <div class="deleteProduct">
                                        <button style="border: none">
                                            <i class="fa-solid fa-xmark"></i>
                                            <span>
                                                Xóa
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                                ';} ?>
                        </form>
            </div> 

            <div class="cart-collaterals cart_submit container">
                    <div class="totals col-sm-12 col-md-12 col-xs-12">
                            <div class="totals">
                                <div class="inner">
                                        <table class="table shopping-cart-table-total margin-bottom-0" id="shopping-cart-totals-table">
                                            <tr style="float: right;">
                                                <td colspan="20" class="a-right"></td>
                                                <td class="a-right">
                                                    <span>Tổng tiền:</span>
                                                <strong>
                                                    <span class="totals_price price text-danger">
                                                        <?php echo number_format($totals_price, 0, ',', '.')?> ₫
                                                    </span>
                                                </strong>
                                                </td>
                                            </tr>
                                        </table>
                                                <ul class="checkout col-4" style="float: right;display:flex" >
                                                    <li>
                                                    <button class="btn btn-primary " title="Tiến hành đặt hàng" type="button" style="background-color: #f1f1f1;">
                                                            <span style=" text-transform: initial; ">Tiến hành đặt hàng</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                    <button class="btn btn-success " title="Tiếp tục mua hàng" type="button" >
                                                            <span style=" text-transform: initial; ">Tiếp tục mua hàng</span>
                                                        </button>
                                                    </li>    
                                                </ul>
                                                <li style="clear: both;"></li>
                                </div>
                            </div>     
                    </div>                          
            </div>
</section>
<?php
 } else {
    echo '
<section class="main-cart-page main-container col1-layout container" >

	<div class="cart-mobile hidden-md hidden-lg hidden-sm" style="height:300px; ">
		<form action="/cart" method="post" novalidate="" class="margin-bottom-0">
			<div class="header-cart" style="background:#fff;">
				
				<div class="title-cart">
					<h3>Giỏ hàng của bạn</h3>
                    <p>Không có sản phẩm nào trong giỏ hàng. Quay lại <a href="index.php?page=category&id=1" style="color: ">cửa hàng</a> để mua sắm.</p>
				</div>
				
			</div>

			<div class="header-cart-content" style="background:#fff;"></div>

		</form>
    
	</div>

</section>';
} ?>
<script>

</script>
