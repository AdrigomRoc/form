<!DOCTYPE html>
<html>

<body>

    <?php
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