<?php
    include 'database.php';
    $db = new database();
?>

<form action="proses.php?aksi=update" method="post">

<?php
    foreach($db->edit($_GET['id']) as $d){  
?>

<table>
    <tr>
        <td>Nama</td>
        <td>
            <input type="hidden" name="id" value="<?php echo $d['id']?>">
            <input type="text" name="nama" value="<?php echo $d['nama']?>">
        </td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>
            <input type="text" name="alamat" value="<?php echo $d['alamat']?>">
        </td>
    </tr>
    <tr>
        <td>usia</td>
        <td>
            <input type="text" name="usia" value="<?php echo $d['usia']?>">
        </td>
    </tr>
    <tr>
        <td>no telepon</td>
        <td>
            <input type="text" name="notlpn" value="<?php echo $d['notlpn']?>">
        </td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="save"></td>
    </tr>
</table>
<?php } ?>
</form>
