<?php
require('../koneksi/koneksi.php');
include('../extra/randomcode.php');

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/landing_style.css">
    <title>Random Code</title>
</head>
<body>
<div class="formlogin">
        <div class="formtitle">
            <h4>Random Code "<?php echo $_SESSION['username']; ?>"</h4>
        </div>
        <form action="" method="POST">
            <div class="formcode">
                <h5><?php echo $randomcode; ?></h5>
            </div>
            <div class="formbutton">
                <button type="submit" class="btnrun" name="btnrun">Run</button>
                <button type="submit" class="btnsubmit" name="btnsubmit">Save</button>
                <input type="hidden" name="randcode" value="<?php echo $randomcode; ?>">
                <input type="hidden" name="tanggal" value="<?php echo date('Y-m-d H:i:s'); ?>">
            </div>
        </form>
        <div class="formlink">
            <pre>Klik Tombol "Run" Untuk Memunculkan Code</pre>
        </div>
    </div>
</body>
</html>