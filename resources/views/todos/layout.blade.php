<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/04de4f4763.js" crossorigin="anonymous"></script>
    <title>Todos</title>
    @livewireStyles
</head>
<body>
    <div class="text-center flex justify-center pt-10">
        <div class="w-1/4 border rounded py-4 border-gray-600">@yield('content')</div>
    </div>
    @livewireScripts
</body>
</html>
