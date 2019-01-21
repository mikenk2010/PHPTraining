<?php 
require 'Classes/User.class.php';
$User=new User();
$Data=$User->getUser();
?>
<!DOCTYPE html>
<html>
<head>
	<title>ahahahhah</title>
</head>
<body>
	<table cols='0' width="900px" cellspacing="10" cellpadding="50" >
		<tr>
           <th align="center">First Name </th>
           <th align="center">Last Name </th>
           <th align="center">Gender </th>
           <th align="center">Day of Birth </th>
           <th align="center">Status </th>
           <th align="center">Address </th>
           <th align="center">CreateDate </th>
           <th align="center"><a href='Insert.php'>Thêm</a> </th>
        </tr>
        <?php 
            foreach($Data as $key=>$value)
            {
                $First=$value['FirstName'];
                $Last=$value['LastName'];
                $Gender=$value['Gender'];
                $Address=$value['Address'];
                $Dob=$value['DoB'];
                $Status=$value['Status'];
                $Time=$value['CreateDate'];
                echo    "<tr>
                <th align='center'>$First </th>
                <th align='center'>$Last </th>
                <th align='center'>$Gender </th>
                <th align='center'>$Dob</th>
                <th align='center'>$Status</th>
                <th align='center'> $Address</th>
                <th align='center'>";
                echo date_format(new Datetime($Time), 'Y-m-d H:i:s');
                echo " <th align='center'><a href='action.php?first=$First&last=$Last'>thao tac</a></th></tr>";
            }
        ?>
	</table>
</body>
</html>