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
    <form action="" method="post">
        <input type="text" name="name" id="" value="yt">
        <input type="text" name="mobile" id="" value="0910">
        <input type="text" name="address" id="" value="taipei">
    </form>
    <?php
    $data = $_POST;
    $data = [
        'name' => 'yt',
        'mobile' => '0910',
        'address' => 'taipei'
    ];

    foreach ($variable as $key => $value) {
        #code
    }

    $sql = "INSERT INTO Students('name', 'mobile', 'address') VALUES ('yt','0910','taipei')";
    // run $sql
    ?>




    <script>
        let myArr = [1, 2, 3];
        console.log('myArr', myArr);

        let myObject = {
            's1': 'amy',
            's2': 'bob',
            's3': 'cat',
        };

        console.log('myObject', myObject);
    </script>
</body>

</html>