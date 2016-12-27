<?php
  $array = json_decode($_GET['dati']); //decodifica dei dati in JSON

  $file = fopen("../pizze.dat","w") or die("Impossibile creare il file");
  foreach ($array as $elem){
    fwrite($file,$elem);
  }
  fclose($file);

  session_destroy();

  echo "<h1>File scritto correttamente!</h1>";
  echo "Torna alla home <a href=\"/index.html\"><button>Home</button></a>";
?>
