<?php
function dd($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
};
$data=[
    [
        'id'=>1,
        'name'=>'珍奶',
        'pic'=>'01.jpg',
        'price'=>'100'
    ],
    [
        'id'=>2,
        'name'=>'花菜',
        'pic'=>'02.jpg',
        'price'=>'100'
    ],
    [
        'id'=>3,
        'name'=>'logo',
        'pic'=>'03.png',
        'price'=>'100'
    ],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        table {
            margin: auto;
            text-align: center;
        }

        td {
            border: 1px solid black;
            width: 300px;
        }

        td>img {
            width: 200px;
            border-radius: 10px;
            box-shadow: 5px 5px black;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <td>id</td>
            <td>name</td>
            <td>picture</td>
            <td>price</td>
        </tr>
        <?php foreach($data as $key => $value):?>
        <tr>
            <td>
                <?=$value['id'];?>
            </td>
            <td>
                <?=$value['name'];?>
            </td>
            <td>
                <?php
                $tmpUrl="./images/{$value['pic']}";
                ?>
                <img src="<?=$tmpUrl;?>" alt="">
            </td>
            <td>
                <?=$value['price'];?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <script>
        $(document).ready(function(){
            let ajaxUrl="./getData.php";

            $.ajax({
                type:"get",
                url:ajaxUrl,
                data:"data",
                dataType:"json",
                success:function(res){
                    console.log('res',res);
                }
            })
        })
    </script>
</body>

</html>