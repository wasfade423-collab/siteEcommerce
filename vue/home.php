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
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="../css/sortie.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="relative overflow-x-hidden">

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
    <main>

        <section class="max-md:relative hero md:h-[520px] mt-1">
            <section class="h-full max-md:absolute inset-0 max-md:bg-gradient-to-t max-md:from-white max-md:from-20% max-md:to-transparent max-md:to-70%">
                <div class="flex md:mt-2 max-md:mr-[6%] max-md:ml-[5%] max-md:mt-[40%] flex-2">
                    <div class="md:w-2/5 md:mt-24 md:ml-[10%] flex flex-col items-start md:justify-center">
                        <h1 class="font-bold max-md:text-center text-4xl max-md:text-[25px]">Son pur, confort Total</h1>
                        <span class="text-sm font-medium text-gray-500 max-md:text-black max-md:text-[10px] md:w-9/12 md:mt-1">
                            "Découvrez une nouvelle dimension sonore avec nos écouteurs de haute qualité. 
                            Explorez aussi notre sélection d’appareils électroniques innovants, pensés pour simplifier et enrichir votre quotidien."
                        </span>
                        <button class="bg-[#0A8433] px-4 py-1 text-white rounded-sm md:mt-3 max-md:mt-2 cursor-pointer text-xl">
                            <a href="#articles">Shop now</a>
                        </button>
                    </div>
                    <div class="max-md:hidden w-3/5 object-cover bg-no-repeat md:h-9/10">
                        <img src="../images/base.png" alt="">
                    </div>
                </div>
            </section>
        </section>
        <section id="articles" class="md:mx-[5px] max-md:mx-[1%]">         
            <h2 class="font-bold m-5 text-3xl max-md:text-2xl relative">
                <div class="w-[80%]">

                    <span>Nouvels Arrivages</span>
                </div>

            </h2>
            <div class="bgarticles bg-gray-200 px-3 py-5 flex flex-wrap justify-center gap-3 mt-[30px]">
                                                                
            </div>
        </section>  
        <section>          
            <h2 class="font-bold text-4xl md:w-[400px]  m-5 max-md:text-2xl relative">
                <div class="w-[80%]">
                    <span>Limités</span>
                </div>
            </h2>
            <div class="bgarticles bg-gray-200 px-3 py-5 flex flex-wrap justify-center gap-3 mt-[30px]">
                                                                
            </div>
        </section>    
        <section class="mb-5">
           
            <h2 class="font-bold text-4xl md:w-[400px]  m-5 max-md:text-2xl relative">
                <div class="w-[80%]">
                    <span>Populaires</span>
                </div>
            </h2>
            <div class="bgarticles bg-gray-200 px-3 py-5 flex flex-wrap justify-center gap-3 mt-[30px]">
                                                                
            </div>
        </section>  
        <!-- <section class="max-md:h-[180px] relative mx-auto md:w-[1000px]  my-[10%] px-2 py-1 md:max-w-[1200px] bg-[url('../images/sup.jpg')] bg-no-repeat bg-cover bg-center h-[450px] max-md:w-[90%]">
            <span class="absolute top-0 left-0 bg-[rgba(255,0,0,0.7)] text-white text-[11px] font-extrabold px-2 py-0.5 rounded shadow-[0_0_10px_rgba(220,38,38,0.5)]">
                PROMO
            </span>
            <button class="absolute border cursor-pointer rounded-sm px-1 z-10 md:top-[50px] py-1 md:right-12 max-md:py-[2px] md:right-12 max-md:right-[10px] max-md:top-[10%] bg-white text-green-800 border-green-800">Tout voir</button>
            <div class="max-md:absolute max-md:bottom-[1%] text-white md:w-2/5 md:mt-50 md:ml-4">
                <p class="text-xl font-medium max-md:font-light">Nom du produit</p>
                <div class="m-0 md:text-[12px] max-md:text-[8px] max-md:w-9/12">
                    Optimisez votre productivité avec un bureau intelligent intégrant smartphone
                    à l’efficacité.
                </div>
                <div class="md:mt-5">
                    <span class="font-bold text-lg text-red-600">1500 XOF</span><span class="line-through decoration-1 decoration-red-600 text-[12px] text-white/90">2000 XOF</span>
                    <button class="px-4 hover:bg-green-800 py1 cursor-pointer rounded-md md:ml-10 bg-gradient-to-r from-green-800 from-50% to-green-500">
                        Shop Now                       
                    </button>
                </div>
            </div>
        </section> -->
        <!-- <section class="max-md:w-[90%] max-md:h-[180px] max-md:py-2 md:w-[1000px] md:max-w-[1200px] flex relative mx-auto md:w-[900px] my-[10%] pl-2 py-1 md:max-w-[900px] md:h-[450px]">
            <span class="absolute top-0 left-0 bg-[rgba(255,0,0,0.7)] text-white text-[11px] font-extrabold px-2 py-0.5 rounded shadow-[0_0_10px_rgba(220,38,38,0.5)]">
                PROMO
            </span>
            <div class="h-full md:w-3/5 max-md:w-1/2 max-md:pt1">
                <img src="../images/poto.jpg" class="h-full w-full" alt="">
            </div>
            <button class="absolute border cursor-pointer rounded-sm px-1 z-10 md:top-[50px] py-1 md:right-12 max-md:py-[2px] md:right-12 max-md:right-[10px] max-md:top-[10px] bg-white text-green-800 border-green-800">Tout voir</button>
            <div class="text-black md:w-2/5 max-md:mt-[10px] max-md:w-1/2 md:mt-40 md:ml-[1%]">
                <div class="text-[12px] max-md:text-[8px] max-md:mt-[35px]">
                    <p class="text-xl font-medium max-md:font-light max-md:">Nom du produit</p>
                    Optimisez votre productivité avec un bureau intelligent intégrant smartphone
                    à l’efficacité.
                </div>
                <span class="font-bold text-lg text-red-600">1500 XOF</span><span class="line-through decoration-1 decoration-red-600 text-[12px] text-gray-500">2000 XOF</span>
                
                <br>
                <button class="text-white px-4 hover:bg-green-800 py-1 cursor-pointer rounded-md md:ml-10 bg-gradient-to-r from-green-800 from-50% to-green-500">
                    Shop Now                       
                </button>
            </div>
        </section> -->
        <!--<section class="md:max-w-[1050px] mb-[5%] mt-[10%] max-md:w-screen max-md:flex-col mx-auto flex">
            <div class="md:relative md:w-1/2 max-md:w-full">
                <img src="../images/selfie.jpg" class="object-cover object-center" alt="">
                <div class="absolute hidden flex flex-col top-20 right-1 gap-2">
                    <li class="border border-[#E1E1E1] lg:w-[100px]">
                        <img src="../images/lentil.png" class="object-contain" alt="">
                    </li>
                    <li class="border border-[#E1E1E1] lg:w-[100px]">
                        <img src="../images/lentil.png" class="object-contain" alt="">
                    </li>
                    <li class="border border-[#E1E1E1] lg:w-[100px]">
                        <img src="../images/lentil.png" class="object-contain" alt="">
                    </li>                    
                </div>
            </div>
            <div class="md:w-1/2 p-2 flex flex-col gap-2">
                <h3 class="text-center font-bold text-2xl my-2">Nom de l'article</h3>
                <span>
                    Un son et un style qui se remarquent.
                </span>
                <p class="my-2">
                    <span class="font-black">Pourquoi vedriez-vous l'avoir?</span>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Notre trépied Optimisez votre productivité avec un bureau intelligent intégrant smartphone, iMac et accessoires high-tech. Un design épuré, des outils synchronisés, et une ambiance propice à l’efficacité.
                </p>
                <div class="text-2xl">
                    <span class="font-bold">Unité : </span>
                    <span>1500XOF</span>
                    <span class="text-gray-500/80 text-[14px] line-through">2000XOF</span>
                </div>
                <div class="flex max-md:flex-row max-md:justify-between  md:flex-col">
                    <select class="w-2/5 my-2 rounded-sm outline-none p-1 border border-green-800 text-green-800 text-lg" name="color" id="color">
                        <option value="" selected disabled>Choisir une couleur</option>
                        <option value="white">Blanc</option>
                        <option value="black">Noir</option>
                        <option value="gray">Gris</option>
                        <option value="green">Vert</option>
                        <option value="rose">Rose</option>
                        <option value="blue">Bleu</option>
                    </select>
                    <div class="flex max-md:mt-2 gap-2 w-2/5">
                            Lorsqu'on clique sur + ou - le signe dimunie de taille mais le nombre fait un plus et grossit
                        <button class="cursor-pointer active:scale-95 rounded-sm flex justify-center items-center border text-3xl border-green-800 h-[32px] w-[32px]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M20 12H4" />
                            </svg>                        
                        </button>
                        <button class="cursor-pointer rounded-sm border text-2xl border-green-800 active:scale-105 bg-green-800/80 text-white h-[32px] w-[32px]">1</button>
                        <button class="cursor-pointer active:scale-95 rounded-sm border border-green-800 text-green-800 flex justify-center items-center text-3xl  h-[32px] w-[32px]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="flex gap-4 w-9/10 mx-auto my-4">
                    <button class=" w1/2 cursor-pointer rounded-sm border text-2xl max-md:text-[15px] border-green-800 px-2 py1 bg-green-800/80 text-white ">
                        Ajouter au Panier
                    </button>
                    <button class="w1/2 cursor-pointer rounded-sm border border-green-800 py1 m px-2 text-green-800 flex justify-center items-center text-3xl max-md:text-[15px]">
                        Retour
                    </button>                    
                </div>
            </div> 
        </section>-->
    </main>   
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
        <a href="#" class="fixed right-4 hidden bg-green-300 inline-block px-3 py1 md:px-4 md:py-2 rounded-md text-lg z-50 hover:-translate-y-1 shadow-sm duration-300" id="scroll-up">  
            <i class="fa-solid fa-arrow-up"></i>
        </a>      
        <p class="mt-2 text-center border-gray-800 bg-gray-800/20 pt-4 pb1">Copyright © 2025 By Wasfade Tonoukoin. All rights reserved.</p>
    </footer>
    <script src="../js/home.js"></script>    
</body>
</html> 

