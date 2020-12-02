<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM makanan ");
?>

<html>
<head>    
    <title>Homepage</title>
</head>

<body>
<a href="add.php">TAMBAH MENU</a><br/><br/>
<a href="home_admin.php">KEMBALI</a><br/><br/>

    <h2>ANGKRINGAN SIMPANG LIMA</h2>

    <table width='80%' border=1>

    <tr>
        <th>id_makanan</th> <th>nama_makanan</th> <th>stok</th> <th>harga</th> <th colspan=2>opsi</th> 
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['id_makanan']."</td>";
        echo "<td>".$user_data['nama_makanan']."</td>";
        echo "<td>".$user_data['stok']."</td>";
        echo "<td>".$user_data['harga']."</td>";  
        echo "<td><a href='edit.php?id_makanan=$user_data[id_makanan]'>Edit</a> | 
        <a href='delete.php?id_makanan=$user_data[id_makanan]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>