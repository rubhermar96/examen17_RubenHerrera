<?php
require __DIR__ . '/vendor/autoload.php';
use Ballen\Distical\Calculator as DistanceCalculator;
use Ballen\Distical\Entities\LatLong;
use Illuminate\Http\Request;
use SujalPatel\IntToEnglish\IntToEnglish;
echo'

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="CSS/estilo.css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8">
</head>

<body>


    <div class="row">

        <div class="col s12  blue center-align card-panel teal lighten-2">
            <h4>Examen Despliegue Aplicaciones Web</h4>
        </div>
        
        <div class="col s12  ">
            
            <p>Lo que vamos a realizar es una aplicacion en PHP, que realize lo siguiente:
            <ol>
            <li>Dado dos puntos calcular la distancia entre ellos. Esos puntos vendran marcados por su latitud y su longitud </li>
            <li>Una vez halla calculado la distancia quiero que me traduzca al ingles esa distancia.</li>
            </ol>
            </p>
            <p>
            Por ejemplo dadas las siguientes coordenadas:
            <ul>
            <li>(41.65518, -4.72372) corresponde a Valladolid </li>
            <li>(37.38283, -5.97317) corresponde a Sevilla </li>
            </ul>
            
            </p>
        
            
        </div>
        <aside>
                    <h5>Enlace Heroku </h5>
                    Pulsa sobre esta imagen para ver desplegada la aplicacion sobre heroku
                    <p>
                    <a title="Heroku" href="https://examenrubenherrera.herokuapp.com/"><img src="imagenes/heroku.png" alt="Heroku" width="120" height="120" /></a>
                    </p>
        </aside>
        <form class="col s12" action="index.php">
            <div class="row">
                
                <div class="input-field col s2">
                    <label for="n_entero1">Introduce la Latitud Punto 1:</label>
                    <input name="n_entero1" type="text" class="validate">
                    
                </div>
                <div class="input-field col s2">
                    <label for="n_entero2">Introduce la Longitud  Punto 1:</label>
                    <input name="n_entero2" type="text" class="validate">
                
                </div>
                <div class="input-field col s2">
                    <label for="n_entero3">Introduce la Latitud Punto 2:</label>
                    <input name="n_entero3" type="text" class="validate">
                
                </div>
                <div class="input-field col s2">
                    <label for="n_entero4">Introduce la Longitud  Punto 2:</label>
                    <input name="n_entero4" type="text" class="validate">
                
                </div>
               

                <div class="row "></div> <!-- linea en blanco -->
                <div class="col s4">

                    <button class="btn waves-effect waves-light" type="submit" name="calcular">Calcular

                    </button>

                </div>
                
            </div>
        </form>';
        if(isset($_REQUEST['calcular'])){
            $latitudp1 = htmlspecialchars($_REQUEST['n_entero1'],ENT_QUOTES, 'UTF-8');
            $longitudp1 = htmlspecialchars($_REQUEST['n_entero2'],ENT_QUOTES, 'UTF-8');
            $latitudp2 = htmlspecialchars($_REQUEST['n_entero3'],ENT_QUOTES, 'UTF-8');
            $longitudp2 = htmlspecialchars($_REQUEST['n_entero4'],ENT_QUOTES, 'UTF-8');

            $punto1 = new Latlong($latitudp1,$longitudp1);
            $punto2 = new Latlong($latitudp2,$longitudp2);

            $calcularDistancia = new DistanceCalculator($punto1,$punto2);

            $distancia = round($calcularDistancia->get()->asKilometres());
            
            echo '<p>La distancia entre Valladolid y Sevilla es de: '.$distancia.'</p>
                  <p>La distancia entre esos dos puntos en Inglés es de: '.IntToEnglish::Int2Eng($distancia).'</p>';
        };
    echo '</div>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>';
?>


