<?php 

$nama = "Asep";
/*
echo $nama;
echo "<br>";
echo $nama;
echo "<br>"; 
echo $nama;
echo "<br>"; 
echo $nama;
echo "<br>"; 
echo $nama;
echo "<br>"; 
*/

/*
$no = 10;
for ($i=0; $i<$no; $i++) {
    $n = $i + 1;
    echo $n. " ".$nama."<br>"; 
}
*/

/*
$no = 10;
$i = 0;
while ($i < $no) {
    $n = $i + 1;
    echo $n." ".$nama."<br/>";
    $i++;
}
*/

/*
$no = 10;
$i = 0;
do {
    $n = $i + 1;
    echo $n." ".$nama."<br/>";
    $i++;
} while ($i < $no)
*/

/*
$data = array('Avanza', 'fortuner', 'Lamborghini', 'Tesla', 'Inova', 'Xenia');

//echo $data[5];

/*
foreach($data as $value) {
    echo $value."<br>";
}
*/

// PERCABANGAN
/*
if ($nama == "Hamud") {
    echo $nama." adalah orang Arab";
} else if($nama == "Ferdi") {
    echo $nama." bukan orang Arab";
}else {
    echo $nama." saha eta?";
}
*/
/*
switch($nama) {
    case "Hamud";
        $pesan = $nama." adalah orang Arab";
    break;
    case "Ferdi";
        $pesan = $nama." bukan orang Arab";
    break;
    default:
        $pesan = $nama." saha eta?";
}
echo $pesan;
*/


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Input Nama dan Diulang</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Nama</label>
        <input type="text" name="nama">
        <label>Jumlah</label>
        <input type="text" name="no">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    if(!empty($_POST['submit'])) {

        switch($_POST['nama']) {
            case "Hamud";
                $pesan = $_POST['nama']." adalah orang Arab";
            break;
            case "Ferdi";
                $pesan = $_POST['nama']." bukan orang Arab";
            break;
            default:
                $pesan = $_POST['nama']." saha eta?";
        }

        for ($i=0;$i<$_POST['no'];$i++) {
            echo $pesan."<br>";
        }

        } else {
            echo "Anda belum input nama dan jumlah";
    }
    
    ?>
</body>
</html>
