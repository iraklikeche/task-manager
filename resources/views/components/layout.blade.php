<!doctype html>
<title>Task Manager</title>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
@vite('resources/css/app.css')
@vite(['resources/css/app.css', 'resources/js/app.js'])


<style>
@font-face {
   font-family: 'Helvetica';
   src: url({{ asset('fonts/Helvetica.ttf') }});
}

* {
   font-family: 'Helvetica';
}
</style>

<body>
   {{$slot}}
   <x-flash />
</body>
