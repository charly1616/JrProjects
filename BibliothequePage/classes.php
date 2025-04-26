<?php

namespace clases;

use DateTime;

abstract class recurso
{
    //ARRAY DE RECURSOS ALMACENADOS
    static $recursos = [];


    public static function inicializarRecursos()
    {
        if (count(self::$recursos) != 0) return;
        self::$recursos = [
            new Libro("Cataclismo", "01/12/2003", "https://m.media-amazon.com/images/I/61l6OhjRFyL._AC_UF1000,1000_QL80_.jpg", "mel", "E67BFC", "General", "Catherine"),
            new Libro(
                "El Señor de los Anillos",
                "29/07/1954",
                "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSniMX6LTeXMobXiJ9EWih9tT0qJMRmuU51uQT41VZOjnBjxTeh_-_NnCYuSzig5D8FCS4&usqp=CAU",
                "Allen & Unwin",
                "A1B2C3",
                "Reserva",
                "J.R.R. Tolkien",
                false
            ),
            new Libro(
                "Cien Años de Soledad",
                "05/06/1967",
                "https://m.media-amazon.com/images/I/61+6Hd0SI6L._AC_UF1000,1000_QL80_.jpg",
                "Sudamericana",
                "D4E5F6",
                "General",
                "Gabriel García Márquez"
            ),
            new Libro(
                "1984",
                "08/06/1949",
                "https://images-na.ssl-images-amazon.com/images/I/81StSOpmkjL.jpg",
                "Secker & Warburg",
                "G7H8I9",
                "Reserva",
                "George Orwell"
            ),
            new Libro(
                "Orgullo y Prejuicio",
                "28/01/1813",
                "https://m.media-amazon.com/images/I/71Q1tPupKjL._AC_UF1000,1000_QL80_.jpg",
                "T. Egerton, Whitehall",
                "J1K2L3",
                "General",
                "Jane Austen",
                false
            ),
            new Libro(
                "Harry Potter y la Piedra Filosofal",
                "26/06/1997",
                "https://es.web.img2.acsta.net/pictures/14/04/30/11/55/592219.jpg",
                "Bloomsbury",
                "M4N5O6",
                "General",
                "J.K. Rowling"
            ),
            new Libro(
                "Crónica de una Muerte Anunciada",
                "01/01/1981",
                "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRBB864HsyzicB97xFq5mb1FSzaRiatzGNe_g&s",
                "La Oveja Negra",
                "P7Q8R9",
                "Reserva",
                "Gabriel García Márquez",
                false
            ),
            new Libro(
                "Don Quijote de la Mancha",
                "16/01/1605",
                "https://images.cdn2.buscalibre.com/fit-in/360x360/73/b6/73b6fd96c31d26e2b6a3531808c1188c.jpg",
                "Francisco de Robles",
                "S1T2U3",
                "General",
                "Miguel de Cervantes"
            ),
            new Libro(
                "La Odisea",
                "01/01/1616",
                "https://editorialgribaudo.com/wp-content/uploads/2022/04/COVER-Le-Piu-Belle-Storie-dellOdissea-SPA-CC2022-FRONTAL.jpg",
                "Desconocida",
                "V4W5X6",
                "Reserva",
                "Homero",
                false
            ),
            new Libro(
                "Fahrenheit 451",
                "19/10/1953",
                "https://www.tornamesa.co/imagenes/9789588/978958861195.GIF",
                "Ballantine Books",
                "Y7Z8A9",
                "General",
                "Ray Bradbury"
            ),
            new Revista(
                "Ciencia Juntos", // Nombre
                "02/02/2002", // Fecha
                "https://www.amc.edu.mx/revistaciencia/images/revista/70_1/PDF/portada.jpg", // Imagen
                "WS-450", // Código
                "1", // Número de volumen
                "Semanal" // Periodicidad
            ),
            new Revista(
                "Nature Today", // Nombre
                "15/03/2010", // Fecha
                "https://media.springernature.com/w440/springer-static/cover-hires/journal/41586/639/8055", // Imagen
                "NT-123", // Código
                "45", // Número de volumen
                "Mensual",
                false
            ),
            new Revista(
                "Scientific American", // Nombre
                "10/05/2015", // Fecha
                "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRw1biNkHS439teWzq8WbxqCswfyjiLsCRbZA&s", // Imagen
                "SA-789", // Código
                "320", // Número de volumen
                "Quincenal" // Periodicidad
            ),
            new Revista(
                "National Geographic", // Nombre
                "20/08/2018", // Fecha
                "https://miro.medium.com/v2/resize:fit:1400/1*afmyCBOvWn79lvd24nXUgg.jpeg", // Imagen
                "NG-456", // Código
                "200", // Número de volumen
                "Mensual" // Periodicidad
            ),
            new Revista(
                "Popular Science", // Nombre
                "05/11/2019", // Fecha
                "https://www.popsci.com/wp-content/uploads/2019/03/18/XS4VY5SKFN2YO7GIKPKTCRRYQM.jpg?quality=85", // Imagen
                "PS-321", // Código
                "150", // Número de volumen
                "Bimestral" // Periodicidad
            ),
            new Revista(
                "Discover Magazine", // Nombre
                "12/04/2017", // Fecha
                "https://upload.wikimedia.org/wikipedia/commons/0/0f/Discover_magazine_%28July_1994%29.jpg", // Imagen
                "DM-654", // Código
                "90", // Número de volumen
                "Trimestral" // Periodicidad
            ),
            new Revista(
                "New Scientist", // Nombre
                "25/09/2020", // Fecha
                "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTtSmUExy1xyLpp518tlirxXC_1J671epzMxg&s", // Imagen
                "NS-987", // Código
                "500", // Número de volumen
                "Semanal",
                false
            ),
            new Revista(
                "Science News", // Nombre
                "30/06/2016", // Fecha
                "https://upload.wikimedia.org/wikipedia/en/4/4b/Science_News_cover_Nov._16%2C_2013.jpg", // Imagen
                "SN-753", // Código
                "300", // Número de volumen
                "Quincenal" // Periodicidad
            ),
            new Revista(
                "The Scientist", // Nombre
                "18/12/2014", // Fecha
                "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTyWGDYwIdE0WKFf1JaGVddX4gaNkwT3iZN2w&s", // Imagen
                "TS-159", // Código
                "75", // Número de volumen
                "Mensual",
                false
            ),
            new Revista(
                "Astronomy Magazine", // Nombre
                "22/07/2013", // Fecha
                "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThllRWUywl-Xb6-dhtzNrLbzRNLhOpUkSI9Q&s", // Imagen
                "AM-852", // Código
                "100", // Número de volumen
                "Bimestral" // Periodicidad
            ),
        
            // Videos Educativos
            new VideoEducativo(
                "Video1", // Nombre
                "03/02/2020", // Fecha de creación
                "https://marketplace.canva.com/EAGDgOiozm0/1/0/1131w/canva-documento-a4-portada-de-proyecto-infantil-divertido-multicolor-Q9ZwiH2er8Y.jpg", // Imagen
                "DVD", // Formato
                "15:45" // Duración
            ),
            new VideoEducativo(
                "The Solar System", // Nombre
                "10/05/2014", // Fecha de creación
                "https://i.ytimg.com/vi/libKVRa01L8/maxresdefault.jpg", // Imagen
                "Blu-Ray", // Formato
                "22:30" // Duración
            ),
            new VideoEducativo(
                "Introduction to Biology", // Nombre
                "15/09/2010", // Fecha de creación
                "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMNsUnbqw4oMoDOwRFy2MCtJu4Iwy4VQAihg&s", // Imagen
                "CD", // Formato
                "18:10" // Duración
            ),
            new VideoEducativo(
                "Physics for Beginners", // Nombre
                "20/11/2020", // Fecha de creación
                "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS8hVUyTj_vMhRnedNUTjumCmTLuBSAldd0EQ&s", // Imagen
                "DVD", // Formato
                "25:00",
                false
            ),
            new VideoEducativo(
                "Chemistry Experiments", // Nombre
                "05/03/2017", // Fecha de creación
                "https://www.science-sparks.com/wp-content/uploads/2021/10/Brilliant-Chemistry-Experiments.jpg", // Imagen
                "Blu-Ray", // Formato
                "12:45" // Duración
            ),
            new VideoEducativo(
                "History of the World", // Nombre
                "12/08/2016", // Fecha de creación
                "https://m.media-amazon.com/images/M/MV5BOTRjMjAzOTctMmY0Yi00OGM4LWI0NmQtNjExODMzODhjY2ZhXkEyXkFqcGc@._V1_.jpg", // Imagen
                "CD", // Formato
                "30:00",
                false
            ),
            new VideoEducativo(
                "Mathematics Basics", // Nombre
                "25/01/2021", // Fecha de creación
                "https://m.media-amazon.com/images/I/71GvLNCI6HS._UF1000,1000_QL80_.jpg", // Imagen
                "DVD", // Formato
                "20:15" // Duración
            ),
            new VideoEducativo(
                "Geology Explained", // Nombre
                "30/04/2015", // Fecha de creación
                "https://i.ebayimg.com/images/g/HOQAAOSwk9picjzv/s-l1200.jpg", // Imagen
                "Blu-Ray", // Formato
                "14:50",
                false
            ),
            new VideoEducativo(
                "Astronomy for Kids", // Nombre
                "18/07/2014", // Fecha de creación
                "https://ukstore.creation.com/1906-medium_default/creation-astronomy-for-kids.jpg", // Imagen
                "CD", // Formato
                "10:30" // Duración
            ),
            new VideoEducativo(
                "Environmental Science", // Nombre
                "22/10/2013", // Fecha de creación
                "https://cdn.ebookselibrary.com/public/images/book_img/167732158.jpg", // Imagen
                "DVD", // Formato
                "17:20",
                false
            )
        ];

        usort(self::$recursos, function($a, $b) {
            return strcmp($a->Nombre, $b->Nombre);
        });
    }


