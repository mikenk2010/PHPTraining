<!DOCTYPE html>
<html>
<head>
    <title>Great Codeigniter</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0, 0, 0); /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
    <script rel="javascript" type="text/javascript"
            src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<button type='button' id='show'>ajax load</button>
<div id="List"></div>
<h2>Thêm user</h2>

<!-- button thêm -->
<button id="myBtn">Thêm</button>

<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <form enctype="multipart/form-data" class="insertform">
            First Name: <input type="text" name="first"><br>
            Last Name: <input type="text" name="last"><br>
            Gender : <input type="radio" name="gender" value="1"> Male
            <input type="radio" name="gender" value="0"> Female<br>
            Status : <input type="radio" name="status" value="1"> active
            <input type="radio" name="status" value="0"> inactive<br>
            Address :<textarea rows="3" cols="40" name="Address" value=''>
            </textarea><br>
            Avatar : <input type="file" name="avatar" value='avatar Cua ban'><br>
            Date of Birth:
            <select name="day">
                <?php
                for ($j = 1; $j <= 31; $j++)
                    echo " <option value='$j'>$j</option>";
                ?>
            </select>

            <select name='month'>
                <?php
                for ($j = 1; $j <= 12; $j++)
                    echo " <option value='$j'>$j</option>";
                ?>
            </select>

            <select name='year'>
                <?php
                for ($j = 1940; $j <= 2015; $j++)
                    echo " <option value='$j'>$j</option>";
                ?>
            </select><br>
            <input type="submit" value="Thêm">
    </div>
</div>
<script>
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function () {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script> <!-- Popup Form -->
<script>
    // insert user
    $('form.insertform').on('submit', function () {
        var that = $(this),
            data = {};

        that.find('[name]').each(function (index, value) {
            var that = $(this),
                name = that.attr('name'),
                value = that.val();
            data[name] = value;
        });
        $.ajax({
            url: 'http://localhost/exBaitap4/index.php/Rest_User/Users',
            type: 'PUT',
            data: data,
            success: function (result) {
                console.log(result);
            }
        });
    });
</script><!-- Insert User -->
<script>
    //Delete user
    function deleteUser(First, Last) {
        $.ajax({
            url: 'http://localhost/exBaitap4/index.php/Rest_User/Users?' + $.param({
                FirstName: First,
                LastName: Last
            }),
            type: 'DELETE',
            data: {
                'FirstName': First,
                'LastName': Last
            },
            success: function (result) {
                console.log(result);
            }
        });
    }
</script><!-- Delete User -->
<script>
    $(document).ready(function () {
        $("#show").click(function () {
            $.get("http://localhost/exBaitap4/index.php/Rest_User/Users", function (result) {
                console.log(result);
                var str = '<table width=\'100%\'>' +
                    '<tr>' +
                    '<th>FirstName</th>' +
                    '<th>LastName</th>' +
                    '<th>Gender</th>' +
                    '<th>Status</th>' +
                    '<th>DoB</th>' +
                    '<th>Address</th>' +
                    '<th>CreateDate</th>';
                for (i = 0; i < result.length; i++) {
                    str += '<tr>' +
                        '<td>' + result[i].FirstName + '</td>' +
                        '<td>' + result[i].LastName + '</td>' +
                        '<td>' + result[i].Gender + '</td>' +
                        '<td>' + result[i].Status + '</td>' +
                        '<td>' + result[i].DoB + '</td>' +
                        '<td>' + result[i].Address + '</td>' +
                        '<td>' + result[i].CreateDate + '</td>' +
                        '<td><button type=\'button\' id=\'cap nhat\'>cap nhat</button></td>' +
                        '<td><button type=\'button\' onclick="+deleteUser(\'' + result[i].FirstName + '\',\'' + result[i].LastName + '\')">xoa</button></td>' +
                        '</tr>';
                }
                str += '</table>';
                $('#List').html(str);
            });
        });
    });
</script> <!-- Load List-->

</body>

</html>
