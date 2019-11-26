<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	if (!isset($_GET['id'])) {
		header('location: shop.php');
	} else {
		$idSP = $_GET['id'];
	}
	?>
	<title>PizzaHot - product-single</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

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
	
	<section class="ftco-section">
		<div class="container">
			<div class="row">
				<?php
				$sql = "SELECT * FROM sanpham WHERE MASP =  '$idSP'";
				$result = DataProvider::executeQuery($sql);
				$row = mysqli_fetch_assoc($result);
				?>
				<div class="col-lg-6 mb-5 ftco-animate">
					<a href="images/products/<?php echo $row['HINHANHSP']; ?>" class="image-popup"><img src="images/products/<?php echo $row['HINHANHSP']; ?>" class="img-fluid" alt="Colorlib Template"></a>
				</div>
				<div class="col-lg-6 product-details pl-md-5 ftco-animate">
					<h3><?php echo $row['TENSP']; ?></h3>
					<div class="rating d-flex">
						<p class="text-left mr-4">
							<a href="#" class="mr-2">5.0</a>
							<a href="#"><span class="ion-ios-star-outline"></span></a>
							<a href="#"><span class="ion-ios-star-outline"></span></a>
							<a href="#"><span class="ion-ios-star-outline"></span></a>
							<a href="#"><span class="ion-ios-star-outline"></span></a>
							<a href="#"><span class="ion-ios-star-outline"></span></a>
						</p>
						<p class="text-left mr-4">
							<a href="#" class="mr-2" style="color: #000;">100 <span style="color: #bbb;">Rating</span></a>
						</p>
						<p class="text-left">
							<a href="#" class="mr-2" style="color: #000;">500 <span style="color: #bbb;">Sold</span></a>
						</p>
					</div>
					<p class="price">
						<?php
						if (!empty($row['KMSP'])) {
							$price = $row['GIASP'] - ($row['GIASP'] * $row['KMSP']) / 100; ?>
							<span class="mr-2 price-dc"><?php echo $row['GIASP']; ?></span>
						<?php
						} else {
							$price = $row['GIASP'];
						}
						?>
						<span class="price-sale"><?php echo $price; ?></span></p>
					<p><?php echo $row['MOTASP'] ?>
					</p>
					<div class="row mt-4">
						<div class="col-md-6">
							<div class="form-group d-flex">
								<div class="select-wrap">
									<div class="icon"><span class="ion-ios-arrow-down"></span></div>
									<select name="" id="" class="form-control">
										<option value="">Nhỏ</option>
										<option value="">Vừa</option>
										<option value="">To</option>
										<option value="">Đặc biệt</option>
									</select>
								</div>
							</div>
						</div>
						<div class="w-100"></div>
						<div class="input-group col-md-6 d-flex mb-3">
							<span class="input-group-btn mr-2">
								<button type="button" class="quantity-left-minus btn" data-type="minus" data-field="">
									<i class="ion-ios-remove"></i>
								</button>
							</span>
							<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
							<span class="input-group-btn ml-2">
								<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
									<i class="ion-ios-add"></i>
								</button>
							</span>
						</div>
						<div class="w-100"></div>
						<div class="col-md-12">
							<p style="color: #000;"><?php
									$soluong = "";
								
								if($row['SOLUONGSP'] >= 1) $soluong ="Còn &nbsp" . $row['SOLUONGSP'] . " &nbsp cái";
								else $soluong = "Hết hàng";
								echo $soluong;
							?></p>
						</div>
					</div>
					<p><a href="" class="btn btn-black py-3 px-5" id="add-cart">Thêm vào giỏ hàng</a></p>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center mb-3 pb-3">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<span class="subheading">Sản phẩm</span>
					<h2 class="mb-4">Sản phẩm liên quan</h2>
					<p>Một số gợi ý của của những người đã ăn loại trên thường sẽ thích thêm những loại bên dưới.</p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<?php 
					include('modules/content/featured-product.php');
				?>
			</div>
		</div>
	</section>

<?php include('modules/content/subcribe.php') ?>

	<?php include('modules/footer.php'); ?>
	<style>
		p.price span.price-dc {
			text-decoration: line-through;
			color: #b3b3b3;
		}
	</style>

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

			$('a#add-cart').click(function(e) {
				e.preventDefault(); 
/* xử lí alert ko đủ hàng nhưng lỗi
				let slcon = <?php echo $row['SOLUONGSP'] ?>;
				slcon = parseInt(slcon);
				let slmua = parseInt($('#quantity').val());
				slmua = parseInt(slmua);
				if(slcon<slmua){
					
					alert("Không đủ hàng !");
					return;
				}

*/
		item = {'id': <?php echo $idSP ;?>, 'quantity': $('#quantity').val()}
				$.ajax({
					type: "POST",
					url: "addcart.php",
					data: item,
					cache: false,
					success: function(results) {
						console.log(results);
					}
				})
			});

		});
	</script>

</body>

</html>