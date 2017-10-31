<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Comparator</title>
</head>
<body>
    <input type="text" name="numberCheck" id="numberCheck"/>

    <button onClick="keiGiveResult()">Process</button>
    <br><br>
    <div id="result"></div>

</body>
<script>
    function keiGiveResult()
    {
        $keigVarA = document.getElementById('numberCheck').value

        $result = ($keigVarA < 20) ? ($keigVarA + " is less than 20") : (($keigVarA > 30) ? ($keigVarA + " is more Than 30") : $keigVarA + " is in the middle in 20 and 30");
        
        document.getElementById('result').innerHTML = $result;

    }

</script>

</html>