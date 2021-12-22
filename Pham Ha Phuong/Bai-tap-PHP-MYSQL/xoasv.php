<?php
include 'link-database.php';
if(isset($_GET['masv'])){
    $querydel="DELETE FROM tbl_sinhvien WHERE maSV='".$_GET['masv']."'";
    mysqli_query($link, $querydel) or die("Xóa dữ liệu thất bại");
    echo"Xóa thành công sinh viên có mã sinh viên: ".$_GET['masv']."<br>";
}
mysqli_close($link);
?>
<html>
<head>
<title>Xóa sinh viên</title>
</head>
<body>
<br>
<a href="qlsv.php">Quay về</a>
</body>
</html>