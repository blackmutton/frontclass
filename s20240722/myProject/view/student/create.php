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
    <h2>新增</h2>
    <form action="../../../api/store.php" method="get">
        <div class="mb-3 mt-3">
            <label for="name" class="form-label">name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
        </div>
        <div class="mb-3">
            <label for="mobile" class="form-label">mobile:</label>
            <input type="text" class="form-control" id="mobile" placeholder="Enter mobile" name="mobile">
        </div>
        <div class="d-grid">
            <button type="submit" class="btn btn-success btn-block">add</button>
        </div>
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- js or jqery -->
    <script>
        $(document).ready(function() {


        });

        // jquery end
    </script>
</body>

</html>