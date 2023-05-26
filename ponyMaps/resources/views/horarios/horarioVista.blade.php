<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    
</body>
</html>
@include('navigation-menu')

{{--MENSAJE--}}
@if ($mensaje = Session::get('success'))
<br>
        <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
        <span class="font-medium">{{$mensaje}}</span>
        </div>
@endif
<br>

<div class="text-center">
    <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Horarios registrados</h1>
        <div class="flex justify-center">
            {{--Inserta horario--}}
            <a href="{{route('vistaInsertar')}}" class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 w-96"> Nuevo horario</a>
            {{--Elimina todo--}}
            <a href="{{route('eliminarT')}}" class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 w-96"> Eliminar horarios</a>
        </div>
</div>
    
<br>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Materia
                </th>
                <th scope="col" class="px-6 py-3">
                    Edificio
                </th>
                <th scope="col" class="px-6 py-3">
                    Salón
                </th>
                <th scope="col" class="px-6 py-3">
                    Día
                </th>
                <th scope="col" class="px-6 py-3">
                    Inicio
                </th>
                <th scope="col" class="px-6 py-3">
                    Fin
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Editar</span>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($us as $horario)
                
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                @foreach ($materia as $i)
                    @if ($i->id == $horario->id_materia)
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$i->nombre}}
                    </th>
                    @endif
                @endforeach
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$horario->materia}}
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$horario->edificio}}
                </th>
                <td class="px-6 py-4">
                    {{$horario->salon}}
                </td>
                <td class="px-6 py-4">
                    {{$horario->dia}}
                </td>
                <td class="px-6 py-4">
                    {{$horario->inicio}}
                </td>
                <td class="px-6 py-4">
                    {{$horario->fin}}
                </td>
                <td class="px-6 py-4 text-right">
                    <div class="text-center">
                        <a href="{{route('vistaActualizar',$horario->id)}}" class="text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:focus:ring-yellow-900"  >Editar</a>
                    </div>
                    <br>
                    <form method="post" action="{{route('eliminar',$horario->id)}}">
                        @csrf
                        @method('delete')
                        <div class="text-center">
                            <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">eliminar</button>
                        </div>
                     </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
