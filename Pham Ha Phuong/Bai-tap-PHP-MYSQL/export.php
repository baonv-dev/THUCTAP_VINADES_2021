<?php
include 'link-database.php';
$output="";
if(isset($_POST['export'])){
    $sql="SELECT * FROM tbl_sinhvien ORDER BY maSV";
    $result=mysqli_query($link, $sql);
    if(mysqli_num_rows($result)>0){
        $output.="
        <table>
        <tr>
            <th>STT</th>
            <th>Ma sinh vien</th>
            <th>Ten sinh vien</th>
        </tr>";
        while($row=mysqli_fetch_array($result)){
            $output.="
        <tr>
            <th>".$row['ID']."</th>
            <th>".$row['maSV']."</th>
            <th>".$row['tenSV']."</th>
        </tr>
    ";
        }
        $output="</table>";
        header("Content-Type: application/vnd.ms-excel; charset=utf-8");
        header("Content-Disposition: attachment; filename=abc.xls");
        echo $output;
    }
}
?>