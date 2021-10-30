<?php
require 'controller.php';
$u = new Controller();


if(isset($_POST['ng']) && !empty($_POST['ng']) && isset($_POST['min']) && !empty($_POST['min']) && isset($_POST['max']) && !empty($_POST['max'])){

    if(isset($_POST['checkbox'])){
        $check = $_POST['checkbox'];
    }else{
        $check = false;
    }
    $ng = $_POST['ng'];
    $min =  $_POST['min'];
    $max = $_POST['max'];
    $valor = $u->sortear($ng, $min, $max, $check);
     
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>soteador</title>
        <link rel="stylesheet" href="style.css">
        <script  type="text/javascript" src="javascript.js"></script>
    </head>
 <body>
     <div class="Corpo">

         <div class="h3">
            <h3>Os números sorteados foram:</h3>
         </div>


        <div class="div-list">
            <ul>
            <?php 
                    for($i = 0; $i < $ng; $i++ ) {
                        echo "<li>".$valor[$i]."</li>";
                }
                ?>
            </ul>
        </div>
        <div class="rodape">       
            <a href="index.php"><Button type="submit">Voltar para página principal</Button></a>
        </div>
    </div>
    </body>
</html>