<html>
<head>
    <title>input makanan</title>
</head>

<body>
    <a href="login.php">Log out</a>
    <br/><br/>
    <a href="index_admin.php">Database</a>
    <br/><br/>
    
    <h2>ANGKRINGAN SIMPANG LIMA</h2>

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>id makanan</td>
                <td><input type="text" name="id_makanan"></td>
            </tr>
            <tr> 
                <td>nama makanan</td>
                <td><input type="text" name="nama_makanan"></td>
            </tr>
            <tr> 
                <td>stok</td>
                <td><input type="text" name="stok"></td>
            </tr>
            <tr> 
                <td>harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $id_makanan = $_POST['id_makanan'];
        $nama_makanan = $_POST['nama_makanan'];
        $stok = $_POST['stok'];
        $harga = $_POST['harga'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO makanan (id_makanan,nama_makanan,stok,harga) 
        VALUES ('$id_makanan','$nama_makanan','$stok','$harga')");

        // Show message when user added
        echo "makanan berhasil ditambahkan. <a href='index_admin.php'>lihat hasil</a>";
    }
    ?>
</body>
</html>
