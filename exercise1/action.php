<?php
    require 'classes/user.class.php';

    session_start();

    $First=$_GET['first'];
    $Last=$_GET['last'];
    $_SESSION['first']=$First;
    $_SESSION['last']=$Last;
?>
<!DOCTYPE html>
<html>
<head>
	<title>action</title>
</head>
<body>
	<form method="post" action="Update.php">
		First Name:  <input type="text" name="first" value= '<?php echo $First;?>' disabled><br>
		Last Name:  <input type="text" name="last" value='<?php echo $Last;?>' disabled><br>
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
		<button><a href="Delete.php?first=$first&last=$last">Xóa</a></button>
         <input type="submit" value="Cập Nhật">

	</form>
</body>
</html>