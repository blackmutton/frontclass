<?php
function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

$data = [
    [
        'id' => 1,
        'name' => 'amy',
        'mobile' => '0911-111-111'
    ],
    [
        'id' => 1,
        'name' => 'bye',
        'mobile' => '0922-111-111'
    ],
    [
        'id' => 1,
        'name' => 'cc',
        'mobile' => '0933-111-111'
    ]
];

// 先確認陣列可以成功印出，再轉json
// dd($data);
echo json_encode($data);
