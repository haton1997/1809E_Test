<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<div>1 . Cho bạn 1 mảng
    $student = array(); <br>
    $student[] = array('name' => 'Nguyễn văn anh', 'age' => 21, 'point' => 7); <br>
    $student[] = array('name' => 'Nguyễn thi hoa', 'age' => 23, 'point' => 8); <br>
    $student[] = array('name' => 'Nguyễn văn tuấn', 'age' => 24, 'point' => 9); <br>
    $student[] = array('name' => 'Lê văn thuận', 'age' => 25, 'point' => 7); <br>
    $student[] = array('name' => 'Trịnh quang anh', 'age' => 26, 'point' => 1); <br>
    $student[] = array('name' => 'Lê thuỳ linh', 'age' => 28, 'point' => 3); <br>
    $student[] = array('name' => 'Lê thuỳ trang', 'age' => 25, 'point' => 5); <br>
    $student[] = array('name' => 'Vũ đình hùng', 'age' => 20, 'point' => 8); <br>
    $student[] = array('name' => 'Lê văn an', 'age' => 19, 'point' => 9); <br>

    Hãy dùng dữ liệu sau và vòng lặp foreach để in ra 1 table thông tin của các sinh viên này
    và xếp loại của họ dự tên số điểm mà họ có
</div>
<?php
$student = array();
    $student[0] = array('name' => 'Nguyễn văn anh', 'age' => 21, 'point' => 7);
    $student[1] = array('name' => 'Nguyễn thi hoa', 'age' => 23, 'point' => 8);
    $student[2] = array('name' => 'Nguyễn văn tuấn', 'age' => 24, 'point' => 9);
    $student[3] = array('name' => 'Lê văn thuận', 'age' => 25, 'point' => 7);
    $student[4] = array('name' => 'Trịnh quang anh', 'age' => 26, 'point' => 1);
    $student[5] = array('name' => 'Lê thuỳ linh', 'age' => 28, 'point' => 3);
    $student[6] = array('name' => 'Lê thuỳ trang', 'age' => 25, 'point' => 5);
    $student[7] = array('name' => 'Vũ đình hùng', 'age' => 20, 'point' => 8);
    $student[8] = array('name' => 'Lê văn an', 'age' => 19, 'point' => 9);
    ?>
        <h2>Kết quả </h2>
    <table border=1 cellspacing=0 cellpading=0>
        <thead>
            <tr>
                <th>STT </th>
                <th>Tên </th>
                <th>Tuổi</th>
                <th>Điểm </th>
                <th>Học lực </th>

            </tr>
        </thead>
        <?php $stt=1; foreach ($student as $value):?>
        <tbody>
            <tr>
                <td><?php echo $stt ?> </td>
                <td><?php echo $value['name'] ?> </td>

                <td><?php echo $value['age'] ?></td>

                <td><?php echo $value['point'] ?> </td>
                <td>
                    <?php
                    if ($value['point']<5)
                    {
                        echo "Học lực Yếu";
                    }
                    if ($value['point']>=5 && $value['point']<7)
                    {
                        echo "Học lực Trung Bình";
                    }
                    if ($value['point']>=7 && $value['point']<9)
                    {
                        echo "Học lực Khá";
                    }
                    if ($value['point']>=9 && $value['point']<=10)
                    {
                        echo "Học lực Giỏi";
                    }
                    ?>
                </td>
            </tr>
            <?php $stt++; endforeach;?>
        </tbody>
    </table>
</body>
</html>