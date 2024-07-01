<?php
function dd($data)
{
  echo "<pre>";
  print_r($data);
  echo "</pre>";
}
// $data=sql->select fetchAll

$data = [
  [
    'id' => 1,
    'name' => '台北店',
    'mobile' => '0911',
    'price' => '10000'
  ],
  [
    'id' => 2,
    'name' => '台中店',
    'mobile' => '0922',
    'price' => '5000'
  ],
  [
    'id' => 3,
    'name' => '高雄店',
    'mobile' => '0933',
    'price' => '100000'
  ]
];

dd($data);

$tmp = $data;
foreach ($tmp as $key => $value) {
  $tmp[$key]['level'] = 'B';
  if (($value['price'] + 500) > 100000) {
    $tmp[$key]['level'] = 'S';
  }
  $tmp[$key]['price'] = $value['price'] + 500;
  unset($tmp[$key]['price']);
}

dd($tmp);
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
          <th>id</th>
          <th>name</th>
          <th>mobile</th>
          <th>price</th>
        </tr>
      </thead>
      <tbody>
        <!-- foreach $data php -->
        <?php
        foreach ($data as $key => $value) :
        ?>
          <tr>
            <td><?= $value['id'] ?></td>
            <td><?= $value['name'] ?></td>
            <td><?= $value['mobile'] ?></td>
            <td><?= $value['price'] ?></td>
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