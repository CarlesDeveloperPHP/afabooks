<header class="bg-red-800 fixed top-0 w-full z-50">
    <div class="flex justify-between items-center p-4">
        <div class="flex items-center">
            <a href="{{ route('libros.index') }}" class="bg-white p-2 rounded mr-2">
                <img src="{{ asset('images/logovedrunagracia.png') }}" alt="Logo" class="h-12">
            </a>
        </div>
        <div class="flex items-center space-x-4">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-white hover:text-black font-bold">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-white  hover:text-black font-bold">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="text-white  hover:text-black font-bold">Register</a>
                @endif
            @endauth
        </div>
    </div>
    <div class="flex items-center justify-center"> <!-- Cambiamos ml-auto a justify-end -->
        <nav>
            <ul class="flex space-x-4">
                <li><a href="{{ route('libros.index') }}" class="text-white hover:text-black font-bold transition duration-300">Inicio</a></li>
                <li><a href="{{ route('libros.index') }}" class="text-white hover:text-black font-bold transition duration-300">ESO</a></li>
                <li><a href="{{ route('libros.index') }}" class="text-white hover:text-black font-bold transition duration-300">Batxillerat</a></li>
                <li><a href="{{ route('libros.contacto') }}" class="text-white hover:text-black font-bold transition duration-300">Contacte</a></li>
            </ul>
        </nav>
    </div>
</header>
