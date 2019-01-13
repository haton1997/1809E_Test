<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <form name="formcontrol" action="" method="post">
        <label>Gigabyte:</label>
        <p>
            <input type="text" name="capacity" value="<?php if(isset($_REQUEST['capacity'])) echo $_REQUEST['capacity']; ?>" placeholder="Nhập vào dung lượng chuyển từ GB">
        </p>
        <p>
            <input type="submit" name="submit" value="submit">
        </p>
    </form>

    <?php
    /*
     * Chuyển từ Gb
     * thành Mb
     * thành Byte
     * Thành Bit
     *
     * */
    if(isset($_REQUEST['capacity']))
    {

        echo'<pre>';
        print_r($_REQUEST);
        echo'</pre>';
        echo 'MB=' .$val=$_REQUEST['capacity']*1000;
        echo '<br>';
        echo 'Byte=' .$val=$_REQUEST['capacity']*1000*1000;
        echo '<br>';
        echo 'bit=' .$val=$_REQUEST['capacity']*1000*1000*1000*8;
        echo '<br>';
    }
    else
    {
        echo 'ERROR';
    }



    ?>

</body>
</html>