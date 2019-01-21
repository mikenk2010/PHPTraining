<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>insert</title>
</head>
<body>
	<a href='../../''>Trang Chủ</a>
	<form method="post" action="insertUser" enctype="multipart/form-data">
		First Name:  <input type="text" name="first" ><br>
		Last Name:  <input type="text" name="last"  ><br>
        Gender : <input type="radio" name="gender" value="male"> Male
                <input type="radio" name="gender" value="female"> Female<br>
        Status :  <input type="radio" name="status" value="active"> active
                <input type="radio" name="status" value="inactive"> inactive<br>
        Address :<textarea rows="3" cols="40" name="Address" value=''>
            </textarea><br>
        Avatar : <input type="file" name="avatar" value='avatar Cua ban'><br>
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