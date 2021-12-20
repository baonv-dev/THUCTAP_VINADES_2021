<html>
<head>
<title>QUẢN LÝ SINH VIÊN</title>

</head>
<style>
.qlsv td,th{
border:1px solid;
padding: 8px;
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
	<th>Quản lý</th>
</tr>
</thead>
<tbody>
<?php include 'hiensv.php';?>
</tbody>
</table>
<br>
<table width="100%">
<tr valign="top">
<td style="padding-left:20px">
<form id="themsv" method="post" enctype="multipart/form-data">
<p><b>Thêm sinh viên</b></p>
Mã sinh viên: <input type="text" name="masv" value="<?php if(isset($_POST['them'])) echo $_POST['masv']?>" required> *<br><br>
Tên sinh viên: <input type="text" name="tensv" value="<?php if(isset($_POST['them'])) echo $_POST['tensv']?>" required> *<br><br>
Ngày sinh: <input type="date" name="ngaysinh" value="<?php if(isset($_POST['them'])) echo $_POST['ngaysinh']?>" ><br><br>
Giới tính:
<input type="radio" id="nam" name="gioitinh" value="Nam">
<label for="nam">Nam</label>
<input type="radio" id="nu" name="gioitinh" value="Nữ">
<label for="nu">Nữ</label><br><br>
CMND: <input type="text" name="cmnd" value="<?php if(isset($_POST['them'])) echo $_POST['cmnd']?>" required> *<br><br>
email: <input type="email" name="email" value="<?php if(isset($_POST['them'])) echo $_POST['email']?>" required> *<br><br>
SĐT: <input type="text" name="sdt" value="<?php if(isset($_POST['them'])) echo $_POST['sdt']?>"><br><br>
Ảnh đại diện: <input type="file" name="image"> <br><br>
<input type="submit" name="them" value="Thêm sinh viên">
<input type="reset" name="reset" value="Xóa">
</form>
</td>
<td>
<form id="xoatimkiemsv" method="post">
<p><b>Tìm kiếm sinh viên theo mã sinh viên</b></p>
Tìm kiếm theo mã sinh viên:<br> <input type="text" name="hoten">
<input type="submit" name="tim" value="Tìm kiếm">
</form>
<br>
<form id="xoatimkiemsv" method="post">
<p><b>Tìm kiếm sinh viên theo khoảng ngày</b></p>
Từ ngày: <input type="date" name="datefrom">
Đến ngày: <input type="date" name="dateto">
<input type="submit" name="timngay" value="Tìm kiếm">
</form><br><br>
<form action="export.php" method="post">
<input type="button" name="export" value="Export to Excel" style="background-color: green; color: white; padding: 5px; font-weight: bold;">
</form>
</td>
</tr>
</table>

<?php 
include 'themsv.php';
include 'timsv.php';
?><br>
</body>
</html>