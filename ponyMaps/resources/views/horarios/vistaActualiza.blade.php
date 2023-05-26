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

<form method="POST" action="{{route('update',$us->id)}}">
    @csrf
    @method('PUT')

    <div>
        <label for="edificio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Edificio</label>
        <input type="text" name="edificio" id="edificio" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$us->edificio}}">
    </div>

    <div>
        <label for="salon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Salón</label>
        <input type="text" name="salon" id="salon" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$us->salon}}">
    </div>

    <div>
        <label for="dia" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Día</label>
        <input type="text" name="dia" id="dia" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$us->dia}}">
    </div>

    <div>
        <label for="inicio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Inicio</label>
        <input type="time" name="inicio" id="incio" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$us->inicio}}">
    </div>

    <div>
        <label for="fin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fin</label>
        <input type="time" name="fin" id="fin" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$us->fin}}">
    </div>

    <div class="text-center">
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Actualizar</button>
    </div>
  </form>