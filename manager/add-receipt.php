<?php
include("includes/head.php");
$s_suppliers = "SELECT * FROM nhacungcap";
$run_suppliers = DataProvider::executeQuery($s_suppliers);
//
$s_categories = "SELECT * FROM loaisanpham";
$run_categories = DataProvider::executeQuery($s_categories);
while ($row = mysqli_fetch_assoc($run_categories)) {
    $arr_categories[] = $row;
}
//
$s_products = "SELECT * FROM sanpham";
$run_products = DataProvider::executeQuery($s_products);
while ($row = mysqli_fetch_assoc($run_products)) {
    $arr_products[] = $row;
}
?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include('includes/sidebar.php'); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include('includes/topbar.php'); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Thêm đơn nhập</h1>

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <div class="row justify-content-md-center">
                                <div class="col-lg-11">
                                    <div class="p-5">
                                        <form>
                                            <div class="form-group">
                                                <select required class="form-control" id="supplier">
                                                    <option value="" disabled selected>Chọn nhà cung cấp</option>
                                                    <option value="">Thêm nhà cung cấp mới...</option>
                                                    <?php while ($row = mysqli_fetch_assoc($run_suppliers)) { ?>
                                                        <option value="<?php echo $row['MANCC']; ?>"><?php echo $row['TENNCC']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <input class="form-control" type="text" placeholder="Người nhập " readonly>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input class="form-control" type="text" placeholder="<?php echo date('d/m/Y'); ?>" readonly>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="form-group row add-product struc" style="display:none">
                                                <div class="col-sm-12 mb-0">
                                                    <h1 class="h5 text-gray-900 mb-2">Nhập sản phẩm</h1>
                                                </div>
                                                <div class="col-sm-12 mb-3 mb-0">
                                                    <select required class="form-control category">
                                                        <option value="" disabled selected>Chọn danh mục</option>
                                                        <option value="">Thêm danh mục mới...</option>
                                                        <?php foreach ($arr_categories as $row) { ?>
                                                            <option value="<?php echo $row['MACL']; ?>"><?php echo $row['TENCL']; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6 mb-3 mb-0">
                                                    <select required class="form-control product">
                                                        <option value="" disabled selected>Chọn sản phẩm</option>
                                                        <option value="">Thêm sản phẩm mới...</option>
                                                        <?php foreach ($arr_products as $row) { ?>
                                                            <option value="<?php echo $row['MASP']; ?>" macl="<?php echo $row['MACL']; ?>"><?php echo $row['TENSP']; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="col-sm-3">
                                                    <input type="number" value="0" class="form-control soluong" min="1" placeholder="Số lượng nhập">
                                                </div>
                                                <div class="col-sm-3">
                                                    <input type="number" value="0" class="form-control gianhap" min="1" placeholder="Giá nhập">
                                                </div>
                                            </div>
                                            <div class="form-group row add-product">
                                                <div class="col-sm-12 mb-0">
                                                    <h1 class="h5 text-gray-900 mb-2">Nhập sản phẩm</h1>
                                                </div>
                                                <div class="col-sm-12 mb-3 mb-0">
                                                    <select required class="form-control category">
                                                        <option value="" disabled selected>Chọn danh mục</option>
                                                        <option value="">Thêm danh mục mới...</option>
                                                        <?php foreach ($arr_categories as $row) { ?>
                                                            <option value="<?php echo $row['MACL']; ?>"><?php echo $row['TENCL']; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6 mb-3 mb-0">
                                                <select required class="form-control product">
                                                        <option value="" disabled selected>Chọn sản phẩm</option>
                                                        <option value="">Thêm sản phẩm mới...</option>
                                                        <?php foreach ($arr_products as $row) { ?>
                                                            <option value="<?php echo $row['MASP']; ?>" macl="<?php echo $row['MACL']; ?>"><?php echo $row['TENSP']; ?></option>
                                                        <?php } ?>
                                                    </select>

                                                </div>
                                                <div class="col-sm-3">
                                                    <input type="number" value="0" class="form-control soluong" min="1" placeholder="Số lượng nhập">
                                                </div>
                                                <div class="col-sm-3">
                                                    <input type="number" value="0" class="form-control gianhap" min="1" placeholder="Giá nhập">
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-outline-primary mb-1 mr-1 b-add" data-toggle="tooltip" data-placement="top" title="Thêm sản phẩm">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                            <hr>
                                            <div class="col-sm-6 mb-3 mb-0">
                                                Tổng tiền: <label id="total">0</label> VNĐ
                                            </div>

                                            <hr>

                                            <a href="" id="submit" class="btn btn-primary btn-user btn-block">
                                                Thêm đơn hàng
                                            </a>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include('includes/footer.php'); ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <?php
    include('includes/scroll-logout.php');
    include('includes/scripts.php')
    ?>
    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    <script type="text/javascript" charset="utf-8">
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
        //add div container product
        $('.b-add').click(function(e) {
            $(this).before('<hr>', $('.struc').clone(true).removeClass('struc').removeAttr('style'));
        });

        var updateTotal = function() {

            var sumtotal;
            var sum = 0;
            var price = 0;
            var quantity = 0;
            var subtotal = 0;
            //Add each product price to total
            $(".add-product").each(function() {
                price = $('.gianhap', this).val();
                quantity = $('.soluong', this).val();

                //Total for one product
                subtotal = price * quantity;
                //alert(typeof(sum));
                sum += subtotal;
            });




            $('#total').html(sum.toString());
        };

        //Update total when quantity changes
        $(".soluong").change(function() {
            updateTotal();
        });

        $(".gianhap").keyup(function() {
            updateTotal();
        });


        $('select#supplier').on('change', function() {
            if ($(this)[0].selectedIndex == 1) {
                location.href = 'categories.php';
            }
        });

        var initProduct = function() {
            $('.add-product').each(function() {


                if ($('select.category', this).val() != null) {
                    $('datalist option', this).attr('disabled', 'disabled');
                    //alert("aaa");
                    //console.log($('.category', this).val());
                    //$('datalist option[idcl="' + $('.category', this).val() + '"]', this).prop('disabled', false);
                    // // add this code to select 1'st of streets automaticaly 
                    // // when city changed
                } else {
                    console.log("ssss");
                }
                // if ($('.datalist option[idcl="' + cat + '"]', this).length) {
                //     $('.datalist option[idcl="' + cat + '"]', this).first().prop('selected', true);
                // }
                // // in case if there's no corresponding street: 
                // // reset select element
                // else {
                //     $('.datalist', this).val('');
                // };
            });
        }

        $('.category').on('change', function() {
            //alert($(this).val());
            initProduct();
        });
    </script>

</body>

</html>
<style>
    input::-webkit-calendar-picker-indicator {
        display: none;
    }

    .gianhap::-webkit-inner-spin-button,
    .gianhap::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
</style>