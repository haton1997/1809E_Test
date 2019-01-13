<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<h1>1 . Viết ra 1 chương trình php in ra độ dài của chuỗi bạn nhập vào ?
    Xây dựng 1 form có 1 ô input cho người dùng nhập chuỗi . sau khi họ ấn enter sẽ hiện ra độ dài của chuỗi</h1>
<form name="chuoi" action="" method="post">
    <p>
        <label>Nhập chuỗi của bạn : </label>
        <input type="text" name="chuoi" value="" placeholder="Nhập vào chuỗi ký tự">
    </p>
    <p>
        <input type="submit" name="submit" value="submit">
        <?php
            if (isset($_POST['chuoi']))
            {
                echo '<br> Độ dài chuỗi là : ' .strlen($_POST['chuoi']);
            }

        ?>
    </p>
</form>


</body>
</html>