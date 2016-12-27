<html>
<head>

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
</body>
</html>
