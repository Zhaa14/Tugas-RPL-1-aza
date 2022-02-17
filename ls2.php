<?php
if(isset($_POST['simpan'])){
    $nis = $_POST['nis'];
    $nam = $_POST['nama'];
    $kel = $_POST['kelas'];
    $bindo = $_POST['bindo'];
    $bing = $_POST['bing'];
    $mtk = $_POST['mtk'];
    $prod = $_POST['prod'];
    $total=0;
    $Rata_Rata =0;
  }
  ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
      <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
      
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Hasil</title>
    </head>
    <body>
      <center>
      <table border="1" class="table table-bordered table-dark">
  <thead>
    <tr>
      <td colspan="10"><center><h3>Rekap Nilai</h3></center></td>
    </tr>
    <tr>
      <th scope="col">NIS</th>
      <th scope="col">Nama</th>
      <th scope="col">Kelas</th>
      <th scope="col">Bahasa Indonesia</th>
      <th scope="col">Bahasa Inggris</th>
      <th scope="col">Matematika</th>
      <th scope="col">Produktif</th>
      <th scope="col">Total Nilai</th>
      <th scope="col">Rata Rata</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  <?php
      for($a=0; $a<count($nis); $a++){?>  
  <tr>
      <td><b> <?php echo $nis[$a]; ?></b></td>
      <td><b> <?php echo $nam[$a]?> </b></td>
      <td><b> <?php echo $kel[$a]?></b></td>
      <td><b> <?php echo $bindo[$a]; ?></b></td>
      <td><b> <?php echo $bing[$a]?> </b></td>
      <td><b> <?php echo $mtk[$a]?></b></td>
      <td><b> <?php echo $prod[$a]; ?></b></td>
      <td><b> <?php echo $total = $bindo[$a] + $bing[$a] + $mtk[$a] + $prod[$a]; ?></b></td>
      <td><b> <?php echo $Rata_Rata = $total /4; ?></b></td>
      <td><b>
            <?php
              if ($Rata_Rata >= 90 && $Rata_Rata <=100){
                echo "<font color='#00FF00'>Lulus</font>";
            } elseif($Rata_Rata >= 80 && $Rata_Rata< 90){
                echo "<font color='#00FF00'>Lulus</font>";
            } elseif($Rata_Rata >= 75 && $Rata_Rata< 80){
                echo "<font color='#00FF00'>Lulus</font>";
            } elseif($Rata_Rata >= 60 && $Rata_Rata< 75){
                echo "<font color='#ff0000'>Tidak Lulus</font>";
            } elseif($Rata_Rata >=0 && $Rata_Rata< 60){
                echo "<font color='#ff0000'>Tidak Lulus</font>";
            } else {
               echo "nilai $Rata_Rata  nilai tidak valid";
            }
        }?> 
        </b></td>
    </tr>
  </tbody>
</table>
<center><marquee bgcolor="red" width="1365"><b>Created By : Aza</b></marquee></center>
        <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
    </center>
    </body>
    </html>