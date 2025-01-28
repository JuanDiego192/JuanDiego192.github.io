<?php
if (isset($_POST['revisar_registros'])) {
    header("Location: revisar_registros.php");
    exit();
} else {
    header("Location: registrar.php");
    exit();
}
?>
