<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="imag/x-icon" href="favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page | Admin</title>
    <meta name="description" content ="site Ecommerce au Bénin">
    <link rel="stylesheet" href="../css/sortie.css">
</head>
<body class="bg-gray-50 font-sans antialiased">

    <header class="bg-white/80 backdrop-blur-md border-b border-gray-100 shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                
                <a href="index.php" class="flex items-center gap-3 group">
                    <div class="bg-green-500 p-2 rounded-xl shadow-lg shadow-green-200 transition-transform group-hover:scale-105">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3" />
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-2xl font-black tracking-tight text-gray-900 leading-none">
                            Site de <span class="text-green-500 uppercase">Dolce</span>
                        </span>
                        <span class="text-[10px] uppercase tracking-[0.2em] text-gray-400 font-bold mt-1">
                            Acoustique de Luxe
                        </span>
                    </div>
                </a>

                <nav class="hidden items-center space-x-10">
                    <a href="index.php" class="text-sm font-bold text-gray-600 hover:text-green-500 transition-colors">Boutique</a>
                    <a href="#" class="text-sm font-bold text-gray-600 hover:text-green-500 transition-colors">Catégories</a>
                    <a href="#" class="text-sm font-bold text-gray-600 hover:text-green-500 transition-colors">À Propos</a>
                </nav>

                <div class="flex items-center gap-2 sm:gap-4">
                    <button class="p-2 text-gray-400 hover:text-green-500 hover:bg-green-50 rounded-full transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>

                    <div class="w-px h-6 bg-gray-200 mx-1"></div>

                    <a href="login.php" class="flex items-center gap-2 px-4 py-2 bg-gray-900 text-white rounded-full hover:bg-green-600 transition-all shadow-md group">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-green-400 group-hover:text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        <span class="text-xs font-bold uppercase tracking-wider">Espace Admin</span>
                    </a>
                </div>

            </div>
        </div>
    </header>

    <main class="max-w-7xl mx-auto flex justify-center items-center px-4 sm:px-6 lg:px-8 py-15">
        <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-md border-t-4 border-green-500">
            
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-gray-800">Connexion Admin</h1>
                <p class="text-gray-500 mt-2">Veuillez entrer vos identifiants</p>
            </div>
        
            <?php if(isset($echec)): ?>
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-3 mb-6 text-sm">
                    <?= htmlspecialchars($echec) ?>
                </div>
                <?php unset($echec); ?>
            <?php endif; ?>
        
            <form action="" method="post" class="flex flex-col gap-5">
                
                <div>
                    <label for="nom" class="block text-sm font-semibold text-gray-700 mb-1">
                        Nom d'utilisateur
                    </label>
                    <input type="text" name="nom" id="nom" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition-all"
                        placeholder="Ex: admin_229">
                </div>
        
                <div>
                    <label for="pass" class="block text-sm font-semibold text-gray-700 mb-1">
                        Mot de Passe
                    </label>
                    <input type="password" name="pass" id="pass" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition-all"
                        placeholder="••••••••">
                </div>
        
                <button type="submit" 
                    class="w-full cursor-pointer bg-green-500 hover:bg-green-600 text-white font-bold py-2 rounded-lg transition-colors shadow-md mt-2">
                    Se connecter
                </button>
        
                <div class="text-center mt-4">
                    <a href="index.php" class="text-sm text-green-600 hover:text-green-700 hover:underline transition-all">
                        &larr; Retour au site
                    </a>
                </div>
            </form>
        </div>
    </main>

</body>
</html>