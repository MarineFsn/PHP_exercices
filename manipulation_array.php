<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>manipulation Array PHP</title>
</head>

<body>
    <?php
    $web_development = array(
        'frontend' => array(
            'xhtml',
            'CSS',
            'Flash',
            'javascript',
        ),
        'backend' => array('Ruby'),
    );

    $web_development['frontend'][0] = 'html';
    unset($web_development['frontend'][2]);

    echo '<pre>';
    print_r($web_development);
    echo '</pre>';



    ?>

</body>

</html>