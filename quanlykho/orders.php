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
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Tên</th>
                                            <th>Địa chỉ</th>
                                            <th>Số điện thoại</th>
                                            <th>Tổng tiền</th>
                                            <th>Thời gian đặt</th>
                                            <th>Chi tiết</th>
                                            <th>Trạng thái</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql = "SELECT * FROM donhang";
                                        $result = DataProvider::executeQuery($sql);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row['nameDH']; ?></td>
                                                <td><?php echo $row['addressDH']; ?></td>
                                                <td><?php echo $row['phoneDH']; ?></td>
                                                <td><?php echo $row['tongtienDH']; ?></td>
                                                <td><?php echo $row['ngayDH']; ?></td>
                                                <td></td>
                                                <td><?php echo $row['statusDH']; ?></td>
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
    include('ordermodal.php');
    include('includes/scroll-logout.php');
    include('includes/scripts.php')
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
                    "targets": [5, 6]
                },
                {
                    "targets": 5,
                    "data": null,
                    "defaultContent": '<button class="btn btn-outline-primary m-1 ct">Chi tiết</button>'
                }
            ]
        });
        $('#dataTable tbody').on('click', '.ct', function(e) {
            //var productid = $(this).closest('tr').attr('id');
            //bodyalert("kakak");
            $("#ordermodal").modal("show");
        });
    </script>

</body>
<style>
    .ct {
        padding: 0.1rem 0.1rem;
    }
</style>

</html>