<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Probando ordenador</title>
  </head>
  <body>
    <?php
    //incluimos la Clase
    include "ClaseOrdenador.php";
    //Generacion de objetos
    $ordenador1 = new ClaseOrdenador();
    $ordenador1->setColor('Negro ');
    echo "es el color del ordenador" .$ordenador1->getColor();
    echo "<br>";

    $ordenador1->setTipo('portatil ');
    echo "es el tipo del ordenador" .$ordenador1->getTipo();
    echo "<br>";

    $ordenador1->setTamano('5 ');
    echo "es el tamaño del ordenador" .$ordenador1->getTamano();
    echo "<br>";

    $ordenador1->setPrecio('500 ');
    echo "es el precio del ordenador" .$ordenador1->getPrecio();
    echo "<br>";

    ?>
  </body>
</html>
