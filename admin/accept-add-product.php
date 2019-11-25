<?php
include("includes/head.php");
$sql = "SELECT * FROM loaisanpham ORDER BY idCL";
$result = DataProvider::executeQuery($sql);
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

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="dataTables_length">
                                            <label>
                                                <select id="categories" class="custom-select custom-select-sm form-control form-control-sm">
                                                    <option value="" selected>Tìm theo danh mục</option>
                                                    <?php
                                                    while ($row = mysqli_fetch_assoc($result)) { ?>
                                                        <option value="<?php echo $row['tenCL']; ?>"><?php echo $row['tenCL']; ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="dataTables_length">
                                            <label style="display:inline-block">
                                                Tìm theo giá
                                                <input class="form-control form-control-sm" id="minp">
                                                đến
                                                <input class="form-control form-control-sm" id="maxp">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Mã</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Nhà cung cấp</th>
                                            <th>Loại sản phẩm</th>
                                            <th>Số lượng</th>
                                            <th>Duyệt</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql = "SELECT * FROM themsanpham tsp 
                                                INNER JOIN sanpham sp ON tsp.maSP = sp.maSP
                                                INNER JOIN loaisanpham lsp ON tsp.idCL = lsp.idCL 
                                                INNER JOIN nhacungcap ncc ON tsp.maNCC = ncc.maNCC";
                                        $result = DataProvider::executeQuery($sql);
                                        while ($row = mysqli_fetch_assoc($result)) {

                                            ?>
                                            <tr>
                                                <td><?php echo $row['maSP']; ?></td>
                                                <td><?php echo $row['tenSP']; ?></td>
                                                <td><?php echo $row['tenNCC']; ?></td>
                                                <td><?php echo $row['tenCL']; ?></td>
                                                <td><?php echo $row['soluong']; ?></td>
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

    <!-- activation modal-->
    <div class="modal fade" id="activationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Chấp nhận đăng kí tài khoản</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <a href="" class="btn btn-primary">
                        Chấp nhận
                    </a>
                    <a href="" class="btn btn-secondary">
                        Thoát
                    </a>
                </div>
            </div>
        </div>
    </div>

    <?php
    include('productmodal.php');
    include('includes/scroll-logout.php');
    include('includes/scripts.php');
    include('deleteModal.php');
    ?>
    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    <script type="text/javascript" charset="utf-8">
        $('#dataTable').dataTable({
            "columnDefs": [{
                    "orderable": false,
                    "targets": [5, -1]
                },
                {
                    "targets": -1,
                    "data": null,
                    "defaultContent": '<button class="btn btn-outline-info m-1 activation"><i class="fa fa-check"></i></button>' +
                        '<button class="btn btn-outline-danger m-1 delete"><i class="fa fa-times"></i></button>'
                }
            ]
        });


        $(document).ready(function() {
            var table = $('#dataTable').DataTable();

            $('#categories').on('change', function() {
                table.columns(4).search(this.value).draw();
            });
        });
        /* Custom filtering function which will search data in column four between two values */
        $.fn.dataTable.ext.search.push(
            function(settings, data, dataIndex) {
                var min = parseInt($('#minp').val(), 10);
                var max = parseInt($('#maxp').val(), 10);
                var price = parseFloat(data[2]) || 0; // use data for the age column

                if ((isNaN(min) && isNaN(max)) ||
                    (isNaN(min) && price <= max) ||
                    (min <= price && isNaN(max)) ||
                    (min <= price && price <= max)) {
                    return true;
                }
                return false;
            }
        );

        $(document).ready(function() {
            var table = $('#dataTable').DataTable();

            // Event listener to the two range filtering inputs to redraw on input
            $('#minp, #maxp').keyup(function() {
                table.draw();
            });
        });

        //Handle click on "Edit" button
        $('#dataTable tbody').on('click', '.activation', function(e) {
            var userid = $(this).closest('tr').attr('id');
            var tds = $(this).closest('tr').find('td');
            $("#activationModal").modal("show");

        });

        //Handle click on "delete" button
        $('#dataTable tbody').on('click', '.delete', function(e) {
            var userid = $(this).closest('tr').attr('id');
            var tds = $(this).closest('tr').find('td');
            $("#deleteModal").modal("show");
        });
    </script>

</body>

</html>