<?php
session_start();
require('core/DataProvider.php');
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');

//Nếu không phải là sự kiện đăng ký thì không xử lý
if(isset($_POST['user-action'])) {
    if ($_POST['user-action'] == 'login') {
        if (isset($_POST['txtUsername']) && isset($_POST['txtPassword'])) {
            //die('');
            $username   = addslashes($_POST['txtUsername']);
            $password   = addslashes($_POST['txtPassword']);
            $sql = "SELECT * FROM taikhoan WHERE USERNAME='$username' AND PASSWORD='$password' LIMIT 1";
            $result = DataProvider::executeQuery($sql);
            $row = mysqli_fetch_assoc($result);
            if($row['DUYET']=='1') {
                $_SESSION['username'] = $username;
            }
            echo json_encode($row);
        }
        // if ($result = DataProvider::executeQuery('SELECT * FROM taikhoan')) {
        //     if ($result != null) {
        //         while ($row = mysqli_fetch_array($result)) {
        //             if ($row['USERNAME'] == $username) {
        //                 if ($row['PASSWORD'] == $password) {
        //                     echo "Đăng nhập thành công ! <a href='../../../HTTT/index.php'>Về trang chủ</a>";
        //                     $_SESSION['username'] = $username;
        //                     //header("Location: ../../index.php"); //điều hướng tự chuyển hướng về home
        //                     break;
        //                 } else {
        //                     echo "Password không đúng !  <a href='javascript: history.go(-1)'>Trở lại</a>";
        //                     //header("Location: login.html?status=false"); //tự chuyển về lại trang login.html
        //                 }
        //             }
        //         }
        //         // if(!isset($_SESSION['username'])){
        //         //     echo "Đăng nhập không thành công !";
    
        //         // }
        //     }
        // }
    }
}

if(isset($_POST['logout'])) {
    unset($_SESSION['username']);
    header('location: login.php');
}

if(isset($_POST['order-action'])) {
    if($_POST['order-action']=='add') {
        $idUser = $_POST['idUser'];
        $tongtien = $_POST['tongtien'];
        $date = date("Y-m-d");

        $sql = "INSERT INTO donhang(IDUSER, TONGTIEN, NGAYDH, STATUS, MANV) VALUES('$idUser', '$tongtien', '$date', '0', '26')";
        $run = DataProvider::executeQuery($sql);
        $id =  DataProvider::executeQuery("SELECT max(MADH) AS id FROM donhang");
        $row = mysqli_fetch_assoc($id);
        echo $row['id'];
    }

    if($_POST['order-action']=='add-detail') {
        $MASP = $_POST['masp'];
        $SOLUONG = $_POST['quantity'];
        $GIASP = $_POST['price'];
        $MADH = $_POST['madh'];

        $sql = "INSERT INTO chitietdonhang(MADH, MASP, SOLUONG, GIASP) VALUES('$MADH', '$MASP', '$SOLUONG', '$GIASP')";
        $run = DataProvider::executeQuery($sql);
        //echo $sql;
        echo $run;
    }
}
