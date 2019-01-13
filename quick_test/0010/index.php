<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<h1>1 . Viết ra 1 chương trình khi nhập vào họ tên của 1 người
    hãy in ra đâu là họ :
    đâu là tên :
    đâu là tên đệm .
    Ví dụ : nguyễn thị thuý diễm
    thì tên là diễm
    họ là nguyễn
    tên đệm là thị thuý
</h1>
<?php
if (isset($_POST['hoten']) )
{

//Lấy dữ liệu người dùng
    $hoten = trim($_POST['hoten']);
//  Tách họ tên thành 1 mảng họ tên
    $mang = explode(" ", $hoten);
//     Xác định phần họ tên tương ứng
    $ho = $mang[0];
    $n=count($mang);
    $ten = $mang[$n-1];
    $ten_dem="";
    for($i=1;$i<$n-1;$i++)
    {
        $ten_dem= $ten_dem.$mang[$i] ." ";
    }
}
?>
<form name="nhaphoten" action="" method="post">
    <p>
        <label>Nhập họ tên :</label>
        <input type="text" name="hoten" value="<?php if (isset($_POST['hoten'])) echo $hoten; ?>" placeholder="">
    </p>
    <p>
        <label>Họ :</label>
        <input type="text" name="name" value="<?php if (isset($_POST['hoten'])) echo $ho; ?>" placeholder="">
    </p>
    <p>
        <label>Họ đệm :</label>
        <input type="text" name="name" value="<?php echo isset ($_POST['hoten']) ? $ten_dem :" ";?>" placeholder="">
    </p>
    <p>
        <label>Tên :</label>
        <input type="text" name="name" value="<?php if (isset($_POST['hoten'])) echo $ten;?>" placeholder="">
    </p>

    <p>
        <input type="submit" name="submit" value="KQ">
    </p>
</form>
</body>
</html>
