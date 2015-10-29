​function mergeArray($A, $B) {
    $a_i = $b_i = 0;
    $a_len = count($A)；
    $b_len = count($B)；
    while($a_i<$a_len && $b_i<$b_len)
    {
        if($A[$a_i] < $B[$b_i]) {
            $C[] = $A[$a_i++];
        }
        else {
            $C[] = $B[$b_i++];
        }
    }
    while($a_i < $a_len) {
        $C[] = $A[$a_i++];
    }
    while($b_i < $b_len) {
        $C[] = $B[$b_i++];
    }
    return $C;
}