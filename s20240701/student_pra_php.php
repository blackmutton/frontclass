<?php
function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
$data = [
    [
        'name' => 'amy',
        'chinese' => 90,
        'math' => 75,
        'english' => 88
    ],
    [
        'name' => 'bob',
        'chinese' => 50,
        'math' => 95,
        'english' => 68
    ],
    [
        'name' => 'cat',
        'chinese' => 60,
        'math' => 77,
        'english' => 85
    ]
];
dd($data);


foreach ($data as $key => $value) {
    $scores = [
        $value['chinese'],
        $value['math'],
        $value['english']
    ];
    $data[$key]['total'] = array_sum($scores);

    $data[$key]['avg'] = round(($data[$key]['total'] / count($scores)), 2);
}

dd($data);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- css -->
    <style>

    </style>
</head>

<body>
    <div class="container mt-3">
        <h2>Stores Table</h2>
        <p>The .table-bordered class adds borders on all sides of the table and the cells:</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>name</th>
                    <th>chinese</th>
                    <th>math</th>
                    <th>english</th>
                    <th>avg</th>
                    <th>sum</th>
                </tr>
            </thead>
            <tbody>
                <!-- foreach $data php -->
                <?php
                foreach ($data as $key => $value) :
                ?>
                    <tr>
                        <td><?= $value['name'] ?></td>
                        <td><?= $value['chinese'] ?></td>
                        <td><?= $value['math'] ?></td>
                        <td><?= $value['english'] ?></td>
                        <td><?= $value['avg'] ?></td>
                        <td><?= $value['total'] ?></td>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
    </div>





    <script>
        // 1.綁定 bind


        // 2.事件 event
    </script>
</body>

</html>