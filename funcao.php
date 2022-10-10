

<?php

    function Soma (&$a, &$b)
    {
        $a = $a + $b;
        $b = $a + $b;
        print "A = $a";
        for ($i = 1; $i < 5; $i++){echo '&nbsp;';}
        print "B = $b<BR>";

    }

    $a = 3;
    $b = 1;

    print "A = $a";
    for ($i = 1; $i < 5; $i++){echo '&nbsp;';}
    print "B = $b<BR>";
    Soma($a,$a); Soma($b,$a); Soma($b,$b); 
    echo '<hr>';
    print "A = $a";
    for ($i = 1; $i < 5; $i++){echo '&nbsp;';}
    print "B = $b<BR>";

?>