<html>
<head><h1>Bài 1</h1></head>
<body>
<?php //declare(strict_types=1);
$arr = array(10, -2, -39, 47, 95, 182, 47, -32, -44, 3, 31);
$len = count($arr);
//duyet mang
function duyetmang($arr) {
    $l=$GLOBALS['len'];
    for($i=0 ; $i<$l ; $i++){
        echo $arr[$i]. ", ";
    }
}

echo "Mảng ban đầu: ";
duyetmang($arr);
echo "<br>";


//----------------------
//cau 1
echo "<h3>1. Tìm giá trị trung bình của các phần tử trong mảng</h3>";
$tong = 0;
for($i=0 ; $i<$len ; $i++){
    $tong += $arr[$i];
}
$kq1=$tong/$len;
echo "Giá trị trung bình của các phần tử trong mảng: ". $kq1;

//----------------------
//cau 2
echo "<h3>2. Hiển thị 3 phần tử nhỏ nhất và lớn nhất</h3>";
sort($arr);
echo "3 phần tử nhỏ nhất: ";
for($i=0 ; $i<3 ; $i++){
    echo $arr[$i]. ", ";
}
echo "<br> 3 phần tử lớn nhất: ";
for($i=$len-1 ; $i>=$len-3 ; $i--){
    echo $arr[$i]. ", ";
}

//----------------------
//cau 3
echo "<h3>3. Sắp xếp các phần tử theo giá trị tăng dần</h3>";
echo "Mảng đã sắp xếp: ";
duyetmang($arr);

//----------------------
//cau 4
echo "<h3>4. Tìm kiếm giá trị xuất hiện trong mảng hay không và hiển thị số lần xuất hiện</h3>";
$giatri = 47;
$solan = 0;
for($i=0 ; $i<$len ; $i++){
    if($arr[$i]==$giatri){
        $solan++;
    }      
}
echo "Giá trị " . $giatri . " xuất hiện " . $solan . " lần.";

//----------------------
//cau 5
/*echo "<h3>5. Xóa 1 phần tử trong mảng có giá trị bất kỳ</h3>";
$del_num = 95;
for($i=0 ; $i<$len ; $i++){
    if($arr[$i]==$del_num)
        unset($arr[$i]);
}
echo "Mảng sau khi xóa giá trị " . $del_num . ": ";
for($i=0 ; $i<$len ; $i++){
    echo $arr[$i]. ", ";
}*/

//----------------------
//cau 6
echo "<h3>6. Tìm kiếm giá trị lớn nhất và nhỏ nhất trong mảng</h3>";
echo "Giá trị nhỏ nhất: " . $arr[0] . "<br>";
echo "Giá trị lớn nhất: " . $arr[$len-1];


//----------------------
//cau 7
echo "<h3>7. Hiển thị danh sách các phần tử và số lần xuất hiện trong mảng </h3>";
$solan = 1;
for($i=0 ; $i<$len ; $i++){
    $giatri = $arr[$i];
    if($i==$len){
        continue;
        if($arr[$i]==$arr[$i+1]){
            $solan++;
        }
    }
    else 
        $solan=1;
    echo "Số " . $giatri . " xuất hiện " . $solan . " lần. <br>";
}
?>

</body>
</html>
