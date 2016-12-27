<html>
<head>
  <script>
    var pizze = new Array();

    function add(valore){
      pizze.push(valore);
    }

    function remove(valore){
      pizze.splice(pizze.indexOf(valore),1);
    }

    function change(value){
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

    $file = fopen("data.dat","r") or die("File inesistente!");
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
