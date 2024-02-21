<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sida 1</title>
    <link rel = "stylesheet" href="./css/style.css">
</head>

<body>

<header>
    <div id ="content">
    <h1>PHP sida 1</h1>

    <p>Första sidan om PHP</p>
    </div>
</header>

    <form action = "#" method = "post" id = "form-container">
        <div class = "inputBox">
        <label class = "label_name" for ="fname">Name:</label>
        <input type = "text" name = "name"><br>
        <input type = "submit" name = "sub">
        </div>
    </form>

<?php


    if(isset($_POST['sub'])){

        $strName = $_POST['name'];

        if($strName == Null){
            $strName = "Sandini";
        }

        echo "<div class = 'align_echo'>";

        echo "Hej ". $strName . "<br>";

        echo "Baklänges:" . strrev($strName) . "<br>";

        echo "Gemener: " . strtolower($strName) . "<br>";

        echo "Versaler: " . strtoupper($strName) . "<br>";

        $len = 0;
        for($i = 0; $i < strlen($strName); $i++){
            $len++;
        }
        echo "Antal tecken: " . $len;

        echo "</div>";

        echo "<div class = 'echo_stat'>";
        echo "<p> <font color = green> Denna text är genererad med utskriftskommandot i PHP </font> </p>";
        echo "</div>";

    }

    include 'php/footer.php';
?>




</body>

</html>