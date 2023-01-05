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

  <body background="assets/img/bc.jpg" >

    <div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right">
          <li class="active"><a href="index.php"><span class="glyphicon glyphicon-fire"></span> Apps</a></li>
          <li><a href="about.php"><span class="glyphicon glyphicon-info-sign"></span> About</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-user"></span> Login</a></li>
        </ul>
        <h2 class="text-muted"><span class="glyphicon glyphicon-home"></span><a href="index.php"> <span class="label label-danger"> Program Fuzzy</span></a></h2>
      </div>

      <div class="jumbotron">
        <h3>Penilaian Kerja Pegawai</h3>
        <form id="form" name="form" action="hasil.php" method="post">
        <br>
        <div class="input-group input-group-lg">
          <span class="input-group-addon">Input Tanggung Jawab :</span>
          <input type="float" name="w" id="w"  class="form-control" placeholder="K1 (Tanggung Jawab)" autofocus>
        </div>
        <br>
        <div class="input-group input-group-lg">
          <span class="input-group-addon">Input Kedisiplinan &ensp; &ensp; &ensp;:</span>
          <input type="float" name="x" id="x" class="form-control" placeholder="K2 (Disiplin)">
        </div>
        <br>
        <div class="input-group input-group-lg">
          <span class="input-group-addon">Input Pengurang &ensp; &ensp; &ensp;&ensp;:</span>
          <input type="float" name="y" id="y" class="form-control" placeholder="K3 (Faktor Pengurang)">
        </div>

        <br>
        <button type="submit" class="btn btn-primary" mt-3>Submit</button>
      </form>

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
