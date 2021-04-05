<!--Esta es la plantilla-->
<!--tendrá el contenido de la vista index-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos de programacion web</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <main class="py=10"> <!--La 'y' indica el eje y, estas son clases de tailwindcss-->
        <div class="container mx-auto px-4"> <!--La 'x' indica el eje x, estas son clases de tailwindcss-->
            @yield('content') <!--Aqui se esta llamando la vista o lo que la vista contendrá, es decir nuestro propio contenido-->
        </div>
    </main>
</body>
</html>