<html>
<head>
<title>QUẢN LÝ SINH VIÊN</title>
</head>
<style>
.qlsv td,th{
border:1 solid;
padding: 5px;
}
</style>
<body>
<table class="qlsv" style="width:100%;">
<thead>
<tr style=" background-color:yellow;">
	<th>ID</th>
	<th>Mã sinh viên</th>
	<th>Tên sinh viên</th>
	<th>Ngày sinh</th>
	<th>Giới tính</th>
	<th>Địa chỉ</th>
	<th>Email</th>
	<th>Số điện thoại</th>
	<th>CMND</th>
	<th>Ảnh đại diện</th>
</tr>
</thead>
<tbody>
<?php include 'hiensv.php';?>
</tbody>
</table>
<form method="post">
<table style="width:100%;">
<tr valign="top">
<td>
<p><b>Thêm sinh viên</b></p>
Mã sinh viên: <input type="text" name="masv"><br><br>
Tên sinh viên: <input type="text" name="tensv"><br><br>
Ngày sinh: <input type="date" name="ngaysinh" ><br><br>
Giới tính (Nam/Nữ): <input type="text" name="gioitinh" ><br><br>
CMND: <input type="text" name="cmnd" ><br>
<br>
<input type="submit" name="them" value="Thêm sinh viên">
</td>
<td>
<p><b>Xóa sinh viên theo mã sinh viên</b></p>
Nhập mã sinh viên cần xóa: <br><input type="text" name="idxoa" >
<input type="submit" name="xoa" value="Xóa">
<br><br>
<p><b>Tìm kiếm sinh viên theo mã sinh viên</b></p>
Tìm kiếm theo mã sinh viên:<br> <input type="text" name="hoten">
<input type="submit" name="tim" value="Tìm kiếm">
</td>
<td>
<p><b>Sửa thông tin sinh viên</b></p>
Nhập mã sinh viên cần sửa: <input type="text" name="idsua" value="<?php if(isset($_POST['dl'])) echo $_POST['idsua']; ?>">
<input type="submit" name="dl" value="Lấy dữ liệu"> <br><br>
<div id="1"></div>
</td>
</tr>
</table>
</form>
<?php 
include 'themsv.php';
include 'xoasv.php';
include 'timsv.php';
include 'suasv.php';
?>
</body>
</html>