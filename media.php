<?php

$nome = $_POST['nome'];
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];

$media = ( $nota1 + $nota2 + $nota3) /3;
 
if( $media >=7)
{
    

    ?>
    <center>
    <div style=" width: 300px;
     height: 100px ; font-size: 30px; margin-left: auto;
    margin-right: auto; color : #02BA58; margin-top: 300px; font-size : 50px;">

       
   <?php echo  "Aprovado!"; ?>
   


     </div><br>
     <div></div>
     </center><?php
}
elseif($media>=5 )
{
   
    ?>
    <center>
    <div style=" width: 300px;
     height: 100px ; font-size: 30px; margin-left: auto;
    margin-right: auto; color : blue ; margin-top: 300px; font-size : 50px;">

       
   <?php echo   "recuperação!"; ?>
  


     </div><br>
     <div></div></center><?php

 
}
else{
    

    ?>
    <center>
    <div style=" width: 300px;
     height: 100px ; font-size: 30px; margin-left: auto;
    margin-right: auto; color : red; margin-top: 300px; font-size : 50px;">

       
   <?php echo  "reprovado!"; ?>
   


     </div><br>
     <div></div></center><?php
}
?>