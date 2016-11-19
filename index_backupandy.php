<!doctype html>
<?php
include_once 'config/config.php';
?>
<html lang="de">

<head>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <meta charset="UTF-8">
    <meta name="description" content="TicSys by Andy Reimann">
    <meta name="keywords" content="Ticketsystem,CSS,XML,JavaScript,HTML5,SQL">
    <meta name="author" content="Andy Reimann">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TicSys by Andy Reimann</title>
</head>

<body>
<div id="wrap">
    <header>
        <div id="logo">
            <img src="images/logo-black.png" alt="Logo TicSys">
        </div>
    </header>
    <nav>
        <?php
        $menu = array(
            URL_HOME => 'Home',
            URL_EVENTS => 'Events',
            URL_FAQ => 'FAQ',
            URL_KONTAKT => 'Kontakt'
        );
        foreach ($menu as $href => $title) {
            $liContent = $title;
            if ($href != strtolower($_SERVER['REQUEST_URI'])) {
                $liContent = "<a href=\"$href\">$title</a>";
            }
            echo "<li>$liContent</li>\n";
        }
        ?>
    </nav>
    <?php
    switch ($_SERVER['REQUEST_URI']) {
        case URL_EVENTS:
            include_once 'controller/eventscontroller.php';
            break;
    }
    ?>
    <footer>
        <p>
        <div id="copyright">
            Copyright &copy; 2012 -
            <?php echo date("Y"); ?>
        </div>
        </p>
    </footer>
</div>
</body>

</html>