<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Anggota | SMK Gamelab Indonesia</title>
</head>
<body>
	<center>
	<header>
		<h1>Penerima BANSOS</h1>
		
		
	</header>
	
	<nav>
		<ul>
			<h1><a href="formdaftar.php">Daftar </a><h1>
		</ul>
	</nav>
	<nav>
     <ul>
	<a href="list-daftar-anggota.php">List penerima </a>
     </ul>
</nav>
	
	<?php if(isset($_GET['status'])): ?>
	<p><center>
		<?php
			if($_GET['status'] == 'sukses'){
				echo "<div style='border: 1px solid rgb(214,233,198);
                background-color: rgb(223,240,216);color: rgb(70,136,71);'>Pendaftaran anggota baru berhasil!</div>";
			} else {
				echo "<div style='border: 1px solid rgb(238,211,215);
                background-color: rgb(242,222,222);color: rgb(185,74,72);'>Pendaftaran gagal!</div>";
			}	
		?>
	</p></center>
	<?php endif; ?>
	
	</body>
</html>