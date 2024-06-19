<?php
 
$temp = $_POST['temp'];?>
 <center>
    
 <div style=" width: 1100px;
    height: 600px ;">
 <h1><?php if($temp < 0)
{
    

     echo "Está Congelando!";
     echo "<br>";
     echo "Que tal preparar um chocolate quente e ficar em baixo das cobertas?";
     ?><div style=" width: 1000px;
     height: 600px ;">

        <img src="Congelando.jpg" style=" width: 800px;
     height: 600px ;">



     </div><?php

    
}

elseif($temp>=0 && $temp<15)
{
 
    echo"Está Muito Frio!";

    ?><div style=" width: 1000px;
     height: 600px ;">

        <img src="Frio.jpg" style=" width: 800px;
     height: 600px ;">



     </div><?php
}


elseif($temp>=15 && $temp<25)
{
 
    echo"A Temperatura está Razoavel";

    ?><div style=" width: 1000px;
     height: 600px ;">

        <img src="Razoavel.jpg" style=" width: 800px;
     height: 600px ;">



     </div><?php
}
 
elseif($temp>=25)
{
 
    echo "Está Calor";

    ?><div style=" width: 1000px;
     height: 600px ;">

        <img src="Calor.jpg" style=" width: 800px;
     height: 600px ;">



     </div><?php
}

?></h1></center></body>
   
