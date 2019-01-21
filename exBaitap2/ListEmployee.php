<?php
    require 'classes/Role.class.php';

    $Id=$_GET['ID'];
    $Model=new Role();
    $Data=$Model->getEmployeeAtRole($Id);
   echo" <table cols='0' width='400px' cellspacing='5' cellpadding='5' >
		<tr>
           <th align='center'>ID</th>
           <th align='center'>First Name </th>
           <th align='center'>Last Name </th>
           <th align='center'>Gender </th>
           <th align='center'>Day of Birth </th>
           <th align='center'>Status </th>
           <th align='center'>Address </th>
           <th align='center'>CreateDate </th>
           <th align='center'><a href='Insert.php'>Thêm</a> </th>
        </tr>";
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
        echo " <th align='center'><a href='action.php?ID=$Id'>thao tac</a></th></tr>";
    }
?>