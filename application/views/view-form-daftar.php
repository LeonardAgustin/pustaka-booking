<html>
<head>
<title>Form Input Daftar Riwayat Hidup</title>
</head>
<body>
<center>
<form action="<?= base_url('Daftar/cetak'); ?>"
method="post">
<table>
<tr>
<th colspan="3">
Form Input Daftar Riwayat Hidup
</th>
</tr>
<tr>
<td colspan="3">
<hr>
</td>
</tr>
<tr>
<th>NIM</th>
<th>:</th>
<td>
<input type="text" name="nim" id="nim" placeholder="Required">
</td>
</tr>
<tr>
<th>Nama</th>
<td>:</td>
<td>
<input type="text" name="nama" id="nama" placeholder="Required">
</td>
</tr>
<tr>
<th>TanggalLahir</th>
<td>:</td>
<td>
<select name="TanggalLahir" id="TanggalLahir">
<option value="">Pilih Tanggal Lahir</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
</select>
</td>
</tr>
<tr>
<th>TempatLahir</th>
<th>:</th>
<td>
<input type="text" name="TempatLahir" id="TempatLahir" placeholder="Required">
</td>
</tr>
<tr>
<th>Alamat</th>
<th>:</th>
<td>
<input type="text" name="Alamat" id="Alamat" placeholder="Required">
</td>
</tr>
<tr>
<tr>
<td colspan="3" align="center">
<input type="submit" value="Submit">
</td>
</tr>
</table>
</form>
</center>
</body>
</html>