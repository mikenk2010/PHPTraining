<!DOCTYPE html>
<html>
<head>
	<title>action</title>
</head>
<body>
	<form method="post" action="updateUser?first=<?php echo $First;?>&last=<?php echo $Last;?>" enctype="multipart/form-data">
		First Name:  <input type="text" name="first" value= '<?php echo $First;?>' disabled><br>
		Last Name:  <input type="text" name="last" value='<?php echo $Last;?>' disabled><br>
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
		<button><a href="deleteUser?first=<?php echo $First; ?>&last=<?php echo $Last;?>">Xóa</a></button>
		<button><a href="changeAvatar?first=<?php echo $First; ?>&last=<?php echo $Last;?>">Doi Avatar</a></button>
         <input type="submit" value="Cập Nhật">

	</form>
</body>
</html>