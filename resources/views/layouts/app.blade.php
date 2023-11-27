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
    <div class="bg-blue-800 text-blue-300 py-8 shadow-xl w-42 ">
        <div class="w-full text-center mx-auto px-3 flex text-center contents">
            <div class="flex justify-between items-center h-full ">
                <h1 class="text-2xl">
                    <a href="/">Literie3000</a>
                </h1>
           <nav class="space-x-3">
                    <a class="hover:underline underline-offset-8" href="/">Accueil</a>
                    <a class="hover:underline underline-offset-8" href="/create">Ajoutez un matelas</a>

                </nav>
            </div>
        </div>
    </div>

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