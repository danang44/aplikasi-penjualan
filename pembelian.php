<html>
    <head>
    <title>ANGKRINGAN SIMPANG 5</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
</html>
    <body>
    <header>
   
    <ul >
                    <li><a href="pembelian.php">MENU MAKANAN</a></li>
                    <li><a href="beli_makanan.php">BELI MAKANAN</a></li>
                    <li><a href="keranjang.php">KERANJANG SAYA</a></li>
                    <li><a href="login.php">KELUAR</a></li>
                    
                </ul>
                </header>

    <script src="script.js"></script>

    <h2 align='center' line-height='50%'>Menu Makanan ENAKKK</h2>
    <table width='65%' border=0 align='center' class='table_1'>
    <?php  
    $kolom = 5;    
    $i=1; 
     include_once("config.php");
     $result = mysqli_query($mysqli, "SELECT * FROM makanan ORDER by id_makanan ASC");
     while($user_data = mysqli_fetch_array($result)) {  
        if(($i) % $kolom== 1) {    
        echo'<tr height="200px" class ="tabel">';			
        }  
        
        echo '<td align="center"><img src="image/'.$user_data['image'].'" height="100px"  />
        <br><br><mark style="background: #e4c0a8 ; "margin: 5px;"><b>'.$user_data['nama_makanan'].'</b></mark>
        <br><mark style="background: #e4c0a8 ;"><b>'.$user_data['harga'].'</b></mark>
        </td>';
        if(($i) % $kolom== 0) {    
        echo'</tr>';				
        }
    $i++;
     }?>
    </table>
    </body>