    public $Nombre;
    public $Publicacion;
    public $foto;
    public $codigo;
    public $esDisponible;

    public static $index = 0;

    public function __construct($nom = "None", $pub = "02/02/2002", $foto = "MissingImage.jpg", $dispo = true)
    {
        $this->Nombre = $nom;
        $this->Publicacion = $pub;
        $this->foto = $foto;
        $this->codigo = self::$index++ +100;
        $this->esDisponible = $dispo;
    }


    public function cardInfo($num) {
        return "<label for='" . $num . "' value='" . $num . "' class='libCard' style='background-image: url(\"" . $this->foto . "\"),url(\"MissingImage.jpg\");background-size: cover;background-position: bottom;'>
                    <div class='libSourceInfo'>";
    }

    public function estaDisponible(){
        $color = $this->esDisponible? "greenyellow" : "red";
        return "<h3 class='disponibilidad' style='color: ".$color.";'>".($this->esDisponible? "Disponible":"No disponible")."</h3>";
    }

    public abstract function imprimirDetalles();
    public abstract function diasPrestamo();
    public abstract function tipoRecurso();
}

class Libro extends recurso
{
    public $editorial;
    public $autor;
    
    public $categoria;
    public $ISBN;

    public function __construct($nom = 'None', $pub = '02/02/2002', $foto = "MissingImage.jpg", $edi = "NA", $cod = "AAAAAA", $categ = "General", $aut = "None",  $dispo = true)
    {
        parent::__construct($nom, $pub, $foto,  $dispo);
        $this->editorial = $edi;
        $this->categoria = $categ;
        $this->autor = $aut;
        $this->ISBN = $cod;
    }


