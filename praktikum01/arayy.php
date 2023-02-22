<?php
// buat arayy
$animals = ["kucing","ayam","ikan","burng"];
// tampilan 
echo $animals[0] . "<br>";
echo $animals[3] . "<br>";

// looping arayy
foreach ($animals as $animal) {
    echo $animal . "<br>";
}
echo "<br>";
// buat arayy asosiatif
$mahasiswa = ["nama"=>"mahmudi", "umur"=>"20", "alamat"=>"madura"];

echo $mahasiswa["nama"] . "<br>";

foreach ($mahasiswa as $key => $valuse) {
    echo $key . " : " .  $valuse;
    echo "<br>";
}
echo "<br>";

// arayy multimensi 
$dosen = [
    ["pak rajul", "web"],
    ["pak eza", "DDP"],
    ["pak lukman", "OS"],
];

echo $dosen[0][1];
// echo $dosen[2][3];
// echo $dosen[4][5];
echo "<br>";
foreach ($dosen as $dosen) {
    echo "nama dosen :" . $dosen[0];
    echo " matkul : " . $dosen[1];
    echo "<br>";
}
?>