<?php
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
