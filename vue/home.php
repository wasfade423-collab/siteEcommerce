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
    <style>
        html{
            scroll-behavior : smooth;
            scroll-padding: 85px;
        }
    </style>
</head>
<body class="relative overflow-x-hidden bg-gray-50 text-gray-900 font-sans">

    <header class="sticky top-0 z-50 bg-white/90 backdrop-blur-md border-b border-gray-100">
        <nav class="flex items-center justify-between max-w-7xl mx-auto px-4 md:px-8 py-3">
                <span class="flex items-center gap-3 group">
                    <div class="bg-green-500 p-2 rounded-xl shadow-lg shadow-green-200 transition-transform group-hover:scale-105">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3" />
                        </svg>
                    </div>
                    <div class="flex max-md:hidden flex-col">
                        <span class="text-2xl font-black tracking-tight text-gray-900 leading-none">
                            Site de <span class="text-green-500 uppercase">Dolce</span>
                        </span>
                        <span class="text-[10px] uppercase tracking-[0.2em] text-gray-400 font-bold mt-1">
                            Acoustique de Luxe
                        </span>
                    </div>
                    <div class="relative md:hidden sm:block w-55 lg:w-64">
                        <span class="absolute inset-y-0 left-3 flex items-center text-gray-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </span>
                        <input type="text" placeholder="Rechercher..." class="searchBar w-full pl-9 pr-4 py-2 bg-gray-100 border-none rounded-full focus:ring-2 focus:ring-emerald-400 focus:bg-white transition-all text-sm outline-none">
                    </div>                    
                </span>
            <div class="flex navigation max-md:flex-col gap-8 text-gray-700 max-md:absolute z-1000 transition-all duration-500 top-0 max-md:-translate-x-100 p-4 max-md:bg-white max-md:w-3/4">
                <a href="" class="hover:text-emerald-500 transition-colors">Home</a>
                <a href="#articles" class="hover:text-emerald-500 transition-colors">Shop</a>
            </div>

            <div class="flex items-center gap-3 md:gap-5">
                <div class="relative hidden sm:block w-48 lg:w-64">
                    <span class="absolute inset-y-0 left-3 flex items-center text-gray-400">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </span>
                    <input type="text" placeholder="Rechercher..." class="searchBar w-full pl-9 pr-4 py-2 bg-gray-100 border-none rounded-full focus:ring-2 focus:ring-emerald-400 focus:bg-white transition-all text-sm outline-none">
                </div>

                <button class="panier relative p-2.5 bg-emerald-50 text-emerald-600 rounded-xl hover:bg-emerald-500 hover:text-white transition-all cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.1841.707.7071.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <span class="absolute -top-1 -right-1 bg-red-500 text-white text-[10px] font-bold px-1.5 py-0.5 rounded-full border-2 border-white quantite">0</span>
                </button>

                <button class="burger md:hidden p-2 text-3xl font-bold bg-gray-100 rounded-lg hover:bg-gray-200 cursor-pointer">
                    &equiv;
                </button>
            </div>
        </nav>
    </header>

    <main>
        <section class="hero relative h-[450px] md:h-[550px] flex items-center overflow-hidden bg-gray-200 transition-all duration-700">
            <div class="container mx-auto px-6 grid md:grid-cols-2 gap-8 items-center z-10">
                <div class="space-y-6 text-center md:text-left">
                    <h1 class="text-4xl md:text-6xl font-extrabold leading-tight">Son pur,<br><span class="text-emerald-600">Confort Total</span></h1>
                    <p class="text-gray-900 font-medium text-sm md:text-lg max-w-md">Découvrez une nouvelle dimension sonore avec nos écouteurs premium et nos innovations électroniques.</p>
                    <a href="#articles" class="inline-block bg-emerald-600 text-white px-8 py-3 rounded-xl font-bold hover:bg-emerald-700 transition-transform hover:scale-105 shadow-lg">Shop Now</a>
                </div>
                <div class="hidden md:block">
                    <img src="../images/base.png" alt="Hero" class="w-full h-auto drop-shadow-2xl animate-pulse">
                </div>
            </div>
        </section>

        <div class="max-w-7xl mx-auto px-4 py-16 space-y-20">
            <section id="articles">
                <h2 class="text-2xl md:text-3xl font-black mb-8 flex items-center gap-3">
                    <span class="w-2 h-8 bg-emerald-500 rounded-full"></span> Nouveaux Arrivages
                </h2>
                <div class="bgarticles grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 md:gap-6">
                    </div>
            </section>

            <section>
                <h2 class="text-2xl md:text-3xl font-black mb-8 flex items-center gap-3">
                    <span class="w-2 h-8 bg-red-500 rounded-full"></span> Éditions Limitées
                </h2>
                <div class="bgarticles grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 md:gap-6">
                    </div>
            </section>

            <section>
                <h2 class="text-2xl md:text-3xl font-black mb-8 flex items-center gap-3">
                    <span class="w-2 h-8 bg-amber-400 rounded-full"></span> Populaires
                </h2>
                <div class="bgarticles grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 md:gap-6">
                    </div>
            </section>
        </div>
    </main>

    <a href="#" id="scroll-up" class="fixed bottom-6 right-6 bg-emerald-600 text-white w-12 h-12 rounded-full flex items-center justify-center shadow-2xl transition-all duration-300 translate-y-24 z-50">
        <i class="fa-solid fa-arrow-up"></i>
    </a>

    <footer class="bg-gray-900 text-gray-300 pt-16 pb-6">
        <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-3  gap-12 mb-12">
            
            <div class="flex flex-col order-3 md:order-1 items-center md:items-start">
                <h3 class="text-white font-bold uppercase tracking-wider mb-6 border-b-2 border-emerald-500 pb-1">
                    Accès rapides
                </h3>
                <ul class="space-y-3 text-center md:text-left">
                    <li><a href="" class="hover:text-emerald-400 hover:pl-2 duration-300 transition-all">Home</a></li>
                    <li><a href="#articles" class="hover:text-emerald-400 hover:pl-2 duration-300 transition-all">Nos produits</a></li>
                    <li><a href="" class="hover:text-emerald-400 hover:pl-2 duration-300 transition-all">Contact</a></li>
                </ul>
            </div>

            <div class="flex flex-col order-2 items-center md:items-start">
                <h3 class="text-white font-bold uppercase tracking-wider mb-6 border-b-2 border-emerald-500 pb-1">
                    Nous Contacter
                </h3>
                <ul class="space-y-4">
                    <li class="flex items-center gap-3 group">
                        <div class="w-8 h-8 rounded-full bg-gray-800 flex items-center justify-center group-hover:bg-emerald-500 transition-colors">
                            <i class='bx bx-phone'></i>
                        </div>
                        <span class="hover:text-white duration-300">+229 0197XXXXXX<a href="tel:22901XXXXXX"></a></span>
                    </li>
                    <li class="flex items-center gap-3 group">
                        <div class="w-8 h-8 rounded-full bg-gray-800 flex items-center justify-center group-hover:bg-green-500 transition-colors">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <span class="hover:text-white duration-300"><a href="https://wa.me/">+229 0195XXXXXX</a></span>
                    </li>
                    <li class="flex items-center gap-3 group">
                        <div class="w-8 h-8 rounded-full bg-gray-800 flex items-center justify-center group-hover:bg-blue-500 transition-colors">
                            <i class='bx bx-envelope'></i>
                        </div>
                        <span class="hover:text-white duration-300"><a href="mailto:email@email.com">monoemail@gmail.com</a></span>
                    </li>
                    <li class="flex items-center gap-3 group">
                        <div class="w-8 h-8 rounded-full bg-gray-800 flex items-center justify-center group-hover:bg-red-500 transition-colors">
                            <i class='bx bx-location-alt'></i>
                        </div>
                        <span class="hover:text-white duration-300">Lokossa, Bénin</span>
                    </li>
                </ul>
            </div>

            <div class="flex flex-col order-1 md:order-3 items-center md:items-start">
                <h3 class="text-white font-bold uppercase tracking-wider mb-6 border-b-2 border-emerald-500 pb-1">
                    Newsletter
                </h3>
                <p class="text-sm text-gray-400 mb-4 text-center md:text-left">Restez informé de nos nouveautés et offres exclusives.</p>
                
                <div class="w-full flex bg-gray-800 p-1.5 rounded-xl border border-gray-700 focus-within:border-emerald-500 transition-all shadow-inner">
                    <div class="flex items-center px-3 text-gray-500">
                        <i class="fa-regular fa-paper-plane"></i>
                    </div>
                    <input type="email" placeholder="example@gmail.com" 
                        class="bg-transparent w-full outline-none text-sm text-white px-2">
                    <button class="bg-emerald-600 hover:bg-emerald-500 text-white px-4 py-2 rounded-lg font-bold text-xs transition-all active:scale-95">
                        S'ABONNER
                    </button>
                </div>

                <div class="mt-8">
                    <p class="text-xs font-bold text-gray-500 uppercase mb-4 text-center md:text-left">Suivez-nous</p>
                    <div class="flex gap-4">
                        <a href="#" class="w-10 h-10 rounded-xl bg-[#1877F2] flex items-center justify-center hover:scale-110 duration-300 shadow-lg">
                            <img src="../images/facebook.png" class="w-6 h-6" alt="Facebook">
                        </a>
                        <a href="#" class="w-10 h-10 rounded-xl bg-[#25D366] flex items-center justify-center hover:scale-110 duration-300 shadow-lg">
                            <img src="../images/what.png" class="w-6 h-6" alt="WhatsApp">
                        </a>
                        <a href="#" class="w-10 h-10 rounded-xl bg-gradient-to-tr from-yellow-500 via-red-500 to-purple-600 flex items-center justify-center hover:scale-110 duration-300 shadow-lg">
                            <i class="fab fa-instagram text-white text-xl"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="border-t border-gray-800 pt-8 mt-8">
            <p class="text-center text-xs text-gray-500">
                Copyright © 2026 <span class="text-emerald-500 font-bold">Mono Shop</span> By Wasfade Tonoukoin. All rights reserved.
            </p>
        </div>
    </footer>

