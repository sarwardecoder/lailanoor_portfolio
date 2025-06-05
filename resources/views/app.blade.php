<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title inertia>{{ config('app.name', 'Laila Noor') }}</title>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
/>
<style>
    body {
  margin: 0;
  padding: 0;
  background: linear-gradient(135deg, #ecfb50, #f7ba03); /* Or any other gradient */
  min-height: 100vh;
}
</style>


    @vite(['resources/js/app.js'])
    @inertiaHead
</head>

<body class="antialiased">
    @inertia
</body>

</html>