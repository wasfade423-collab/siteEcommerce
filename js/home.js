//burger options
let burger = document.querySelector('.burger');
let nav = document.querySelector('.navigation');
let etat = true;
burger.addEventListener('click', ()=>{
    console.log(3);
    nav.classList.toggle('-translate-x-100');
    if(etat){
        burger.innerHTML = "&times;";
        etat=!etat;
    }else{
        burger.innerHTML = "&equiv;";
        etat=!etat;
    }
})
//faire varieer le bg sur petit ecran 
    let hero = document.getElementsByClassName('hero')[0];
    let urls = ['../images/gale.png','../images/base.png'];
    let index = 0;
//vareur bg
    function varieur(){
        hero.style.backgroundImage = "url('"+urls[index]+"";
        index++;
        if(index>=urls.length){
            index=0;
        }
    }
    if(window.innerWidth<768){
        setInterval(varieur, 2700);
    }else{
        clearInterval(setInterval(varieur, 2500));
    }
//ecouter le scroll    
    const  scrollup = ()=>{
        const btn = document.getElementById('scroll-up');
        if(scrollY>=0){
            btn.classList.remove('bottom-0');
            btn.classList.add('bottom-2');
        }else{
            btn.classList.remove('bottom-2');
            btn.classList.add('bottom-0');

        }
    }
    window.addEventListener('scroll', scrollup);

//définis les articles.


//divbulder
    function articleBulder(id, status, cartImg, cartName, nbreyellow,nbreboth, nbrevide, prix){
        let div= document.createElement('article');
        div.className='cursor-pointer article hover:shadow-2xl hover:scale-105 mb-[10px] bg-gray-500/10 transition-all duration-300  md:w-1/6 max-md:basis-[45%] relative rounded-t-md';
        let numero=document.createElement('i');
        numero.innerHTML = id;
        numero.className = 'hidden';
        div.insertAdjacentElement('beforeend', numero);
        let span1 = document.createElement('span');
        if(status== "populaire"){
            span1.className='absolute bg-[#EBBD32] z-10 px-1 rounded-[6px] top-0 right-0 max-md:py-[1px] text-sm max-md:right-0 max-md:rounded-[2px] max-md:text-[10px]';
            span1.innerHTML= "Populaire";
        } 
        else{
            if(status == "nouveau"){
                span1.className='absolute bg-green-800 z-10 px-1 rounded-[6px] top-0 right-0 max-md:py-[1px] text-sm max-md:right-0 max-md:rounded-[2px] text-white max-md:text-[10px]';
                span1.innerHTML = "Nouveau"; 
            }
            if(status == "limité"){
                span1.className='absolute bg-red-500 z-10 px-1 rounded-[6px] top-0 right-0 max-md:py-[1px] text-sm max-md:right-0 max-md:rounded-[2px] text-white max-md:text-[10px]';
                span1.innerHTML = "Limité"; 
            }
        }
        div.insertAdjacentElement('beforeend', span1);//insertion de populaire
        let divfil1 = document.createElement('div');
        divfil1.className='bg-gray-500/20 w-full rounded-t-[15px] p-2';
        let img = document.createElement('img'); 
        img.src =cartImg;
        img.className = "w-full h-[150px] object-cover bg-gray-300"; 
        img.alt = "Chargement...";
        divfil1.insertAdjacentElement('afterbegin', img);
        div.insertAdjacentElement('beforeend', divfil1)//insertionde l'image
        
        let h3 = document.createElement('h3');
        h3.className='md:font-bold cartName md:text-center md:text-xl max-md:text-[12px] max-md:font-semibold max-md:mt-1';
        h3.innerHTML = cartName;
        div.insertAdjacentElement('beforeend', h3);//insertion du nom du poduit

        let divfil2 = document.createElement('div');
        divfil2.className='text-yellow-500 text-xs';
        if(nbreyellow!=0){
            for(i=0;i<nbreyellow;i++){
                let star = document.createElement('i');
                star.className='fa-solid fa-star';
                divfil2.insertAdjacentElement('beforeend', star);
            }
        }
        if(nbreboth!=0){
            for(i=0;i<nbreboth;i++){
                let star = document.createElement('i');
                star.className='fa-solid fa-star-half-stroke text-gray-500';
                divfil2.insertAdjacentElement('beforeend', star);
            }
        }
        if(nbrevide!=0){
            for(i=0;i<nbrevide;i++){
                let star = document.createElement('i');
                star.className='fa-regular fa-star text-gray-500';
                divfil2.insertAdjacentElement('beforeend', star);
            }
        }  
        div.insertAdjacentElement('beforeend',divfil2);  //insetion des 

        let divfil3 = document.createElement('div');
        divfil3.className='max-md:flex flex md:gap-20 max-md:gap-[8px] max-md:items-center justify-between'
        let span2 = document.createElement('span');
        span2.className='md:mt-2 max-md:text-[15px]';
        span2.innerHTML = prix+"XOF";
        divfil3.insertAdjacentElement('beforeend', span2);  
        let btn = document.createElement('button');
        btn.className='relative check rounded-full border md:p-2 max-md:p-1 md:w-[40px] md:h-[40px] max-md:w-[25px] max-md:h-[25px]'
        
        let img2 = document.createElement('img');
        img2.src= "../images/add-to-cart.png";
        img2.classList.add('w-full');
        btn.insertAdjacentElement('beforeend', img2);
        divfil3.insertAdjacentElement('beforeend', btn);
        div.insertAdjacentElement('beforeend', divfil3); //insertion des informations du prix et autre
        return div;
    }
