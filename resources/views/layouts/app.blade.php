<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.bunny.net/css?family=Nunito:400,700&display=swap" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="font-[Nunito] flex flex-col justify-between">

        <div class="w-1/2 text-center mx-auto px-3 flex text-center contents ">
            <div class="backgroundheader flex items-center justify-center">
                <a href="/">
                    <img src="{{ asset('images/logo.png') }}" alt="">
                </a>
            </div>
        </div>

        <div class="w-full justify-center flex">
        <nav class="flex rounded-2xl px-5 py-3 bg-[#4961db] bg-gradient-to-r from-[#6a98ef] to-[#4961db] hover:bg-[#3244a2] text-white hover:to-transparent transition-colors duration-300x arrow-container w-1/2 justify-center">
            <a href="/" class="mx-12">
                <p>| Accueil |</p>
            </a>
            <a href="/brands" >
                <p >| Nos marques |</p>
            </a>
            </nav>
        </div>


    <div class="max-w-5xl mx-auto px-3 py-8 w-full h-full">
        @yield('content')
    </div>

    <footer class="py-8">
        <div class="max-w-5xl mx-auto px-3">
            DodoMatelas &copy; {{ date('Y') }}</p>
        </div>
    </footer>
</body>
</html>