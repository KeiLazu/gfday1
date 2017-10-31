<?php
    $keigVarA = 123;

    if (is_numeric($keigVarA)) {
        $result = ($keigVarA < 20) ? 
            ("$keigVarA is less than 20") : (($keigVarA > 30) ?
                ("$keigVarA is more Than 30") : "$keigVarA is in the middle in 20 and 30");   
    } else {
        $result = "Please put number in keigVarA";

    }

    echo $result;

?>