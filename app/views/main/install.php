<?php
$l = explode(".", $_SERVER['HTTP_HOST']);
$filename = $l[0] . "_manifest.json";
if (file_exists("/manifest/" . $filename)) {
    $filename = "/public/manifest/" . $filename;
} else {
    $filename = "/public/manifest/default_manifest.json";
};
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--    <link rel="manifest" href="--><?php //echo($filename) ?><!--">-->
   <link rel="manifest" href="./public/manifest/default_manifest.json">
    <title>Document</title>
</head>
<script src="./public/scripts/app.js">
</script>

<body>
<img id="myImg" src="/public/images/about-bg.jpg" width="1900" height="492" alt="">

</body>
</html>

