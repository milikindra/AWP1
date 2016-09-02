<html>
<head>
		<title>My Web</title>
</head>
<body>
<h3> Daftar Mata Kuliah</h3>
	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#CCCCCC">
			<th>no</th>
			<th>Kode Mata Kuliah</th>
			<th>Nama Mata Kuliah</th>
			<th>SKS</th>
		</tr>

		<?php
		include('koneksi.php');
		$squery = mysql_query("SELECT * FROM matkul ORDER BY kode_mk DESC") or die (mysql_error());
		if (mysql_num_rows($squery) == 0){
				echo 'Tidak ada data ! ';
		}
		else  {
			$no =1;
			while ($data = mysql_fetch_assoc ($squery)){
				echo '<tr>';
				echo '<td>'.$no.'</td>';
				echo '<td>'.$data['kode_mk'].'</td>';
				echo '<td>'.$data['nama_mk'].'</td>';
				echo '<td>'.$data['sks'].'</td>';
			echo '</tr>';
			$no++;
			}	
		}
	?>		
	</table>
	</body>
</html>