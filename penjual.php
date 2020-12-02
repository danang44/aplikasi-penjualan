<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database

?>

<html>
<head>    
    <title>Homepage</title>
</head>

<body>
<a href="add_penj.php">TAMBAH PENJUAL</a><br/><br/>
<a href="home_admin.php">KEMBALI</a><br/><br/>

    <h2>ANGKRINGAN SIMPANG LIMA</h2>

    <table width='80%' border=1>

    <tr>
        <th>id_penjual</th> <th>nama_penjual</th> <th>nomor_hp</th> <th>alamat</th> <th>id_makanan</th> <th colspan=2>opsi</th> 
    </tr>
    <?php  
    $result = mysqli_query($mysqli, "SELECT * FROM penjual ");
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['id_penjual']."</td>";
        echo "<td>".$user_data['nama_penjual']."</td>";
        echo "<td>".$user_data['nomor_hp']."</td>";
        echo "<td>".$user_data['alamat']."</td>"; 
        echo "<td>".$user_data['id_makanan']."</td>"; 
        echo "<td><a href='edit_penjual.php?id_penjual=$user_data[id_penjual]'>Edit</a> | 
        <a href='delete_penjual.php?id_penjual=$user_data[id_penjual]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>