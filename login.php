<?php
    session_start();

    $_SESSION['nome']     = $_POST['nome'];
    $_SESSION['cognome']  = $_POST['cognome'];
    $_SESSION['tipo']     = $_POST['tipo'];

    if ($_SESSION['tipo'] == "cliente") {
      header("Location:cliente.php");
    }
    else {
      header("Location:ristorante.php");
    }


?>
