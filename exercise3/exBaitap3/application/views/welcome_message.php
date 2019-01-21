<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<table cols='0' width="500px" cellspacing="1" cellpadding="30" >
		<tr>
           <th align="center">First Name </th>
           <th align="center">Last Name </th>
           <th align="center">Gender </th>
           <th align="center">Day of Birth </th>
           <th align="center">Status </th>
           <th align="center">Address </th>
           <th align="center">CreateDate </th>
           <th align="center">Avatar</th>
           <th align="center"><a href='index.php/Welcome/insertUser'>Thêm</a></th>
        </tr>
        <?php 
        foreach($Result as $key=>$value)
            {
                $First=$value['FirstName'];
                $Last=$value['LastName'];
                $Gender=$value['Gender'];
                $Address=$value['Address'];
                $Dob=$value['DoB'];
                $Status=$value['Status'];
                $Time=$value['CreateDate'];
                $Avatar=$value['Avatar'];
                echo"<tr>
                <th align='center'>$First </th>
                <th align='center'>$Last </th>
                <th align='center'>$Gender </th>
                <th align='center'>$Dob</th>
                <th align='center'>$Status</th>
                <th align='center'> $Address</th>
                <th align='center'>";
                echo date_format(new Datetime($Time), 'Y-m-d H:i:s').'</th>';
                echo "<th align='center'><img src='$Avatar'></th>";
                echo " <th align='center'><a href='index.php/Welcome/Action?first=$First&last=$Last'>thao tac</a></th></tr>";
            }
        ?>
	</table>
</div>

</body>
</html>

