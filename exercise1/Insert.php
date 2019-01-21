<?php
    require 'Classes/User.class.php';

    if(!empty($_POST))
    {
        $First=isset($_POST['first']) ? $_POST['first'] :'';
        $Last=isset($_POST['last']) ? $_POST['last'] :'';
        $Address=isset($_POST['Address'])? $_POST['Address'] :'';
    
        $Gender=isset($_POST['gender']) ? $_POST['gender'] : '';
        if($Gender=='male') 
            $Gender=false; 
        else 
            $Gender=true;
        
        $Status=isset($_POST['status'])? $_POST['status'] :'';
        if($Status=='inactive')
            $Status=false;
        else
            $Status=true;

        echo $Status.'<br>';
        $Day=$_POST['day'];
        $Month=$_POST['month'];
        $Year=$_POST['year'];
        $Date=new DateTime();
        $Str="$Year-$Month-$Day";
        $Date=date_create_from_format('Y-m-d',$Str);
        $CreateDate=date('Y-m-d H:i:s');
        $Arr=[$First, $Last, $Gender, $Address, $Date->format('Y-m-d'), $Status,$CreateDate];
        print_r($Arr);
        
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>insert</title>
</head>
<body>
	<form method="post" action="Insert.php">
		First Name:  <input type="text" name="first" ><br>
		Last Name:  <input type="text" name="last"  ><br>
        Gender : <input type="radio" name="gender" value="male"> Male
                <input type="radio" name="gender" value="female"> Female<br>
        Status :  <input type="radio" name="status" value="active"> active
                <input type="radio" name="status" value="inactive"> inactive<br>
        Address :<textarea rows="3" cols="40" name="Address" value=''>
            </textarea><br>
        Date of Birth:
        <select name="day">
            <?php
                for($j=1;$j<=31;$j++)
                    echo " <option value='$j'>$j</option>";
            
            ?>
        </select>

        <select name='month'>
            <?php 
                for($j=1;$j<=12;$j++)
                    echo " <option value='$j'>$j</option>"; 
            ?>
        </select>
       
        <select name='year'>
            <?php
                for($j=1940;$j<=2015;$j++)
                    echo " <option value='$j'>$j</option>";       
            ?>
        </select><br>
        <input type="submit" value="Thêm">
	</form>
</body>
</html>