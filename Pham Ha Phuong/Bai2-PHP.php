<?php
//if(isset($_GET["id"]))
$txt=$_GET["txt"];
$txtcheck=$_GET["txtcheck"]; //bai3
$txta=$_GET["txta"]; //bai5
$txtb=$_GET["txtb"];
echo "<b>Chuỗi ban đầu: ".$txt."</b><br><br>";
//-----------------------
echo "1. Đảo ngược chuỗi: ".strrev($txt)."<br><br>";
//-----------------------
echo "2. Chuyển chuỗi đã cho thành chữ in HOA: ".strtoupper($txt)."<br><br>";
//-----------------------
echo "3. Kiểm tra xem trong chuỗi có chứa chuỗi (".$txtcheck.") không? <br>";
$a=explode(" ", $txt);
$flag=0;
for($i=0;$i<count($a);$i++){
    if(strcmp($a[$i], $txtcheck)==0)
    {echo "Có <br><br>";$flag++; break;}
}
if($flag==0) echo "Không <br><br>";
//-----------------------
echo "4. Đếm số ký tự xuất hiện trong chuỗi và hiển thị: <br>";
foreach (count_chars($txt, 1) as $i => $val) {
    echo "Kí tự (".chr($i).") xuất hiện ".$val." lần <br>";
}
echo "<br>";
//-----------------------
echo "5. Thay kí tự (".$txta.") trong chuỗi thành kí tự (".$txtb."): ";
$kq=str_replace($txta, $txtb, $txt);
echo $kq;
?>