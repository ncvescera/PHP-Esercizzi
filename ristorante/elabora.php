<?php
  $array = json_decode($_GET['dati']); //decodifica dei dati in JSON

  $file = fopen("../pizze.dat","w") or die("Impossibile creare il file");

  //scrittura dei dati sul file
  foreach ($array as $elem){
    fwrite($file,$elem);
  }
  fclose($file);

  session_destroy(); //distruzione della sessione

  echo "<h1>File scritto correttamente!</h1>";
  echo "Torna alla home <a href=\"/index.html\"><button>Home</button></a>";
?>
