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
                    <h1 class="h3 mb-2 text-gray-800">Danh sách nhập hàng</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Tên nhà cung cấp</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Ngày nhập</th>
                                            <th>Tổng tiền</th>
                                            <th>Chi tiết</th>
                                            <th>Duyệt</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql = "SELECT * FROM donnhap d INNER JOIN nhacungcap ncc ON d.MANCC = ncc.MANCC INNER JOIN sanpham sp ON d.MASP = sp.MASP WHERE d.DUYET = 0";
                                        $result = DataProvider::executeQuery($sql);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row['TENNCC']; ?></td>
                                                <td><?php echo $row['TENSP']; ?></td>
                                                <td><?php echo $row['NGAYNHAP']; ?></td>
                                                <td><?php echo $row['TONGTIEN']; ?></td>
                                                <td></td>
                                                <td></td>
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
    include('ordermodal.php');
    include('includes/scroll-logout.php');
    include('includes/scripts.php');
    include('deleteModal.php');
    ?>
    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    <script type="text/javascript">
        $('#dataTable').dataTable({
            "columnDefs": [{
                    "orderable": false,
                    "targets": [4, 5]
                },
                {
                    "targets": 4,
                    "data": null,
                    "defaultContent": '<button class="btn btn-outline-primary m-1 ct">Chi tiết</button>'
                },
                {
                    "targets": -1,
                    "data": null,
                    "defaultContent": '<button class="btn btn-outline-info m-1 activation"><i class="fa fa-check"></i></button>' +
                        '<button class="btn btn-outline-danger m-1 delete"><i class="fa fa-times"></i></button>'
                }
            ]
        });
        $('#dataTable tbody').on('click', '.ct', function(e) {
            //var productid = $(this).closest('tr').attr('id');
            //bodyalert("kakak");
            $("#ordermodal").modal("show");
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
<style>
    .ct {
        padding: 0.3rem 0.3rem;
    }
</style>

</html>