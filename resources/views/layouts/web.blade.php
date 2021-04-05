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
    <!--Se agrega header-->
    <header class="shadow-lg">
        <div class="bg-blue-900 py-1">
            <nav class="bg-blue-800 py-2">
                <!--Este enlace apunta a la ruta home (que es la misma index, ...creo)-->
                <a href="{{route('home')}}"> 
                    <img src="{{asset('images/Logo.png')}}" class="h-12 mx-auto"> <!--Hacemos referencia a una imagen-->
                </a> 
            </nav>
        </div>
    </header>
    <main class="py=10"> <!--La 'y' indica el eje y, estas son clases de tailwindcss-->
        <div class="container mx-auto px-4"> <!--La 'x' indica el eje x, estas son clases de tailwindcss-->
            @yield('content') <!--Aqui se esta llamando la vista o lo que la vista contendrá, es decir nuestro propio contenido-->
        </div>
    </main>
    <!--Se agrega footer-->
    <footer class="py-4 text-center">
            <!--Si estamos logeados hacemos esto...-->
        @auth
            <a href="{{ url('dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
            <!--Sino hacemos esto otro...(mostrar los botones de login y registro)-->
        @else
            <a href="{{ url('login') }}" class="text-sm text-gray-700 underline">Login</a>
            <a href="{{ url('registro') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
            <!--Se finaliza la condición.-->
        @endif
    </footer>
</body>
</html>