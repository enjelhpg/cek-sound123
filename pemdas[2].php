<form action="" method="POST">
      PROGRAM Variabel dan Tipe Data<br>
      Input Data : <input type="text" name="var">
      <input type="submit" value="Hasil">
    </form>
    <?php
    
    $a = 5;
    $b = 5.5;
    $c = "palui";

      if ($_POST)
      {
        $data = $_POST['var'];
        if ($data == "5") {
            echo "5 Tipe Datanya Adalah : "; echo gettype ($a) ; 
        }
        elseif ($data == "5.5") {
            echo "5.5 Tipe Datanya Adalah : "; echo gettype ($b); 
        }
        elseif ($data == "palui") {
            echo "palui Tipe Datanya Adalah : "; echo gettype ($c); 
        }
        else {
            echo "not found";
        }
      }
    ?>