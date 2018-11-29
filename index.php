<?php
session_start();

if(isset($_SESSION['usuario'])) {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Presto Lunch - Lugares al instante</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/main.css">
    <script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <div class="name">
            <a href="index.html"><img src="img/title-name.png" alt="Presto Lunch"></a>
        </div>
        <div class="menu">
            <ul class="nav">
                <li><a href="logout.php" class="session">Cerrar Sesión</a></li>
                <li><a href="#">Añadir local</a></li>
                <li><a href="#">Contacto</a></li>
                <li><a href="#">Acerda de</a></li>
            </ul>
        </div>
    </header>
    <div class="banner">
        <div class="motto">
            <p class="motto tiny">
                ¿Qué se te antoja?
            </p>
            <article class="motto big">
                Lo que tú quieras
            </article>
            <p class="motto tiny">
                ¿A dónde vamos a comer?
            </p>
            <article class="motto big">
                A donde sea
            </article>
        </div>
        <div class="info">
            <p>
                Nosotros elegimos donde ir a comer por ti.
            </p>
        </div>
        <div class="playstorei">
            <a href="#" target="_blank"><img src="img/playstore-badge.png" alt="Link de la app en Google Play Store"></a>
        </div>
    </div>
    <div class="description">
        <div class="description parral">
            <img src="img/parral.jpg" alt="Hidalgo del Parral, Chihuahua">
        </div>
        <h1>¿Qué es Presto Lunch?</h1>
        <p>
            Presto Lunch no es sólo una app más de lugares de comida, lo que la hace especial es el poder adaptarse a tu tiempo y presupuesto. Cuando te encuentras en aquella frustrante situación en la que no sabes a dónde diablos ir a comer, la primera cosa que vas a pensar es en Presto Lunch.
        </p>
        <p>
            ¡Sal de la rutina!, sabemos que en cada rincón de México se encuentran miles y miles de puestos de comida, food trucks, fondas, locales, restaurantes, aquellos lugares que sólo son conocidos por el vecindario y nadamas. Ya sea que te encuentres a pie, en vehículo, no dispongas de gastar mucha gasolina, o bien incluso quieres aventarte a ir a comer lo más caro de tu ciudad pero no sabes dónde, nuestra función principal es llevarte a donde mejor te convenga.
        </p>
    </div>
    <footer>
        <div class="greetings">
            <div class="greetings logo">
                <a href="index.html"><img src="img/logo.png" alt="Presto Lunch logo"></a>
            </div>
            <p>
                Hola! Queremos mejorar tu experiencia con nosotros. Si te gustó mucho algún lugar, por favor no olvides dejar tu opinión y calificación. Si eres propietario de un local o puesto no registrado ¡¿Qué esperas?! contáctanos.
            </p>
        </div>
        <div class="support">
            <article>
                SOPORTE
            </article>
            <ul>
                <li><a href="#">Preguntas frecuentes</a></li>
                <li><a href="#">Contáctanos</a></li>
                <li><a href="#">Cómo registrar tu negocio</a></li>
            </ul>
        </div>
        <div class="social">
            <article>
                SOCIAL
            </article>
            <div class="brands">
                <a href="https://facebook.com/prestolunch666" target="_blank"><i class="fbi fab fa-facebook"></i></a>
                <a href="#" target="_blank"><i class="yti fab fa-youtube"></i></a>
            </div>
        </div>
    </footer>
</body>

</html>

<?php
} else {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Presto Lunch - Lugares al instante</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/main.css">
    <script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <div class="name">
            <a href="index.html"><img src="img/title-name.png" alt="Presto Lunch"></a>
        </div>
        <div class="menu">
            <ul class="nav">
                <li><a href="login.php" class="session">Iniciar Sesión</a></li>
                <li><a href="#">Añadir local</a></li>
                <li><a href="#">Contacto</a></li>
                <li><a href="#">Acerda de</a></li>
            </ul>
        </div>
    </header>
    <div class="banner">
        <div class="motto">
            <p class="motto tiny">
                ¿Qué se te antoja?
            </p>
            <article class="motto big">
                Lo que tú quieras
            </article>
            <p class="motto tiny">
                ¿A dónde vamos a comer?
            </p>
            <article class="motto big">
                A donde sea
            </article>
        </div>
        <div class="info">
            <p>
                Nosotros elegimos donde ir a comer por ti.
            </p>
        </div>
        <div class="playstorei">
            <a href="#" target="_blank"><img src="img/playstore-badge.png" alt="Link de la app en Google Play Store"></a>
        </div>
    </div>
    <div class="description">
        <div class="description parral">
            <img src="img/parral.jpg" alt="Hidalgo del Parral, Chihuahua">
        </div>
        <h1>¿Qué es Presto Lunch?</h1>
        <p>
            Presto Lunch no es sólo una app más de lugares de comida, lo que la hace especial es el poder adaptarse a tu tiempo y presupuesto. Cuando te encuentras en aquella frustrante situación en la que no sabes a dónde diablos ir a comer, la primera cosa que vas a pensar es en Presto Lunch.
        </p>
        <p>
            ¡Sal de la rutina!, sabemos que en cada rincón de México se encuentran miles y miles de puestos de comida, food trucks, fondas, locales, restaurantes, aquellos lugares que sólo son conocidos por el vecindario y nadamas. Ya sea que te encuentres a pie, en vehículo, no dispongas de gastar mucha gasolina, o bien incluso quieres aventarte a ir a comer lo más caro de tu ciudad pero no sabes dónde, nuestra función principal es llevarte a donde mejor te convenga.
        </p>
    </div>
    <footer>
        <div class="greetings">
            <div class="greetings logo">
                <a href="index.html"><img src="img/logo.png" alt="Presto Lunch logo"></a>
            </div>
            <p>
                Hola! Queremos mejorar tu experiencia con nosotros. Si te gustó mucho algún lugar, por favor no olvides dejar tu opinión y calificación. Si eres propietario de un local o puesto no registrado ¡¿Qué esperas?! contáctanos.
            </p>
        </div>
        <div class="support">
            <article>
                SOPORTE
            </article>
            <ul>
                <li><a href="#">Preguntas frecuentes</a></li>
                <li><a href="#">Contáctanos</a></li>
                <li><a href="#">Cómo registrar tu negocio</a></li>
            </ul>
        </div>
        <div class="social">
            <article>
                SOCIAL
            </article>
            <div class="brands">
                <a href="https://facebook.com/prestolunch666" target="_blank"><i class="fbi fab fa-facebook"></i></a>
                <a href="#" target="_blank"><i class="yti fab fa-youtube"></i></a>
            </div>
        </div>
    </footer>
</body>

</html>

<?php
}
?>