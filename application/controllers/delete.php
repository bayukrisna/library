<?php
mysql_connect("localhost","root","");
mysql_select_db("test");
if (isset($_POST['id_kelas_mhs'])) {
mysql_query("delete from tb_kelas_mhs where id_kelas_mhs= '".$_POST['id_kelas_mhs']."'");
}
?>