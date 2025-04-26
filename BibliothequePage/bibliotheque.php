<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliotheque</title>
    <link rel="icon" href="224595.png">
    <link href="style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c294d0d276.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="libNav">
        <div class="libBrand">
            BrarySimon
        </div>
        <nav class="libCateg">
            <a class="libSection active" href="?buscar=todos">
                Todos
            </a>
            <a class="libSection" href="?buscar=libro">
                <i class="fa-solid fa-book-bookmark"></i>
                Libros
            </a>
            <a class="libSection" href="?buscar=revista">
                <i class="fa-solid fa-newspaper"></i>
                Revistas
            </a>
            <a class="libSection" href="?buscar=videoEducativo">
                <i class="fa-solid fa-film"></i>
                Videos
            </a>
        </nav>
        <div class="libNavSearch">
            <div class="libSection">
                <i class="fa-solid fa-magnifying-glass"></i>
                Search
            </div>
            <select>
                <option value="0">Mi Cuenta</option>
                <option value="1">Invitado</option>
                <option value="2">Anonimo</option>
            </select>
        </div>
    </div>
    <div class="libDashboard">
        <div class="libClasses">
            <?php
                $categorias = ["Biología", "Química", "Física", "Ingeniería Civil", "Ingeniería Eléctrica", "Ingeniería Mecánica", "Filosofía", "Historia", "Literatura",
                "Sociología", "Psicología", "Economía", "Álgebra", "Cálculo", "Estadística", "Nature", "Science", "Scientific American", "Wired", "MIT Technology Review",
                "IEEE Spectrum", "National Geographic", "The New Yorker","The Atlantic", "Educación 3.0", "Revista de Educación", "Innovación Educativa", "TED Talks", 
                "Conferencias Magistrales", "Seminarios", "Programación", "Diseño Gráfico", "Matemáticas", "Historia", "Ciencia y Tecnología", "Arte y Cultura", "Coursera",
                "edX", "Khan Academy"];
                
                foreach ($categorias as $categoria) {
                    echo '<div class="libBookCateg ' . ($categoria == 'Filosofía' ? 'active' : '') . '">'.$categoria.'</div>';
                }
            ?>

        </div>
        <div class="libSources">
            <div class="libSHead">
                <h2 style="font-size:60px;">Recursos</h2>
                <div class="sortSources">
                    Ordenar
                    <i class="fa-solid fa-arrow-down-9-1"></i>
                </div>
            </div>
            <form id="miFormulario" method="post" action="" class="libList">
            <?php
                require_once './classes.php';

                use clases\recurso;
                use clases\Libro;
                

                recurso::inicializarRecursos();

                $bus = "todos";
                if (isset($_GET["buscar"])) $bus = $_GET["buscar"];

                for ($i = 0; $i < sizeof(recurso::$recursos); $i++){
                    $recu = recurso::$recursos[$i];
                    if ($bus != "todos" && $bus != $recu->tipoRecurso()) continue;

                    echo "<input type='radio' name='recurIndex' value='".$i."' id='".$i."' style='display: none;' onchange='this.form.submit()'></input>";
                    echo $recu->cardInfo($i);
                }
            
            ?>
            

            </form>
        </div>
        <aside class="libSeeBook">
            <?php

                recurso::inicializarRecursos();
                $i=0;
                if (isset($_POST["recurIndex"])) {$i = (int) $_POST["recurIndex"];}
                $recu = recurso::$recursos[$i];
                $dis = $recu->esDisponible;
                $imagen = $recu->foto;
                $nom = $recu->Nombre;
                $recurso = $recu->tipoRecurso();
                $codigo = $recu->codigo;
                $info = $recu->imprimirDetalles();

                echo "<div class='libImgSee' style='background-image: url(\"".$imagen."\"),url(\"MissingImage.jpg\");background-size: cover;background-position: bottom;justify-self: center;'></div>
                    <br>
                    <h2 style='text-align:center;'>".$recurso.": ".$nom."</h2>
                    <p style='text-align:center;'>".$codigo."</p>
                    <br>
                    <div class='seeInfo'>
                        ".$info."
                    </div>
                    <br><br>
                    ".($dis?"<input type='submit' class='reserveButton' name='' id='' value='Reservar ".$recu->diasPrestamo().(($recu->diasPrestamo()==1)?" dia":" dias")."'>":
                        "<input type='submit' class='reserveButton notAvailable' name='' id='' value='No disponible' disabled=true>")."
                    <br><br>
                ";

            ?>
            
        </aside>
    </div>
</body>

</html>