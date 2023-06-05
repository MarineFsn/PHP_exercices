<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ternary exercices</title>
</head>
<body>


<?php
if (isset($_GET["age"]) && isset($_GET["gender"]) && isset($_GET["isEnglish"])) {
    $age = $_GET['age'];
    $gender = $_GET['gender'];
    $isEnglish = $_GET['isEnglish'];
    $message = "";

    if ($age < 12) {
        $message = $gender == "Male" ? "kiddo boy" : "kiddo girl";
        $message = $isEnglish == "yes" ? "Hello " . $message : "Aloha " . $message;
    } elseif ($age >= 12 && $age < 18) {
        $message = $gender == "Male" ? "Mister teen" : "Miss teen";
        $message = $isEnglish == "yes" ? "Hello " . $message : "Aloha " . $message;
    } elseif ($age >= 18 && $age < 115) {
        $message = $gender == "Male" ? "Mister" : "Woman!";
        $message = $isEnglish == "yes" ? "Hello " . $message : "Aloha " . $message;
    } elseif ($age >= 115) {
        $message = "Wow! Still alive? Are you a robot, like me? Can I hug you?";
    }

    displayMessage($message);
}

function displayMessage($message) {
    echo "<p>$message</p>";
}
?>


<form method="get" action="form.php">
	<label for="age">How old are you ?</label>
	<input type="number" name="age">
	<input type="submit" name="submit"> <br>
    <fieldset>
        <legend>Select a gender : </legend>
    <input type="radio" name="gender" value="Male">
    <label for="Male"> Male </label>
    <input type="radio" name="gender" value="Female">
    <label for="Female"> Female </label>
</fieldset>
    <fieldset>
        <legend>Do you speak English? </legend>
    <input type="radio" name="isEnglish" valeur="yes">
    <label for="yes"> Yes </label>
    <input type="radio" name="isEnglish" valeur="No">
    <label for="No"> No </label>
</fieldset>


</form>

</body>
</html>

