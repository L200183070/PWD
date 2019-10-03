<?php
@$nilai1 = $_POST['nilai1'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Bil.Genap dan Ganjil</title>
    </head>
    <body>
        <form method="POST">
            Masukan nilai = 
            <input type="text" name="nilai1" value="<?php echo $nilai1; ?>"/><br/>
            <input type="submit" name="submit" value="SUBMIT"/><br/><br/>
            <?php
            if ($nilai1 == "") {
                echo "";
            } else if ($nilai1 % 2 == 0) {
                echo $nilai1 . ' Bilangan genap';
            } else if ($nilai1 % 2 == 1) {
                echo $nilai1 . ' Bilangan ganjil';
            }
            ?>
        </form>
    </body>
</html>

