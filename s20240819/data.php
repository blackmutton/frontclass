<?php
// 'Access-Control-Allow-Origin: *'代表開放全部網址皆可使用，如果是'Access-Control-Allow-Origin: http://localhost/frontend/s20240819/s20240819_01_cors.html'則只有指定網址可以連線這個api
header('Access-Control-Allow-Origin: *');
// 可以指定多個開放網址
// header('Access-Control-Allow-Origin: http://localhost/frontend/s20240819/s20240819_01_cors.html');
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
    's1' => 'amy',
    's2' => 'bob',
    's3' => 'cat'
];

// dd($data);
echo json_encode($data);
