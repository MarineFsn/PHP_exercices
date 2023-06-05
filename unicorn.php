<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unicorn</title>
</head>
<body>
    <form method="get" action="unicorn.php">
        <fieldset>
            <legend>Are you a human, a cat, or a unicorn?</legend>
            <input type="radio" name="creature" value="human" id="human">
            <label for="human">Human</label>
            <input type="radio" name="creature" value="cat" id="cat">
            <label for="cat">Cat</label>
            <input type="radio" name="creature" value="unicorn" id="unicorn">
            <label for="unicorn">Unicorn</label>
        </fieldset>
        <input type="submit" value="Submit">
    </form>

    <?php
    $creature = $_GET["creature"] ?? "";
    $humangif = '<iframe src="https://giphy.com/embed/l46Cj9QLmsgtR3qsU" width="480" height="256" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/nicki-minaj-human-being-im-a-l46Cj9QLmsgtR3qsU">via GIPHY</a></p>';
    $catgif = '<iframe src="https://giphy.com/embed/5i7umUqAOYYEw" width="480" height="327" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/firefly-dodgeball-wash-5i7umUqAOYYEw">via GIPHY</a></p>';
    $unicorngif = '<iframe src="https://giphy.com/embed/CSbIZi52DvqnJPm1WA" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/unicorn-chubbicorns-chubbiverse-CSbIZi52DvqnJPm1WA">via GIPHY</a></p>';
    $defaultgif = '<iframe src="https://giphy.com/embed/l4KhWSznnjNNEx1bW" width="480" height="270" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/lucifer-fox-lucifer-morningstar-l4KhWSznnjNNEx1bW">via GIPHY</a></p>';

    $gif = ($creature === "human") ? $humangif : (($creature === "cat") ? $catgif : (($creature === "unicorn") ? $unicorngif : (($creature === "") ? $defaultgif : "")));

 if ($creature !== "") {
        echo $gif; 
    } else {
        echo $defaultgif;
    }
    ?>
</body>
</html>

