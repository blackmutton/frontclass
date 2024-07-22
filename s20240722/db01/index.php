<?php
include "base.php";
$Student = new DB("students");
// dd("123");
$data = $Student->setRank();
// 假資料
/* $data = [
    [
        'id' => 1,
        'name' => 'amy',
        'mobile' => '0911-111-111'
    ],
    [
        'id' => 2,
        'name' => 'tony',
        'mobile' => '0922-222-222'
    ],
    [
        'id' => 3,
        'name' => 'bob',
        'mobile' => '0933-333-333'
    ],
]; */

// dd($data);
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
        <h2>Striped Rows</h2>
        <p>The .table-striped class adds zebra-stripes to a table:</p>
        <div class="text-end"><button type="button" class="btn btn-success btn-block">add</button></div>
        <table class="table table-striped text-center">
            <thead>
                <tr>
                    <th width="10%">id</th>
                    <th width="10%">name</th>
                    <th width="10%">rank</th>
                    <th width="20%">mobile</th>
                    <th class="text-start">op</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($data as $key => $value) {
                    // dd($key);
                    // dd($value);
                ?>
                    <tr>
                        <td><?= $value['id'] ?></td>
                        <td><?= $value['name'] ?></td>
                        <td><?= $value['rank'] ?></td>
                        <td><?= $value['mobile'] ?></td>
                        <td class="text-start">
                            <button type="button" class="btn btn-primary">edit</button>
                            <button type="button" class="btn btn-danger">del</button>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- js or jqery -->
    <script>
        $(document).ready(function() {
            $.ajax({
                type: "get",
                url: "url",
                data: "data",
                dataType: "json",
                success: function(res) {}
            })

        });

        // jquery end
    </script>
</body>

</html>