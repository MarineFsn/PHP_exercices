<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loop intro PHP</title>
</head>

<body>
    <?php

    $pronouns = array('I', 'You', 'He/She', 'We', 'You', 'They');

    foreach ($pronouns as $key => $value) {
        echo $value == 'He/She' ? "<p>" . $value . " codes </p>" : "<p>" . $value . " code </p>";
    }

    $count1to120 = 1;
    while ($count1to120 <= 120) {
        echo '<p>' . $count1to120 . '</p>';
        $count1to120++;
    }

    for ($number = 1; $number <= 120; $number++) {
        echo '<p>' . $number . '</p>';
    }

    $names = array(
        "Guillaume",
        "Isabeau",
        "Hugues",
        "Éléonore",
        "Godefroy",
        "Agnès",
        "Geoffroy",
        "Mathilde",
        "Étienne",
        "Blanche",
        "Renaud",
        "Aliénor",
        "Thibaut",
        "Adèle",
        "Louis"
    );

    foreach ($names as $key => $value) {
        $names[$key] = $value;
        echo '<p>' . $names[$key] . '</p>';
    };

    $countries = array(
        "BR" => "Brésil",
        "VN" => "Vietnam",
        "CH" => "Suisse",
        "MA" => "Maroc",
        "AU" => "Australie",
        "ID" => "Indonésie",
        "PL" => "Pologne",
        "NG" => "Nigéria",
        "CR" => "Costa Rica"
    );


    ?>

    <form>
        <label for="fcountry"> select your country</label>
        <select id="fcountry" name="fcountry">
            <?php
            foreach ($countries as $isoCode => $countryName) {
                echo '<option value="' . $isoCode . '">' . $countryName. '</option>';
            }
            ?>

    </form>
</body>

</html>