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
        $text = $_POST["text"];
        if($text){
            $x=strlen($text);
            echo "El nombre de caracters es de: ".$x;
        }
    ?>
    <form action="form.php" method="post">
        Escriu:
        <input type="text" name="text">
        <br /> 
        <input type="submit">
    </form>
</body>

</html>