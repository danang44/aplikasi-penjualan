
<html>
<head>    
    <title>ANGKRINGAN SIMPANG 5</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
   
                    <li align:'center'><a href="pembelian.php">MENU MAKANAN</a></li>
                    <li><a href="beli_makanan.php">BELI MAKANAN</a></li>
                    <li><a href="keranjang.php">KERANJANG SAYA</a></li>
                    <li><a href="gabung.php">DAFTAR MAKANAN DAN PENJUAL</a></li>
                    <li><a href="login.php">KELUAR</a></li>
</ul>
                </header>
    <script src="script.js"></script>

    <h2 line-height='50%' align='center'>DAFTAR MAKANAN DAN PENJUAL</h2>
    <table width='80%' border=1 class='table' align='center'>
    <tr>
        <th align='center' height='30px'>NAMA MAKANAN</th> 
        <th align='center'>STOK</th> 
        <th align='center'>HARGA</th>
        <th align='center'>NAMA PENJUAL</th>
        <th align='center'>NO HP</th>
        <th align='center'>ALAMAT</th>
    </tr>
    <?php  
    include_once("config.php");
    $result = mysqli_query($mysqli, "SELECT 
    B.nama_penjual, B.nomor_hp, B.alamat, A.nama_makanan,
    A.stok, A.harga FROM makanan A INNER JOIN penjual B
    ON A.id_makanan= B.id_makanan");
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td height='30px'>".$user_data['nama_makanan']."</td>";
        echo "<td>".$user_data['stok']."</td>";    
        echo "<td>".$user_data['harga']."</td>";  
        echo "<td>".$user_data['nama_penjual']."</td>";  
        echo "<td>".$user_data['nomor_hp']."</td>";  
        echo "<td>".$user_data['alamat']."</td>";  
    }
    ?>
     </table>
</body>
</html>