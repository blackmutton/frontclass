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
    




    <script>
        let myArr = [1, 2, 3];
        console.log('myArr', myArr);
        
        for(let i=0;i<myArr.length;i++){
            console.log(`myArr[${i}]`,myArr[i]);
        }

        myArr.forEach(function(value,key){
            console.log('value',value);
            console.log('key',key);
        });

        let myObject = {
            's1': 'amy',
            's2': 'bob',
            's3': 'cat',
        };

        console.log('myObject', myObject);
    </script>
</body>

</html>