<?php
$params = file_get_contents('config.json');
$json = json_decode($params, JSON_UNESCAPED_SLASHES);
header('Content-Type: application/json;charset=utf-8');
foreach ($json as $key => $value) {
    $name = $json[$key][0]["name"];
    $fileName = $key."_manifest.json";
    $short_name = $json[$key][0]["short_name"];
    $description = $json[$key][0]["description"];
    $scope = $json[$key][0]["scope"];
    $icon_192 = $json[$key][0]["icons"][0]["src"];
    $icon_512 = $json[$key][0]["icons"][1]["src"];
    $start_url = $json[$key][0]["start_url"];
    $background_color = $json[$key][0]["background_color"];
    $theme_color = $json[$key][0]["theme_color"];
    $display = $json[$key][0]["display"];
    $orientation = $json[$key][0]["orientation"];
    $s =manifest($name,$short_name,$description,$scope,$icon_192,$icon_512,$start_url,$background_color,$theme_color,$display,$orientation);
    $c =json_encode($s,JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);
    $fp = fopen($fileName, 'w');
    fwrite($fp, $c);
    fclose($fp);
    echo($name);
}
function manifest($name, $short_name, $description, $scope, $icon_192, $icon_512, $start_url, $background_color, $theme_color, $display, $orientation): array
{

    $icon = array(
        array(
            "src" => $icon_192,
            "sizes" => "192x192",
            "type" => "image/png",
            "purpose" => "maskable any"
        ),
        array(
            "src" => $icon_512,
            "sizes" => "512x512",
            "type" => "image/png",
            "purpose" => "maskable any"
        )
    );
    return array(
        "short_name" => $short_name,
        "name" => $name,
        "description" => $description,
        "scope" => $scope,
        "icons" => $icon,
        "background_color" => $background_color,
        "theme_color" => $theme_color,
        "start_url" => $start_url,
        "display" => $display,
        "orientation" => $orientation,
    );
}

