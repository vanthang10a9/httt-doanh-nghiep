<?php
    //require 'core/DataProvider.php';
    $sql = "SELECT * FROM loaisanpham";
    $result = DataProvider::executeQuery($sql);
    $arrayMACL = array();
    $arrayCategory = array();
    $arrayImages = array();
    while($row = mysqli_fetch_array($result)) {
        $arrayMACL[] = $row['MACL'];
        $arrayCategory[$row['MACL']] = $row['TENCL'];
        $arrayImages[$row['MACL']] = $row['HINHANHSP'];
    }
?>
<section class="ftco-section ftco-category ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6 order-md-last align-items-stretch d-flex">
                        <div class="category-wrap-2 ftco-animate img mb-4 align-self-stretch d-flex" style="background-image: url(images/products/background1.png);">
                            <div class="text text-center">
                                <h2>Pizza</h2>
                                <p>Vị ngon trên từng mẫu bánh</p>
                                <p><a href="#" class="btn btn-primary">Mua ngay</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(images/products/TruyenThong.png);">
                            <div class="text px-3 py-1">
                                <h2 class="mb-0"><a href="shop.php?category=<?php echo $arrayMACL[1]; ?>"><?php echo ($arrayCategory[1]); ?></a></h2>
                            </div>
                        </div>
                        <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(images/products/ThapCam.png);">
                            <div class="text px-3 py-1">
                                <h2 class="mb-0"><a href="shop.php?category=<?php echo $arrayMACL[2]; ?>"><?php echo ($arrayCategory[2]); ?></a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(images/products/HaiSanCaoCap.png);">
                    <div class="text px-3 py-1">
                        <h2 class="mb-0"><a href="shop.php?category=<?php echo $arrayMACL[3]; ?>"><?php echo ($arrayCategory[3]); ?></a></h2>
                    </div>
                </div>
                <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(images/products/NhanNhoi.png);">
                    <div class="text px-3 py-1">
                        <h2 class="mb-0"><a href="shop.php?category=<?php echo $arrayMACL[4]; ?>"><?php echo ($arrayCategory[4]); ?></a></h2>
                    </div>
                </div>
            </div>
            <?php
                for($i = 5; $i <= 7; $i++) {
                        $nameCategory = $arrayCategory[$i];
                        $image = $arrayImages[$i];                                    
                ?>
                    <div class='col-md-4'>
                        <div class='category-wrap ftco-animate img mb-4 d-flex align-items-end' style='background-image: url(images/products/<?php echo $image; ?>.png);'>
                            <div class='text px-3 py-1'>
                                <h2 class='mb-0'><a href="shop.php?category=<?php echo $arrayMACL[$i]; ?>"><?php echo $nameCategory; ?></a></h2>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
        </div>
    </div>
</section>