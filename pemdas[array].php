<!DOCTYPE html>
    <head>
        <title>BELAJAR ALGORITMA PEMDAS</title>
    </head>
<body>
    <h1>LIST NAMA HARI</h1>
<!--struktur tabel data dimulai-->
<?php $hari = array ("SENIN","SELASA","RABU","KAMIS","JUMAT","SABTU","MINGGU"); ?>
    <table border="1">
        <tr>
        <td>NO</td>
        <td>NAMA HARI</td>
        </tr>
<?php 
//mengimplementasikan stuktur pengulangan data menggunakan 'for'
$no = 1;
for ($i=0;$i<count($hari);$i++){
    echo "
        <tr>
            <td>".$no."</td>
            <td>".$hari[$i]."</td>
        </tr>
    "; 
    $no++;
};
?>
    </table>
<!--struktur table data selesai-->

<!--mengimplementasikan user interface-->
<h3> CARI NAMA DISINI </h3>
<form action="index.php" method="POST">
<input type="text" name="input"/>
<input type="submit"/>
</form>
</body>
</html>

    <?php 
    //mengimplementasikan algoritma pemrograman
    if(isset($_POST['input'])){
        $input = $_POST['input'];
        //mengimplementasikan percabangan if 
            if ($input == 1 ) {
            echo "HARI " . $hari[0];
        } else if ($input == 2 ) {
            echo "HARI " . $hari[1];
        } else if ($input == 3 ) {
            echo "HARI " . $hari[2];
        } else if ($input == 4 ) {
            echo "HARI " . $hari[3];
        } else if ($input == 5 ) {
            echo "HARI " . $hari[4];
        } else if ($input == 6 ) {
            echo "HARI " . $hari[5];
        } else if ($input == 7 ) {
            echo "HARI ". $hari[6];
        } else {
            echo "ANGKA YANG ANDA INPUT SALAH MAN!";
        }
    }
    ?>
