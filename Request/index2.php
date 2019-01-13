<?php
/**
 * Created by PhpStorm.
 * User: HaTon
 * Date: 01/07/2019
 * Time: 18:30
 */
echo'<pre>';
print_r($_REQUEST);
echo'</pre>';
if(isset($_REQUEST['thamso1'])&& isset($_REQUEST['thamso2']))
{
    echo 'Tong='.$val=$_REQUEST['thamso1']+$_REQUEST['thamso2'];
    echo '<br>';
    echo 'Hiệu='.$val1=$_REQUEST['thamso1']-$_REQUEST['thamso2'];
    echo '<br>';
    echo 'Tích='.$val2=$_REQUEST['thamso1'].$_REQUEST['thamso2'];
    echo '<br>';
    echo 'Thương='.$val3=$_REQUEST['thamso1']/$_REQUEST['thamso2'];
}
else
{
    echo 'ERROR';
}