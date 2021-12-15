<?php
$link = new mysqli('localhost','root','','qlsv') or die("Kết nối thất bại");
if(isset($_POST['dl'])){ //neu co masv thoa man thi hien form
    $idsua=$_POST['idsua'];
    $query="SELECT * FROM tbl_sinhvien WHERE maSV='".$idsua."';";
    $result=mysqli_query($link, $query);
    $row=mysqli_fetch_array($result);
    if(mysqli_num_rows($result) > 0){
        echo"<div id='2'>Tên sinh viên: <input type='text' name='tensvs' value='".$row['tenSV']."' ><br><br>";
        echo"Ngày sinh: <input type='date' name='ngaysinhs' value='".$row['ngaySinh']."' ><br><br>";
        echo"Giới tính (Nam/Nữ): <input type='text' name='gioitinhs' value='".$row['gioiTInh']."' ><br><br>";
        echo" CMND: <input type='text' name='cmnds' value='".$row['CMND']."' ><br>";
        echo"<br>";
        echo"<input type='submit' name='sua' value='Sửa'></div>";
        echo"<script>document.getElementById('1').appendChild(document.getElementById('2'));</script>";
        //========
        if(isset($_POST['sua'])){   //sua sinh vien
            //$masv=$_POST['idsua'];
            $tensv=$_POST['tensvs'];
            $ngaysinh=$_POST['ngaysinhs'];
            $gioitinh=$_POST['gioitinhs'];
            $cmnd=$_POST['cmnds'];
            $query="UPDATE tbl_sinhvien SET tenSV='".$tensv."', ngaySinh='".$ngaysinh."', gioiTInh='".$gioitinh."',
CMND='".$cmnd."' WHERE maSV='".$_POST['idsua']."'";
            mysqli_query($link, $query) or die("Sua dữ liệu thất bại");
            header("Refresh:0");
        }
    }
    else {
        echo"<div id='2'>Không có sinh viên nào đáp ứng</div>";
        echo"<script>document.getElementById('1').appendChild(document.getElementById('2'));</script>";
    }
    
}

?>