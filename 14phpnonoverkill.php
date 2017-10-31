<?php
    $keigVarA = 42;
    $result = ($keigVarA < 20) ? 
        ("$keigVarA is less than 20") : (($keigVarA > 30) ? 
            ("$keigVarA is more Than 30") : "$keigVarA is in the middle in 20 and 30");

    echo $result;

?>