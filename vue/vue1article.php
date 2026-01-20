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
    <link rel="icon" type="imag/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="../css/style.css">
    <style>
        html{
            scroll-behavior: smooth;
        }
    </style>
</head>
<body>
<input type="hidden" id="index" value=<?= $_GET['id']?>>
    <header class="sticky top-0 z-50 bg-white/90 backdrop-blur-md border-b border-gray-100">
        <nav class="flex items-center max-md:gap-2 justify-between max-w-7xl mx-auto px-4 md:px-8 py-3">
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
                    <div class="relative md:hidden sm:block w-[80%] lg:w-64">
                        <span class="absolute inset-y-0 left-3 flex items-center text-gray-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </span>
                        <input type="text" placeholder="Rechercher..." class="searchBar w-full pl-9 pr-4 py-2 bg-gray-100 border-none rounded-full focus:ring-2 focus:ring-emerald-400 focus:bg-white transition-all text-sm outline-none">
                    </div>                    
                </span>
            <div class="flex navigation max-md:flex-col gap-8 text-gray-700 max-md:absolute z-10 transition-all duration-500 top-0 max-md:-translate-x-100 max-md:bg-white max-md:w-3/4">
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
    <main class="min-h-[80vh] flex items-center justify-center py-12">
        <section id="section" class="max-w-6xl w-full mx-auto px-6 grid md:grid-cols-2 gap-12 items-start"></section>
    </main>
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
    // --- NAVIGATION BURGER ---
    let burger = document.querySelector('.burger');
    let nav = document.querySelector('.navigation');
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

    // --- SCROLL UP ---
    window.addEventListener('scroll', () => {
        const btn = document.getElementById('scroll-up');
        if (window.scrollY > 500) {
            btn.classList.remove('translate-y-32');
        } else {
            btn.classList.add('translate-y-32');
        }
    });

    // --- GESTION DE LA VUE DÉTAILS ---
    let section = document.getElementById('section');

    function detailBulder(id, cartImg, cartName, nbreyellow, nbreboth, nbrevide, courteDescription, prix, lescouleurs) {
        section.innerHTML = ""; // Clear existing content
        
        // IMAGE CONTAINER
        const divImg = `
            <div class="animate-details">
                <div class="relative group bg-white p-4 rounded-[2.5rem] shadow-2xl shadow-gray-200/50 border border-gray-100 overflow-hidden">
                    <img src="../imagesuploade/${cartImg}" class="w-full h-auto object-cover rounded-[2rem] group-hover:scale-105 transition-transform duration-700" alt="${cartName}">
                    <div class="absolute top-8 left-8 bg-white/90 backdrop-blur px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-widest shadow-sm">Nouveauté</div>
                </div>
            </div>
        `;

        // STARS GENERATOR
        let starsHtml = '';
        for(let i=0; i<nbreyellow; i++) starsHtml += "<i class='fa-solid fa-star'></i>";
        for(let i=0; i<nbreboth; i++) starsHtml += "<i class='fa-solid fa-star-half-stroke'></i>";
        for(let i=0; i<nbrevide; i++) starsHtml += "<i class='fa-regular fa-star text-gray-500'></i>";

        // COLORS OPTIONS
        let couleursArray = typeof lescouleurs === 'string' ? JSON.parse(lescouleurs) : lescouleurs;
        let optionsHtml = couleursArray.map(c => {
            let col = typeof c === 'string' ? JSON.parse(c) : c;
            return `<option value="${col.value}">${col.nom}</option>`;
        }).join('');

        // INFOS CONTAINER
        const divInfos = `
            <div class="animate-details space-y-8 md:pl-6" style="animation-delay: 0.2s">
                <div>
                    <h1 class="text-4xl md:text-5xl font-black text-gray-900 mb-4 tracking-tight">${cartName}</h1>
                    <div class="flex items-center gap-3">
                        <div class="flex text-amber-400 text-sm">${starsHtml}</div>
                        <span class="text-gray-400 text-xs font-bold uppercase tracking-tighter border-l pl-3 border-gray-200">Qualité Garantie</span>
                    </div>
                </div>

                <p class="text-gray-500 text-lg leading-relaxed italic border-l-4 border-emerald-500 pl-6 bg-emerald-50/50 py-4 rounded-r-xl">
                    "${courteDescription}"
                </p>

                <div class="flex items-baseline gap-2">
                    <span class="text-5xl font-black text-emerald-600">${prix}</span>
                    <span class="text-xl font-bold text-emerald-600/60 uppercase">XOF</span>
                </div>

                <div class="bg-white p-8 rounded-3xl border border-gray-100 shadow-sm space-y-6">
                    <div class="space-y-3">
                        <label class="block text-xs font-black uppercase tracking-widest text-gray-400">Choisir une couleur</label>
                        <select id="color" class="w-full bg-gray-50 border-2 border-gray-100 rounded-2xl px-4 py-4 outline-none focus:border-emerald-500 transition-all font-semibold">
                            <option value="" disabled selected>Cliquez pour choisir...</option>
                            ${optionsHtml}
                        </select>
                    </div>

                    <div class="space-y-3">
                        <label class="block text-xs font-black uppercase tracking-widest text-gray-400">Quantité</label>
                        <div class="flex items-center gap-6">
                            <div class="flex items-center bg-gray-100 rounded-2xl p-1 border border-gray-200">
                                <button class="moins w-12 h-12 flex items-center justify-center text-2xl font-bold text-gray-600 hover:bg-white rounded-xl transition-all cursor-pointer">-</button>
                                <span class="combien px-6 text-xl font-black text-gray-800">1</span>
                                <button class="plus w-12 h-12 flex items-center justify-center text-2xl font-bold text-gray-600 hover:bg-white rounded-xl transition-all cursor-pointer">+</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row gap-4">
                    <button class="valid flex-2 bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-5 rounded-2xl shadow-xl shadow-emerald-200 transition-all active:scale-95 cursor-pointer flex items-center justify-center gap-3">
                        <i class='bx bx-cart-add text-2xl'></i> AJOUTER AU PANIER
                    </button>
                    <a href="index.php" class="flex-1 bg-white border-2 border-gray-100 text-gray-500 font-bold py-5 rounded-2xl hover:bg-gray-50 transition-all flex items-center justify-center gap-2">
                        <i class='bx bx-arrow-back text-xl'></i> RETOUR
                    </a>
                </div>
            </div>
        `;

        section.innerHTML = divImg + divInfos;
    }

    // --- LOGIQUE PANIER & BOUTIQUE ---
    let quantite = document.querySelector('.quantite');
    quantite.innerHTML = localStorage.getItem('nbreDequantite') || 0;
    let acheters = JSON.parse(localStorage.getItem('acheters')) || [];
    let index = document.getElementById('index').value;

    async function boutique() {
        const response = await fetch('?see=' + index);
        const article = await response.json();
        
        detailBulder(article.id, article.cartImg, article.cartName, article.nbreyellow, article.nbreboth, article.nbrevide, article.courteDescription, article.prix, article.lescouleurs);

        let moins = document.querySelector('.moins');
        let plus = document.querySelector('.plus');
        let combienecrit = document.querySelector('.combien');
        let combien = 1;

        moins.addEventListener('click', () => {
            if (combien > 1) {
                combien--;
                combienecrit.innerHTML = combien;
            }
        });

        plus.addEventListener('click', () => {
            combien++;
            combienecrit.innerHTML = combien;
        });

        document.querySelector('.valid').addEventListener('click', () => {
            let defaut = "couleur présentée";
            let select = document.getElementById('color');
            if (select.value != "") {
                defaut = select.options[select.selectedIndex].text;
            }

            let nbreDequantite = parseInt(quantite.innerHTML) + combien;
            quantite.innerHTML = nbreDequantite;
            localStorage.setItem('nbreDequantite', nbreDequantite);

            acheters.push({ "nom": article.cartName, "prix": article.prix, "quantite": combien, 'couleur': defaut });
            localStorage.setItem('acheters', JSON.stringify(acheters));

            // Petite animation de confirmation
            alert(`${combien} x ${article.cartName} ajouté au panier !`);
        });
    }

    document.addEventListener('DOMContentLoaded', boutique);

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
        
            // 🔹 chercher / créer le message local
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
    let numeroDeTelephone = "2290194853019";

    // Ouverture WhatsApp
    window.open(
        `https://wa.me/${numeroDeTelephone}?text=${encodedMessage}`,
        "_blank"
    );
});

</script>
</body>
</html>