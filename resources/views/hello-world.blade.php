<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- New version -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/M6Irinel/Framkcss@7afed426c3eb96b21f164839fc10279163084c3c/Framkcss.css">

    <style>
        h1 {
            animation: colore 6s infinite linear;
        }

        @keyframes colore {
            0% {color: red; scale: 1;}
            25% {color: yellow; scale: 1.2;}
            50% {color: green; scale: 1;}
            75% {color: blue; scale: 1.2;}
            100% {color: red; scale: 1;}
        }
    </style>
</head>
<body class="reset bg-black">
    <a class="px-3 py-2 border-none shadow-5-light-H rounded-3 absolute top-5 left-5 pointer decoration-none bold white bg-white-H black-H transition-all duration-2" href="/">HOME</a>
    <header class="flex center i-center h-100vh fs-10">
        <h1 class="t-shadow-b-5-light"> {{$saluto}} </h1>
    </header>
    
</body>
</html>