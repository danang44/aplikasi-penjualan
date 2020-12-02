<html>
    <head>
    <title>ANGKRINGAN SIMPANG 5</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
</html>
    <body>
    <header>
    <form action="home_admin.php" method="get" class="cari">
	<input type="text" name="cari" placeholder="Masukkan judul" required>
	<input type="submit" class="cari" value="SEARCH">
</form>
    
                <li><a href="index_admin.php">daftar makanan</a></li>
                <li><a href="penjual.php">daftar penjual</a></li>
                    <li><a href="login.php">Log out</a></li>
                </ul>
                </header>

    <script src="script.js"></script>

    <h2 align='center' line-height='50%'>DAFTAR MENU</h2>
    <?php  
     include_once("config.php");
     if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
       
    }
    ?>
        <table width='80%'  align='center' class='table'>
    <tr height ="35px">
    <th>Gambar</th>
        <th>Id makanan</th> 
        <th>Nama Makanan</th>  
        <th>Harga</th>
        <th>Stok</th>
       
    </tr>
        <?php 
        if(isset($_GET['cari'])){
            $cari = $_GET['cari'];
            $result = mysqli_query($mysqli, "select * from makanan where nama_makanan like '%".$cari."%' ");				
        }else{
            $result = mysqli_query($mysqli,"select * from makanan");		
        }

    while($user_data = mysqli_fetch_array($result)) {   ?>      
        <tr>
        <td align='center'><?="<img src='image/".$user_data['image']."'style='width:auto; height:100px; padding: 10px 0px 10px 0px'>"?></td>
        <td align='center'><?=$user_data['id_makanan']?></td>
        <td align='center'><?=$user_data['nama_makanan']?></td>
        <td align='center'><?=$user_data['harga']?></td> 
        <td align='center'><?=$user_data['stok']?></td> 
          
       
        
    </tr>      
    
    <?php }?>
    </table>
    </body>