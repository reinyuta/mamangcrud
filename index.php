
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<style type="text/css">
    body{
        background: url() no-repeat fixed center;
        background-size: 2250px;
        font-family: arial;
        background-color: pink;
    }    

    .header h1:hover{
        transition: 0.5s;
        color :white;
    }

    .header{
        padding-top: 150px;
    }

    .font{
        padding-top: 10px;
        margin: auto;
        color: black;
        text-align: center;
        border: 3px solid black;
        width: 50%;
    }

    .tengah{
        text-decoration: none;
    }

    .tengah :hover{
       
        color: black;

    }

    .satu{
        padding-bottom: 15px;
    }
    
    .a{
        text-decoration: none;
    }
</style>
<body>
<div class="header">
        <h1 align="center">DAFTARKAN DIRI ANDA DISINI</h1>
<form action="proses.php?aksi=tambah" method="post">

    <table align="center" class="font">
        <tr>
            <td class="satu">NAMA</td>
            <td><input type="text" name="nama"></td>    
        </tr>
        <tr>
            <td class="satu">ALAMAT</td>
            <td><input type="text" name="alamat"></td>    
        </tr>
        <tr>
            <td class="satu">USIA</td>
            <td><input type="text" name="usia"></td>    
        </tr>

        <tr>
            <td class="satu">NO TELEPON</td>
            <td><input type="text" name="notlpn"></td>
        </tr>
        <tr>
            <td></td>
            <td class="tengah" align="center"><input type="submit" values="Save"></td>
        </tr>
    </table>
</div>
</body>
</html>