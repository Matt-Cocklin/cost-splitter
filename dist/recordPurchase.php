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
        <form id="recordPurchaseForm" action="recordPurchaseDAO.php" method="post" autocomplete="off">
            <p>Item:</p>
            <input type="text" name="name" id="name">
            <p>Category:</p>
            <select name="category" id="category">
                <option value="Food / drink">Food / drink</option>
                <option value="Furniture">Furniture</option>
                <option value="Equipment (kitchen utensils etc)">Equipment (kitchen utensils etc)</option>
                <option value="Other">Other</option>
            </select>
            <p>price:</p>
            <input type="text" name="price" id="price">
            <p>Who paid?</p>
            <select name="whoPaid" id=who_paid>
                <option value="Matt">Matt</option>
                <option value="Curt">Curt</option>
                <option value="Joe">Joe</option>
                <option value="Sam">Sam</option>
                <option value="Tom">Tom</option>
            </select>
            <br><br>
            <input type="submit" value="Add Item">
        </form>
    </div>
</body>
</html>