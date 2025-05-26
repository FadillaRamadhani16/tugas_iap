<?php

// $mahasiswa = [
//     [
//         "nama" => "Fadilla Ramadhani",
//         "nim" => "2217020040",
//         "email" => "fadillarmdhni07@gmail.com"
//     ],
//     [
//         "nama" => "Amei Yuniza",
//         "nim" => "2217020080",
//         "email" => "ameiyuniza07@gmail.com"   
//     ]
// ];

$dbh = new PDO ('mysql:host=localhost;dbname=phpdasar', 'root','');
$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;

?>
