

<!DOCTYPE html>
<html>
<head>
    <title>Random Pattern</title>
    <link rel="icon" href="icon.ico">
            <link rel="stylesheet" type="text/css" href="Style1.css">

</head>
<body>
                <a href="index.html"><img src="logo.png"  class="logo"></a>


<?php 

    $color=$_GET['search'];
    $url = 'http://www.colourlovers.com/api/patterns/random?format=json';
    $json = file_get_contents($url);
    $array = json_decode($json, true);
	$title = $array[0]['title'];
    echo "<br>name: ".$title."<br>";
for ($i=0; $i<5; $i++)
{
	$code = null;
    $code = $array[0]["colors"][$i];
    if ($code!=null){
    echo "<table border='1' width='100' height='100' style='background-color: #".$code."'>";
    echo "<tr></tr></table>";}
}

?>

</body>
</html>