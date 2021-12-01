<html>
<head><h1>Bài 3</h1></head>
<body>
<?php 
echo "1. Hiển thị ngày hiện tại theo các định dạng: <br>";
echo date("d/m/Y")."<br>";
echo date("d.m.Y")."<br>";
echo date("d-m-Y")."<br>";
echo "2. Chuyển đổi ngày hiện tại thành timestamp: ".strtotime(date("d-m-Y"))."<br>";
$first_date = "30-11-2021";
$second_date = "12-12-2021";
echo "3. Tính khoảng cách giữa 2 ngày (".$first_date." - ".$second_date."): ";
$first_date = strtotime($first_date);
$second_date = strtotime($second_date);
$datediff = abs($first_date - $second_date);
echo floor($datediff / (60*60*24))." ngày";
?>
</body>
</html>