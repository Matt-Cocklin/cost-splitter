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
        <h1>All Purchases</h1>
    </div>
 
        <?php
        include_once("./include/db-connect.php");
        $sql = "SELECT id, name, category, price, purchased_by FROM purchases";
        $result = $db->query($sql);
        $matt = $curt = $joe = $sam = $tom = $total = 0.0;
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Category: " . $row["category"]. " - price: " . $row["price"]. " - purchased_by: " . $row["purchased_by"]. "<br>";

                if ($row["purchased_by"] == "Matt") {
                    $matt = $matt + $row["price"];
                } else if ($row["purchased_by"] == "Curt") {
                    $curt = $curt + $row["price"];
                } else if ($row["purchased_by"] == "Joe") {
                    $joe = $joe + $row["price"];
                } else if ($row["purchased_by"] == "Sam") {
                    $sam = $sam + $row["price"];
                } else if ($row["purchased_by"] == "Tom") {
                    $tom = $tom + $row["price"];
                }

                $total = $total + $row["price"];
                $avg = $total / 5;
            }
        } else {
            echo "0 results";
        }

        echo "<br><br>";
        echo "Total spent by Matt: £" . number_format($matt, 2, '.', ',') . ".<br>";
        echo "Total spent by curt: £" . number_format($curt, 2, '.', ',') . ".<br>";
        echo "Total spent by joe: £" . number_format($joe, 2, '.', ',') . ".<br>";
        echo "Total spent by sam: £" . number_format($sam, 2, '.', ',') . ".<br>";
        echo "Total spent by tom: £" . number_format($tom, 2, '.', ',') . ".<br>";
        echo "<br><br>";
        echo "Total spent by the house: £" . number_format($total, 2, '.', ',') . ".<br>";

        echo "<br><br>";

        echo "that works out £" . $avg . " each. Therefore: <br><br>";

        echo "Matt needs to ";
        if ($matt > $avg) {
            $diff = $matt - $avg;
            echo "be paid £" . $diff . ".<br>";
        } else if ($matt < $avg){
            $diff = $avg - $matt;
            echo "contribute another £" . $diff . ".<br>";
        }
        echo "Curt needs to ";
        if ($curt > $avg) {
            $diff = $matt - $avg;
            echo "be paid £" . $diff . ".<br>";
        } else if ($curt < $avg){
            $diff = $avg - $curt;
            echo "contribute another £" . $diff . ".<br>";
        }
        echo "Joe needs to ";
        if ($joe > $avg) {
            $diff = $joe - $avg;
            echo "be paid £" . $diff . ".<br>";
        } else if ($joe < $avg){
            $diff = $avg - $joe;
            echo "contribute another £" . $diff . ".<br>";
        }
        echo "Sam needs to ";
        if ($sam > $avg) {
            $diff = $sam - $avg;
            echo "be paid £" . $diff . ".<br>";
        } else if ($sam < $avg){
            $diff = $avg - $sam;
            echo "contribute another £" . $diff . ".<br>";
        }
        echo "Tom needs to ";
        if ($tom > $avg) {
            $diff = $tom - $avg;
            echo "be paid £" . $diff . ".<br>";
        } else if ($tom < $avg){
            $diff = $avg - $tom;
            echo "contribute another £" . $diff . ".<br>";
        }

        ?>
</body>
</html>