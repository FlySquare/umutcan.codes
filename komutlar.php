<?php
include 'db/islem.php';
$ayarsor=$db->prepare("SELECT * FROM umutcancodes_ayar where ayar_id=:id");
$ayarsor->execute(array(
	'id'=>1
));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);


 ?>
