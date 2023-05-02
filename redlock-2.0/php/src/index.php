<?php

$host = 'Redlock';
$user = 'MYSQL_USER';
$pass = 'MYSQL_PASSWORD';

$mydatabase = 'Redlock';
$conn = new mysqli($host, $user, $pass, $mydatabase);
$sql = 'SELECT * FROM users';

if ($result = $conn->query($sql)) {
    while ($data = $result->fetch_object()) {
        $users[] = $data;
    }
}

foreach ($users as $user) {
    echo "<br>";
    echo "ID: ". $user->ID;
    echo " | Nama: ". $user->Nama;
    echo " | Alamat: ". $user->Alamat;
    echo " | Jabatan: ". $user->Jabatan;
    echo "<br>";
}
?>