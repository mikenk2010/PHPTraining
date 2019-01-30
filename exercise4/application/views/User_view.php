<!DOCTYPE html>
<html>
<head>
    <title>Great Codeigniter</title>
    <script
            src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("button").click(function () {
                $.get("http://localhost/exBaitap4/index.php/Rest_User/Users", function (result) {
                    console.log(result);
                    var str = '<table width=\'100%\'>' +
                        '<tr>'+
                        '<th>FirstName</th>'+
                        '<th>LastName</th>'+
                        '<th>Gender</th>'+
                        '<th>Status</th>'+
                        '<th>DoB</th>'+
                        '<th>Address</th>'+
                        '<th>CreateDate</th>'+
                        '<th><button type=\'button\' id=\'button\'>them</button></th>'+
                        '</tr>';
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
                            '<td><button type=\'button\' id=\'xoa\'>xoa</button></td>' +
                            '</tr>';
                    }
                    str+='</table>';
                    $('#List').html(str);
                });
            });
        });
    </script>
</head>
<body>
<button type='button' id='button'>ajax load</button>
<div id="List"></div>
</body>

</html>
