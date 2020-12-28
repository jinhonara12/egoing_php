<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><a href="index.php">web</a></h1>
    <ol>
        <li><a href="index.php?id=html"> html </a></li>
        <li><a href="index.php?id=css"> css </a></li>
        <li><a href="index.php?id=javascript"> javascript </a></li>
    </ol>
    <h2>
        <?php 
        if(isset($_GET['id'])){
            echo $_GET['id'];
        } else{
            echo "WELCOME";
        }
        ?>
    </h2>
    <?php 
    if(isset($_GET['id'])){
        echo file_get_contents("data/".$_GET['id']);
    } else {
        echo "Hello, PHP";
    }
    ?>
</body>
</html>