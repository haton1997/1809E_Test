<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <form name="form-control" action="" method="post">
        <label>Nhập ngày sinh:</label>
        <p>
            <input type="text" name="day" value="" >
        </p>
        <label>Nhập tháng sinh:</label>
        <p>
            <input type="text" name="month" value="" >
        </p>
        <label>Nhập năm sinh:</label>
        <p>
            <input type="text" name="year" value="" >
        </p>
        <p>
            <input type="submit" name="submit" value="submit">
        </p>
    </form>
<!--Còn bao nhiêu ngày nữa đến sinh nhật gần nhất của bạn ấy-->
    <?php

    if(isset($_REQUEST['day'])&&isset($_REQUEST['month'])&& isset($_REQUEST['year']))
    {
        echo'<pre>';
        print_r($_REQUEST);
        echo'</pre>';
        echo 'Năm sinh của bạn là:' .$_REQUEST['day'].'/'.$_REQUEST['month'].'/'.$_REQUEST['year'];
        $ngayhomnay = date("d/m/y"); //Lấy thời gian hiện tại
        $ngay=date('d');
        echo $ngay;
        $ngaysosanh = $_REQUEST['day'].'/'.$_REQUEST['month'].'/'.$_REQUEST['year']; // Năm/Tháng/Ngày
        echo "<br/>";
        echo "Hôm nay là: ".$ngayhomnay;
        echo "<br/>Ngày sinh là: ".$ngaysosanh;
        echo "<br/>";
        echo "Kết quả so sánh: ";
        if (strtotime($ngayhomnay) > strtotime($ngaysosanh)) {
            echo "Sinh nhật bạn sẽ đến sau :" .$val=$_REQUEST['day']-date('d') .'ngày';
        }elseif (strtotime($ngayhomnay) == strtotime($ngaysosanh)) {
            echo "Chính là hôm nay đây ^^!";
        }elseif ((strtotime($ngayhomnay) < strtotime($ngaysosanh))){
            echo "Ngày đó vẫn chưa tới...";
        }
    }
    else
    {
        echo 'ERROR';
    }

    ?>

</body>
</html>