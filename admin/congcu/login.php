<?php
    session_start();
    require('../../../HTTT/core/DataProvider.php');
    //Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');
    //Nếu không phải là sự kiện đăng ký thì không xử lý
    if (!isset($_POST['txtUsername'])){
        die('');
    }

    $username   = addslashes($_POST['txtUsername']);
    $password   = addslashes($_POST['txtPassword']);

    $password=md5($password);

    if($result=DataProvider::executeQuery('SELECT * FROM taikhoan')){
        if ($result != null) {
            while ($row = mysqli_fetch_array($result)) {
                if($row['USERNAME']==$username){
                    if($row['PASSWORD']==$password){
                        echo "Đăng nhập thành công ! <a href='../../../HTTT/index.php'>Về trang chủ</a>";
                        $_SESSION['username']=$username;
                        //header("Location: ../../index.php"); //điều hướng tự chuyển hướng về home
                        break;
                    }else{
                        echo "Password không đúng !  <a href='javascript: history.go(-1)'>Trở lại</a>";
                       
                        //header("Location: login.html?status=false"); //tự chuyển về lại trang login.html
                    }                 
                }
            }
            // if(!isset($_SESSION['username'])){
            //     echo "Đăng nhập không thành công !";
                
            // }
    }
}
?>