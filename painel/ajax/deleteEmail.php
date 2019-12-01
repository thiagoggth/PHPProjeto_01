<?php
include('../../config.php');
$id = $_POST['delete_id'];
$sql = MySql::conectar()->prepare("delete from `tb_admin.listaemails` where id = ?");
$sql->execute(array($id));
