<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   

    $id_makanan = $_POST['id_makanan'];
    $nama_makanan = $_POST['nama_makanan'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE makanan SET id_makanan='$id_makanan',nama_makanan='$nama_makanan',
    stok='$stok',harga='$harga' WHERE id_makanan=$id_makanan");

    // Redirect to homepage to display updated user in list
    header("Location: index_admin.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id_makanan = $_GET['id_makanan'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM makanan WHERE id_makanan=$id_makanan");

while($user_data = mysqli_fetch_array($result))
{
    $id_makanan = $user_data['id_makanan'];
    $nama_makanan = $user_data['nama_makanan'];
    $stok = $user_data['stok'];
    $harga = $user_data['harga'];
}
?>
<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
    <a href="login.php">Log out</a>
    <br/><br/>
    <a href="index_admin.php">Database</a>
    <br/><br/>

    <h2>makanan</h2>

    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>id_makanan</td>
                <td><input type="text" name="id_makanan" value=<?php echo $id_makanan;?>></td>
            </tr>
            <tr> 
                <td>nama_makanan</td>
                <td><input type="text" name="nama_makanan" value=<?php echo $nama_makanan;?>></td>
            </tr>
            <tr> 
                <td>stok</td>
                <td><input type="text" name="stok" value=<?php echo $stok;?>></td>
            </tr>
            <tr>
                <td>harga</td>
                <td><input type="text" name="harga" value=<?php echo $harga;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id_makanan" value=<?php echo $_GET['id_makanan'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
