<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/landing.css')}}">
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet"/>
    <title>Landing Page</title>
</head>
<body>
    <section class="left-form">
        <header>SISTEMA DE SEGUIMIENTO DE OBRAS </header> 
        <div class="text">
            <p class="lado">En PP & FREEMAN asociados, nos especializamos en brindar servicios de construcción de alta calidad y soluciones innovadoras para proyectos de diversos tamaños y complejidades. Con una amplia experiencia en el sector, nos hemos convertido en líderes reconocidos en la industria de la construcción.</p> 
            <p class="medio">Atraves de un sistema especializado para el seguimiento de la construccion, para aumentar la eficiencia operativa, actualizar tareas repetetivas. En general tener un sistema propio nos puede brindar una ventaja competitiva y en la toma de disiciones.</p> 
            <button><a href="{{url('login/')}}">Iniciar sesion</a></button>
        </div>
        <div class="iconos">
            <a href="#">
                <i class='bx bxl-facebook-circle' ></i>
                <span class="links_name">Facebook</span>
            </a>
            <a href="#">
                <i class='bx bxl-twitter' ></i>
                <span class="links_name">Twitter</span>
            </a>
                <i class='bx bx-copyright' ></i>
                <span class="links_name">Copyright 2023 ESCOM</span>
        </div>
        <div class="reserved">
            <span class="reserve"> All Rights Reserved</span>
        </div>
    </section>
    <section class="right-form">
    </section>

</body>
</html>