    public function diasPrestamo()
    {
        if ($this->categoria == "General") {
            return 3;
        } else {
            return 1;
        }
    }

    public function tipoRecurso()
    {
        return "libro";
    }


    public function imprimirDetalles()
    {
        return "<p>Autor: " . $this->autor . "</p>
                <p>Editorial: " . $this->editorial . "</p>
                <p>Fecha de publicacion: " . $this->Publicacion . "</p>
                <p>Categoria: " . $this->categoria . "</p>
                <p>ISBN: " . $this->ISBN . "</p>";
    }


    public function cardInfo($num)
    {
        return parent::cardInfo($num).
                        "<h3>Libro</h3>
                        <div style='display: flex; flex-direction: row; justify-content: space-between;'>
                            <p>" . $this->autor . "</p>
                            <p>" . $this->Publicacion . "</p>
                        </div>
                        
                        <div style='display: flex; flex-direction: row; justify-content: space-between;'>
                            <p style='color: #609030;'>" . $this->ISBN . "</p>
                            <p style='color: greenyellow;'>" . $this->categoria . "</p>
                        </div>
                    </div>
                    <i class=\"fa-solid fa-book\"></i>
                    ".$this->estaDisponible()."
                </label>";
    }
}


class Revista extends recurso {
    public $ISSN;
    public $numero_volumen;
    public $periodicidad; 

