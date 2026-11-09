<?php
session_start();

if (isset($_SESSION['won']) && $_SESSION['won'] == true) {
    echo "Acertaste el numero";
} else {
    echo "No conseguiste acertar el numero ";
}
?>

<br>
<a href="index.php?reset=1">Volver a jugar</a>
?>