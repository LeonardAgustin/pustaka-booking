<html>
<head>
<title>Tampil Data Daftar Riwayat Hidup</title>
</head>
<body>
<center>
<table>
<tr>
<th colspan="3">
Tampil Data Daftar Riwayat Hidup
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
<?= $NIM; ?>
</td>
</tr>
<tr>
<td>Nama</td>
<td>:</td>
<td>
<?= $Nama; ?>
</td>
</tr>
<tr>
<td>TanggalLahir</td>
<td>:</td>
<td>
<?= $Tanggallahir; ?>
</td>
</tr>
<tr>
<td>TempatLahir</td>
<td>:</td>
<td>
<?= $Tempatlahir; ?>
</td>
</tr>
<tr>
<td>Alamat</td>
<td>:</td>
<td>
<?= $Alamat; ?>
</td>
</tr>
<tr>
<td colspan="3" align="center">
<a href="<?= base_url('daftar');
?>">Kembali</a>
</td>
</tr>
</table>
</center>
</body>
</html>