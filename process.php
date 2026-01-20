<?php
$nama = $_POST['nama'];
$nisn = $_POST['nisn'];
$bindo = $_POST['bindo'];
$mtk = $_POST['mtk'];
$bing = $_POST['bing'];
$kejuruan = $_POST['kejuruan'];
$kka = $_POST['kka'];
$ipas = $_POST['ipas'];
$infor = $_POST['infor'];
$pjok = $_POST['pjok'];
$seni = $_POST['seni'];
$sejarah = $_POST['sejarah'];
$jawa = $_POST['jawa'];
$pai = $_POST['pai'];
$pkn = $_POST['pkn'];
$kkm = 75;

$rata = ($bindo + $mtk + $bing + $kejuruan + $kka + $ipas + $infor + $pjok + $seni + $sejarah + $jawa + $pai + $pkn) / 13 ;

if (
    $rata > 75 &&
    $bindo > $kkm &&
    $mtk > $kkm &&
    $bing > $kkm &&
    $kejuruan > $kkm &&
    $kka > $kkm &&
    $ipas > $kkm &&
    $infor > $kkm &&
    $pjok > $kkm &&
    $seni > $kkm &&
    $sejarah > $kkm &&
    $jawa > $kkm &&
    $pai > $kkm &&
    $pkn > $kkm
) {
    $status = "<span style='color:green'>LULUS</span>";
} else {
    $status = "<span style='color:red'>TIDAK LULUS</span>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Hasil Kelulusan</title>
</head>

<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
}
    .kotak {
        width: 400px;
        padding: 20px;
        margin: auto;
        border: 2px solid black;
    }
</style>

<body>
    <div class="kotak">
    <center><h2>Hasil Kelulusan</h2></center>

    <p>Nama: <b>
            <?php echo $nama; ?>
        </b></p>
    <p>NISN: <b>
            <?php echo $nisn; ?>
        </b></p>

    <p>Bahasa Indonesia:
        <?php echo $bindo; ?>
    </p>
    <p>Matematika:
        <?php echo $mtk; ?>
    </p>
    <p>Bahasa Inggris:
        <?php echo $bing; ?>
    </p>
    <p>Kejuruan:
        <?php echo $kejuruan; ?>
    </p>

    <p>KKA:
        <?php echo $kka; ?>
    </p>

    <p>IPAS:
        <?php echo $ipas; ?>
    </p>

    <p>Informatika:
        <?php echo $infor; ?>
    </p>
    
    <p>PJOK:
        <?php echo $pjok; ?>
    </p>

    <p>Seni:
        <?php echo $seni; ?>
    </p>

    <p>Sejarah:
        <?php echo $sejarah; ?>
    </p>

    <p>PAI:
        <?php echo $pai; ?>
    </p>

    <p>PPKN:
        <?php echo $pkn; ?>
    </p>

    <p>Bahasa Jawa:
        <?php echo $jawa; ?>
    </p>

    <p>Rata-rata: <b>
            <?php echo number_format($rata,2); ?>
        </b></p>
    <center>
    <h3>Status:
        <?php echo $status; ?>
    </h3>
    </center>
    </div>

</body>

</html>