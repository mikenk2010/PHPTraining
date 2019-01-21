<?php
    require_once 'Classes/Role.class.php';
    require_once 'Classes/User.class.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
         function showList(str){
            $.ajax({
                type: 'GET',
                url: "ListEmployee.php",
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

        function addUser(){
            var user= document.getElementById('allUser').value;
            var role= document.getElementById('allRole').value;
            $.ajax({
                type: 'GET',
                url: "InserUserAtRole.php",
                data:{
                    'User':user,
                    'Role':role
                },
                success: function(result){
                    console.log(result)
                    alert('them thanh cong');
                }
            }
        )
        }
    </script>
</head>
<body>
    <select id="allUser">
    <?php
        $Model=new User();
        $Data=$Model->getUser();
        foreach($Data as $key=>$value)
        {
            $Id=$value['ID'];
            $First=$value['FirstName'];
            $Last=$value['LastName'];
            $Arr=[$First,$Last];
            $Name=implode(' ',$Arr);
            echo "<option value='$Id'>$Name</option>";
        }
    ?>
    </select>
    <?php
        $Model=new Role();
        $Data=$Model->getRole();
        echo '<select id="allRole">';
        foreach($Data as $key=>$value)
        {
            $TenRole=$value['RoleName'];
            $Id=$value['ID'];
            echo "<option value='$Id'>$TenRole</option>";
        }
        echo '</select>';
        echo  "<input type='button' value='Thêm' onclick='addUser()'> <br>";
        foreach($Data as $key=>$value)
        {
            $TenRole=$value['RoleName'];
            $Id=$value['ID'];
            echo "<input type='button' value='$TenRole' id='$Id' onclick='showList($Id)'>";
        }
    ?>
    <div id='List'></div>
</body>
</html>