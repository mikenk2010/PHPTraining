<?php
    require 'Classes/User.class.php';

    session_start();

    $Id=$_SESSION['ID'];
    if(!empty($_GET))
        $Id=$_GET['ID'];
    $arr=[$Id];
    try
    {    
        $Connect=new User();
        $Connect->deleteUser($arr);
        echo '<script type="text/javascript">';
        echo 'alert("Xóa thành công");';
        echo 'location="index.php"';
        echo '</script>';
    }
    catch (PDOException $e)
    {
        echo '<script type="text/javascript">';
        echo 'alert("Xóa không thành công,vui lòng thử lại");';
        echo 'location="index.php"';
        echo '</script>';
    }
?>