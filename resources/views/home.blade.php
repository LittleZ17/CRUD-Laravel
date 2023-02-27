@extends('layouts.app')

@section('content')
    <div>
        <img src="http://localhost:8888/crud-laravel/assets/quotelogo.png" class= "mx-auto d-block" alt="">
    </div>
    <div class="row align-items-center justify-content-center vh-85 text-center" >
         <h2 class= "text-center" ><em>¡Hola! Somos la primera comunidad fem con frases de empoderamiento</em></h2>
       
        <span class="h3" style="color:orange">1</span>
            <a class="text-decoration-none text-reset" href="/quotes">Buscar una frase motivadora en nuestro buscador</a>

        <span class="h3" style="color:orange;">2</span>
            <a class="text-decoration-none text-reset" href="/login">Únete a nuestra comunidad </a>

        <span class="h3" style="color:orange;">3</span>
            <p>Guarda tus frases favoritas</p>

    </div>
    @endsection
