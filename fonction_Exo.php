<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fonction Exo</title>
</head>

<body>
    <?php
    //Use a function that capitalizes the first letter of the provided argument.
    //Example: "émile"should return "Émile"

    $Name = "émilie";
    $capitalize = mb_convert_case($Name, MB_CASE_TITLE, 'UTF-8');
    echo $capitalize;

    //Use the native function allowing you to display the current year.

    $year = date("Y");
    echo "<p>" . $year . "</p>";

    //Now display the date, time, minutes and seconds, 
    //using the same function, by playing with the arguments.

    $time = date("d-m-Y H:i:s");
    echo "<p>" . $time . "</p>";


    //Crée a "Sum" function that takes 2 numbers and returns their sum.
    //Improve that function so that it checks whether the argument is indeed a Number. 
    //If not, it should display : "Error: argument is the not a number."

    function sum($number1, $number2)
    {
        if (!is_numeric($number1) || !is_numeric($number2)) {
            return "Error: argument is not a number";
        }

        return $number1 + $number2;
    }

    $sum = sum(5, 1568);
    echo "<p>" . $sum . "</p>";


    //Create a function that takes as argument a string of characters and returns an acronym made of the initials of each word.
    //Example: "In code we trust!" should return: ICWT).


    function generateAcronym($string)
    {
        $words = explode(' ', $string);
        $acronym = '';

        foreach ($words as $word) {
            $acronym .= strtoupper(substr($word, 0, 1));
        }
        return $acronym;
    }

    $string = "In code we trust!";
    $acronym = generateAcronym($string);
    echo "<p>" . $acronym . "</p>";

    //Create a function that replaces the letters "a" and "e" with "æ". 
    //Example: "caecotrophie", "chaenichthys","microsphaera", "sphaerotheca" 
    //should respectively return "cæcotrophie", "chænichthys","microsphæra", "sphærotheca".

    function replaceWord($rWord)
    {
        $new = str_replace(['a', 'e'], 'æ', $rWord);
        return $new;
    }

    $rWords = array("caecotrophie", "chaenichthys", "microsphaera", "sphaerotheca");

    foreach ($rWords as $rWord) {
        $new = replaceWord($rWord);
        echo '<p>' . $new . '</p>';
    }

    //Create the opposite function, which replaces "æ" by "ae" in : 
    //cæcotrophie, chænichthys, microsphæra, sphærotheca.

    function invertedReplace($invertedRWord)
    {
        $rNew = str_replace('æ', 'ae', $invertedRWord);
        return $rNew;
    }
    $invertedRWords = array('cæcotrophie', 'chænichthys', 'microsphæra', 'sphærotheca');

    foreach ($invertedRWords as $invertedRWord) {
        $rNew = invertedReplace($invertedRWord);
        echo '<p>' . $rNew . '</p>';
    }

    //Create a function to return "notice", "warning" and "error" messages to a user,
    //which takes 2 arguments : the "message", and the "css class" (values: "info", "error", "warning"). 
    //This function would allow us to write this :
    //Improve that function by giving the default class the value of "info". 
    //Look into the documentation documentation php.

    function showMessage($message, $cssClass = 'info')
    {
        $result = "<p class=" . $cssClass . ">" . $message . "</p>";
        return $result;
    }

    echo showMessage("This is an information.", "notice");
    echo showMessage("This is a warning message.", "warning");
    echo showMessage("This is an error message.", "error");
    echo showMessage("Everything is OK.");


    //Create a random string generator, outputing 2 strings: 
    //one which length is between 1 to 5 letters, the other between 7 and 15 letters.
    // The screen will display a title "Generate a new word", 
    //and then the two generated words, and underneath, a bouton with the text "Generate".

    function generateRandomString($minLenght, $maxLenght)
    {
        $characters = 'abcdefghijklmnopqrstuvwxyz';
        $string = '';
        $lenght = rand($minLenght, $maxLenght);

        for ($i = 0; $i < $lenght; $i++) {
            $string .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $string;
    }

    echo '<p>' . generateRandomString(1, 5) . '</p>';
    echo '<p>' . generateRandomString(7, 15) . '</p>';

    //De-capitalize the string : "STOP YELLING I CAN'T HEAR MYSELF THINKING!!"


    $sentence = "STOP YELLING I CAN'T HEAR MYSELF THINKING!!";
    $decapitalise = strtolower($sentence);

    echo '<p>' . $decapitalise . '</p>';

    //In your new job, you have to maintain the code of a former developer. 
    //Make it DRY by creating a custom function calculate_cone_volume :

    function calculate_cone_volume($radius, $height)
    {
        $volume = $radius * $radius * 3.14 * $height * (1 / 3);
        return $volume;
    }

    $volume = calculate_cone_volume(5, 2);
    echo '<p> The volume of a cone with a radius of 5 and height of 2 = ' . $volume . ' cm </p>';

    $volume = calculate_cone_volume(3, 4);
    echo '<p> The volume of a cone which ray is 3 and height is 4 = ' . $volume . ' cm </p>';

    ?>

</body>

</html>