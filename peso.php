<?php
$peso= $_POST['peso'];
$altura = $_POST['altura'];
$imc = $peso/ ($altura * $altura) ;

if($imc < 18.5)
{
   

    ?>
    <center>
    <div style=" width: 1000px;
     height: 600px ; font-size: 30px; margin-left: auto;
    margin-right: auto; color :  #0F5959; margin-top: 300px; font-size : 50px;">

       
   <?php echo "Abaixo do peso normal!"; ?>
   
   


     </div></center><?php
}
elseif($imc>=18.5 && $imc<=24.9)
{
   

    ?>
    <center>
    <div style=" width: 1000px;
     height: 600px ; font-size: 30px; margin-left: auto;
    margin-right: auto; color : #02BA58; margin-top: 300px; font-size : 50px;">

       
   <?php echo "Peso normal!"; ?>
   
   


     </div></center><?php

}
elseif($imc>=25.0 &&$imc<=29.9)
{
    

    ?>
    <center>
    <div style=" width: 1000px;
     height: 600px ; font-size: 30px; margin-left: auto;
    margin-right: auto; color : #D34C52; margin-top: 300px; font-size : 50px;">

       
   <?php echo "Excesso de pesso!"; ?>
   
   


     </div></center><?php

    

}
elseif($imc>=30.0 && $imc<=34.9)
{
   

    ?>
    <center>
    <div style=" width: 1000px;
     height: 600px ; font-size: 30px; margin-left: auto;
    margin-right: auto; color : #AD1F23; margin-top: 300px; font-size : 50px;">

       
   <?php echo "Obssedidade classe 1!"; ?>
   
     


     </div></center><?php

}
elseif($imc>=35.0 && $imc<=39.9)
{
   

    ?>
    <center>
    <div style=" width: 1000px;
     height: 600px ; font-size: 30px; margin-left: auto;
    margin-right: auto; color : #881212; margin-top: 300px; font-size : 50px;">

       
   <?php echo "Obessidade classe 2!"; ?>
  
    


     </div></center><?php

}
elseif($imc>=40.0)
{
    

    ?>
    <center>
    <div style=" width: 1000px;
     height: 600px ; font-size: 30px; margin-left: auto;
    margin-right: auto; color :#490201; margin-top: 300px; font-size : 50px;">

       
   <?php echo "Obessidade classe 3!"; ?>
   
    


     </div></center><?php

}



?>