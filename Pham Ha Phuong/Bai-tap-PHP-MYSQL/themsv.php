<?php
include 'link-database.php';
if(isset($_POST['them'])){
    $masv=mysqli_real_escape_string($link,$_POST['masv']);
    $tensv=mysqli_real_escape_string($link,$_POST['tensv']);
    $ngaysinh=mysqli_real_escape_string($link,$_POST['ngaysinh']);
    $gioitinh=mysqli_real_escape_string($link,$_POST['gioitinh']);
    $cmnd=mysqli_real_escape_string($link,$_POST['cmnd']);
    $sdt=mysqli_real_escape_string($link,$_POST['sdt']);
    $email=mysqli_real_escape_string($link,$_POST['email']);
    //upload anh
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
    //check trung ma sinh vien
    $result = mysqli_query($link,"SELECT maSV FROM tbl_sinhvien");
    while($row= mysqli_fetch_array($result)){
        if($masv == $row['maSV']){
            echo"<script>alert('Mã sinh viên này đã tồn tại trong database!')</script>"; break;
        }
        else{
            if(strlen($cmnd)==9 || strlen($cmnd)==12){
                if(strlen($sdt)==9 || strlen($sdt)==10){
                    $queryadd="INSERT INTO tbl_sinhvien (maSV, tenSV, ngaySinh, gioiTInh, CMND, email, SDT, anhDaiDien)
VALUES ('".$masv."', '".$tensv."', '".$ngaysinh."', '".$gioitinh."', '".$cmnd."', '".$email."', '".$sdt."', $image)";
                    mysqli_query($link, $queryadd) or die("Thêm dữ liệu thất bại");
                    header("Refresh:0"); break;
                }else
                    echo"<script>alert('Vui lòng nhập lại số điện thoại (9-10 số)')</script>"; break;
            }else
                echo "<script>alert('Vui lòng nhập lại số CMND (9 hoặc 12 số)')</script>"; break;
        }
       }
}
mysqli_close($link);
?>