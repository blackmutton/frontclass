<?php
// 'Access-Control-Allow-Origin: *'代表開放全部網址皆可使用，如果是'Access-Control-Allow-Origin: http://localhost/frontend/s20240819/s20240819_01_cors.html'則只有指定網址可以連線這個api
header('Access-Control-Allow-Origin: *');
// 可以指定多個開放網址
// header('Access-Control-Allow-Origin: http://192.168.211.57/s20240819_cors_front.html');
// header('Access-Control-Allow-Origin: http://192.168.211.63/frontend/s20240819/s20240819_01_cors.html');
// header('Access-Control-Allow-Origin: http://apple.com');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");
function dd($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

$data = [
    's1' => 'bye',
    's2' => 'i want to sleep',
    's3' => 'cat'
];
// 可利用在後端網址後加上參數來改變得到的值，但在前端網頁無效果
// http://localhost/frontend/s20240819/data.php?tl=ddd
$name = $_GET['tl'] ?? 'noname';
$data = [
    's1' => 'bye',
    's2' => 'i want to sleep',
    's3' => 'cat',
    'tl' => $name
];

// dd($data);
echo json_encode($data);
