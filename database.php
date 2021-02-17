<?php

	class database {
		
		var $host="localhost";
		var $uname="root";
		var $pass="";
		var $db="database";

		public function __construct()
		{
			$this->prep=mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
			
		}

		function input($nama,$alamat,$usia,$notlpn){
			mysqli_query($this->prep, "insert into murid values('', '$nama', '$alamat', '$usia', '$notlpn')");
		}
		
		function view_data(){
			$data = mysqli_query($this->prep, "select * from murid");
			while ($a=mysqli_fetch_array($data)) {
				$hasil[]=$a;
			}
			return $hasil;
		}
		function edit($id){
			$data=mysqli_query($this->prep, "select * from murid where id='$id'");
			while ($a = mysqli_fetch_array($data)) {
				$hasil[]=$a;
			}
			return $hasil;
		}

		function update($id,$nama,$alamat,$usia,$notlpn){
			mysqli_query($this->prep, "update murid set nama='$nama', alamat='$alamat', usia='$usia', notlpn='$notlpn' where id='$id'");
		}

		function hapus($id){
			mysqli_query($this->prep, "delete from murid where id='$id'");
		}
	}
?>