<?php
// string 
$nama = 'Sulastri';

echo "Hello nama saya $nama";
echo "<br>";

echo str_replace("Lastri","asri", $nama);
echo "<br><br>";

// integer
$umur = 20;

echo $umur - 3 . "<br>";

var_dump($umur);
echo "<br><br>";

// float
$nilai = 3.72;

var_dump($nilai);
echo "<br><br>";

//bolean
$is_student = true;
var_dump($is_student);
echo "<br><br>";

// Array biasa 
$mahasiswa1 = ["Lastri", 19, 3.99, false ];
var_dump ($mahasiswa1);

echo "<br><br>";

echo "Umur saya $mahasiswa1 [1]";
echo "<br><br>";

// Array asosiatif
$mahasiswa2 = [
    "nama" => "Lastri",
    "umur" => 19,
    "nilai" => 3.99
    "is_active" => true
];

var_dump($mahasiswa2);

echo "<br>";

echo "Hallo, saya" . $mahasiswa2['nama'];