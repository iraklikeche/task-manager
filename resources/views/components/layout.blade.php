<!doctype html>
<title>Task Manager</title>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
@vite('resources/css/app.css')
@vite(['resources/css/app.css', 'resources/js/app.js'])
<style>
 .bg {
    background-image: url('{{ asset('images/defaults/bg.png') }}');
  }
</style>

<body style="font-family: Open Sans, sans-serif">
   {{$slot}}
</body>
