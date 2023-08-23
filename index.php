<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="modules/css/header1.css">
    <link rel="stylesheet" href="modules/css/product.css">
    <link rel="stylesheet" href="modules/categoria/category.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b414b30242.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            include_once('modules/sql/conexion.php');
            include('modules/header.php');
            include('modules/products.php');
            include('modules/categoria/category.php');
            include('modules/notification.php');
        ?>
    </div>
    <?php
        include('modules/footer.php');
    ?>
    <script src="modules/js/script.js"></script>
    <script src="modules/categoria/script.js"></script>
</body>
</html>
