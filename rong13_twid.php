<?php
    if (isset($_GET['twid'])) {
       $twid = $_GET['twid'];

       $n12 = substr($twid, 0, 1);
       //echo $n12;
}
    $str = 'A123456789' ;
    $reg = '/^[A-Z][12][0-9]{8}$/';
    $r =preg_match($reg , $str);
    echo $r ;

?>
<form>
    <input type="text" name="twid" />
    <input type="submit" value="check" />
</form>
