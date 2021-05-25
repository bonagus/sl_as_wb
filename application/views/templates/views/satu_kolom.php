<html>
	<head></head>
	<body style="background-color:black;">
			<table border="5" style="background-color:green;" align="center">
				<!--header-->
				<tr>
					<td height="120px" width="1000px" align="center">HEADER</td>
				</tr>
				<!--navigation-->
				<tr>
					<td height="30px" align="center">NAVIGATION</td>
				</tr>
				<!--content-->
				<tr>
					<td height="400px" align="center">

					<?php 
					$this->load->view($module.'/'.$lihat_tampil);
					 ?>

					</td>
				</tr>
				<!--footer-->
				<tr>
					<td height="200px" align="center">FOOTER</td>
				</tr>
			</table>
	</body>
</html>