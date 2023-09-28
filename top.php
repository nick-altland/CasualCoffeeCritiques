<?php

$phpSelf = htmlspecialchars($_SERVER['PHP_SELF']);
$path_parts = pathinfo($phpSelf);

?>

<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Casual Cafe Critiques</title>
        <meta name = "author" content = "Nicholas Altland">
        <meta name = "description" content = "A series of reviews,recounting my experiences at many of the coffee shops located in Burlington, Vermont">
        <meta name="viewport" content="width=device-width, initial scale=1.0">
        <link rel="icon" href="../images/cCCLogo.png">
        <link rel="stylesheet" href="../css/custom.css?version=<?php print time(); ?>" type="text/css">
        <link rel="stylesheet" media="(max-width:800px)" href="../css/custom-tablet.css?version=<?php print time(); ?>" type="text/css">
        <link rel="stylesheet" media="(max-width:600px)" href="../css/custom-phone.css?version=<?php print time(); ?>" type="text/css">
    </head>

<!-- This is a box, describing what the page is about-->

    <?php   

    print '<body class="grid-layout positioning ' . $path_parts['filename'] . '">';

    include 'connect-DB.php';
    print PHP_EOL;
    include 'header.php';
    print PHP_EOL;

//The nav is included in my header
    ?>
