<html>
<head></head>
<body style="background-color: blue;">
	<table border="1" align="center" style="background-color:white;">
		<!--header-->
		<tr>
			<td colspan="2" height="120px" align="center">HEADER</td>
		</tr>
		<!--navigation-->
		<tr>
			<td colspan="2" height="30px" align="center">NAVIGATION</td>
		</tr>
		<!--content-->
		<tr>
			<td height="400px" width="720px" align="center">

			<?php 
			$this->load->view($module.'/'.$lihat_tampil);
			 ?>

			</td>
			<td height="400px" width="360px" align="center">SIDEBAR KANAN</td>
		</tr>
		<!--footer-->
		<tr>
			<td colspan="2" height="200px" align="center">FOOTER</td>
		</tr>
	</table>
</body>
</html>