<?php
$link = new mysqli('localhost','root','','qlsv') or die("Kết nối thất bại");
function duyetsinhvien($a,$link) {
    $sql = "SELECT * FROM tbl_sinhvien where maSV='".$a."'";
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
            echo"<tr><td>".$row['ID']."</td>";
            echo"<td>".$row['maSV']."</td>";
            echo"<td>".$row['tenSV']."</td>";
            echo"<td>".$row['ngaySinh']."</td>";
            echo"<td>".$row['gioiTInh']."</td>";
            echo"<td>".$row['diaChi']."</td>";
            echo"<td>".$row['email']."</td>";
            echo"<td>".$row['SDT']."</td>";
            echo"<td>".$row['CMND']."</td>";
            echo"<td>".$row['anhDaiDien']."</td></tr></table>";
        }
    } else {
        echo "Không có sinh viên đáp ứng";
    }
}

$sql = "SELECT * FROM tbl_sinhvien";
$result = mysqli_query($link, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        echo"<tr><td>".$row['ID']."</td>";
        echo"<td>".$row['maSV']."</td>";
        echo"<td>".$row['tenSV']."</td>";
        echo"<td>".$row['ngaySinh']."</td>";
        echo"<td>".$row['gioiTInh']."</td>";
        echo"<td>".$row['diaChi']."</td>";
        echo"<td>".$row['email']."</td>";
        echo"<td>".$row['SDT']."</td>";
        echo"<td>".$row['CMND']."</td>";
        echo"<td>".$row['anhDaiDien']."</td></tr>";
    }
} else {
    echo "ERROR: Không thể thực thi câu lệnh $sql. " . mysqli_error($link);
}
?>