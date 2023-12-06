
<html lang="es-MX">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css"
        integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
    <title>Formulario </title>
    <link rel="stylesheet" href="estilos03.css">
    <link rel="stylesheet" href="estilos01.css">
</head>

<body>
    <!--titulo--><header>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 style="text-align: center;">Examen  </h1>
                    <nav>
                        <ul>
                            <li><a href="Menu.html">Menú</a></li>
                            <li><a href="#seccion1">Pregunta 1</a></li>
                            <li><a href="#seccion2">Pregunta 2</a></li>
                            <li><a href="#seccion3">Pregunta 3</a></li>
                            <li><a href="#seccion4">Pregunta 4</a></li>
                            <li><a href="#seccion5">Pregunta 5</a></li>
                            <li><a href="#seccion6">Pregunta 6</a></li>
                        </ul>
                    </nav>
            </div>
        </div>
    </div>
</header>
    <!--Preguntas-->
    <div class="container">
        <div class="row">
            <div class="col">
                <form>
                    <h2><strong>1. Qué es una aplicacion web?  </strong></h2>
                    <section id="seccion1">
                    <ol type="A">
                        <li><input type="radio" name="seccion1" value="s" id="p11"> El almacenamiento en la nube </li>
                        <li><input type="radio" name="seccion1" value="n" id="p12"> es una recopilación organizada de información o datos estructurados. </li>
                        <li><input type="radio" name="seccion1" value="n" id="p13">Un software que se ejecuta en el navegador web. </li>
                        <li><input type="radio" name="seccion1" value="n" id="p14">Un pdf </li>
                    </ol></section>
                    <h2><strong>2.¿Para qué sirve una aplicacion web? </strong></h2>
                    <section id="seccion2" >
                    <ol type="A">
                        <li><input type="radio" name="seccion2" value="n" id="p21">Crear una comunidad o impulsar una causa, interactuar, capacitar o educar, ofrecer soporte o atención, o divertirse.</li>
                        <li><input type="radio" name="seccion2" value="n" id="p23">La posibilidad de enlazar a través de hipervículos diferentes.</li>
                        <li><input type="radio" name="seccion2" value="n" id="p22"> Para recopilar y organizar información. </li>
                        <li><input type="radio" name="seccion2" value="s" id="p24">Es un programa informático diseñado como una herramienta para realizar operaciones o funciones específicas. </li>
                    </ol></section>
                    <h2><strong>3. ¿Cuál de las siguientes respuestas no es una desventaja de aplicacion web?</strong></h2>
                    <ol type="A">  <section id="seccion3"  >
                        <li><input type="radio" name="seccion3" value="n" id="p31">Limitaciones de funcionalidad. </li>
                        <li><input type="radio" name="seccion3" value="n" id="p33">Delincuencia digital. </li>
                        <li><input type="radio" name="seccion3" value="n" id="p32">Privacidad y seguridad. </li>
                        <li><input type="radio" name="seccion3" value="s" id="p34"> Dependencia de la conexión a Internet.</li>
                    </ol></section>
                    <h2><strong>4.¿Cuál de las siguientes respuestas no es una ventaja de aplicacion web?</strong></h2>
                    <ol type="A">  <section id="seccion4"  >
                        <li><input type="radio" name="seccion4" value="n" id="p41">Mejorar la imagen de la marca. </li>
                        <li><input type="radio" name="seccion4" value="n" id="p42">  Accesibilidad.</li>
                        <li><input type="radio" name="seccion4" value="n" id="p43"> Colaboración</li>
                        <li><input type="radio" name="seccion4" value="s" id="p44">  No requieren instalación.</li>
                    </ol></section>
                    <h2><strong>5.¿Cuál de las siguientes respuestas es una carracterística de una aplicacion web?</strong></h2>
                    <ol type="A">  <section id="seccion5" >
                        <li><input type="radio" name="seccion5" value="n" id="p55">Adaptación a dispositivos (Responsive)  </li>
                        <li><input type="radio" name="seccion5" value="n" id="p51">Fácil navegación</li>
                        <li><input type="radio" name="seccion5" value="n" id="p52">Datos online  </li>
                        <li><input type="radio" name="seccion5" value="s" id="p53">Un buen diseño visual  </li>
                    </ol></section>
                    <h2><strong>6.¿Cuál de los siguientes lenguajes no se mencionan en la presentacion?  </strong></h2>
                    <ol type="A">  <section id="seccion6">
                        <li><input type="radio" name="seccion6" value="s" id="p61">css. </li>
                        <li><input type="radio" name="seccion6" value="n" id="p62">  PHP.</li>
                        <li><input type="radio" name="seccion6" value="n" id="p66">  C++.</li>
                        <li><input type="radio" name="seccion6" value="n" id="p64">  JavaScript.</li>
                    </ol></section>
                    
                
                    <hr />
                    
                    <input class="boton_2" type="submit" name="Enviar" value="Listo2"><br><br>
                    <button type="button" class="btn btn-primary" onclick="resultado()">RESULTADO</button>
                    <hr />
                   

                </form>
                <?php 
        include('guardar.php');
        ?>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!--Llamada al script de respuestas-->
    <script src="respuestas.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js"
        integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp"
        crossorigin="anonymous"></script>
</body>

</html>