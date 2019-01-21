<?php 
    require 'classes/user.class.php';

    session_start();

    $First=$_SESSION['first'];
    $Last=$_SESSION['last'];
    $Address=isset($_POST['Address'])? $_POST['Address'] :'' ;

    $Gender=isset($_POST['gender']) ? $_POST['gender'] : '' ;
    if($Gender=='male') 
        $Gender=false; 
    else 
        $Gender=true;
    
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
    $Arr=[$Gender, $Address, $Date->format('Y-m-d'), $Status];

    try
    {
        $Connect= new User();
        $Connect->updateUser($Arr,$First,$Last);
        echo '<script type="text/javascript">';
        echo 'alert("Cập nhật thành công");';
        echo 'location="index.php"';
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