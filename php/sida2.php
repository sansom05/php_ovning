<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP sida 2</title>
    <link rel ="stylesheet" href = "../css/style.css">
</head>

<body>

<header>
    <div id ="content">
    <h1>PHP sida 2</h1>

    <p>Andra sidan om PHP</p>
    </div>
</header>

<form action = "#" method = "post" id = "form2-container">
    <div class = "inputBox2">
        <label class = "label_djur" for = "ldjur">Djur 1: </label>
        <input type = "text" name = "name"><br>
        <label class = "label_djur" for = "ldjur">Djur 2: </label>
        <input type = "text" name = "name2"><br>
        <label class = "label_djur" for = "ldjur">Djur 3: </label>
        <input type = "text" name = "name3"><br>
        <input type = "submit" name = "sub">


    </div>

</form>

<?php include '../php/footer.php';

if(isset($_POST['sub'])){

    $farmAnimals = array();

    $farmAnimals[] = $_POST['name'];
    $farmAnimals[] = $_POST['name2'];
    $farmAnimals[] = $_POST['name3'];

    $farmAnimals[2] = "Struts";

    array_push($farmAnimals, "Alpacka");

    unset($farmAnimals[0]);

    print_r($farmAnimals);

    echo "<br>";

    echo $farmAnimals[2];
    

}


?>

</body>
</html>