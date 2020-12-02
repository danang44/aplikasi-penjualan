<html>
<head>
    <title>input makanan</title>
</head>

<body>
    <a href="login.php">Log out</a>
    <br/><br/>
    <a href="penjual.php">Database</a>
    <br/><br/>
    
    <h2>DATA PENJUAL</h2>

    <form action="add_penj.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>id penjual</td>
                <td><input type="text" name="id_penjual"></td>
            </tr>
            <tr> 
                <td>nama penjual</td>
                <td><input type="text" name="nama_penjual"></td>
            </tr>
            <tr> 
                <td>No HP</td>
                <td><input type="text" name="nomor_hp"></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr> 
                <td>id makanan</td>
                <td><input type="text" name="id_makanan"></td>
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
        $id_penjual = $_POST['id_penjual'];
        $nama_penjual = $_POST['nama_penjual'];
        $nomor_hp = $_POST['nomor_hp'];
        $alamat = $_POST['alamat'];
        $id_makanan = $_POST['id_makanan'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO penjual (id_penjual,nama_penjual,nomor_hp,alamat,id_makanan) 
        VALUES ('$id_penjual','$nama_penjual','$nomor_hp','$alamat','$id_makanan')");

        // Show message when user added
        echo "Data penjual berhasil ditambahkan. <a href='penjual.php'>lihat hasil</a>";
    }
    ?>
</body>
</html>
