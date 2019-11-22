<?php
include("includes/head.php");
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
                    <h1 class="h3 mb-2 text-gray-800">Danh sách danh mục</h1>

                    <!-- Table button -->
                    <div class="d-flex flex-row-reverse">
                        <button type="button" class="btn btn-secondary mb-1">
                            <i class="fa fa-sync-alt"></i>
                        </button>
                        <button type="button" id="add" class="btn btn-primary mb-1 mr-1" data-toggle="modal" data-target="#productModal">
                            <i class="fa fa-plus"></i>
                        </button>

                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Mã</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Giá</th>
                                            <th>Mô tả</th>
                                            <th>Loại sản phẩm</th>
                                            <th>Hình ảnh</th>
                                            <th>Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql = "SELECT * FROM sanpham sp INNER JOIN loaisanpham lsp ON sp.idCL = lsp.idCL";
                                        $result = DataProvider::executeQuery($sql);
                                        while ($row = mysqli_fetch_assoc($result)) {

                                            ?>
                                            <tr>
                                                <td><?php echo $row['maSP']; ?></td>
                                                <td><?php echo $row['tenSP']; ?></td>
                                                <td><?php echo $row['giaSP']; ?></td>
                                                <td><?php echo $row['motaSP']; ?></td>
                                                <td id="<?php echo $row['idCL']; ?>"><?php echo $row['tenCL']; ?></td>
                                                <td><img src="../images/products/<?php echo $row['hinhanhSP']; ?>" alt="" width="100px"></td>
                                                <td style="display:flex"></td>
                                            </tr>

                                        <?php } ?>
                                    </tbody>
                                    <tfoot>
                                    </tfoot>
                                </table>
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
    <!-- End of Page Wrapper -->

    <?php
    include('productmodal.php');
    include('includes/scroll-logout.php');
    include('includes/scripts.php')
    ?>
    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    <script type="text/javascript" charset="utf-8">
        //clear data when add acccount
        $('#add').click(function(e) {
            $("#product")[0].reset();
            $('#image-label').text("Chọn hình ảnh sản phẩm");
            $('.js-file-list').html('');
        });

        $('#dataTable').dataTable({
            "columnDefs": [{
                    "orderable": false,
                    "targets": [5, -1]
                },
                {
                    "targets": -1,
                    "data": null,
                    "defaultContent": '<button class="btn-xs btn-info m-1 edit"><i class="fa fa-edit"></i></button>' +
                        '<button class="btn-xs btn-danger m-1 delete"><i class="fa fa-trash"></i></button>'
                }
            ]
        });

        //handle edit button
        $('#dataTable tbody').on('click', '.btn-info', function(e) {
            //var productid = $(this).closest('tr').attr('id');
            var tds = $(this).closest('tr').find('td');
            var elements = [];
            for (i = 0; i < tds.length; i++) {
                if (i == 4) {
                    elements[i] = tds.eq(i).attr('id');
                } else if (i == 5) {
                    elements[i] = tds.eq(i).find('img').attr('src');
                } else {
                    elements[i] = tds.eq(i).text();
                }
            }

            $(".modal-body #product #productcode").val(elements[0]);
            $(".modal-body #product #productname").val(elements[1]);
            $(".modal-body #product #price").val(elements[2]);
            $(".modal-body #product #description").val(elements[3]);
            $(".modal-body #product #category").val(elements[4]);
            //set image
            var str = '<div class="mb-3">' +
                        '<img class="img-thumbnail js-file-image" style="width: 100px">' +
                        '</div>';
                    $('.js-file-list').html(str);
                    var imageSrc = elements[5];
                    var filename= imageSrc.split('/').pop()
                    $('.js-file-image').attr('src', imageSrc);
                    $('#image-label').text(filename);
            $("#productModal").modal("show");

        });

        $(document).ready(function() {
            $('#image').on('change', function() {
                var file = $(this)[0].files[0];

                var fileReader = new FileReader();
                fileReader.onload = function() {
                    var str = '<div class="mb-3">' +
                        '<img class="img-thumbnail js-file-image" style="width: 100px">' +
                        '</div>';
                    $('.js-file-list').html(str);
                    var imageSrc = event.target.result;
                    var fileName = file.name;
                    var fileSize = file.size;
                    $('.js-file-name').text(fileName);
                    $('.js-file-size').text(fileSize);
                    $('.js-file-image').attr('src', imageSrc);
                    $('#image-label').text(fileName);
                };
                fileReader.readAsDataURL(file);
            });
        });
    </script>

</body>

</html>