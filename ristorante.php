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
      alert(pizze);
    }
  </script>

</head>
<body>
  <form>
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
  </form>
</body>
</html>
