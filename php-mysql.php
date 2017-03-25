<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 3/25/2017
 * Time: 7:25 PM
 */

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

$sql = "SELECT * FROM student";
$result = $conn->query($sql);

var_dump($result);
