<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hello World</title>
</head>
<body>
    <?php echo "Hello, World!"; ?><br><br>
    <? echo "Apakah ini diperbolehkan?"; ?> <!-- ga bisa keluar karena settingan apache -->
    <script lang="php"> Masih diperbolehkan kah </script> <!-- deprecated -->

    <?php
    # Comment
    # 2nd Comment
    // 3rd Comment

    /*
    4th and
    5th comment
    */
    
    ?>

    <input type="text" name="InputNumber1" id="Number1"></input>
    <button>Process</button>

    <form action="12php.php" method="post">
        <input type="submit" value="Next">
    </form>

</body>
</html>