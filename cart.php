<?php
session_start();
//print_r($_SESSION);
//xử lý khi người dùng chỉnh sửa đơn hàng

//kiểm tra giỏ hàng có tồn tại sản phẩm
$ok = 1;
if (isset($_SESSION['cart'])) {
	foreach ($_SESSION['cart'] as $k => $v) {
		if (isset($k))
			$ok = 2;
			
	}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>PizzaHot - Cart</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

	<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/aos.css">

	<link rel="stylesheet" href="css/ionicons.min.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">


	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body class="goto-here">
	<?php
	include('modules/header.php');
	include('modules/content/title.php'); //tieu de & hinh nen tieu de
	?>

	<section class="ftco-section ftco-cart">
		<div class="container">
			<div class="row">
				<div class="col-md-12 ftco-animate">
					<?php
					if ($ok == 2) {
						?>
						<div class="cart-list">
							<table class="table">
								<thead class="thead-primary">
									<tr class="text-center">
										<th>&nbsp;</th>
										<th>&nbsp;</th>
										<th>Tên sản phẩm</th>
										<th>Giá</th>
										<th>Số lượng</th>
										<th>Tổng tiền</th>
									</tr>
								</thead>
								<tbody>
									<?php
										//tìm kiếm, hiển thị tất cả sản phẩm có id trong session
										foreach ($_SESSION['cart'] as $key => $value) {
											$item[] = "'" . $key . "'";
										}
										$str = implode(",", $item);
										$query = "SELECT * FROM sanpham WHERE MASP IN ($str)";
										$results = DataProvider::executeQuery($query);
										$totalPrice = 0;
										while ($row = mysqli_fetch_array($results)) {
											$idSP = $row['MASP'];
											?>

										<tr class="text-center" id="product-<?php echo $row['MASP']; ?>">
											<td class="product-remove"><a id="delete-product-<?php echo $row['MASP']; ?>" href=""><span class="ion-ios-close"></span></a></td>

											<td class="image-prod">
												<div class="img" style="background-image:url(images/products/<?php echo $row['HINHANHSP'] ?>); width:150px;"></div>
											</td>

											<td class="product-name">
												<h3><?php echo $row['TENSP']; ?></h3>
											</td>

											<?php
													//tính giá tiền nếu có khuyến mãi + tổng tiền
													if (!empty($row['KMSP'])) {
														$price = $row['GIASP'] - ($row['GIASP'] * $row['KMSP']) / 100;
													} else {
														$price = $row['GIASP'];
													}

													$totalPrice += $price * $_SESSION['cart'][$row['MASP']];

													?>
											<td class="price"><?php echo $price ?></td>

											<td class="quantity">
												<div class="input-group mb-3">
													<input type="text" name="quantity" class="quantity form-control input-number" value="<?php echo $_SESSION['cart'][$row['MASP']]; ?>" min="1" max="100">
												</div>
											</td>

											<td class="total"><?php echo ($price * $_SESSION['cart'][$row['MASP']]); ?></td>

											<!-- xóa giỏ sản phẩm bằng ajax cho nó chuyên nghiệp :D -->
											<script type="text/javascript">
												$("a#delete-product-<?php echo $row['MASP']; ?>").click(function(e) {
													e.preventDefault();
													$.ajax({
														type: "POST",
														url: "delete-cart.php?id=<?php echo $row['MASP']; ?>",
														success: function(results) {
															$('#product-<?php echo $row['MASP']; ?>').remove();
														}
													});
												});
											</script>
										</tr><!-- END TR-->
									<?php
										}
										?>

								</tbody>
							</table>
						</div>
						<div class="row justify-content-end">
							<!-- Phần khuyến mại + thanh toán: thương mại điện tử làm -->
							<!-- <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
					<div class="cart-total mb-3">
						<h3>Coupon Code</h3>
						<p>Enter your coupon code if you have one</p>
						<form action="#" class="info">
							<div class="form-group">
								<label for="">Coupon code</label>
								<input type="text" class="form-control text-left px-3" placeholder="">
							</div>
						</form>
					</div>
					<p><a href="checkout.php" class="btn btn-primary py-3 px-4">Apply Coupon</a></p>
				</div>
				<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
					<div class="cart-total mb-3">
						<h3>Estimate shipping and tax</h3>
						<p>Enter your destination to get a shipping estimate</p>
						<form action="#" class="info">
							<div class="form-group">
								<label for="">Country</label>
								<input type="text" class="form-control text-left px-3" placeholder="">
							</div>
							<div class="form-group">
								<label for="country">State/Province</label>
								<input type="text" class="form-control text-left px-3" placeholder="">
							</div>
							<div class="form-group">
								<label for="country">Zip/Postal Code</label>
								<input type="text" class="form-control text-left px-3" placeholder="">
							</div>
						</form>
					</div>
					<p><a href="checkout.php" class="btn btn-primary py-3 px-4">Estimate</a></p>
				</div> -->
							<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
								<div class="cart-total mb-3">
									<h3>Thanh toán</h3>
									<p class="d-flex">
										<span>Tiền sản phẩm</span>
										<span><?php echo $totalPrice; ?></span>
									</p>
									<p class="d-flex">
										<span>Phí vận chuyển</span>
										<span>15000</span>
									</p>
									<!-- <p class="d-flex">
							<span>Discount</span>
							<span>$3.00</span>
						</p> -->
									<hr>
									<p class="d-flex total-price">
										<span>Tổng tiền</span>
										<span><?php echo (int) $totalPrice + 15000; ?></span>
									</p>
								</div>
								<p><a href="checkout.php" class="btn btn-primary py-3 px-4">Thanh toán</a></p>
							</div>
						</div>
				</div>
			<?php } else { ?>
				<p>Không có sản phẩm nào trong giỏ hàng</p>
			<?php } ?>
			</div>
		</div>
	</section>

	<?php include('modules/content/subcribe.php'); ?>
	<?php include('modules/footer.php'); ?>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/aos.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/scrollax.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="js/google-map.js"></script>
	<script src="js/main.js"></script>

	<script>
		$('.nav-item-cart').addClass("active");
	</script>

	<script>
		$(document).ready(function() {

			var quantitiy = 0;
			$('.quantity-right-plus').click(function(e) {

				// Stop acting like a button
				e.preventDefault();
				// Get the field name
				var quantity = parseInt($('#quantity').val());

				// If is not undefined

				$('#quantity').val(quantity + 1);


				// Increment

			});

			$('.quantity-left-minus').click(function(e) {
				// Stop acting like a button
				e.preventDefault();
				// Get the field name
				var quantity = parseInt($('#quantity').val());

				// If is not undefined

				// Increment
				if (quantity > 0) {
					$('#quantity').val(quantity - 1);
				}
			});

		});
	</script>

</body>

</html>