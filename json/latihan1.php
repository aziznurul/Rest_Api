<?php

/* $mahasiswa = [
  [
    "nama" => "Aziz Nurul Hidayat",
    "nrp" => "12914007",
    "email" => "aziz@gmail.com"
  ],
  [
    "nama" => "Sri Wahyuni",
    "nrp" => "12914008",
    "email" => "sri@gmail.com"
  ]
]; */

$dbh = new PDO('mysql:host=localhost;dbname=phpdasar', 'root', '');
$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;
