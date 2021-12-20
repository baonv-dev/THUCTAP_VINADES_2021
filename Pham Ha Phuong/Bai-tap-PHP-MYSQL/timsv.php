<?php
include 'link-database.php';
function duyetsinhvien($a,$link) {
    $sql = "SELECT * FROM tbl_sinhvien where maSV='".mysqli_real_escape_string($link,$a)."'";
    $result = mysqli_query($link, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            echo"<table class='qlsv' style='width:100%;'>";
            echo"<tr style=' background-color:yellow;'>
                	<th>ID</th>
                	<th>Mã sinh viên</th>
                	<th>Tên sinh viên</th>
                	<th>Ngày sinh</th>
                	<th>Giới tính</th>
                	<th>Địa chỉ</th>
                	<th>Email</th>
                	<th>Số điện thoại</th>
                	<th>CMND</th>
                	<th>Ảnh đại diện</th></tr>";
            echo"<tr><td>".htmlentities($row['ID'])."</td>";
            echo"<td>".htmlentities($row['maSV'])."</td>";
            echo"<td>".htmlentities($row['tenSV'])."</td>";
            echo"<td>".htmlentities($row['ngaySinh'])."</td>";
            echo"<td>".htmlentities($row['gioiTInh'])."</td>";
            echo"<td>".htmlentities($row['diaChi'])."</td>";
            echo"<td>".htmlentities($row['email'])."</td>";
            echo"<td>".htmlentities($row['SDT'])."</td>";
            echo"<td>".htmlentities($row['CMND'])."</td>";
            echo"<td>".htmlentities($row['anhDaiDien'])."</td></tr></table>";
        }
    } else {
        echo "Không có sinh viên đáp ứng";
    }
}
if(isset($_POST['tim'])){
    $masv=$_POST['hoten'];
    duyetsinhvien($masv,$link);
}

if(isset($_POST['timngay'])){
    $datefrom=$_POST['datefrom'];
    $dateto=$_POST['dateto'];
    $sql= "SELECT * FROM tbl_sinhvien WHERE ngaySinh >= '".$datefrom."' and ngaySinh <= '".$dateto."'";
    $result = mysqli_query($link, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "<p><b>Danh sách sinh viên sinh ngày ".$datefrom." đến ngày ".$dateto."</b></p><br>";
        echo"<table class='qlsv' style='width:100%;'>";
        echo"<tr style=' background-color:yellow;'>
                	<th>ID</th>
                	<th>Mã sinh viên</th>
                	<th>Tên sinh viên</th>
                	<th>Ngày sinh</th>
                	<th>Giới tính</th>
                	<th>Địa chỉ</th>
                	<th>Email</th>
                	<th>Số điện thoại</th>
                	<th>CMND</th>
                	<th>Ảnh đại diện</th></tr>";
        while ($row = mysqli_fetch_array($result)) {
            echo"<tr><td>".htmlentities($row['ID'])."</td>";
            echo"<td>".htmlentities($row['maSV'])."</td>";
            echo"<td>".htmlentities($row['tenSV'])."</td>";
            echo"<td>".htmlentities($row['ngaySinh'])."</td>";
            echo"<td>".htmlentities($row['gioiTInh'])."</td>";
            echo"<td>".htmlentities($row['diaChi'])."</td>";
            echo"<td>".htmlentities($row['email'])."</td>";
            echo"<td>".htmlentities($row['SDT'])."</td>";
            echo"<td>".htmlentities($row['CMND'])."</td>";
            echo"<td>".htmlentities($row['anhDaiDien'])."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "Không có sinh viên đáp ứng";
    }
}
mysqli_close($link);
?>