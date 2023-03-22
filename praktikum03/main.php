<?php 

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $hobi = $_POST['hobi'];
    $ipk = $_POST['ipk'];

    // buat fungsi setatus
    function ceksetatus($ipk) {
        if ($ipk >= 3 && $ipk <= 4) {
            return "lolos";
        } else {
            return "tidak lolos";
        }
    }

    $setatus = ceksetatus($ipk);
}
// require_once 'header.php';
 
?>

<div class="container">
    <h1>Form Pendaftaran</h1>
    <form method="POST" action="main.php">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">nama : lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nama" name="nama" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Klamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="Laki-Laki"> 
        <label for="jk_0" class="custom-control-label">Laki-Laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="Prempuan"> 
        <label for="jk_1" class="custom-control-label">Prempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Hobi</label> 
    <div class="col-8">
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="hobi[]" id="hobi[]_0" type="checkbox" class="custom-control-input" value="Membaca"> 
        <label for="hobi[]_0" class="custom-control-label">Membaca</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="hobi[]" id="hobi[]_1" type="checkbox" class="custom-control-input" value="Main game"> 
        <label for="hobi[]_1" class="custom-control-label">Main game</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="hobi[]" id="hobi[]_2" type="checkbox" class="custom-control-input" value="Menulis"> 
        <label for="hobi[]_2" class="custom-control-label">Menulis</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="hobi[]" id="hobi[]_3" type="checkbox" class="custom-control-input" value="Nonton"> 
        <label for="hobi[]_3" class="custom-control-label">Nonton</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="ipk" class="col-4 col-form-label">IPK</label> 
    <div class="col-8">
      <input id="ipk" name="ipk" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
<hr>

<?php 
echo "nama " . $nama . "<br>";
echo "Jenis Kelamin " . $jk . "<br>";
echo "Hobi ";
foreach($hobi as $h) {
    echo $h . ",";
}
echo "<br> IPK " . $ipk . "<br>";
echo "<br> status " . $setatus;

?>
</div> 
<?php 
require_once 'header.php';
 ?>,