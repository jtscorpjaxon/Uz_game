<?php
include ('db_connect.php');
$voxt=date("Y-m-d H:i:s");
if ($_POST['submit']=='Добавить'){

mysql_query("INSERT INTO `news` (`title`,`cut_info`,`text`,`time`) VALUES ('$_POST[name]','$_POST[subject]','$_POST[cut_info]','$voxt')");//birinchi "bazada borligi aniqlanib", kegin, "NAME" icidigi VALUES olinvotti 
}
if($_FILES['file']){
$id=mysql_insert_id();
@mkdir("uploads", 0777);
copy($_FILES['file']['tmp_name'],"uploads/$id.jpg");
}elseif($_POST['submit']=='Сохранить изменения'){
$fi=$_SERVER['DOCUMENT_ROOT']."/uploads/$_POST[id].jpg";
 if (file_exists("$fi")) {
if($_POST['delete_file']=='1'){
	 @unlink($fi);

if($_FILES['file']['tmp_name']){
$id=$_POST['id'];
@mkdir("uploads", 0777);
copy($_FILES['file']['tmp_name'],"uploads/$id.jpg");
}

}


 }else {

if($_FILES['file']['tmp_name']){
$id=$_POST['id'];
@mkdir("uploads", 0777);
copy($_FILES['file']['tmp_name'],"uploads/$id.jpg");
} }

mysql_query("UPDATE `news` SET `title`='$_POST[name]',`cut_info`='$_POST[subject]',`text`='$_POST[cut_info]',`time`='$voxt' WHERE `id`='$_POST[id]'");
}
//<script>
//window.location.href = "/";
//</script>*/
header("location: /");
?>