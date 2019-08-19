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
    <div class="title" id="loginTitle">
        <h1>Add Item</h1>
    </div>
    <div class="main">
        <form id="addItemForm" action="addItemDAO.php" method="post">
            <p>Item name:</p>
            <input type="text" name="name" id="name">
            <p>Item category:</p>
            <select name="category" id="category">
                <option value="Food / drink">Food / drink</option>
                <option value="Furniture">Furniture</option>
                <option value="Equipment (kitchen utensils etc)">Equipment (kitchen utensils etc)</option>
                <option value="Other">Other</option>
            </select>
            <p>Item amount:</p>
            <input type="text" name="amount" id="amount">
            <p>Item price:</p>
            <input type="text" name="price" id="price">
            <br><br>
            <input type="submit" value="Add Item">
        </form>
    </div>
</body>
</html>