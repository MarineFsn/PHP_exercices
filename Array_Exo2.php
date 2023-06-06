<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    //Create an array representing your family members
    //Display its content using the print_r function
    //Then, create an array describing your favourite recipes
    //Display its content using the print_r
    //Then, create an array listing your favourite films
    //Then, using that array, display only the one film you like best using its index

    $mother = array(
        'firstname' => 'Patricia',
        'lastname' => 'Bertin',
        'isGamer' => 'false',
        'favoriteMovie' => 'Titanic',
        'hobbies' => array('Photographie', 'Cuisine', 'Jardinage', 'Randonnée', 'Peinture')
    );
    $me = array(
        'firstname' => 'Marine',
        'lastname' => 'Fassin',
        'isGamer' => 'true',
        'favoriteMovie' => 'Shining',
        'hobbies' => array(
            'Lecture' => 'livre thriller',
            'Musique' => 'rock',
            'Gaming' => 'jeux de survie',
            'Arts manuels' => 'confection de bijoux',
            'Sport' => 'natation'
        ),
        'mother' => $mother,
    );
    $soulmate = array(
        'firstname' => 'logan',
        'lastname' => 'Declercq',
        'isGamer' => 'true',
        'favoriteMovie' => 'Rocky',
        'hobbies' => array(
            'Météorologie' => 'Modèle Météo',
            'Musique' => 'rock',
            'Folklore' => 'caranaval',
            'Jardinage' => 'entretien Jardin',
            'Sport' => 'natation'
        ),
    );


    // Try to guess the name of the 2 PHP functions that can make these two operations and look it up in the online PHP Manual. (Tip: both start with array_). Test their syntax and try to answer the question.
    //Here is a headstart:

    $hobbies_via_intersection = array_intersect($me['hobbies'], $soulmate['hobbies']);
    echo '<pre>';
    print_r($hobbies_via_intersection);
    echo '</pre>';
    $hobbies_via_merge = array_merge($me['hobbies'], $soulmate['hobbies']);
    echo '<pre>';
    print_r($hobbies_via_merge);
    echo '</pre>';

    // Try to find the right way to add that new hobby to your array's 'hobbies' key.
    $me['hobbies'][] = 'taxidermy';
    //You decide you need a reset and change your last name to Durand. How would you update your array ?
    $me['lastname'] = 'Durand';

    //ay you want to know how many hobbies your mother has. Try to guess the native php function that allows you to count the number of elements in an array.
    //Below, count your own hobbies
    //Below, add both totals and display the total amount of hobbies.

    $motherHobbiesCount = count($mother['hobbies']);
    echo "<p>Le nombre de hobbies que ma mère a est " . $motherHobbiesCount . ".</p>";

    $myHobbies = count($me['hobbies']);
    echo "<p>Le nombre de hobbies que j'ai est " . $myHobbies . ".</p>";

    $totalHobbies = $motherHobbiesCount + $myHobbies;
    echo "<p>Le nombre total de Hobbie est " . $totalHobbies . ".</p>";

    ?>

</body>

</html>