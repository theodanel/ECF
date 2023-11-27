<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.bunny.net/css?family=Nunito:400,700&display=swap" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>
<body class="font-[Nunito] flex flex-col justify-between h-screen">

        <div class="w-1/2 text-center mx-auto px-3 flex text-center contents">
            <div class="flex items-center h-full justify-center">
                <img src="{{ asset('images/logo.png') }}" alt="">
            </div>
        </div>
        <nav class="space-x-3">
                 <a class="hover:underline underline-offset-8 text-blue-700 text-2xl flex items-center h-full justify-center" href="/">Accueil</a>
                

             </nav>


    <div class="max-w-5xl mx-auto px-3 py-8 w-full ">
        @yield('content')
    </div>

    <footer class="py-8">
        <div class="max-w-5xl mx-auto px-3">
            <p class="text-center text-xl">
                <ul>
                    <li><h2> Vous y découvrirez toutes nos dimensions</h2></li>
                    <li></li>
                    <li></li>
                </ul> &copy; {{ date('Y') }}</p>
        </div>
    </footer>
</body>
</html>