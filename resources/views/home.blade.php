<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel primi passi with Fucssia</title>

    <link rel="shortcut icon" href="logo-50x2.png">

    <!-- New version -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/M6Irinel/Framkcss@7afed426c3eb96b21f164839fc10279163084c3c/Framkcss.css">

</head>

<body class="reset flex f-column min-h-100vh">

    <header class="border-b-gray-2 border-b-2">
        <section>
            <div class="container flex between">
                <h1 class="py-3 fs-7"> {{ $saluto }} </h1>
                <h1 class="py-3 fs-7">{{ $titolo }} <span class="violet-7">PHP</span></h1>
            </div>
        </section>
    </header>


    <main class="bg-gray-1 grow pt-2">
        <section>
            <div class="container flex j-flex-end">
                <p class="decoration-underline"> {{ $date }} </p>
            </div>
        </section>


        <section class="bg-gray-1 py-6">
            <div class="container">
                <h3 class="border-b">Professori per la presenazione della lezione</h3>

                <ul class="list-style-none">
                    @forelse ($professori as $item)
                        <li class="p-1 border-b border-b-gray-3 bg-white-H transition-bg-color duration-3">
                            {{ $item }}
                        </li>

                    @empty
                        <li>Non sono presenti nessun professore.</li>
                    @endforelse
                </ul>
            </div>
        </section>


        <section class="bg-gray-1 py-6">
            <div class="container">
                <h3 class="border-b">Studenti presenti alla lezione</h3>

                <ul class="list-style-none">
                    @forelse ($students as $k => $item)
                        <li class="p-1 border-b 

                        @if ($k % 2 == 0) 
                            border-b-violet-3
                        @else 
                            border-b-green-6 
                        @endif

                        bg-white-H transition-bg-color duration-3">
                            <span class="inline-block w-5
                            @if ($k % 2 == 0)
                                violet-3
                            @else 
                                green-6
                            @endif
                            "> {{ $k + 1 }}: </span>
                            {{ $item }}
                        </li>

                    @empty
                        <li>Non sono presenti nessun studente.</li>
                    @endforelse
                </ul>
            </div>
        </section>
    </main>


    <footer class="mt-auto">
        <section class="bg-gray-2 py-2">
            <div class="container">
                <p class="t-center">
                    grazie a Te
                    <span class="red fs-4">♥</span>
                    , gli altri sono felici
                    <span class="yellow fs-4">☺</span>
                </p>
            </div>
        </section>
    </footer>
</body>

</html>