//affichage
let disponibles = ['nouveau', 'limité', 'populaire'];
let acheters = [];
async function boutique(categorie){
    let bgarticles = document.querySelectorAll('.bgarticles');
    for(index = 0; index<bgarticles.length; index++){
        categorie = disponibles[index];
        const response = await fetch('../controller/controller.php?categorie='+categorie+'');
        const articles = await response.json();
              
            bgarticles[index].classList.add('flex','flex-wrap','gap-3','justify-center');
                    if (!bgarticles) return;
                    bgarticles[index].innerHTML = "";
        
                    articles.forEach(item => {
                        let article = articleBulder(
                            item.id,
                            item.status.toLowerCase(),
                            item.cartImg,
                            item.cartName,
                            item.nbreyellow,
                            item.nbreboth,
                            item.nbrevide,
                            item.prix,
                            item.id
                        );
                        bgarticles[index].appendChild(article);
                    });
    }
            let quantite = document.querySelector('.quantite');
            let nbreDequantite = Number(quantite.innerHTML);
            let checks=document.querySelectorAll('.check');
            checks.forEach(check=>{
                check.classList.add('cursor-pointer');
                check.addEventListener('click', ()=>{
                    let parent = check.closest('article'); 
                    let h3 = parent.getElementsByTagName('h3')[0].textContent;    
                    let nbreVoulu = 1;
                    let prix = parseInt(check.closest('div').getElementsByTagName('span')[0].textContent);             
                    check.classList.toggle('valid');
                    if(check.classList.contains('valid')){
                        check.style.backgroundColor='green';
                        check.innerHTML = "";
                        check.innerHTML= "<img src='../images/afterpaye.png'>";
                        nbreDequantite++;
                        //console.log(nbreDequantite);
                        quantite.innerHTML = nbreDequantite;        
                        acheters.push({'nom':h3,'prix':prix, 'quantite':nbreVoulu});
                        //console.log(acheters);
                    }else{
                        check.style.backgroundColor='transparent';
                        check.innerHTML = "";
                        check.innerHTML= "<img src='../images/add-to-cart.png'>";        
                        nbreDequantite--;                                
                        //console.log(nbreDequantite);
                        quantite.innerHTML = nbreDequantite;
                        let index = acheters.findIndex(item=> item.nom === h3 && item.prix === prix && item.quantite == nbreVoulu);
                        if(index !==-1){
                            acheters.splice(index, 1);
                            //console.log(acheters);
                        }
                    }
                })   
            }) 
}
document.addEventListener("DOMContentLoaded", boutique("nouveau"));


//comprotement quad la personne recherche du contenu.
let searchBar = document.querySelector('.searchBar');
let bgarticles = document.querySelectorAll('.bgarticles');

searchBar.addEventListener('input', () => {

    let valeur = searchBar.value.toLowerCase().trim();

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
 

//formulation du message pour whatsapp au click de panier Vert
// let quantite = document.querySelector('.quantite');
// let body = document.getElementsByTagName('body')[0];
// panier.addEventListener('click', ()=>{
//     let divDeConfirmation = document.createElement('div');
//     divDeConfirmation.className = 'rounded-lg z-1000 absolute bg-green-400 px-2 py-1 min-h-[300px] min-w-[300px] flex justify-center items-center font-medium';
//     if(parseInt(quantite.textContent) == 0){
//         divDeConfirmation.innerHTML = "Vous n'avez aucun achat...";
//     }else{

//     }
//     body.insertAdjacentElement('afterbegin', divDeConfirmation);
// })

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
        message += `   Prix : ${item.prix} XOF\n`;
        message += `   Sous-total : ${subTotal} XOF\n\n`;
    });

    message += `*Total à payer : ${total} XOF*\n\n`;
    message += "C'est quoi la prochaine étape?";

    // Encodage du message pour l’URL
    let encodedMessage = encodeURIComponent(message);

    // Numéro WhatsApp (sans + ni espaces , ni 01)
    let numeroDeTelephone = "22994853019";

    // Ouverture WhatsApp
    window.open(
        `https://wa.me/${numeroDeTelephone}?text=${encodedMessage}`,
        "_blank"
    );
});

let articles = document.querySelectorAll('.article');
articles.forEach(article=>{
    article.addEventListener('click',()=>{
        article.classList.add('bg-red-500');
        console.log(4);
    })
})   