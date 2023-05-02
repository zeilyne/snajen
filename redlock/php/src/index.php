<?php
$host = 'db';

// Database use name
$user = 'MYSQL_USER';

//database user password
$pass = 'MYSQL_PASSWORD';

// database name
$mydatabase = 'db';
// check the mysql connection status

$conn = new mysqli($host, $user, $pass, $mydatabase);

// select query
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