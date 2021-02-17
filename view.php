<?php
    include "database.php";
    $db = new database();

?>
<!DOCTYPE html>
<html>
<head>
	<title>ALL DATA</title>
</head>
<style>
body{
    background-color: pink;
    text-align: center;
    padding-top: 200px;
}

.meja{
    border: 2px solid black;
    padding-right: 10px;
    padding-left: 10px;
    padding-bottom: 30px;
    padding-top: 20px;
}

.bida a{
    color: black;
    padding-bottom: 50px;
    text-decoration: none;
}

.bida a:hover{
    color: white;
    transition: 0.5sec;
}

.b{
    padding-right: 10px;
}

.prepo{
    color: black;
    text-decoration: none;
    padding-top: 20px;
}

.prepo:hover{
    color: white;
    transition: 0.5sec;
}

.pantek{
    color: white;
    text-decoration: none;
}

.pantek:hover{
    transition: 0.5sec;
    color: black;
}

.puntek{
    text-decoration: none;
    color: black;
}

.puntek:hover{
    transition: 0.5sec;
    color: white;
}
</style>
<body>
    <div class="bida">
        <a href="terimakasih.php">KLIK INI JIKA INGIN KEMBALI</a><br><br>
    </div>
    <a href="index.php" class="prepo">KLIK INI JIKA INGIN MENAMBAHKAN DATA</a><br><br>
<table align="center" class="meja" border="1">
    <tr>
        <th class="b">NO</th>
        <th class="b">NAMA</th>
        <th class="b">ALAMAT</th>
        <th class="b">USIA</th>
        <th class="b">NO TELEPON</th>
    </tr>

<?php
    $no=1;
    foreach ($db->view_data() as $p) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $p['nama']; ?></td>
            <td><?php echo $p['alamat']; ?></td>
            <td><?php echo $p['usia']; ?></td>
            <td><?php echo $p['notlpn']; ?></td>
        </tr>
        <td>
            <a href="edit.php?id=<?php echo $p['id']; ?>&aksi=edit" class="pantek">edit</a>
            <a href="proses.php?id=<?php echo $p['id']; ?>&aksi=hapus" class="puntek">hapus</a>
        </td>
    <?php
    }
?>
</body>
</html>