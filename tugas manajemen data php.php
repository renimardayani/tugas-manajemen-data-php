<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Manajemen Data Barang </h1> <br>
<table>
	<tr>
		<td style="color: blue;">Home</td><td>> Tambah Data</td>
	</tr>
</table>

 <form action="login.php" method="POST">
        <fieldset>
        <legend>Form Tambah Data</legend>
        <table>
        	<tr>
        		<td><label>Nama Barang</label></td><td><input type="text"    /></td>
        	</tr>

        	<tr>
        		<td><label>Jenis Barang</label></td><td><select name="JenisBarang">
                <option value="Pilih">Pilih</option>
            </select></td>
        	</tr>

        	<tr>
        		<td><label>Kondisi</label></td><td> <input type="text"    /></td>
        	</tr>

        	<tr>
        		<td><label>Tanggal Masuk</label></td><td><select name="Tanggal">
                <option value="Tanggal">Tanggal</option>
            </select>

            <select name="Bulan">
                <option value="Bulan">Bulan</option>
            </select>

            <select name="Tahun">
                <option value="Tahun">Tahun</option>
            </select>
        </td>
        	</tr>

        	<tr>
        		<td><label>Nama Distributor</label></td><td><input type="text"    /></td>
        	</tr>

        	<tr>
        		<td><label>Alamat</label></td><td><input type="text"    /></td>
        	</tr>

        	<tr>
        		<td></td><td ><BUTTON style="background-color: green; color: white;">Simpan</BUTTON><BUTTON style="background-color: orange; color: white;">Reset</BUTTON><BUTTON style="background-color: red; color: white;" >Batal</BUTTON></td>
        	</tr>


        </table>
        </fieldset><br><br>

        <button style="background-color: blue; color: white;">+ Tambah Data</button> <button style="background-color: blue; color: white;"><-- Menu Utama</button><br>

        <table border="1" cellpadding="2" cellspacing="0">
        	<tr>
        		<td>No</td><td>Nama Barang</td><td>Jenis Barang</td><td>Tanggal Masuk</td><td>Kondisi</td><td>Distributor</td><td>Alamat</td><td style="text-align: center;">Aksi</td>
        	</tr>

        	<tr>
        		<td>1</td><td>DVR</td><td>BOX</td><td>2015-12-30</td><td>Bagus</td><td>PKP</td><td>pkp</td><td><button  style="background-color: green; color: white;">Edit</button><button  style="background-color: red; color: white;">Hapus</button></td>
        	</tr>

        	<tr>
        		<td>2</td><td>Kamera</td><td>Pack</td><td>2015-11-15</td><td>Good</td><td>Bangka</td><td>PKP</td><td><button  style="background-color: green; color: white;">Edit</button><button  style="background-color: red; color: white;">Hapus</button></td>
        	</tr>
        </table>
</body>
</html>