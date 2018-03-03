<!DOCTYPE html>
<html>

<head>
  <style >
.header
{
    
  background-image: url('starry_sky.jpg');

}
  .header{
   
      margin: 0;
      padding: 36px;
  
  }

  </style>
</head>

<body >
  <div class="header">
            <fieldset>
              <form  method="post" >
                Enter the City : 
                <input type="text" name="city">
                <input type="submit" name="submit" style="color: red;">
              </form>
            </fieldset>
  </div>

<?php

//action="weather.php"
  if(isset($_POST['city']))
  {
        
    $file = "http://api.openweathermap.org/data/2.5/forecast?q=" . $_POST['city']  . "&units=metric&APPID=25e7c598ee54ca1c3da8beef9a8042e4";
     $result= @file_get_contents($file); // @ to disallow warrnig if countery wrong
  
  // echo "<pre>$result</pre>"  ;
  
   $arry = json_decode($result , true);
  
    //var_dump($arry);

       echo "<br>";
    echo "Temp. : " . $arry['list'][0]['main']['temp'];
    echo "<br>";
    echo " Min Temp. : " . $arry['list'][0]['main']['temp_min'];
    echo "<br>";
    echo "Max Tamp. : " . $arry['list'][0]['main']['temp_max'];
    echo "<br>";
    echo "Humidity : " . $arry['list'][0]['main']['humidity'];
    echo "<br>";
    echo "wind Speed : " . $arry['list'][0]['wind']['speed'];
    echo "<br>";
    echo "weather state : " . $arry['list'][0]['weather'][0]['description'];
    echo "<br>";
    echo "-- : " . $arry['list'][0]['dt_txt'];
    echo "<br>";
    echo "city : " . $arry['city']['name'];
      echo "<br>";
    echo "country : " . $arry['city']['country'];
       echo "<br>";
     $time =  $arry['list'][0]['dt_txt'];
      echo "<br>";
     $arr = explode(" ", $time);
   //  var_dump($arr );  

  }

?>


</body>
</html>

