<?php
if(basename($_SERVER['PHP_SELF'], ".php") == "product-single") {
    $limit = 4;
}
else {
    $limit = 8;
}
$sql = "SELECT * FROM sanpham ORDER BY RAND() LIMIT $limit";
$result = DataProvider::executeQuery($sql);
while ($row = mysqli_fetch_array($result)) {
    ?>
    <div class="col-md-6 col-lg-3 ftco-animate">
        <div class="product">
            <a href="#" class="img-prod"><img class="img-fluid" src="images/products/<?php echo $row['HINHANHSP']; ?>" alt="Colorlib Template">
                <?php if (($row['KMSP'])!=0) { ?><span class="status"><?php echo $row['KMSP']; ?>%</span> <?php } ?>
                <div class="overlay"></div>
            </a>
            <div class="text py-3 pb-4 px-3 text-center">
                <h3><a href="#"><?php echo $row['TENSP']; ?></a></h3>
                <div class="d-flex">
                    <div class="pricing">
                        <p class="price">
                            <?php
                                if ($row['KMSP']!=0) {
                                    $price = $row['GIASP'] - ($row['GIASP'] * $row['KMSP']) / 100; ?>
                                <span class="mr-2 price-dc"><?php echo $row['GIASP']; ?></span>
                            <?php
                                } else {
                                    $price = $row['GIASP'];
                                }
                                ?>
                            <span class="price-sale"><?php echo $price; ?></span>
                        </p>
                    </div>
                </div>
                <div class="bottom-area d-flex px-3">
                    <div class="m-auto d-flex">
                        <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                            <span><i class="ion-ios-menu"></i></span>
                        </a>
                        <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                            <span><i class="ion-ios-cart"></i></span>
                        </a>
                        <a href="#" class="heart d-flex justify-content-center align-items-center ">
                            <span><i class="ion-ios-heart"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>