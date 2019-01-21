<?php
    require_once 'Classes/Role.class.php';
    require_once 'Classes/User.class.php';

    print_r($_GET);
    $User=$_GET['User'];
    $Role=$_GET['Role'];
    $Model=new Role();
    $Arr=[$User,$Role];
    $Model->createUserRole($Arr);
?>