<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=|, initial-scale=1.0">
    <title>CharlyGelato</title>
    <link rel="icon" href="CharlyGelatoLogo.png" type="image/png">
    <link rel="stylesheet" href="Styles.css">
</head>
<body>
    <div class="pattern"></div>
    <nav>
        <ul class="GelatoList">
            <li>RECETAS</li>
            <li>SOBRE</li>
            <li>LIBROS</li>
            <li>CONTACTO</li>
            <li><input type="text" class="searchBar" placeholder="BUSCAR"></li>
            <li><img src="SocialLinks.png" alt="social link images"></li>
        </ul>
    </nav>
    <div class="charlyGelato">
        CHARLY <img src="&.png" alt="Charly Gelato Logo">GELATO
    </div>
    <div class="IceCreams">
        <div class="IceCreamCard">
            <header class="CardHeader">
                <div class="CardHeaderTitle">
                    <h3 style="letter-spacing: 3px;">VAINILLA</h3>
                    <p>El favorito para muchos</p>
                </div>
                <div class="qualification" style="
                    height: 66px;
                    justify-self: flex-end;
                    display: flex;
                    flex-direction: column;
                    font-size: 18px;
                    color: #222;
                ">
                    
                    <p>Simplemente el mejor helado del mundo</p>
                    <p style="margin: 0; text-align: center;">⭐⭐⭐⭐⭐</p>
                </div>
            </header>
            
            <div class="admirationSection">
                <img src="VanillaIceCream.jpg" alt="">
                <form class="ordering" method="post" action="">
                    <div style="display: flex; justify-content: center; gap: 12px;">
                        <label for="tipoHelado" class="orderingLabel">TIPO DE CONO </label>
                        <select name="TipoHelado" id="tipoHelado">
                            <option value="Simple">SENCILLO</option>
                            <option value="Doble">DOBLE</option>
                        </select>
                    </div> <br>
                    <div class="checkSec"> <input type="checkbox" name="Choco" id=""> <p>Salsa de chocolate</p> </div>
                    <div class="checkSec"><input type="checkbox" name="Fresas" id=""> <p>Fresas</p></div>
                    <div class="checkSec"> <input type="checkbox" name="Oreo" id=""> <p>Galletas oreo</p> </div>
                    <input type="submit" value="Ordenar" class="addToCartButton"><br>
                    <div class="iceCreamBougth">
                        
                        <?php
                            require "classes.php";


                            function image($name) {
                                return "<img src='IceCreamImages/".$name.".png' style='height:30px; width: auto; border:none; padding: 0;'/>";
                            }

                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                $tipo = $_POST['TipoHelado'];
                                $choco = isset($_POST['Choco']) ? true : false;
                                $fresas = isset($_POST['Fresas']) ? true : false;
                                $oreo = isset($_POST['Oreo']) ? true : false;
                                
                                $iceCream = ($tipo == "Simple") ? $iceCream = new ConoSencillo() : $iceCream = new ConoDoble();
                                
                                if ($choco) $iceCream = new SalsaChocolate($iceCream);
                                if ($fresas) $iceCream = new Fresas($iceCream);
                                if ($oreo) $iceCream = new GalletaOreo($iceCream);


                                $desc = $iceCream->getDescripcion();
                                echo "<div class='price'>
                                    " . (($tipo == "Simple") ? image("Scoup") : image("Double")) .
                                    "<div>".
                                    (($choco) ? image("Choco") : "") .
                                    (($fresas) ? image("SBerry") : "") .
                                    (($oreo) ? image("Oreo") : "") .
                                    "</div><p>$" . $iceCream->getPrecio() . "</p>
                                </div>";
                                echo "<p style='text-align: center;'>" . $desc . "</p>";
                            }
                        ?>
                        
                    </div>
                </form>
            </div>
        </div>
        
    </div>
</body>
</html>