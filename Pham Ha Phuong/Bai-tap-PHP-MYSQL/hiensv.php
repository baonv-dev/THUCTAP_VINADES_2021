<?php
include 'link-database.php';
$sql = "SELECT * FROM tbl_sinhvien";
$result = mysqli_query($link, $sql);
if (mysqli_num_rows($result) > 0) {
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
        echo"<td><img src='photo/".$row['anhDaiDien']."' ></td>";
        echo"<td align='center'><a href='xoasv.php?masv=".$row['maSV']."'>Xóa</a>
                <a href='suasv.php?masv=".$row['maSV']."'>Sửa</a></td></tr>";
    }
} else {
    echo "ERROR: Không thể thực thi câu lệnh $sql. " . mysqli_error($link);
}
mysqli_close($link);
?>