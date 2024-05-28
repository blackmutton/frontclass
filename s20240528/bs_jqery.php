<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container mt-3">
        <h2>Striped Rows</h2>
        <p>The .table-striped class adds zebra-stripes to a table:</p>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>MOBILE</th>
                </tr>
            </thead>
            <tbody>
                <!-- 資料將由 JavaScript 動態載入 -->
                <!-- <tr>
                    <td>1</td>
                    <td>Amy</td>
                    <td>Bob</td>
                </tr> -->
            </tbody>
        </table>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // 設定請求的 URL
            url = "./getData.php";
            // 使用 jQuery 的 ajax 函數發送 GET 請求
            $.ajax({
                type: "get", // 請求類型是 GET
                url: url, // 請求的 URL
                // data:"data",// 這一行被註解掉，表示這裡沒有要發送的數據
                dataType: "json", // 預期從伺服器返回的數據類型是 JSON
                success: function(res) { // 當請求成功時執行的回調函數
                    console.log(res); // 在控制台打印返回的數據，res相當於$data

                    // 使用 jQuery 的 each 函數(相當於foreach)遍歷返回的 JSON 數據，indexInarray相當於key, valueofElement相當於value
                    $.each(res, function(indexInarray, valueofElement) {

                        // 建立一個包含返回數據的表格行
                        let tmpText = `<tr>
                        <td>${valueofElement['id']}</td>
                        <td>${valueofElement['name']}</td>
                        <td>${valueofElement['mobile']}</td>
                        </tr>
                        `;

                        // 將新建的表格行附加到 tbody 中
                        $("tbody").append(tmpText);
                    });
                }
            });
        });
    </script>
</body>

</html>