<a href="#" id="scroll-up" class="fixed bottom-6 right-6 bg-emerald-600 text-white w-12 h-12 rounded-full flex items-center justify-center shadow-2xl transition-all duration-300 translate-y-24 z-50">
    <i class="fa-solid fa-arrow-up"></i>
</a>

    <script>
        // VARIABLES GLOBALES
        const burger = document.querySelector('.burger');
        const nav = document.querySelector('.navigation');
        const hero = document.querySelector('.hero');
        const quantiteDisplay = document.querySelector('.quantite');
        const urls = ['images/gale.png', 'images/base.png'];
        // Les catégories doivent correspondre exactement aux valeurs attendues par ton PHP ?categorie=...
        const categoriesDisponibles = ['nouveau', 'limité', 'populaire'];
        let index = 0;
        
        // Initialisation Panier
        let acheters = JSON.parse(localStorage.getItem('acheters')) || [];
        quantiteDisplay.innerHTML = localStorage.getItem('nbreDequantite') || 0;

        // MENU BURGER
        let etat = true;
        burger.addEventListener('click', ()=>{
            nav.classList.toggle('max-md:-translate-x-100');
            if(etat){
                burger.innerHTML = "&times;";
                etat=!etat;
            }else{
                burger.innerHTML = "&equiv;";
                etat=!etat;
            }
        })

        // DIAPORAMA HERO
        function varieur() {
            hero.style.backgroundImage = `linear-gradient(rgba(255,255,255,0.4),rgba(255,255,255,0.4)), url("${urls[index]}")`;
            hero.style.backgroundSize = "cover";
            hero.style.backgroundPosition = "center";
            index = (index + 1) % urls.length;
        }
        if (window.innerWidth < 768) setInterval(varieur, 3000);

        // SCROLL UP
        window.addEventListener('scroll', () => {
            const btn = document.getElementById('scroll-up');
            window.scrollY > 800 ? btn.classList.remove('translate-y-24') : btn.classList.add('translate-y-24');
        });

        // BUILDER D'ARTICLE
        function articleBulder(item) {
            const art = document.createElement('article');
            art.className = 'article group bg-white border border-gray-100 rounded-2xl p-3 hover:shadow-xl transition-all relative';
            
            const badgeColor = item.status.toLowerCase() === 'populaire' ? 'bg-amber-400' : (item.status.toLowerCase() === 'nouveau' ? 'bg-emerald-600 text-white' : 'bg-red-500 text-white');
            
            // Vérification si l'article est déjà au panier
            const isAdded = acheters.some(a => a.nom === item.cartName);
            const icon = isAdded ? 'images/afterpaye.png' : 'images/add-to-cart.png';
            const btnBg = isAdded ? 'bg-emerald-600 valid' : 'bg-gray-100';

            art.innerHTML = `
                <i class="hidden">${item.id}</i>
                <span class="absolute top-4 right-4 z-10 px-2 py-0.5 rounded-lg text-[10px] font-black uppercase ${badgeColor}">${item.status}</span>
                <div class="aspect-square bg-gray-50 rounded-xl overflow-hidden mb-3">
                    <img src="imagesuploade/${item.cartImg}" class="image w-full h-full object-cover group-hover:scale-110 transition-all duration-500 cursor-pointer">
                </div>
                <h3 class="cartName font-bold text-gray-800 text-sm truncate">${item.cartName}</h3>
                <div class="flex text-amber-400 text-[10px] my-1">
                    ${'<i class="fa-solid fa-star"></i>'.repeat(item.nbreyellow)}
                    ${'<i class="fa-regular fa-solid fa-star-half-stroke text-gray-500"></i>'.repeat(item.nbreboth)}
                    ${'<i class="fa-regular fa-star text-gray-500"></i>'.repeat(item.nbrevide)}
                </div>
                <div class="flex items-center justify-between mt-3">
                    <span class="font-black text-emerald-600 text-sm">${item.prix} <small>XOF</small></span>
                    <button class="check p-2 rounded-lg ${btnBg} transition-colors cursor-pointer">
                        <img src="${icon}" class="w-5 h-5">
                    </button>
                </div>
            `;

            // Clic Image -> Détails
            art.querySelector('.image').addEventListener('click', () => {
                window.location.href = `?id=${item.id}`;
            });

            // Clic Panier
            const btn = art.querySelector('.check');
            btn.addEventListener('click', () => {
                btn.classList.toggle('valid');
                // btn.querySelector('img').classList.toggle('invert');
                if(btn.classList.contains('valid')) {
                    // Ajouter
                    btn.classList.replace('bg-gray-100', 'bg-emerald-600');
                    btn.querySelector('img').src = 'images/afterpaye.png';
                    acheters.push({nom: item.cartName, prix: item.prix, quantite: 1, couleur: 'Couleur Présentée'});
                } else {
                    // Retirer
                    btn.classList.replace('bg-emerald-600', 'bg-gray-100');
                    btn.querySelector('img').src = 'images/add-to-cart.png';
                    // btn.querySelector('img').classList.toggle('invert');
                    const pos = acheters.findIndex(a => a.nom === item.cartName);
                    if(pos !== -1) acheters.splice(pos, 1);
                }
                saveCart();
            });

            return art;
        }

        function saveCart() {
            localStorage.setItem('acheters', JSON.stringify(acheters));
            localStorage.setItem('nbreDequantite', acheters.length);
            quantiteDisplay.innerHTML = acheters.length;
        }

        // FETCH DYNAMIQUE POUR LES 3 SESSIONS
        async function chargerBoutique() {
            const listesBg = document.querySelectorAll('.bgarticles');
            
            for (let i = 0; i < listesBg.length; i++) {
                const cat = categoriesDisponibles[i];
                try {
                    const response = await fetch('?categorie=' + cat);
                    const data = await response.json();
                    
                    listesBg[i].innerHTML = ""; // Vider le loader
                    
                    if (data.length === 0) {
                        listesBg[i].innerHTML = "<p class='col-span-full text-center text-gray-400 py-10'>Aucun article disponible ici.</p>";
                    } else {
                        data.forEach(item => {
                            listesBg[i].appendChild(articleBulder(item));
                        });
                    }
                } catch (e) {
                    console.error("Erreur session " + cat, e);
                }
            }
        }

        // Initialisation au chargement
        document.addEventListener("DOMContentLoaded", chargerBoutique);

    //comprotement quand la personne recherche du contenu.
    let searchBars = document.querySelectorAll('.searchBar');
    let bgarticles = document.querySelectorAll('.bgarticles');
    searchBars.forEach(searchBar => {
        searchBar.addEventListener('input', () => {

            let valeur = searchBar.value.toLowerCase().trim();
            // console.log(valeur)
            bgarticles.forEach(container => {
        
                let articles = container.querySelectorAll('.article');
                let trouvéDansCetteSection = 0;
        
            //chercher / créer le message local
            let msg = container.querySelector('.noResultLocal');
            if (!msg) {
                msg = document.createElement('p');
                msg.className = 'noResultLocal';
                msg.innerHTML = '<i class="fa-solid fa-magnifying-glass-minus"></i> Aucun résultat dans cette section ';
                msg.style.textAlign = 'center';
                msg.style.margin = '15px';
                msg.style.fontSize = '20px';
                msg.style.display = 'none';
                container.appendChild(msg);
            }
    
            articles.forEach(article => {
                let nom = article.querySelector('.cartName').textContent.toLowerCase();
    
                if (valeur !== '') {
                    if (nom.includes(valeur)) {
                        article.style.display = "";
                        trouvéDansCetteSection++;
                    } else {
                        article.style.display = "none";
                    }
                } else {
                    article.style.display = "";
                    trouvéDansCetteSection++;
                }
            });
    
            // 🔹 afficher / cacher le message local
            msg.style.display = (trouvéDansCetteSection === 0) ? "block" : "none";
        });
    });
})
 
document.querySelector(".panier").addEventListener("click", () => {
//console.log('panier');
    if (acheters.length === 0) {
        alert("Votre panier est vide");
        return;
    }

    let total = 0;
    let message = "*Je passe une commande*\n\n";

    acheters.forEach((item, index) => {
        let subTotal = item.prix * item.quantite;
        total += subTotal;

        message += `${index + 1}. ${item.nom}\n`;
        message += `   Quantité : ${item.quantite}\n`;
        message += `   Couleur : ${item.couleur}\n`;
        message += `   Prix : ${item.prix} XOF\n`;
        message += `   Sous-total : ${subTotal} XOF\n\n`;
    });

    message += `*Total à payer : ${total} XOF*\n\n`;
    message += "C'est quoi la prochaine étape?";
    // Encodage du message pour l’URL
    let encodedMessage = encodeURIComponent(message);

    // Numéro WhatsApp (sans + ni espaces , ni 01)
    let numeroDeTelephone = "229MOIMOI";

    // Ouverture WhatsApp
    window.open(
        `https://wa.me/${numeroDeTelephone}?text=${encodedMessage}`,
        "_blank"
    );
});
    
    </script>
</body>