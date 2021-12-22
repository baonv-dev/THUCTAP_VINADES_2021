<?php
include 'link-database.php';
if(count($_POST)>0){
    mysqli_query($link,"UPDATE tbl_sinhvien set tenSV='".$_POST['tensv']."', ngaySinh='".$_POST['ngaysinh']."', 
    gioiTInh='".$_POST['gioitinh']."' ,CMND='".$_POST['cmnd']."', email='".$_POST['email']."', SDT='".$_POST['sdt']."' 
    WHERE maSV='".$_GET['masv']."'");   
    $errors= array();
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $file_parts =explode('.',$_FILES['image']['name']);
    $file_ext=strtolower(end($file_parts));
    $expensions= array("jpeg","jpg","png");
    if(in_array($file_ext,$expensions)=== false){
        $errors[]="Chỉ hỗ trợ upload file JPEG hoặc PNG.";
    }
    if($file_size > 2097152) {
        $errors[]='Kích thước file không được lớn hơn 2MB';
    }
    $image = $_FILES['image']['name'];
    $target = "photo/".basename($image);
    $sql = "UPDATE tbl_sinhvien SET anhDaiDien = '$image' WHERE maSV='".$_GET['masv']."'";
    mysqli_query($link, $sql);
    header("location:qlsv.php");
}
$result = mysqli_query($link,"SELECT * FROM tbl_sinhvien WHERE maSV='".$_GET['masv']."'");
$row= mysqli_fetch_array($result);
mysqli_close($link);
?>
<html>
<head>
<title>Sửa thông tin sinh viên</title>
</head>
<body>
<p><b>Sửa thông tin sinh viên</b></p><br>
<form method="post" enctype="multipart/form-data">
Mã sinh viên: <input type="text" name="masv" value="<?php echo htmlentities($row['maSV']); ?>" disabled><br><br>
Tên sinh viên: <input type="text" name="tensv" value="<?php echo htmlentities($row['tenSV']); ?>"><br><br>
Ngày sinh: <input type="date" name="ngaysinh" value="<?php echo htmlentities($row['ngaySinh']); ?>" ><br><br>
Giới tính:
<input type="radio" id="nam" name="gioitinh" value="Nam" <?php if(htmlentities($row['gioiTInh'])=="Nam") echo"checked"?>>
<label for="nam">Nam</label>
<input type="radio" id="nu" name="gioitinh" value="Nữ" <?php if(htmlentities($row['gioiTInh'])=="Nữ") echo"checked"?>>
<label for="nu">Nữ</label><br><br>
CMND: <input type="text" name="cmnd" value="<?php echo htmlentities($row['CMND']); ?>" ><br><br>
email: <input type="email" name="email" value="<?php echo htmlentities($row['email']); ?>" ><br><br>
SĐT: <input type="text" name="sdt" value="<?php echo htmlentities($row['SDT']); ?>" ><br><br>
Ảnh đại diện: <input type="file" name="image" > <br><br>
<input type="submit" name="gui" value="Gửi">
</form>
</body>
</html>