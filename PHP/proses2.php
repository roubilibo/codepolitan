<html>
<?php
print_r($_POST);
?>

<body>
    Selamat Datang <?php echo $_POST["nama"]; ?><br>
    Alamat Kamu: <?php echo $_POST["alamat"]; ?>
</body>

</html>