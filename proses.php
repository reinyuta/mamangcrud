<?php

	include 'database.php';
	$db=new database();

	$aksi=$_GET['aksi'];
	if ($aksi =="tambah") {
		$db->input($_POST['nama'], $_POST['alamat'], $_POST['usia'], $_POST['notlpn']);
		header("location:terimakasih.php");
	}

	else if ($aksi == "update"){
		$db->update($_POST['id'],$_POST['nama'],$_POST['alamat'],$_POST['usia'],$_POST['notlpn']);
		header("location:view.php");
	}

	else if ($aksi == "hapus"){
		$db->hapus($_GET['id']);
		header("location:view.php");
	}
?>