<?php
if(isset($_POST)){
    $nombre = $_POST['nombre'];
    $eda = $_POST['edad'];
    $tipo = $_POST['tipo'];
    $chip = $_POST['chip'];
    $castrado = $_POST['castrado'];
    echo '<h2>Grácias por su colaboración</h2>
          <p>El nombre del animal es: '.$nombre.'</p>
          <p>La edad del animal es: '.$eda.'</p>
          <p>El tipo de animals es: '.$tipo.'</p>';
}else{
    echo"Error en el envio de datos";
}

?>