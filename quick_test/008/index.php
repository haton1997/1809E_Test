<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<h3>1 . Viết 1 class PHP
    có tên là Student với các thuộc tính
    1 - tên
    2 - ngày tháng năm sinh ( định dạng dd/mm/YY )
    3 - quê quán
    4 - giới tính
    5 - điểm của sinh viên đó ( dạng mảng )
    ví dụ array(
    'toan' => 0,
    'ly' => 0,
    'hoa' => 0
    )
    đây khi là khai báo mặc định khi khởi tạo đối tượng sẽ truyền điểm vào
    Hãy khai báo các phương thức để in ra
    1 - tạo ra 1 method constructor cho phép truyển vào các thuộc tính của sinh viên
    2 - thông tin đầy đủ của sinh viên đó tên method là getFullInfo()
    3 - tuổi của sinh viên hiện tại getAgeStudent()
    4 - điểm trung bình 3 môn của sinh viên đó
    5 - xếp loại học tập ( > 8 giỏi , > 7 khá , > 5 trung bình , < 5 yếu kém

Cuối cùng hãy khởi tạo đối tượng từ class này và truyền vào đầy đủ thông tin
sau đó lần lượt gọi các phương thức trong class mà bạn đã tạo
</h3>
<?php

    class Student{
        public $ten;
        public $ngaysinh;
        public $quequan;
        public $gioitinh;
        public $diem = array(
            'toan'=>0,
            'ly'=>0,
            'hoa'=>0,
        );
//    1 - tạo ra 1 method constructor cho phép truyển vào các thuộc tính của sinh viên
    public function __construct($ten,$ngaysinh,$quequan,$gioitinh,$toan,$ly,$hoa)
    {
        $this->ten = $ten;
        $this->ngaysinh = $ngaysinh;
        $this->quequan= $quequan;
        $this->gioitinh= $gioitinh;
        $this->diem['toan']= $toan;
        $this->diem['ly']= $ly;
        $this->diem['hoa']= $hoa;
    }
//    2 - thông tin đầy đủ của sinh viên đó tên method là getFullInfo()
    public function getFullInfo()
    {
        echo "Thông tin sinh viên:" ;
        echo "<br>Tên:" .$this->ten;
        echo "<br>Ngày sinh:".$this->ngaysinh;
        echo "<br>Quê quán:".$this->quequan;
        echo "<br>Giới tính:".$this->gioitinh;
        echo "<br>Điểm toán:".$this->diem['toan'];
        echo "<br>Điểm lý:".$this->diem['ly'];
        echo "<br>Điểm hóa:".$this->diem['hoa'];
    }
//3 - tuổi của sinh viên hiện tại getAgeStudent()
    public function getAgeStudent()
    {

    }

//    4 - điểm trung bình 3 môn của sinh viên đó
    public function getdiemTB()
    {
        $tong_diem = 0;
        $tong_so_mon = 0;
        foreach ($this->diem as $value)
        {
            $tong_diem = $tong_diem+$value;
            $tong_so_mon++;
        }
         return $tong_diem/$tong_so_mon;
    }
//    5 - xếp loại học tập ( > 8 giỏi , > 7 khá , > 5 trung bình , < 5 yếu kém
    public function xepLoai()
    {
        if($this->getdiemTB()>8)  $result="Giỏi";
        elseif($this->getdiemTB()>7) $result="Khá";
        elseif($this->getdiemTB()>5) $result="Trung Bình";
        else  $result="Yếu";
        echo "<br> Xếp loại của sinh viên là :".$result;
    }
}
$student=new Student('Tôn Văn Hà','14/03/97','Thanh Hóa','Nam',6,7,8);
    $student->getFullInfo();
    echo '<br>';
    $student->getAgeStudent();
    echo '<br>';
    echo '<br> Điểm TBC của 3 môn là :'.$student->getdiemTB();
    $student->xepLoai();
?>
</body>
</html>