    public function __construct($nom = 'None', $pub = '02/02/2002', $foto = 'MissingImage.jpg', $codigo = '', $nvol = "1", $per = "Semanal",  $dispo = true){
        parent::__construct($nom, $pub, $foto,  $dispo);
        $this->numero_volumen = $nvol;
        $this->periodicidad = $per;
        $this->ISSN = $codigo;
    }

    public function diasPrestamo() {return 4;}

    public function tipoRecurso() {return "revista";}


    public function imprimirDetalles(){
        return "<p>Numero de volumen: " . $this->numero_volumen . "</p>
                <p>Periodicidad: " . $this->periodicidad . "</p>
                <p>Fecha de publicacion: " . $this->Publicacion . "</p>
                <p>ISSN: " . $this->ISSN . "</p>";
    }


    public function cardInfo($num) {
        return parent::cardInfo($num).
                        "<h3>Revista</h3>
                        <div style='display: flex; flex-direction: row; justify-content: space-between;'>
                            <p>" . $this->periodicidad . "</p>
                            <p>" . $this->Publicacion . "</p>
                        </div>
                        
                        <div style='display: flex; flex-direction: row; justify-content: space-between;'>
                            <p style='color:rgb(44, 94, 132);'>" . $this->ISSN . "</p>
                            <p style='color:rgb(112, 186, 255);'>Vol-" . $this->numero_volumen . "</p>
                        </div>
                    </div>
                    <i class='fa-solid fa-newspaper'></i>
                    ".$this->estaDisponible()."
                </label>";
    }
}


class VideoEducativo extends recurso{
    public $formato;
    public $duracion;

    public function __construct($nom = 'None', $pub = '02/02/2002', $foto = 'MissingImage.jpg', $forma = "DVD", $dur = "12:10",  $dispo = true){
        parent::__construct($nom, $pub, $foto, $dispo);
        $this->formato = $forma;
        $this->duracion = $dur;
    }


    public function diasPrestamo() {
        $fecha = DateTime::createFromFormat('d/m/Y', $this->Publicacion);
        if ($fecha === false) {
            echo 'La fecha no es válida.';
        } else {
            $anio = $fecha->format('Y');
        
            if ($anio < 2015) {
                return 5;
            } else {
                return 2;
            }
        }
    }

    public function tipoRecurso() {return "videoEducativo";}


    public function imprimirDetalles(){
        return "<p>Formato: " . $this->formato . "</p>
                <p>Duración: " . $this->duracion . "</p>
                <p>Fecha de creacion: " . $this->Publicacion . "</p>";
    }


    public function cardInfo($num) {
        return parent::cardInfo($num).
                        "<h3>Video educativo</h3>
                        <div style='display: flex; flex-direction: row; justify-content: space-between;'>
                            <p>" . $this->duracion . "</p>
                            <p>" . $this->Publicacion . "</p>
                        </div>
                        
                        <div style='display: flex; flex-direction: row; justify-content: space-between;'>
                            <p style='color:rgb(132, 44, 59);'>" . $this->Nombre . "</p>
                            <p style='color:rgb(255, 112, 141);'>Formato: " . $this->formato . "</p>
                        </div>
                    </div>
                    <i class='fa-solid fa-compact-disc'></i>
                    ".$this->estaDisponible()."
                    
                </label>";
    }

}



