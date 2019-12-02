<?php
require('../core/DataProvider.php');
if(isset($_POST['action-dh'])) {
    if($_POST['action-dh'] == 'select-detail') {
        $id = $_POST['id'];
        $sql = "SELECT * FROM chitietdonhang ct INNER JOIN sanpham sp ON ct.MASP = sp.MASP WHERE ct.MADH = '$id'";
        $result = DataProvider::executeQuery($sql);
        $table = "";
        while($row = mysqli_fetch_assoc($result)) {
            $table .= "<tr>";
            $table .= "<td><img src='../images/products/".$row['HINHANHSP']."' alt='' width='100px'></td>";
            $table .= "<td>".$row['TENSP']."</td>";
            $table .= "<td>".$row['GIASP']."</td>";
            $table .= "<td>".$row['SOLUONG']."</td>";
            $table .= "</tr>";
        }
        
        print $table;
    }       
}

if(isset($_POST['action-dn'])) {
    if($_POST['action-dn'] == 'select-detail') {
        $id = $_POST['id'];
        $sql = "SELECT * FROM chitietdonnhap ct INNER JOIN sanpham sp ON ct.MASP = sp.MASP WHERE ct.MADN = '$id'";
        $result = DataProvider::executeQuery($sql);
        $table = "";
        while($row = mysqli_fetch_assoc($result)) {
            $table .= "<tr>";
            $table .= "<td><img src='../images/products/".$row['HINHANHSP']."' alt='' width='100px'></td>";
            $table .= "<td>".$row['TENSP']."</td>";
            $table .= "<td>".$row['GIANHAP']."</td>";
            $table .= "<td>".$row['SOLUONG']."</td>";
            $table .= "</tr>";
        }
        
        print $table;
    }       
}

if(isset($_POST['action-receipt'])) {
    if($_POST['action-receipt'] == "activation") {
        $id = $_POST['id'];
        $sql = "UPDATE donnhap SET DUYET = 1 WHERE MADN='$id'";
        $run = DataProvider::executeQuery($sql);
        echo $run;
    }

    if($_POST['action-receipt'] == "delete") {
        $id = $_POST['id'];
        $sql = "DELETE FROM chitietdonnhap WHERE MADN='$id'";
        $run = DataProvider::executeQuery($sql);
        $sql = "DELETE FROM donnhap WHERE MADN='$id'";
        $run = DataProvider::executeQuery($sql);
        echo $run;
    }
}

if(isset($_POST['action-supplier'])) {
    if($_POST['action-supplier'] == "activation") {
        $id = $_POST['id'];
        $sql = "UPDATE nhacungcap SET DUYET = 1 WHERE MANCC='$id'";
        $run = DataProvider::executeQuery($sql);
        echo $run;
    }

    if($_POST['action-supplier'] == "delete") {
        $id = $_POST['id'];
        $sql = "DELETE FROM sanpham WHERE MANCC='$id'";
        $run = DataProvider::executeQuery($sql);
        $sql = "DELETE FROM nhacungcap WHERE MANCC='$id'";
        $run = DataProvider::executeQuery($sql);
        echo $id;
    }
}
?>