<?php
$link = new mysqli('localhost','root','','qlsv') or die("Kết nối thất bại");
if(isset($_POST['tim'])){
    $masv=$_POST['hoten'];
    duyetsinhvien($masv,$link);
}
?>