<link type="text/css" rel="stylesheet" href="../plugin/bootstrap/css/bootstrap.min.css">
<h3 class="page-header"> Contoh Form </h3>
<?php
	include "../library/function_form.php";
	
	buka_form("#", 1, "edit");
		buat_textbox("Nama", "nama", "");
		buat_textarea("Alamat", "alamat", "");
		
		$list = array();
		$list[] = array('val'=>'islam', 'cap'=>'Islam');
		$list[] = array('val'=>'kristen', 'cap'=>'Kristen');
		$list[] = array('val'=>'katolik', 'cap'=>'Katolik');
		buat_combobox("Agama", "agama", $list, "islam");
		
		buat_imagepicker("Foto", "foto", "");
	tutup_form("#");
?>		
