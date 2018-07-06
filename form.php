<!DOCTYPE html>
<html>

<body>

    <?php
        $email = $_GET["email"];
        $password = $_GET["password"];
        if($email && $password){
            echo "Email: $email , Password: $password";
        }
    ?>
    <form action="form.php" method="get">
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