<html>
<head>
  <script>
    function conferma(){
      var result = window.confirm("Confermare l'ordine ?");
      if(result){
        alert("Ordine effettuato con successo!");
        window.location.href = "../annulla.php"; //se conferma dovrebbe succedere qualcosa ma per ora ritorna alla home;
      }
      else {
        window.location.href = "../annulla.php";
      }
    }
  </script>
</head>
<body>
  <h1>Seleziona le pizze</h1>
  <?php
    session_start();

    $file = fopen("../pizze.dat","r") or die("Impossibile aprire il file");

    echo "<select name=\"pizze\" multiple>";
    while(!feof($file)){
      $line = fgets($file);
      if($line != null){
        echo "<option value=\"$line\">$line</option>";
      }
    }
    fclose($file);
    echo "</select>";
  ?>
  <br>
  <button onclick="conferma()">Conferma</button> <a href="../annulla.php"><button>Annulla</button></a>
</body>
</html>
