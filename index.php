<!doctype html>
<?php
include_once 'config/config.php';
?>
<html lang="de">

<head>
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/stylesheet.css">
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
            <img id="logo" src="/images/logo-white.png" alt="Logo TicSys">
        </div>
    </header>
    <nav>
        <?php
        $currentUri = getCurrentURI();
        foreach (getMenu() as $href => $title) {
            $liContent = $title;
            if ($href != $currentUri) {
                $liContent = "<a href=\"$href\">$title</a>";
            }
            echo "<li>$liContent</li>\n";
        }
        ?>
    </nav>
    <?php
    switch (getCurrentURI()) {
        case URL_EVENTS:
            include_once 'controller/eventscontroller.php';
            break;
        case URL_KONTAKT:
            include_once 'controller/contactcontroller.php';
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

<?php

/**
 * @return array containing all menu items in format [base href] => [title]
 */
function getMenu() {
    return array(
        URL_HOME => 'Home',
        URL_EVENTS => 'Events',
        URL_FAQ => 'FAQ',
        URL_KONTAKT => 'Kontakt'
    );
}

/**
 * @return string the requested menu item URI
 */
function getCurrentURI() {
    $menu = getMenu();
    if (array_key_exists($_SERVER['REQUEST_URI'], $menu)) {
        return $_SERVER['REQUEST_URI'];
    } else {
        foreach (array_keys(getMenu()) as $href) {
            if(preg_match("@^$href@", $_SERVER['REQUEST_URI'])) {
                return $href;
            }
        }
    }
    return key($menu);
}
?>