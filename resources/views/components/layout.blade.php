<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- link favicon --}}
    {{-- <link rel="shortcut icon" href="percorso del favicon" type="image/x-icon"> --}}
    <title>elm_laravel</title>

    {{-- CDN GoogleFonts --}}

    {{-- CDN Swiper --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    @vite (['resources/css/app.css' , 'resources/js/app.js'])


</head>
<body>

    {{$slot}}

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>