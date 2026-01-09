<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale1.0">
    <title>E-service By Dolce</title>
    <link href='https://cdn.boxicons.com/3.0.6/fonts/basic/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..9001,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="../css/sortie.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<input type="hidden" id="index" value=<?= $_GET['id']?>>
    <header class="sticky top-0 z-50">
        <nav class="flex items-center justify-between max-lg:px-[5%] lg:px-8 py-4 bg-white/80 backdrop-blur-md border-b border-gray-100">
            <div class="flex navigation max-md:flex-col gap-8 text-gray-700 max-md:absolute z-10 transition-all duration-500 top-0 -translate-x-100 max-md:bg-white max-md:w-3/4  font-medium">
                <a href="#" class="hover:text-emerald-500 transition-colors duration-300">Home</a>
                <a href="#articles" class="hover:text-emerald-500 transition-colors duration-300">Shop</a>
                <a href="#" class="hover:text-emerald-500 transition-colors duration-300">Contact</a>
            </div>

            <div class="relative w1/3 max-lg:w1/2">
                <span class="absolute inset-y-0 left-3 flex items-center text-gray-400">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </span>
                <input type="text" placeholder="Rechercher un produit..." class="w-full searchBar pl-10 pr-4 py-2 bg-gray-100 border-none rounded-full focus:ring-2 focus:ring-emerald-400 focus:bg-white transition-all outline-none text-sm">
            </div>

            <div class="flex gap-4 items-center">
                <button class="panier relative p-3 bg-emerald-100 text-emerald-600 rounded-xl hover:bg-emerald-500 duration-300 cursor-pointer hover:text-white transition-all shadow-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.1841.707.7071.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <span class="absolute -top-1 -right-1 bg-red-500 text-white text-[10px] px-1 quantite rounded-full border-2 border-white">0</span>
                </button>
                
                <button class="p-3 burger bg-gray-100 text-3xl font-bold rounded-xl cursor-pointer hover:shadow-lg transition-all">
                    &equiv;
                </button>
            </div>
        </nav>
    </header>
    <section id="section" class="md:max-w-[1050px] mb-[5%] mt-[10%] max-md:w-screen max-md:flex-col mx-auto flex">
    
    </section>
<footer class="pt-2 md:mt-8 max-md:flex max-md:flex-col bg-gray-500/20">
        <div class="max-md:w-screen gap-4 max-md:items-center max-md:flex-col-reverse md:pl-1%] max-md:pl-1%] pt-2 flex md:justify-between md:max-w-[80%] mx-auto">
            
            <ul class="flex items-center text-lg max-md:text-sm flex-col">
                <h3 class="max-md:w-screen max-md:text-center max-md:bg-gray-500/20 font-bold">Accès rapides</h3>
                <div class="max-md:flex max-md:mt-1 flex-col">
                    <li class=" hover:underline duration-300">Home</li>
                    <li class=" hover:underline duration-300">Nos produits</li>
                    <li class=" hover:underline duration-300">Contact</li>
                </div>
            </ul>
            <ul class="flex items-center flex-col text-lg max-md:text-sm">
                <h3 class="max-md:w-screen max-md:text-center max-md:bg-gray-500/20 font-bold">Nous Contacter</h3>
                <div class="max-md:flex max-md:mt-1 flex-col">
                    <li class="flex gap-2">
    <i class='bx  bx-phone mt-[4px]'></i>                     
                        <span class="hover:underline duration-300">
                            +229 0197XXXXXX
                        </span>
                    </li>
                    <li>
    <i class="fab fa-whatsapp text-black "></i>
                        <span class="hover:underline duration-300">
                            +229 0195XXXXXX
                        </span>
                    </li>
                    <li class="flex gap-2">
    <i class='bx  bx-envelope mt-[6px]'></i>                       
                        <span class="hover:underline duration-300">monoemail@gmail.com</span>
                    </li>
                    <li class="flex gap-2">
    <i class='bx  bx-location-alt-2 mt-[5px]'></i> 
                        <span class="hover:underline duration-300">Lokossa</span>
                    </li>
                </div>
            </ul>
            <div class="max-md:w-screen max-md:justify-center flex space-y-0.5 flex-col md:text-lg">
                <h3 class="text-lg max-md:text-center max-md:uppercase max-md:font-bold max-md:my1">Rester informer des nouveautés</h3>
                <div class="my-2">
                    <span class="max-md:mx-auto border max-md:w-9/10 text-xl rounded-sm md:mt-2 max-md:mb1 flex">
                        <i class="fa-regular fa-paper-plane m-1 "></i>
                        <input type="text" placeholder="ex: example@gmail.com" class="max-md:pl1 max-md:text-xl w-full outline-none">
                        <input type="submit" value="Subscribe" class=" cursor-pointer outiline-none text-white bg-green-800 px-1">
                    </span>
                </div>
                <div class="flex mx-2 justify-between">
                    <h3 class="text-md max-md:text-center max-md:font-light max-md:mt-1 md:hidden">Nous suivre sur les réseaux</h3>
                    <div class="my-1 flex gap-2 max-md:gap-4 md:ml-30 max-md:justify-center">
                        <a class="rounded-sm flex items-center md:w-[40px] md:h-[40px] max-md:w-[30px] max-md:h-[30px] bg-[#1976d2] justify-center">
                            <img src="../images/facebook.png" class="rounded-full w-3/5" alt="">
                        </a>
                        <a class="rounded-sm flex items-center md:w-[40px] md:h-[40px] max-md:w-[30px] max-md:h-[30px] bg-[#39ae41] justify-center">
                            <img src="../images/what.png" class="rounded-full w-3/5" alt="">
                        </a>    
                        <a class="rounded-sm flex items-center md:w-[40px] md:h-[40px] max-md:w-[30px] max-md:h-[30px] bg-center bg-cover bg-[url('../images/instagram.png')] justify-center">
                        </a>                                     
                    </div>
                </div>
            </div>              
        </div>  
        <a href="#" class="fixed right-4 hidden bg-green-300 inline-block px-3 py1 md:px-4 md:py-2 rounded-md text-lg z-50 hover:-translate-y1 shadow-sm duration-300" id="scroll-up">  
            <i class="fa-solid fa-arrow-up"></i>
        </a>      
        <p class="mt-2 text-center border-gray-800 bg-gray-800/20 pt-4 pb1">Copyright © 2025 By Wasfade Tonoukoin. All rights reserved.</p>
</footer>
<script src="../js/detail.js"></script>
</body>
</html>