<html>
<head>    
    <title>ANGKRINGAN SIMPANG 5</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2 align='center' line-height='50%'>Maukkan Id Maknanan</h2>

    <div class="kotak">
    <form action="troli.php" method="post" class="form_login">
        <label>ID PEMBELIAN</label>
           <input type="text" name="id_jajan" class="form_login">
        <label>ID MAKANAN</label>
           <input type="text" name="id_makanan" class="form_login">
           <label>JUMLAH</label>
           <input type="text" name="total" class="form_login">
        <input type="submit" name="Submit" class="submit" value="Beli"></td>
        
    </form>
   
    </div>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $id_jajan = $_POST['id_jajan'];
        $id_makanan = $_POST['id_makanan'];
        $total = $_POST['total'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO pembelian (id_jajan, id_makanan, total) 
        VALUES('$id_jajan','$id_makanan', '$total')");

        // Show message when user added
        echo "makanan berhasil di tambahkan. <a href='keranjang.php'>View Users</a>";
        header("Location: keranjang.php");
    }
    ?>
</body>
</html>
