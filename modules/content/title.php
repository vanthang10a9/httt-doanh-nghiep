<?php
$pageName = basename($_SERVER['PHP_SELF']);
switch ($pageName) {
    case 'contact.php':
        $title = 'Liên hệ';
        break;
    case 'about.php':
        $title = 'Thông tin cửa hàng';
        break;
    case 'blog.php':
        $title = 'Blog';
        break;
    case 'shop.php':
        $title = 'Tất cả sản phẩm';
        break;
    case 'wishlist.php':
        $title = 'Sản phẩm yêu thích';
        break;
    case 'product-single.php':
        $title = "Thông tin sản phẩm";
        break;
    case 'cart.php':
        $title = "Giỏ hàng";
        break;
    case 'checkout.php':
        $title = "Thanh toán";
        break;
    default:
        $title = '';
}
?>
<div class="hero-wrap hero-bread" style="background-image: url('images/products/background_title.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                < <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span><?php echo $title;?></span></p>
                    <h1 class="mb-0 bread"><?php echo $title;?></h1>
            </div>
        </div>
    </div>
</div>