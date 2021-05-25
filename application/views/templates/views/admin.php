<html>
<head></head>
<body style="background-color:yellow;">
	<table border="1" style="background-color:gray;" align="center">
		<!--header-->
		<tr>
			<td colspan="3" height="120px" align="center">HEADER</td>
		</tr>
		<!--navigation-->
		<tr>
			<td colspan="3" height="30px" align="center">NAVIGATION</td>
		</tr>
		<!--content-->
		<tr>
			<td height="400px" width="250px" align="center">SIDEBAR KIRI</td>
			<td height="400px" width="400px" align="center">

			<?php 
			$this->load->view($module.'/'.$lihat_tampil);
			 ?>	

			</td>
			<td height="400px" width="360px" align="center">SIDEBAR KANAN</td>
			</tr>
		<!--footer-->
		<tr>
			<td colspan="3" height="200px" align="center">FOOTER</td>
		</tr>
	</table>
</body>
</html>