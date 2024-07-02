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
        'chinese' => 71,
        'english' => 88,
        'math' => 73,
    ],
    [
        'id' => 2,
        'name' => 'Bob',
        'chinese' => 81,
        'english' => 82,
        'math' => 83,
    ],
    [
        'id' => 3,
        'name' => 'Cat',
        'chinese' => 91,
        'english' => 92,
        'math' => 93,
    ]
];

// dd($data);

$newData = $data;

foreach ($newData as $key => $value) {
    $tmpSum = 0;
    $tmpAvg = 0;
    $tmpSum = $value['chinese'] + $value['english'] + $value['math'];
    $tmpAvg = round(($tmpSum / 3), 2);

    $newData[$key]['sum'] = $tmpSum;
    $newData[$key]['avg'] = $tmpAvg;
}

// dd($newData);
// dd($data);
// 需要先將dd關掉才能將資料以json方式傳送
// 將$newData轉換成json格式的資料
echo json_encode($newData);
