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

    <h2 align='center' line-height='50%'>Keranjang Saya</h2>
    <table width='80%'  align='center' class='table'>
    <tr height ="35px">
        <th>Id pembelian</th> 
        <th>Id makanan</th> 
        <th>nama makanan</th>
        <th>Harga</th>
        <th>Total</th>
        <th>Opsi</th>
    </tr>

    <?php  
     include_once("config.php");
     $result = mysqli_query($mysqli, "SELECT 
     A.id_makanan, A.harga,A.nama_makanan, B.id_jajan, B.total
     FROM makanan A INNER JOIN pembelian B
     ON A.id_makanan= B.id_makanan");
    while($user_data = mysqli_fetch_array($result)) {   ?>      
        <tr>
        <td align='center'><?=$user_data['id_jajan']?></td>
        <td align='center'><?=$user_data['id_makanan']?></td>
        <td align='center'><?=$user_data['nama_makanan']?></td>
        <td align='center'><?=$user_data['harga']?></td>
        <td align='center'><?=$user_data['total']?></td>
        <td align='center' width='100px'><a  href="hapusorder.php?id_jajan=<?php echo $user_data['id_jajan']; ?>"><img src="image/hapus.png" height="20px"></a></td>
    </tr>      
    
    <?php }?>
    </table>
    </body>
