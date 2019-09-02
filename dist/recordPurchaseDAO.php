<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>
<body>
    <div class="title">
        <h1>Record Purchase</h1>
    </div>
    <div class="main">
    <?php
    //print_r( $_POST);
    $name = $_POST["name"];
    $category = $_POST["category"];
    $price = $_POST["price"];
    $whoPaid = $_POST["whoPaid"];
    
    include_once("./include/db-connect.php");
    
    $sql = 'INSERT INTO purchases (name, category, price, purchased_by) VALUES ("' . $name . '", "' . $category . ' ", "' . $price . '", "'. $whoPaid . '")';
    
    if ($db->query($sql) === TRUE) {
        echo "<p>New record created successfully</p>";
        echo "<button><a href='recordPurchase.php'>Record another purchase</a></button>";
        echo "<button><a href='viewRecords.php'>viewRecords</a></button>";
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
        echo "<button><a href='recordPurchase.php'>try again</a></button>";
        echo "<button><a href='viewRecords.php'>viewRecords</a></button>";
    }
    
    $db->close();
    ?>

    </div>
</body>
</html>