<html>
<head>
<title>Laporan</title>
<head>
</head>
<h3><button onClick="window.print();">Print</button></h3><body>

<h1 align="center">Bukti Pembelian</h1>
<hr />
<br />
<table align="center" border="2" >
<tr>
<th> No </th>
<th>ID Pemesanan</th>
<th>Nama Pemesan</th>
<th>Alamat</th>
<th>Email</th>
<th>No.Telp</th>
<th>Jumlah</th>

</tr>
<tr>

 <?php $i=1;?>
 <td align="center"> <?php echo $i++;?>
<td> <?php echo $hasil->id_pemesanan ;?></td>
<td> <?php echo $hasil->nama_pemesan ;?></td>
<td> <?php echo $hasil->alamat ;?></td>
<td> <?php echo $hasil->email ;?></td>
<td> <?php echo $hasil->kode_brg ;?></td>
<td> <?php echo $hasil->jumlah ;?></td>

</tr>



</table>

	</body>
</html>
