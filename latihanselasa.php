<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Tugas Hari Selasa</title>
  </head>
  <body>
    
  <center>
  
  <div class="card text-white bg-secondary mb-3" style="max-width: 26rem;">
  <div class="card-header"><h3>Data Siswa Kelas XI RPL 1</h3>
  </div>
  <div class="card-body">
  <form method ="POST" action = "">
    <table>
       <br>
      <tr>
        <td>Jumlah Siswa :</td>
        <td></td>
        <td><input type="number" name="js" value="" required></td>
      </tr>

      <tr>
        <td></td>
        <td></td>
        <td><br>  <button type="submit" class="btn btn-primary" name="simpan" value="Kirim">Proses</button></td>
      </tr>
</center>
</table>
</form>
  </div>
</div>
</div>
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
  </body>
</html>

<!-- PHP -->
    
        <center>
      <br>
      <div class="container">
  <?php
  echo "<center>";
  if (isset($_POST ['simpan'])){
    $jumlah =$_POST ['js'];
    echo "<form method =POST action = ls2.php>";
    if ($jumlah){
        for($siswa = 1; $siswa <= $jumlah; $siswa++){
            echo "<table>";
            echo "<tr>";
            echo "<br>";
            echo "Data Siswa Ke-$siswa ";
            echo "<td>NIS &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</td>";
            echo "<td><input type=text name=nis[] required></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Nama &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: </td>";
            echo "<td><input type=text name=nama[] required></td>";
            echo "<br>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Kelas &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : </td>";
            echo "<td><input type=text name=kelas[] required value=></td>";
            echo "</tr>";
            echo "<td>Bahasa Indonesia : </td>";
            echo "<td><input type=text name=bindo[] required></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Bahasa Inggris : </td>";
            echo "<td><input type=text name=bing[] required></td>";
            echo "<br>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Matematika : </td>";
            echo "<td><input type=text name=mtk[] required value=></td>";
            echo "</tr>";
            echo "<td>Produktif : </td>";
            echo "<td><input type=text name=prod[] required value=></td>";
            echo "</tr>";
            echo "</table>";
        }
    }

    echo "<tr>";
    echo "<td></td>";
    echo "<input type=submit name=simpan value=Simpan>";
    echo "</tr>";
    echo "</form>";
}
  ?>
     <br>
     <br>

     </div>
  </div>
</div>
</center>
    </div>