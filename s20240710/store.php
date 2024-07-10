<?php
function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

$data = $_GET;
// 先確認$_GET可以再改用$_POST
// $data=$_POST;

// 列印出來的陣列
// Array
// (
//     [name] => fdsfd
//     [mobile] => fsdfdsfdsfds
// )

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db55688";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

$sql = "INSERT INTO `students` (`id`, `name`, `mobile`) VALUES (NULL, '{$data["name"]}', '{$data["mobile"]}');";
$conn->exec($sql);

header("location:./01tmp_index.php");
