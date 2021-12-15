<?php
$link = new mysqli('localhost','root','','qlsv') or die("Kết nối thất bại");
if(isset($_POST['xoa'])){
    $masv=$_POST['idxoa'];
    $querydel="DELETE FROM tbl_sinhvien WHERE maSV='".$masv."'";
    mysqli_query($link, $querydel) or die("Xóa dữ liệu thất bại");
    header("Refresh:0");
}
?>