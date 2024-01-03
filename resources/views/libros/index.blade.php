@extends('layouts.plantilla')

@section('title', 'AFA Intercanvi de llibres')

@section('content')
<div class="max-w-screen-sm mx-auto mt-24 ">
    <div class="hidden md:block bg-green-200 p-6 rounded-lg shadow-md mx-auto my-2 text-center w-2/3 mt-4 mb-8">
        <p class="text-gray-700">
            Muchas Gracias por unirte a nuestra campaña para rutilizar libros.
            <br>
            AFA Vedruna Gràcia
        </p>
    </div>
    <div class="md:hidden bg-green-200 p-3 rounded-lg shadow-md mx-4 my-2 text-center mb-8">
        <p class="text-gray-700">
            Muchas Gracias por unirte a nuestra campaña para reutilizar libros.
            <br>
            AFA Vedruna Gràcia
        </p>
    </div>

    <div class="hidden md:block mt" >
        
        <a href="{{ route('libros.create') }}" class="block mx-auto mb-8 p-2 bg-green-700 rounded-md text-center text-white md:w-1/4">
            Donar libros
        </a>
    </div>
    <a href="{{ route('libros.create') }}" class="block mx-auto mb-8 p-2 bg-green-700 rounded-md text-center text-white md:hidden w-1/3">
        Donar libros
    </a>

    <h1 class="mb-2 mt-3 font-bold text-xl lg:text-2xl xl:text-3xl ml-4">Libros de texto</h1> 
    <div class="flex flex-nowrap overflow-x-scroll">  
        <div class="rounded flex-none w-15 mx-2 sm:mx-4 md:mx-6 lg:mx-8 xl:mx-10 p-1  text-sm sm:text-base md:text-base lg:text-base xl:text-base max-h-full flex flex-col items-center justify-center">  
            <a href="{{ route('libros.create') }}" class="block mb-0.5 p-1 bg-blue-700 rounded-md text-center text-white md:w-3/4">
                Ver todos
            </a> 
        </div>
        
        @foreach ($librosTexto as $libro)
            @if ($libro->IDCategoria == 1)
            
            <div class="rounded flex-none bg-blue-200 mx-2 sm:mx-4 md:mx-6 lg:mx-8 xl:mx-10 p-1 w-32 text-sm sm:text-base md:text-base lg:text-base xl:text-base max-h-full flex flex-col">
                <p class="ml-1 block mb-0.5 h-10 overflow-hidden font-bold">{{ $libro->descripcion }}</p>
            
            @foreach ($courses as $course)
                @if ($course->id == $libro->courseID)
                <p  class="block mb-0.5 h-6 overflow-hidden text-center">{{ $course->titulo }}</p>
                @endif
            @endforeach
            
            <a href="{{ route('libros.show', $libro->id) }}" class="mt-auto block mx-auto mb-0.5 p-1 bg-green-700 rounded-md text-center text-white md:w-3/4">
                Ver detalles
            </a>
            
        </div>
    @endif
    @endforeach
    
    
   
    </div>
    <h1 class="mb-2 mt-3 font-bold text-xl lg:text-2xl xl:text-3xl ml-4">Libros de lectura</h1> 

    <div class="flex flex-nowrap overflow-x-scroll">        
        <div class="rounded flex-none w-15 mx-2 sm:mx-4 md:mx-6 lg:mx-8 xl:mx-10 p-1  text-sm sm:text-base md:text-base lg:text-base xl:text-base max-h-full flex flex-col items-center justify-center">  
            <a href="{{ route('libros.create') }}" class="block mb-0.5 p-1 bg-pink-700 rounded-md text-center text-white md:w-3/4">
                Ver todos
            </a> 
    </div>
    
        @foreach ($librosLectura as $libro)
            @if ($libro->IDCategoria == 2)
            
        <div class="rounded flex-none bg-pink-200 mx-2 sm:mx-4 md:mx-6 lg:mx-8 xl:mx-10 p-1 w-32 text-sm sm:text-base md:text-text-base lg:text-base xl:text-base max-h-full flex flex-col">
            <p class="ml-1 block mb-0.5 h-10 overflow-hidden font-bold">{{ $libro->descripcion }}</p>
      
            @foreach ($courses as $course)
                @if ($course->id == $libro->courseID)
                    <p  class="block mb-0.5 h-6 overflow-hidden text-center">{{ $course->titulo }}</p>
                @endif
            @endforeach
            
            <a href="{{ route('libros.show', $libro->id) }}" class="mt-auto block mx-auto mb-0.5 p-1 bg-green-700 rounded-md text-center text-white md:w-3/4">
                Ver detalles
            </a>
            
            
        </div>
    @endif
    @endforeach

    
    </div>
    
</div>
@endsection
