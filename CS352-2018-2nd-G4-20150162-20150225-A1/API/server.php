<?php

  if(isset($_POST['city']))
  {
    
    //$text = $_POST['city'];
  
    //API Key : bd5e378503939ddaee76f12ad7a97608 , another one : 25e7c598ee54ca1c3da8beef9a8042e4

    $file = "http://api.openweathermap.org/data/2.5/weather?q=" . $_POST['city']  . "&units=metric&APPID=bd5e378503939ddaee76f12ad7a97608";
    $result= @file_get_contents($file); // @ to disallow warrnig if country wrong

    
  
 //  echo "<pre>$result</pre>"  ; // contains all objects in json format for 5 days

     if (!$result){
        echo " <p style =' color:red; font-size : 200px;' >Wrong City </p>";
     }
 
   $arr = json_decode($result , true);
  
   // var_dump($arry);

    $Temp = $arr['main']['temp'];  // main temperature.

    $MinTemp =  $arr['main']['temp_min'];
    
    $MaxTemp = $arr['main']['temp_max'];
    
    $humidity = $arr['main']['humidity'];
    
    $WindSpeed = $arr['wind']['speed'];
    
    $WeatherState = $arr['weather'][0]['description'];
    
    $City = $arr['name'];

    $Country = $arr['sys']['country'];
}
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  body
  {
    background-image: url("https://wallpaperscraft.com/image/river_mountains_stones_trees_119323_3840x2160.jpg");
    background-size: 1370px 670px; 
    background-attachment: fixed;
  }
  nav{
    font-size: 70px;
    color: white;
    margin: 30px;
    padding: 3px;
    border-bottom: 1px solid white;
    text-align: center; 
  }
  .Cit{
    font-size: 60px;
    color: white;
    text-align: center;
    padding-right: 150px;
    margin: 0;
    font-weight: bold;
    background-color: #804000;
    opacity: 0.9;
  }
  p{
    font-size: 30px;
    color: white;
    padding-left: 150px;
    margin:15px;
  }
  span{
    
    position: absolute;
    
    right: 500px;
  }
  .content{
    height: 500px;
    width: 700px;
    margin: 40px 300px 35px 320px;
    background-color: black;
    padding: 1px;
    opacity: 0.7;
    border-radius: 10px;
  }
  .footer {
        text-align: center;
        color: white;
        padding: 10px 0;
        margin-top: 5px;
        font-weight: bold;
      }
  </style>
</head>

<body>


  <div class="content">
     <nav > <?=  $Temp ?> &deg;C &nbsp <i class="fa fa-cloud" style="font-size:70px;color:lightblue;"></i></nav> 
     
     <p class="Cit"> <?= $City ?>  , <?= $Country ?> </p>

     <p> Max Temp  <span > <?= $MaxTemp ?> </span> </p> 

     <p> Min Temp <span > <?= $MinTemp ?></span> </p>

     <p> humidity <span > <?=  $humidity ?> % </span></p>

     <p> Wind Speed  <span ><?= $WindSpeed ?></span> </p>

     <p> Weather State <span > <?= $WeatherState ?></span> </p>
  </div>


  <div class="footer">
     <footer>Copyright &copy; 2018 All Rights Reserved To Ali and Mohamed &reg;. </footer>
   </div>
  
</body>
</html>






