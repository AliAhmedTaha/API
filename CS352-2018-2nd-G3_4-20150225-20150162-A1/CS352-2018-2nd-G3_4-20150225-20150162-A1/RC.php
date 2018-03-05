

<!DOCTYPE html>
<html>
<head>
    <title>Random Color</title>
    <link rel="icon" href="icon.ico">
            <link rel="stylesheet" type="text/css" href="Style1.css">

</head>
<body>

            <a href="index.html"><img src="logo.png"  class="logo"></a>

<?php 

    $color=$_GET['search'];
    $url = 'http://www.colourlovers.com/api/colors/random?format=json';
    $json = file_get_contents($url);
    $array = json_decode($json, true);
    $title = $array[0]['title'];
    $code = $array[0]["hex"];
    $r = $array[0]["rgb"]['red'];
    $g = $array[0]["rgb"]['green'];
    $b = $array[0]["rgb"]['blue'];
    echo "name: ".$title."<br>";
    echo "code: ".$code."<br>";
    echo "red: ".$r."<br>";
    echo "green: ".$g."<br>";
    echo "blue: ".$b."<br>";

?>
<br>
<table width="100" height="100" style="background-color: #<?php echo $code ?>">
    <tr ></tr>
</table>

</body>
</html>