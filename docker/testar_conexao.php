<html>
<?php
        echo 'Versão Atual do PHP: '.phpversion();

        $servername = "db";
        $username = "servirtoquewebco_wordpress_admin";
        $password = "N1!nCcApc[E=";

        // Create connection
        $conn = new mysqli($servername, $username, $password);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "<br /> Connected successfully";
?>
<?=phpinfo()?>
</html>