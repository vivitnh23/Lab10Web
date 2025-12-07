<?php
include "form.php";

echo "<html><head><title>Form OOP</title></head><body>";

$form = new Form("","Kirim");
$form->addField("nim", "NIM");
$form->addField("nama", "Nama");
$form->addField("alamat", "Alamat");

echo "<h3 style='text-align:center;margin-top:20px;'>Silahkan isi form berikut ini:</h3>";
$form->displayForm();

echo "</body></html>";
?>
