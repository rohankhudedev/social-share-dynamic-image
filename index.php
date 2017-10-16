<?php
require_once("DB.php");
$db   = new DB();
$data = $db->getRows('share_random_image', array( 'return_type' => 'single', 'order_by' => 'rand()', 'limit' => '1' ));
$url  = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https://' . $_SERVER['HTTP_HOST'] : 'http://' . $_SERVER['HTTP_HOST']) . dirname($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Share Generator</title>
        <!-- Facebook Meta Tags -->       
        <meta property="og:type" content="website" />
        <meta property="og:url" content="<?= $url ?>" />
        <meta property="og:title" content="Generate your Special Diwali Message" />
        <meta property="og:description" content="Share you Special Diwali message with everyone on social media" />
        <meta property="og:image" content="<?= $url ?>/images/img.png" />
        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image"/>
        <meta name="twitter:title" content="Generate your Special Diwali Message"/>
        <meta name="twitter:description" content="Share you Special Diwali message with everyone on social media"/>
        <meta name="twitter:image" content="<?= $url ?>/images/img.png"/>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>

        <div class="container">
            <img src="images/<?= $data['image'] ?>" class="img-responsive center-block">
        </div>

        <div class="container">
            <a style="margin-top: 15px; float: right;" href="images/<?= $data['image'] ?>" download>Download</a>
            <button style="margin-top: 15px; float: right;" onClick="window.location.reload()">Generate</button>
        </div>

        <div class="container" style="padding-top: 15px;">
            Share  it on: 
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?= rawurlencode($url . "getImage/" . $data['id']) ?>" target="_blank"><button> Facebook </button> </a>
            <a href="https://twitter.com/home?status=<?= rawurlencode($url . "getImage/" . $data['id']) ?>" target="_blank"> <button> Twitter </button> </a>
            <a href="whatsapp://send?text=<?= rawurlencode($url . "getImage/" . $data['id']) ?>" class="hidden"> <button> WhatsApp </button> </a>
        </div>   
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>