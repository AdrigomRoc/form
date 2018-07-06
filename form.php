<!DOCTYPE html>
<html>

<body>
    
    <?php
    /*
        Diferencia entre post y get, get mostra la 
        informació que has insertat en el formulari y el 
        post ho oculta per que sigui mes segur aixó no treu
        que amb un snifer es pugui veure, per aixó tindrem 
        que fixar-nos que els formularis tinguin post+https
        per que la informació estigui xifrada en el header.
    */
        $email = $_POST["email"];
        $password = $_POST["password"];
        if($email && $password){
            echo "Email: $email , Password: $password";
        }
    ?>
    <form action="form.php" method="post">
        Correu:
        <input type="email" name="email">
        <br /> 
        Contrasenya:
        <input type="password" name="password">
        <br />
        <input type="submit">
    </form>
</body>

</html>