<?php
    $gvariable = "name";
    // $gliterally = 'my $variable will not print!<br>';
    // print $gliterally;
    $gliterally = "\"my $gvariable will print!\"\n";
    print $gliterally;
    "<br><br>";
    $d = date("D");
    if ($d == "Fri") {
        echo "Have a nice weekend!";

    } else {
        echo "Have a nice day!";
    }

?>