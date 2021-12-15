<?php
$link = new mysqli('localhost','root','','qlsv') or die("Kết nối thất bại");
if(isset($_POST['them'])){
    $masv=$_POST['masv'];
    $tensv=$_POST['tensv'];
    $ngaysinh=$_POST['ngaysinh'];
    $gioitinh=$_POST['gioitinh'];
    $cmnd=$_POST['cmnd'];
    if(!is_null($masv) and !is_null($tensv))
    {
        $queryadd="INSERT INTO tbl_sinhvien (maSV, tenSV, ngaySinh, gioiTInh, CMND)
VALUES ('".$masv."', '".$tensv."', '".$ngaysinh."', '".$gioitinh."', '".$cmnd."')";
        mysqli_query($link, $queryadd) or die("Thêm dữ liệu thất bại");
        header("Refresh:0");
    }else{
        echo"Mời nhập tên sv, mã sv";
    }
}
?>