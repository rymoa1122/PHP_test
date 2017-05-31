<?php

//$conn = @mysqli_connect(
//    "127.0.0.1","root","root","iii")
//     or die("Sever busy");
//     if ($conn) echo "OK";
//
    $db = @new mysqli('127.0.0.1',
        'root','root','iii');

    $sql = ('insert into member (account,password,realname)VALUE ("bard","1234","Bard")');
echo $db->errno;
$sql ='select * from member';
$result = $db -> query($sql);
while (
$row = $result ->fetch_object()){
    echo "{$row->id}:{$row->account}:{$row->passwd}<br>";
}
