<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Los Pollos hermanos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" type="image/icon" href="https://upload.wikimedia.org/wikipedia/en/a/ae/Los_Pollos_Hermanos_logo.png">
    <style>
        body {
            font-family:Georgia, 'Times New Roman', Times, serif;
            background-color: #fff6e7;
        }

        h1{
            font-family:Georgia, 'Times New Roman', Times, serif;
            text-align: center;
        }

        label {
            font-family:Georgia, 'Times New Roman', Times, serif;
        }

        h3 {
            text-align: center;
        }
        h1.titleDiv {
            color: #ffc813;
        }

        .navBarLosPollos {
            background-color: #fff6e7;
        }

        div.brandTitle {
            color: #000;
        }

        .card {
            border: none;
            border-color: rgba(0, 0, 0, 0);
        }

        .categorySelector {
            background-color: #ffc813;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
        }

        .categoriesDiv {
            align-items: center;
        }

        .selectType {
            display: flex;
            justify-content: space-between;
        }

        .SelectorList {
            display: flex;
            flex-direction: column;
            gap: 5px;
            padding: 10px;
        }

        input[type=number] {
            border: none;
            background-color: #ffc813;
            border-radius: 10px;
            color: aliceblue;
            text-align: center;
            font-weight: 6px;
        }

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-light navBarLosPollos">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://upload.wikimedia.org/wikipedia/en/a/ae/Los_Pollos_Hermanos_logo.png" alt="Avatar Logo" style="width:40px;" class="rounded-pill">
                Los pollos hermanos
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Active</a>
                </li>
                <li class="nav-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                        <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6" />
                    </svg>
                </li>
                <li class="nav-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                    </svg>
                </li>
            </ul>
        </div>
    </nav>

    <div>
        <h1 class="titleDiv"> Bienvenido</h1>
        <h3> Elige lo que desees</h3>
    </div>

    <h2 style="padding-left: 20%;">Categorias</h2>
    <div class="CategoriesDiv" style="display: flex; justify-content: center; gap: 30px;">
        <div class="card" style="width: 18rem;">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWrq7O2YndLueMMXnC81ubgBnK7zAI3h2KNQ&s"
                class="card-img-top" alt="...">
            <div class="card-body categorySelector">
                <h3 class="card-text">Platos</h3>
            </div>
        </div>
        <div class="card " style="width: 18rem;">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWrq7O2YndLueMMXnC81ubgBnK7zAI3h2KNQ&s" class="card-img-top" alt="...">
            <div class="card-body categorySelector">
                <h3 class="card-text">Bebidas</h3>
            </div>
        </div>
    </div>

    <form method="post" style="padding: 15%;">
        <h2>Platos principales</h2>
        <br>
        <div style="display: flex; justify-content: space-evenly;">
            <div class="card" style="width: 18rem;">
                <img src="https://lh5.googleusercontent.com/p/AF1QipMS_sx6Exfx-1t5FvaHUk198pIntx7KoeQzWsvH=w143-h143-n-k-no" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Medio pollo asado al carbon</h5>
                    <h6> Acompañado con:</h6>
                </div>
                <div class="SelectorList">
                    <div class="selectType">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Yuca
                        </label>
                        <input type="number" value="0" min="0" max="50" step="1"  name="MediosPollosYuca"/>
                    </div>
                    <div class="selectType">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Ensalada
                        </label>
                        <input type="number" value="0" min="0" max="50" step="1" name="MediosPollosEnsalada"/>
                    </div>
                    <div class="selectType">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Papas fritas
                        </label>
                        <input type="number" value="0" min="0" max="50" step="1" name="MediosPollosPapas"/>
                    </div>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="https://img-global.cpcdn.com/recipes/00ad5450181c7809/400x400cq70/photo.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Pollo asado al carbon</h5>
                    <h6>$35.000</h6>
                    <h6> Acompañado con:</h6>
                </div>
                <div class="SelectorList">
                    <div class="selectType">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Yuca
                        </label>
                        <input type="number" value="0" min="0" max="50" step="1" name="PollosEnterosYuca"/>
                    </div>
                    <div class="selectType">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Ensalada
                        </label>
                        <input type="number" value="0" min="0" max="50" step="1" name="PollosEnterosEnsalada"/>
                    </div>
                    <div class="selectType">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Papas fritas
                        </label>
                        <input type="number" value="0" min="0" max="50" step="1" name="PollosEnterosPapas"/>
                    </div>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="https://www.divinacocina.es/wp-content/uploads/2020/07/filetes-de-pollo-morunos-2.jpg" class="card-img-top" alt="...">
                <div class="card-body" style="display:flex; flex-direction: column; justify-content: space-between">
                    <div>
                        <h5 class="card-title">Filete de pollo a la plancha</h5>
                        <h6>$40.000</h6>
                        <h6> Acompañado con papas fritas y ensalada</h6>
                    </div>

                    <input type="number" value="0" min="0" max="50" step="1" style="align-self: flex-end;" name="Filetes"/>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="https://cdn.apartmenttherapy.info/image/upload/f_jpg,q_auto:eco,c_fill,g_auto,w_1500,ar_1:1/k%2FPhoto%2FRecipes%2F2023-10-arroz-con-pollo%2Farroz-con-pollo-206" class="card-img-top" alt="...">
                <div class="card-body" style="display:flex; flex-direction: column; justify-content: space-between">
                    <div>
                        <h5 class="card-title">Arroz con pollo</h5>
                        <h6> $20.000</h6>
                    </div>

                    <input type="number" value="0" min="0" max="50" step="1" style="align-self: flex-end;" name="Arroces"/>

                </div>
            </div>



        </div>
        <br><br><br>
        <h2>Bebidas</h2>
        <br>
        <div style="display: flex; justify-content: space-evenly;">
            <div class="card" style="width: 18rem;">
                <img src="https://c8.alamy.com/comp/MM5YWX/juice-smoothie-smoothies-orange-oranges-square-fruit-fruits-fresh-drink-MM5YWX.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Jugos naturales</h5>
                    <h6>$4.000</h6>

                </div>
                <div class="SelectorList">
                    <div class="selectType">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Maracuya
                        </label>
                        <input type="number" value="0" min="0" max="50" step="1" name="JugosMara"/>
                    </div>
                    <div class="selectType">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Fresa
                        </label>
                        <input type="number" value="0" min="0" max="50" step="1" name="JugosFres"/>
                    </div>
                    <div class="selectType">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Mora
                        </label>
                        <input type="number" value="0" min="0" max="50" step="1" name="JugosMora"/>
                    </div>
                </div>

                <select class="form-select" aria-label="Default select example" name="JugosBase">
                    <option selected>Elige la base</option>
                    <option value="Leche">Leche</option>
                    <option value="Agua">Agua</option>
                </select>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="https://blenderartists.org/uploads/default/original/4X/0/8/2/0822739a7cae1c2e34e42c02f9177ea3757dc805.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Gaseosa</h5>
                    <h6>$5.000</h6>

                </div>
                <div class="SelectorList">
                    <div class="selectType">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Cocacola
                        </label>
                        <input type="number" value="0" min="0" max="50" step="1" name="Cocacola"/>
                    </div>
                    <div class="selectType">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Manzana
                        </label>
                        <input type="number" value="0" min="0" max="50" step="1" name="Manzana"/>
                    </div>
                    <div class="selectType">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Sprite
                        </label>
                        <input type="number" value="0" min="0" max="50" step="1" name="Sprite"/>
                    </div>
                </div>
            </div>


            <div class="card" style="width: 18rem;">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRvAzaUxJhvK6ymNrdOiyPheO8I-15lz-LcQQ&s" class="card-img-top" alt="...">
                <div class="card-body" style="display:flex; flex-direction: column; justify-content: space-between;">
                    <div>
                        <h5 class="card-title">Botella de agua</h5>
                        <h6> $3.000</h6>
                    </div>

                    <input type="number" value="0" min="0" max="50" step="1" style="align-self: flex-end;" id="BotellaAwa"/>
                </div>
            </div>
        </div>
        <br><br> <br>
        <div style="display:flex; justify-content: center;">
        <button type="submit" class="btn btn-success" style="font-size: 20px;">Hacer pedido</button>
        </div>
        
    </form>

    <?php

        function row($des, $am, $price){
            echo "<tr><td colspan='5'>".$des."  x".$am."</td><td colspan='1'>".$price."</td></tr>";
        }

        function fetch($id) {
            return isset($_POST[$id]) ? $_POST[$id] : 0; 
        }

        if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {

            $MediosPollosYuca = fetch("MediosPollosYuca");//$_POST[""];
            $MediosPollosPapas = fetch("MediosPollosPapas");//$_POST[""];
            $MediosPollosEnsalada = fetch("MediosPollosEnsalada");//$_POST[""];

            $PollosEnterosYuca = fetch("PollosEnterosYuca");//$_POST[""];
            $PollosEnterosPapas = fetch("PollosEnterosPapas");//$_POST[""];
            $PollosEnterosEnsalada = fetch("PollosEnterosEnsalada");//$_POST[""];
            $Filetes = fetch("Filetes");//$_POST[""];
            $Arroces = fetch("Arroces");//$_POST[""];

            $JugosMara = fetch("JugosMara");// $_POST[""];
            $JugosFres = fetch("JugosFres");// $_POST[""];
            $JugosMora = fetch("JugosMora");// $_POST[""];
            $JugosBase = fetch("JugosBase");// $_POST[""];

            $Cocacola = fetch("Cocacola");// $_POST[""];
            $Sprite = fetch("Sprite");// $_POST[""];}
            $Manzana = fetch("Manzana");// $_POST[""];

            $BotellaAwa = fetch("BotellaAwa");// $_POST[""];

            $Principal = ($MediosPollosYuca + $MediosPollosPapas + $MediosPollosEnsalada + $MediosPollosYuca) * 20000 + ($PollosEnterosYuca + $PollosEnterosPapas + $PollosEnterosEnsalada) * 35000 + ($Filetes * 40000) + ($Arroces * 20000);
            $bebidas = ($JugosMara + $JugosFres + $JugosMora) * 4000 + $BotellaAwa * 3000 + ($Cocacola + $Sprite + $Manzana) * 5000;
            

            $total = $Principal + $bebidas;

            echo "<div style='display:flex; justify-content: center; '>";
            echo "<div class='' style='width: 50%; background-color: white; border-radius: 10px;'><br/><br/>";
            echo "<h3 style='text-align: center; '> - - - - - Los Pollos Hermanos - - - - - </h3>";
            echo "<h6 style='text-align: center;color: #888;font-weight: 200;'>Dirección: Carrera infinita #PI cuartos </h6>";
            echo "<h6 style='text-align: center;color: #888;font-weight: 200;'>Telefono. +75 44559900 </h6><br/>";
            echo "<h3 style='text-align: center; '> - - - - - - - - - - - - - - - - - - - - - -</h3>";
            echo "<h4 style='text-align: center; '>RECIBO DE RESTAURANTE</h>";
            echo "<h6 style='text-align:center; color: #888;font-weight: 200;'> Profesora Silvia Moreno </h6>";
            echo "<h6 style='text-align:center; color: #888;font-size: 15px;font-weight: 200;'>cedula - 3046829 </h6>";
            echo "<h3 style='text-align: center; '> - - - - - - - - - - - - - - - - - - - - - -</h3>";
            echo "<center><table>";
            echo <<<'EOT'
            <thead style="height:20px;">
                <tr>
                    <th scope="col" colspan="2">Descripción</th>
                    <th scope="col" class='text-end'>Precio</th>
                </tr>
            </thead>
            <tbody>
            EOT;
            if ($MediosPollosYuca > 0)echo row("Medio Pollo Asado al Carbon con Yuca",$MediosPollosYuca, 20000);
            if ($MediosPollosPapas > 0)echo row("Medio Pollo Asado al Carbon con Papas fritas",$MediosPollosPapas, 20000);
            if ($MediosPollosEnsalada > 0)echo row("Medio Pollo Asado al Carbon con Ensalada",$MediosPollosEnsalada,20000);
            if ($PollosEnterosYuca) echo row("Pollo Asado al carbon con Yuca",$PollosEnterosYuca, 35000);
            if ($PollosEnterosPapas) echo row("Pollo Asado al carbon con Papas fritas",$PollosEnterosPapas, 35000);
            if ($PollosEnterosEnsalada) echo row("Pollo Asado al carbon con Ensalada",$PollosEnterosEnsalada, 35000);

            if ($Filetes) echo row("Filetes de pollo",$Filetes,40000 * $Filetes);
            if ($Arroces) echo row("Arroz de pollo",$Arroces, 20000*$Arroces);

            if ($JugosFres) echo row("Jugo de Fresa con base de " . $JugosBase,$JugosFres, 4000 * $JugosFres);
            if ($JugosMara) echo row("Jugo de Maracuya con base " . $JugosBase,$JugosMara, 4000 * $JugosMara);
            if ($JugosMora) echo row("Jugo de Mora con base " . $JugosBase,$JugosMora, 4000 * $JugosMora);

            if ($Cocacola) echo row("Cocacola", $Cocacola, 5000 * $Cocacola);
            if ($Sprite) echo row("Sprite", $Sprite, 5000 * $Sprite);
            if ($Manzana) echo row("Gaseosa de manzana", $Manzana, 5000*$Manzana);

            if ($BotellaAwa) echo row("", $BotellaAwa, 3000*$BotellaAwa);

            echo "<tr/>";
            echo <<<'EOT'
                <tr>
                EOT;
            echo <<<'EOT'
                </tr>
            </tbody>
            EOT;
            echo "</table>";
            echo "<h3 style='text-align: center; '> - - - - - - - - - - - - - - - - - - - - - -</h3>";
            echo "<table>";
            echo <<<'EOT'
            <thead>
                <tr style='font-size: 20px; font-weight: 200;'>
                    <th scope="col" colspan="2">TOTAL</th>
            EOT;
            echo "<th scope='col' class='text-end'>$".$total."</th>";
            echo <<<'EOT'
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2">Precio platos</td>
            EOT;
            echo "<td class='text-end'>$".$Principal."</td>";
            echo <<<'EOT'
                    
                </tr>
                <tr>
                    <td colspan="2">Precio bebidas</td>
            EOT;
            echo "<td class='text-end'>".$bebidas."</td>";
            echo <<<'EOT'
                    
                </tr>
            </tbody>
            EOT;
            echo "</table></center>";
            echo "<h3 style='text-align: center; '> - - - - - - - - - - - - - - - - - - - - - -</h3>";
            echo "<h4 style='text-align: center; '>GRACIAS</h4>";
            echo "<h3 style='text-align: center; '> - - - - - - - - - - - - - - - - - - - - - -</h3>";
            echo "</div></div>";
    }

    
    ?>
    <br/><br/><br/>
</body>

</html>