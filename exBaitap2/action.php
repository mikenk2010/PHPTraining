<?php
    require 'classes/user.class.php';

    session_start();

    $Id=$_GET['ID'];
    $_SESSION['ID']=$Id;
?>
<!DOCTYPE html>
<html>
<head>
	<title>action</title>
</head>
<body>
	<form method="post" action="Update.php">
        ID employee: <input type="text" name="ID" value= '<?php echo $Id;?>' disabled><br>
		First Name:  <input type="text" name="first" value= '' ><br>
		Last Name:  <input type="text" name="last" value=''><br>
        Gender : <input type="radio" name="gender" value="male"> Male
                <input type="radio" name="gender" value="female"> Female<br>
        Status :  <input type="radio" name="status" value="active"> active
                <input type="radio" name="status" value="inactive"> inactive<br>
        Address :<textarea rows="3" cols="40" name="Address" value='<?php ?>'>
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
		<button><a href="Delete.php?">Xóa</a></button>
         <input type="submit" value="Cập Nhật">

	</form>
</body>
</html>