<table width="100%" border="1">
    <?php
    
    $start = 2; $col =4 ; $lien=4;
    for ($row = 0; $row<$lien; $row++) {
        echo '<tr>';
        for ($j = $start; $j <$start+$col; $j++) {
            $newj =$j + $row*$col;
         echo "<td bgcolor='" .
             ((($j+$row)%2==0)?'yellow':'orange') . "'>" ;
            for ($i=1; $i<= 9; $i++) {
                $r=$newj*$i;
                echo "{$newj} X {$i} = {$r}<br>";
            }
            echo '</td>';

        }
        echo '</tr>';
    }
    ?>

</table>