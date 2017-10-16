<?php
require_once("DB.php");
$db        = new DB();
$id        = $db->escapeString($_GET['msg']);
$data      = $db->getRows('share_random_image', array( 'where' => array( 'id' => $id ), 'return_type' => 'single' ));
$url       = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https://' . $_SERVER['HTTP_HOST'] : 'http://' . $_SERVER['HTTP_HOST']) . dirname($_SERVER['PHP_SELF']);
$image_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https://' . $_SERVER['HTTP_HOST'] : 'http://' . $_SERVER['HTTP_HOST']) . '/images/' . $data['image'];
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta http-equiv="cache-control" content="max-age=0" />
        <meta http-equiv="cache-control" content="no-cache" />
        <meta http-equiv="expires" content="0" />
        <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
        <meta http-equiv="pragma" content="no-cache" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <link rel="canonical" href="<?= $url . 'getImage/' . $data['id'] ?>"/>
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title><?= $data['title'] ?></title>

        <!-- Facebook Meta Tags -->
        <meta property="og:type" content="website" />
        <meta property="og:url" content="<?= $url . 'getImage/' . $data['id'] ?>" />
        <meta property="og:title" content="<?= $data['title'] ?>" />
        <meta property="og:description" content="<?= $data['description'] ?>" />
        <meta property="og:image" content="<?= $image_url ?>" />
        <!-- Commented Optional Tags--?>
<!--        <meta property="og:image:secure_url" content="https://www.autumnworldwide.com/show-got-profile/<?php //$data['image']         ?>" />
            <meta property="og:image:type" content="image/jpeg" />
            <meta property="og:image:width" content="200"/>
            <meta property="og:image:height" content="200"/>
            <meta property="fb:app_id" content="178227382709073"/>-->
        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image"/>
        <meta name="twitter:title" content="<?= $data['title'] ?>"/>
        <meta name="twitter:description" content="<?= $data['description'] ?>"/>
        <meta name="twitter:image" content="<?= $image_url ?>"/>
        <!-- Below is to redirect the user when they try to open this page directly -->
<!--        <meta http-equiv="refresh" content="0; url=<?php //echo isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https://' . $_SERVER['HTTP_HOST'] : 'http://' . $_SERVER['HTTP_HOST'];      ?>" />-->
    </head>
    <body>
    </body>
</html>