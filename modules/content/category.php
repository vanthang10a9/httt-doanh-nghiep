<?php
    //require 'core/DataProvider.php';
    $sql = "SELECT * FROM loaisanpham";
    $result = DataProvider::executeQuery($sql);
    $arrayCategory = array();
    while($row = mysqli_fetch_array($result)) {
        $arrayCategory[$row['idCL']] = $row['tenCL'];
    }
    $categories = sizeof($arrayCategory) - 4;
    if ($categories % 3 == 1) {
        $categories += 2;
    }
    else if ($categories %3 == 2) {
        $categories += 1;
    }
?>
<section class="ftco-section ftco-category ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6 order-md-last align-items-stretch d-flex">
                        <div class="category-wrap-2 ftco-animate img mb-4 align-self-stretch d-flex" style="background-image: url(images/category.jpg);">
                            <div class="text text-center">
                                <h2>Vegetables</h2>
                                <p>Protect the health of every home</p>
                                <p><a href="#" class="btn btn-primary">Shop now</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(images/category-1.jpg);">
                            <div class="text px-3 py-1">
                                <h2 class="mb-0"><a href="#"><?php echo ($arrayCategory[1]); ?></a></h2>
                            </div>
                        </div>
                        <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(images/category-2.jpg);">
                            <div class="text px-3 py-1">
                                <h2 class="mb-0"><a href="#"><?php echo ($arrayCategory[2]); ?></a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(images/category-3.jpg);">
                    <div class="text px-3 py-1">
                        <h2 class="mb-0"><a href="#"><?php echo ($arrayCategory[3]); ?></a></h2>
                    </div>
                </div>
                <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(images/category-4.jpg);">
                    <div class="text px-3 py-1">
                        <h2 class="mb-0"><a href="#"><?php echo ($arrayCategory[4]); ?></a></h2>
                    </div>
                </div>
            </div>
            <?php
                for($i = 0; $i < $categories; $i++) {
                    if(isset($arrayCategory[$i+4])) {
                        $nameCategory = $arrayCategory[$i+4];
                        $image = $i+4;
                    }
                    else {
                        $nameCategory = "";
                        $image = 1;
                    }
                ?>
                    <div class='col-md-4'>
                        <div class='category-wrap ftco-animate img mb-4 d-flex align-items-end' style='background-image: url(images/category-<?php echo $image; ?>.jpg);'>
                            <div class='text px-3 py-1'>
                                <h2 class='mb-0'><a href='#'><?php echo $nameCategory; ?></a></h2>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
        </div>
    </div>
</section>