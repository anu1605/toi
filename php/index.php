<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>

<body>
    <?php
    $url = "https://asset.harnscloud.com/PublicationData/TOI/cap/2023/04/21/Advertisement/008/21_04_2023_008_005_cap.jpg";

    $content = file_get_contents($url);
    $im = imagecreatefromstring($content);
    $imagepath = dirname(__FILE__, 2) . "/" . "images/" . date('Y:m:d h:ia') . ".png";
    $imagepng = imagepng($im, $imagepath, 0)

    ?>
</body>

</html>