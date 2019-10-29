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
            <a href="#" class="img-prod"><img class="img-fluid" src="images/product-1.jpg" alt="Colorlib Template">
                <?php if (!empty($row['kmSP'])) { ?><span class="status"><?php echo $row['kmSP']; ?></span> <?php } ?>
                <div class="overlay"></div>
            </a>
            <div class="text py-3 pb-4 px-3 text-center">
                <h3><a href="#"><?php echo $row['tenSP']; ?></a></h3>
                <div class="d-flex">
                    <div class="pricing">
                        <p class="price">
                            <?php
                                if (!empty($row['kmSP'])) {
                                    $price = $row['giaSP'] - ($row['giaSP'] * $row['kmSP']) / 100; ?>
                                <span class="mr-2 price-dc"><?php echo $row['giaSP']; ?></span>
                            <?php
                                } else {
                                    $price = $row['giaSP'];
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