<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
$json = file_get_contents("http://www.railway.gov.tw/Upload/UserFiles/%E8%BB%8A%E7%AB%99%E5%9F%BA%E6%9C%AC%E8%B3%87%E6%96%992.json");
$result = mb_convert_encoding($json,"utf-8","big5");
$root = json_decode($result);
foreach ($root as $obj){
    foreach ($obj as $k => $v){
        echo "{$k}:{$v}<br>";
    }
    echo '<hr>';
}
