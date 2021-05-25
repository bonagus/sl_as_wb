<h1>Purpose </h1>

<?php


		echo anchor('task/tambah', '<p>buat tugas baru</p>');

		foreach ($query->result() as $row) {
			$edit_url = base_url().'task/tambah/'.$row->id;
			echo "<h2>".$row->judul."</h2><span><a href='".$edit_url."'>UBAH</a></span>";
		}


		echo "<hr>";

		$nama = "roy";
		$kabar = "sehat";
		$this->load->module('first');
		$this->first->hello($nama, $kabar);

		echo "<hr>";

		echo Modules::run('first/hello', $nama, $kabar);
?>