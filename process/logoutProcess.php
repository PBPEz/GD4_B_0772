<?php
    session_start();
    session_destroy();
    echo
        '<script>
        window.location = "../page/loginPage.php"
        </script>';
?>