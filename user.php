<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 3/21/2017
 * Time: 6:53 PM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>PHP Learning</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = "my_db";
//Init connect
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo "Lỗi kết nối" . $conn->connect_error;
    die;
} else {
    echo "Kết nối thành công";
}


?>
<div class="container">
    <div class="row">
        <h1>List User!</h1>
        <a href="addUser.php" class="btn btn-primary">Add User</a>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>FullName</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $sql = "SELECT * FROM student";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
            ?>
                    <tr>
                        <td>1</td>
                        <td><?=$row["name"]?></td>
                        <td>john@example.com</td>
                    </tr>
            <?php
                }
            } else {
                echo "0 results";
            }
            ?>

            </tbody>
        </table>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
