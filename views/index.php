<?php
require_once './partials/header.php';
?>

    <form action="server_login.php" method="POST">
        <label for="username">Nombre de usuario:</label>
        <input type="text" name="username" id="">

        <label for="password">Nombre de usuario:</label>
        <input type="password" name="password" id=""><br>
        <button type="submit">Ingresar</button>
    </form> 
       
<?php 
require_once './partials/footer.php';
?>