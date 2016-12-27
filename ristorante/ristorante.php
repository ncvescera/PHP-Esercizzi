<html>
<head>
  <script>
    var pizze = new Array(); //array che conterrà le pizze selezionate

    //funzione per aggiungere un elemento all'array
    function add(valore){
      pizze.push(valore);
    }

    //funzione per rimuovere un elemento dall'array
    function remove(valore){
      pizze.splice(pizze.indexOf(valore),1);
    }

    //funzione per scegliere se eliminare o aggiungere un elemento
    function change(value){
      //se l'elemento non esiste viene aggiunto
      if(pizze.indexOf(value) == -1){
        add(value);
      }
      else {
        remove(value);
      }
      //alert(pizze);
    }

    //converte l'array in JSON per poi passarlo a php
    function send(){
      window.location.href = "elabora.php?dati="+JSON.stringify(pizze);
    }
  </script>

</head>
<body>
  <h1>Seleziona le pizze</h1>
  <?php
    session_start();

    $file = fopen("data.dat","r") or die("File inesistente!"); //apertura del file con le pizze

    //lettura del file e creazione delle checkbox
    $i = 0;
    while(!feof($file)){
      $line = fgets($file);
      if($line != null){
        echo '<input type="checkbox"'."name=\"$i\" value=\"$line\" onchange=\"change(this.value)\">$line<br>";
        $i++;
      }
    }
    fclose($file);
  ?>
  <br>
  <button type="submit" onclick="send()">Invia</button> <a href="annulla.php"><button type="submit">annulla</button></a>
</body>
</html>
