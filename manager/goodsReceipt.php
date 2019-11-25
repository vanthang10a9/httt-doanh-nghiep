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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Danh sách nhập hàng</h1>
                        <a href="" id="export" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Xuất báo cáo nhập</a>
                    </div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div id="button"></div>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Tên nhà cung cấp</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Ngày nhập</th>
                                            <th>Tổng tiền</th>
                                            <th class="noExp">Chi tiết</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql = "SELECT * FROM donnhap d INNER JOIN NHACUNGCAP ncc ON d.maNCC = ncc.maNCC INNER JOIN sanpham sp ON d.maSP = sp.maSP WHERE d.duyet=1";
                                        $result = DataProvider::executeQuery($sql);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row['tenNCC']; ?></td>
                                                <td><?php echo $row['tenSP']; ?></td>
                                                <td><?php echo $row['ngaynhap']; ?></td>
                                                <td><?php echo $row['tongtien']; ?></td>
                                                <td class="noExp"></td>
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
    include('includes/scripts.php');
    ?>
    <script src="vendor/jquery/jquery.table2excel.js"></script>
    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>



    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    <script type="text/javascript">
        $('#dataTable').dataTable({
            "columnDefs": [{
                    "orderable": false,
                    "targets": 4
                },
                {
                    "targets": 4,
                    "data": null,
                    "defaultContent": '<button class="btn btn-outline-primary m-1 ct">Chi tiết</button>'

                }
            ],
        });
        $('#dataTable tbody').on('click', '.ct', function(e) {
            //var productid = $(this).closest('tr').attr('id');
            //bodyalert("kakak");
            $("#ordermodal").modal("show");
        });
        //export report
        $("a#export").click(function() {
            $("#dataTable").table2excel({
                // exclude CSS class
                name: "Worksheet Name",
                exclude: ".noExp",
                filename: "DS_hoadon_nhap", //do not include extensi
                fileext: ".xls", // file extension
                exclude_img: true,
                exclude_links: true,
                exclude_inputs: true,
            });
        });
    </script>

</body>
<style>
    .ct {
        padding: 0.3rem 0.3rem;
    }
</style>

</html>