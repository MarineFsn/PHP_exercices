<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ternary exercice</title>
</head>
<body>

<?php
$gender = $_GET["gender"] ?? "";
$hello = $gender === "Male" ? "Bonjour Monsieur !" : "Bonjour Madame !";
echo $hello;
?>


    <form method="get" action="ternary.php">
        <fieldset>
            <legend>Select a gender:</legend>
            <input type="radio" name="gender" value="Male" id="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" value="Female" id="female">
            <label for="female">Female</label>
            <input type="submit" name="submit"> 
        </fieldset>
    </form>
</body>
</html>
