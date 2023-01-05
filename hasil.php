<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from getbootstrap.com/examples/jumbotron-narrow/ by HTTrack Website Copier/3.x [XR&CO'2013], Sun, 31 Aug 2014 14:51:01 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Program Logika Fuzzy</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/jumbotron-narrow.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

<<?php
$w = $_POST['w'];
$x = $_POST['x'];
$y = $_POST['y'];

function TanggungJawab_Buruk()
{
	$w = $_POST['w'];
	$uTburuk = (40-$w)/(40-30);
    if ($w >=40){
        return 0;
    }else if(30 < $w && $w  < 40 ){
        return $uTburuk;
    }else {
        return 1;
    }
}
function TanggungJawab_Cukup()
{
    $w = $_POST['w'];
    $uTcukup = (80-$w)/(80-70) ;
    if (30<$w && $w  < 80){
        return 0;
    }else if (70<$w && $w  < 80){
        return 1;
    }else if (40<$w && $w  < 70){
        return $uTcukup;
    }else {
        return $uTcukup;
    }

}
function TanggungJawab_Baik()
{
    $w = $_POST['w'];
    $uTbaik = ($w-70)/(70-60) ;
    if (70<$w && $w  < 80){
        return 1;
    }else if (60<$w && $w  < 80){
        return $uTcukup;
    }else {
        return 0;
    }
}
function Disiplin_Buruk()
{
    $x = $_POST['x'];
    $uDburuk = (40-$x)/(40-30) ;
    if ($x>=40){
        return 0;
    }else if ($x<=30){
        return 1;
    }else {
        return $uDburuk;
    }
}
function Disiplin_cukup()
{
    $x = $_POST['x'];
    $uDcukup = (80-$x)/(80-70) ;
    if (30<$x && $x  < 80){
        return 0;
    }else if (70<$x && $x  < 80){
        return 1;
    }else if (40<$x && $x  < 70){
        return $uDcukup;
    }else {
        return $uDcukup;
    }
}
function Disiplin_Baik()
{
    $x = $_POST['x'];
    $uDbaik = ($x-70)/(70-60) ;
    if ($x>=80){
        return 1;
    }else if ($x<=70){
        return 0;
    }else {
        return $uDbaik;
    }
}
function FaktorPengurang_Buruk()
{
    $y = $_POST['y'];
    $uBuruk = (40-$y)/(40-30) ;
    if ($y>=40){
        return 0;
    }else if ($y<=30){
        return 1;
    }else {
        return $uBuruk;
    }
}
function FaktorPengurang_Cukup()
{
    $y = $_POST['y'];
    $uBuruk = ($y-80)/(80-70) ;
    if (70<$y && $y  < 80){
        return 0;
    }else if (40<$y && $y  < 70){
        return 1;
    }else if (30<$y && $y  < 40){
        return $uBuruk;
    }else {
        return $uBuruk;
    }
}
function FaktorPengurang_Baik()
{
    $y = $_POST['y'];
    $uBuruk = (80-$y)/(80-70) ;
    if ($y>=80){
        return 1;
    }else if ($y<=70){
        return 0;
    }else {
        return $uBuruk;
    }
}
//R1
$a1 = min(TanggungJawab_Baik(), Disiplin_Baik(), FaktorPengurang_Baik());
//echo a1;
$z1 = (90 * $a1 );
//R2
$a2 = min(TanggungJawab_Baik(), Disiplin_Baik(), FaktorPengurang_Cukup());
//echo a2;
$z2 = (90 * $a2 );
//R3
$a3 = min(TanggungJawab_Baik(), Disiplin_Baik(), FaktorPengurang_Baik());
//echo a3;
$z3 = (62.5 * $a3 );
//R4
$a4 = min(TanggungJawab_Baik(), Disiplin_Baik(), FaktorPengurang_Baik());
//echo a1;
$z4 = (90 * $a4 );
//R5
$a5 = min(TanggungJawab_Baik(), Disiplin_Baik(), FaktorPengurang_Baik());
//echo a5;
$z5 = (62.5 * $a5);
//R6
$a6 = min(TanggungJawab_Baik(), Disiplin_Baik(), FaktorPengurang_Baik());
//echo a6;
$z6 = (60.5 * $a6);

$zTotal = (($a1*$z1)+($a2*$z2)+($a3*$z3)+($a4*$z4)+($a5*$z5)+($a6*$z6))/(($a1+$a2+$a3+$a4+$a5+$a6));

$kategori;
if (0 < $zTotal && $zTotal < 45 ){
    $kategori = "Sangat Buruk";
}else if (45< $zTotal && $zTotal <56){
    $kategori = "Buruk";
}else if (56< $zTotal && $zTotal <65){
    $kategori = "Cukup";
}else if (65< $zTotal && $zTotal <80){
    $kategori = "Baik";
}else if (80< $zTotal && $zTotal <100){
    $kategori = "Sangat Baik";
}
?>


  <body background="assets/img/bc.jpg" >

    <div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right">
          <li class="active"><a href="index.php"><span class="glyphicon glyphicon-fire"></span> Apps</a></li>
          <li><a href="about.php"><span class="glyphicon glyphicon-info-sign"></span> About</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-user"></span> Login</a></li>
        </ul>
        <h2 class="text-muted"><span class="glyphicon glyphicon-home"></span> <a href="index.php"><span class="label label-danger"> Program Fuzzy</span></a></h2>
      </div>

        <div class="panel panel-primary">
  			<div class="panel-heading">
    			<h3 class="panel-title">Hasil</h3>
  			</div>
 		 	<div class="panel-body">
    			
    			<div class="Tanggung Jawab">
        			<table border= "1">
               				 <tr>
                			    <th scope="col">Tanggung Jawab <?= $w; ?></th>
               				    <th scope="col">Hasil</th>
                			</tr>
                			<tr>
                    			<td>Derajat keanggotaan kategori buruk</td>
                  				<td><?= TanggungJawab_Buruk(); ?></td>
               				</tr>
                			<tr>
              				    <td>Derajat keanggotaan kategori cukup</td>
                    			<td><?= TanggungJawab_Cukup(); ?></td>
                			</tr>
                			<tr>
                    			<td>Derajat keanggotaan kategori baik</td>
                    			<td><?= TanggungJawab_Baik(); ?></td>
                			</tr>   
        			</table>
    			</div>

    			<br>

    			<div class="Kedisplinan">
        			<table border = "1">
                			<tr>
                    			<th scope="col">Kedisiplinan <?= $w; ?></th>
                    			<th scope="col">Hasil</th>
                			</tr>
                			<tr>
                    			<td>Derajat keanggotaan kategori buruk</td>
                    			<td><?= Disiplin_Buruk(); ?></td>
                			</tr>
                			<tr>
                    			<td>Derajat keanggotaan kategori cukup</td>
                    			<td><?= Disiplin_Cukup(); ?></td>
                			</tr>
                			<tr>
                    			<td>Derajat keanggotaan kategori baik</td>
                    			<td><?= Disiplin_Baik(); ?></td> </tr>
                			</tr>
        			</table>
    			</div>

    			<br>

    			<div class="Faktor Pengurang">
        			<table border = "1">
                			<tr>
                    			<th scope="col">Faktor Pengurang <?= $w; ?></th>
                    			<th scope="col">Hasil</th>
                			</tr>
                			<tr>
                    			<td>Derajat keanggotaan kategori buruk</td>
                    			<td><?= FaktorPengurang_Buruk(); ?></td>
                			</tr>
                			<tr>
                    			<td>Derajat keanggotaan kategori cukup</td>
                    			<td><?= FaktorPengurang_Cukup(); ?></td>
                			</tr>
                			<tr>
                    			<td>Derajat keanggotaan kategori baik</td>
                    			<td><?= FaktorPengurang_Baik(); ?></td>
                			</tr>
        			</table>
    			</div>


  			</div>
		</div>

        

        <div class="panel panel-primary">
  			<div class="panel-heading">
    			<h3 class="panel-title">Inferensi</h3>
  			</div>
  			<div class="panel-body">
    			<div class="inferensi">
        <table class="table" border="1">
            <thead class="table-secondary">
                <tr>
                    <th scope="col">Kode</th>
                    <th scope="col">Inferensi</th>
                    <th scope="col">Hasil</th>
                </tr>
            </thead>
            <tbody class="table-info">
            <tr>
                <th scope="row">R1</th>
                <td>Jika Tanggung jawab Sangat baik dan Disiplin Sangat baik serta faktor pengurang Sangat baik, maka Keputusan Sangat baik</td>
                <td align="center"><?= $z1; ?></td>
            </tr>
            <tr>
                <th scope="row">R2</th>
                <td>Jika Tanggung jawab Sangat baik dan Disiplin Sangat baik serta faktor pengurang baik maka Keputusan Sangat Baik
                <td align="center"><?= $z2; ?></td>
            </tr>
            <tr>
                <th scope="row">R3</th>
                <td>Jika Tanggung jawab Sangat baik dan Disiplin Sangat baik serta faktor pengurang Buruk maka Keputusan Baik
                 <td align="center"><?= $z3; ?></td>
            </tr>
            <tr>
                <th scope="row">R4</th>
                <td>Jika Tanggung jawab Sangat baik dan Disiplin  baik serta faktor pengurang Sangat Baik maka Keputusan Sangat Baik
                <td align="center"><?= $z4; ?></td>
             </tr>
            <tr>
                <th scope="row">R5</th>
                <td>Jika Tanggung jawab Sangat baik dan Disiplin  Baik serta faktor pengurang Baik maka Keputusan Baik
                <td align="center"><?= $z5; ?></td>
            </tr>
            <tr>
                <th scope="row">R6</th>
                <td>Jika Tanggung jawab Sangat baik dan Disiplin  Baik serta faktor pengurang Buruk maka Keputusan Cukup
                <td align="center"><?= $z6; ?></td>
            </tr>
            </tbody>
        </table>
    			</div>
			</div>
		</div>

		<div class="panel panel-primary">
  			<div class="panel-heading">
    			<h3 class="panel-title">Defuzzifikasi</h3>
  			</div>
  			<div class="panel-body">
    			<div class="Defuzzyfikasi">
					<table border="1">          
        				<tr class= "table-secondary">
            				<th scope="col">Kesimpulan</th>
        				</tr>
        				<tr>
            				<td>
            					Jika Tanggung Jawab Bernilai <strong><?= $w; ?></strong> dan Disiplin Bernilai <strong><?= $x; ?></strong>
            					Serta Faktor Pengurang Bernilai <strong><?=$y; ?></strong> Maka Keputusan <strong><?= $kategori; ?></strong>
            				</td>
        				</tr>
    				</table>
    			</div>
  			</div>
		</div>



      <div class="footer">
        <p>&copy; DimasPrayoga 2023</p>
      </div>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>

<!-- Mirrored from getbootstrap.com/examples/jumbotron-narrow/ by HTTrack Website Copier/3.x [XR&CO'2013], Sun, 31 Aug 2014 14:51:01 GMT -->
</html>
