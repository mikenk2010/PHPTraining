<?php
    require 'Classes/User.class.php';

    $Data=new User();
    $Data= $Data->getUser();
?>

<!DOCTYPE html>
<html>
<head>
	<title>ahahahhah</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
         function Delete(str){
            $.ajax({
                type: 'GET',
                url: "Delete.php",
                data:{
                    'ID':str
                },
                success: function(result){
                    console.log(result)
                    $('#List').html(result);
                }
            }
        )
        };
    </script>
</head>
<body>
    <a href="Role.php">Role</a>
    <div id='List'>
	<table cols='0' width="400px" cellspacing="5" cellpadding="5" >
		<tr>
           <th align="center">ID</th>
           <th align="center">First Name </th>
           <th align="center">Last Name </th>
           <th align="center">Gender </th>
           <th align="center">Day of Birth </th>
           <th align="center">Status </th>
           <th align="center">Address </th>
           <th align="center">CreateDate </th>
           <th align="center"><a href='Insert.php'>ThÃªm</a> </th>
        </tr>
        <?php 
            foreach($Data as $key=>$value)
            {
                $Id=$value['ID'];
                $First=$value['FirstName'];
                $Last=$value['LastName'];
                $Gender=$value['Gender'];
                $Address=$value['Address'];
                $Dob=$value['DoB'];
                $Status=$value['Status'];
                $Time=$value['CreateDate'];
                echo    "<tr>
                <th align='center'>$Id</th>
                <th align='center'>$First </th>
                <th align='center'>$Last </th>
                <th align='center'>$Gender </th>
                <th align='center'>$Dob</th>
                <th align='center'>$Status</th>
                <th align='center'> $Address</th>
                <th align='center'>";
                echo date_format(new Datetime($Time), 'Y-m-d H:i:s');
                echo "<button type='button' onclick='Delete($Id)'>Xóa</button>";
                echo " <th align='center'><a href='action.php?ID=$Id'>thao tac</a></th></tr>";
            }
        ?>
	</table>
	</div>
</body>
</html>