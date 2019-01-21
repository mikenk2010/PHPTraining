<?php 
    require 'classes/user.class.php';

    session_start();

    $Id=$_SESSION['ID'];
    $First=isset($_POST['first'])? $_POST['first'] :'' ;
    $Last=isset($_POST['last'])? $_POST['last'] :'' ;
    $Address=isset($_POST['Address'])? $_POST['Address'] :'' ;

    $Gender=isset($_POST['gender']) ? $_POST['gender'] : '' ;
    if($Gender=='male') 
        $Gender=0; 
    else 
        $Gender=1;
    
    $Status=isset($_POST['status'])? $_POST['status'] :'';
    if($Status=='inactive') 
        $Status=false;
    else
        $Status=true;
    
    $Day=$_POST['day'];
    $Month=$_POST['month'];
    $Year=$_POST['year'];
    $Date=new DateTime();
    $Str="$Year-$Month-$Day";
    $Date=date_create_from_format('Y-m-d',$Str);
    $Arr=[$First, $Last, $Gender, $Address, $Date->format('Y-m-d'), $Status];

    print_r($Arr);
    echo $Id;
    try
    {
        $Connect= new User();
        $Connect->updateUser($Arr,$Id);
        echo '<script type="text/javascript">';
        echo 'alert("Cập nhật thành công");';
        //echo 'location="index.php"';
        echo '</script>';
    }
    catch (PDOException $e)
    {
        echo '<script type="text/javascript">';
        echo 'alert("Cập nhật không thành công,vui lòng thử lại");';
        echo 'location="index.php"';
        echo '</script>';
    }
?>