<main style="margin-top: 150px;" id="top-main">
<?php 
    if(isset($_GET['page'])) {
        $temp = $_GET['page'];
    }
    else {
        $temp = '';
    }

    if($temp=='category') {
        include("main/category.php");
    }
    else if($temp=='cart') {
        include("main/cart.php");
    }
    else if($temp=='details') {
        include("main/details.php");
    }
    else if($temp=='contact') {
        include("main/contact.php");
    }
    else if($temp=='news') {
        include("main/news.php");
    }
    else if($temp=='register') {
        include("user/register.php");
    }
    else if($temp=='login') {
        include("user/login.php");
    }
    else if($temp=='checkout') {
        include("main/checkout.php");
    }
    else if($temp=='search') {
        include("main/search.php");
    }
    else {
        include("main/index.php");
    }
?>
</main>