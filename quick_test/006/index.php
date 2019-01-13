<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<h1>1 . Viết ra 1 chương trình php tính tuổi của 1 người khi biết ngày tháng năm sinh của họ</h1>
<form name="tinhtuoi" action="" method="post">
    <p>
        <label>Nhập ngày sinh : </label>
        <input type="number" name="day" value="">
    </p>
    <p>
        <label>Nhập tháng sinh : </label>
        <input type="number" name="month" value="">
    </p>
    <p>
        <label>Nhập năm sinh : </label>
        <input type="number" name="year" value="">
    </p>

    <p>
        <input type="submit" name="submit" value="submit">
        <?php
            if(isset($_POST['day']) && isset($_POST['month']) && isset($_POST['year']))
            {
                    $namnay = 2019;
                    echo '<br> Tuoi cua ban :'.$tuoi=$namnay-($_POST['year']);
            }
        ?>
    </p>
</form>


</body>
</html>