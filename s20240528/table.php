<?php
$data = [
    [
        'id' => 1,
        'name' => 'amy',
        'mobile' => '0911-111-111'
    ],
    [
        'id' => 2,
        'name' => 'bye',
        'mobile' => '0922-111-111'
    ],
    [
        'id' => 3,
        'name' => 'cc',
        'mobile' => '0933-111-111'
    ],
];
print_r($data[0]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3">
        <h2>Basic Table</h2>
        <p>The .table class adds basic styling (light padding and horizontal dividers) to a table:</p>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>MOBILE</th>
                </tr>
            </thead>
            <tbody>
                <!-- 方法一 -->
                <?php
                foreach ($data as $key => $value) {
                    echo "<tr>";
                    // 如果要在字串內寫陣列一定要加{}，讓它強制轉字串，否則會報錯
                    echo "<td>{$value['id']}</td>";
                    echo "<td>{$value['name']}</td>";
                    echo "<td>{$value['mobile']}</td>";
                    echo "</tr>";
                }
                ?>
                <!-- 方法二 -->
                <?php
                foreach ($data as $key => $value) :
                ?>
                    <tr>
                        <td><?= $value['id'] ?></td>
                        <td><?= $value['name'] ?></td>
                        <td><?= $value['mobile'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>

</html>