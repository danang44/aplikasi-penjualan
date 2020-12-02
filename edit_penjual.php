<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   

        $id_penjual = $_POST['id_penjual'];
        $nama_penjual = $_POST['nama_penjual'];
        $nomor_hp = $_POST['nomor_hp'];
        $alamat = $_POST['alamat'];
        

    // update user data
    $result = mysqli_query($mysqli, "UPDATE penjual SET id_penjual='$id_penjual',nama_penjual='$nama_penjual',
    nomor_hp='$nomor_hp',alamat='$alamat' WHERE id_penjual='$id_penjual'");

    // Redirect to homepage to display updated user in list
    header("Location: penjual.php");
}
?>
<?php
// Display selected user data based on id

$id_penjual = $_GET['id_penjual'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM penjual WHERE id_penjual='$id_penjual'");

while($user_data = mysqli_fetch_array($result))
{
    $id_penjual = $user_data['id_penjual'];
    $nama_penjual = $user_data['nama_penjual'];
    $nomor_hp = $user_data['nomor_hp'];
    $alamat = $user_data['alamat'];
    
}
?>
<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
    <a href="home_admin.php">Log out</a>
    <br/><br/>
    <a href="penjual.php">Database</a>
    <br/><br/>

    <h2>penjual</h2>

    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>id_penjual</td>
                <td><input type="text" name="id_penjual" value=<?php echo $id_penjual;?>></td>
            </tr>
            <tr> 
                <td>nama_penjual</td>
                <td><input type="text" name="nama_penjual" value=<?php echo $nama_penjual;?>></td>
            </tr>
            <tr> 
                <td>nomor_hp</td>
                <td><input type="text" name="nomor_hp" value=<?php echo $nomor_hp;?>></td>
            </tr>
            <tr>
                <td>alamat</td>
                <td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
            </tr>
            
                <td><input type="hidden" name="id_penjual" value=<?php echo $_GET['id_penjual'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
