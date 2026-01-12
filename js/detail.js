//burger options
let burger = document.querySelector('.burger');
let nav = document.querySelector('.navigation');
let etat = true;
burger.addEventListener('click', ()=>{
    nav.classList.toggle('-translate-x-100');
    if(etat){
        burger.innerHTML = "&times;";
        etat=!etat;
    }else{
        burger.innerHTML = "&equiv;";
        etat=!etat;
    }
})

//ecouter le scroll    
    const  scrollup = ()=>{
        const btn = document.getElementById('scroll-up');
        if(scrollY>=0){
            btn.classList.remove('hidden');
            btn.classList.add('bottom-2');
        }else{
            btn.classList.remove('bottom-2');
            btn.classList.add('hidden');

        }
    }
    window.addEventListener('scroll', scrollup);
//gestion de la vue
let section = document.getElementById('section');
function detailBulder(id, cartImg, cartName, nbreyellow,nbreboth, nbrevide, courteDescription, prix, lescouleurs){
    let div1 =document.createElement('div');
    div1.className = "md:relative md:w-1/2 max-md:w-9/10";
    let img = document.createElement('img');
    img.src = '../imagesuploade/'+cartImg;
    img.className= "object-cover object-center w-full";
    div1.insertAdjacentElement('beforeend', img);
    
    section.insertAdjacentElement('beforeend', div1);    
    //second div de la section
    let div2 = document.createElement('div');
    div2.className = "md:w-1/2 md:p-2 max-md:w-9/10 flex flex-col gap-2";

    //nom et stars
    let h3 = document.createElement('h3');
    h3.className= "flex my-2 px-2 justify-between items-center";
    let span1 = document.createElement('span');
    span1.className = "text-center font-bold text-2xl"
    span1.innerHTML = cartName;
    h3.insertAdjacentElement('beforeend', span1);

    //les stars
    let divDeh3 = document.createElement('div');
    divDeh3.className='text-yellow-500 text-lg';
    if(nbreyellow!=0){
        for(i=0;i<nbreyellow;i++){
            let star = document.createElement('i');
            star.className='fa-solid fa-star';
            divDeh3.insertAdjacentElement('beforeend', star);
        }
    }
    if(nbreboth!=0){
        for(i=0;i<nbreboth;i++){
           let star = document.createElement('i');
            star.className='fa-solid fa-star-half-stroke text-gray-500';
            divDeh3.insertAdjacentElement('beforeend', star);
        }
    }
    if(nbrevide!=0){
        for(i=0;i<nbrevide;i++){
            let star = document.createElement('i');
            star.className='fa-regular fa-star text-gray-500';
            divDeh3.insertAdjacentElement('beforeend', star);
        }
    } 
    h3.insertAdjacentElement('beforeend', divDeh3);
    
    div2.insertAdjacentElement('beforeend', h3);
    //description
    let span2 = document.createElement('span');
    span2.className = "my-2"
    span2.innerHTML  = courteDescription;
    div2.insertAdjacentElement('beforeend', span2);
    
    //prix
    let div3 = document.createElement('div');
    div3.className = "text-2xl";
    let span3 = document.createElement('span');
    span3.className="font-bold";
    span3.innerHTML = "Unité : ";
    div3.insertAdjacentElement('beforeend', span3);
    let span4 = document.createElement('span');
    span4.innerHTML = prix+" XOF";
    div3.insertAdjacentElement('beforeend', span4);
    div2.insertAdjacentElement('beforeend', div3);
    
    //choix et nbre
    let div5 = document.createElement('div');
    div5.className = "flex max-md:flex-row max-md:justify-between  md:flex-col";
    let select= document.createElement('select');
    select.className = "w-2/5 my-2 rounded-sm outline-none p-1 border border-green-800 text-green-800 text-lg"; 
    select.name = "color";
    select.id = "color";
    let option0 = document.createElement('option');
    option0.value ="";
    option0.text = "Choisir une couleur";
    option0.selected = true;
    option0.disabled = true;
    select.insertAdjacentElement('beforeend', option0);
    let couleursArray = [];
    //si lescouleurs n'est pas un JSON on le transforme en JSON sinon on le garde 
    couleursArray = typeof lescouleurs === 'string' ? JSON.parse(lescouleurs) : lescouleurs;
    couleursArray.forEach(couleur=>{
        couleur = JSON.parse(couleur);
        let option = document.createElement('option');
        option.value = couleur.value;
        option.text =  couleur.nom;
        select.insertAdjacentElement('beforeend', option);
    })
    div5.insertAdjacentElement('beforeend', select);
    //quantité
    let div6 = document.createElement('div');
    div6.className = "flex gap-2 w-2/5";
    let btn3 = document.createElement('button');
    btn3.innerHTML = "-";
    btn3.className= "moins cursor-pointer active:scale-95 rounded-sm flex justify-center items-center border text-3xl text-green-800 border-green-800 h-[32px] w-[32px]";
    div6.insertAdjacentElement('beforeend', btn3);

    let btn4 = document.createElement('button');
    btn4.innerHTML = "1";
    btn4.className= "combien cursor-pointer rounded-sm border text-2xl border-green-800 active:scale-105 bg-green-800/80 text-white h-[32px] w-[32px]";
    div6.insertAdjacentElement('beforeend', btn4);


    let btn5 = document.createElement('button');
    btn5.innerHTML = "+";
    btn5.className= "plus cursor-pointer active:scale-95 rounded-sm text-green-800 flex justify-center items-center border text-3xl border-green-800 h-[32px] w-[32px]";
    div6.insertAdjacentElement('beforeend', btn5);

    div5.insertAdjacentElement('beforeend', div6);
    div2.insertAdjacentElement('beforeend', div5);

    //btnsaDction
    let div4 = document.createElement('div');
    div4.className="flex gap-4 justify-between items-center my-4";
    let btn1 = document.createElement('button');
    btn1.className="valid w-1/2 mx-4 cursor-pointer rounded-sm border text-2xl max-md:text-[15px] border-green-800 px-2 py-1 bg-green-800/80 text-white";
    btn1.innerHTML = "Ajouter au Panier";
    div4.insertAdjacentElement('beforeend', btn1);
    let btn2 = document.createElement('button');
    btn2.className="w-1/2 mx-4 cursor-pointer rounded-sm border border-green-800 py-1 px-2 text-green-800 text-3xl max-md:text-[15px]";
    btn2.innerHTML = "<a href='index.php'>Retour</a>";
    div4.insertAdjacentElement('beforeend', btn2);
    div2.insertAdjacentElement('beforeend', div4);

    section.insertAdjacentElement('beforeend', div2);



}
let quantite = document.querySelector('.quantite');
quantite.innerHTML = localStorage.getItem('nbreDequantite') != null ? parseInt(localStorage.getItem('nbreDequantite')) : 0;
let acheters = localStorage.getItem('acheters') != null ? JSON.parse(localStorage.getItem('acheters')) : [];
// console.log(acheters);
let index = document.getElementById('index').value;
let montantT = 0; 
async function boutique(){
        const response = await fetch('?see='+index+'');
        const article = await response.json();
        detailBulder(article.id, article.cartImg, article.cartName, article.nbreyellow, article.nbreboth, article.nbrevide, article.courteDescription, article.prix, article.lescouleurs);
            let moins = document.querySelector('.moins');
            let plus = document.querySelector('.plus');
            let combienecrit = document.querySelector('.combien');
            let combien = parseInt(document.querySelector('.combien').textContent)>=0 ? parseInt(document.querySelector('.combien').textContent) : 0;
            let nbreDequantite = parseInt(quantite.innerHTML);
            moins.addEventListener('click', ()=>{
                if(combien>0){
                    combien--;
                    combienecrit.innerHTML = combien >=0 ? combien : 0;
                }
            })
            plus.addEventListener('click', ()=>{
                combien++;
                combienecrit.innerHTML = combien >=0 ? combien : 0;
            })
            document.querySelector('.valid').addEventListener('click', ()=>{
                if(combien === 0){
                    alert('Vous essayez d\'ajouter 0 article!');
                }else{
                    nbreDequantite += combien;
                    //console.log(nbreDequantite);
                    let defaut = "couleur présentée";
                    let options = document.querySelectorAll('option');
                    options.forEach(option=>{
                        if(option.value !="" && option.selected === true){
                            defaut = option.text;
                        }
                    }) 
                    quantite.innerHTML = nbreDequantite;
                    localStorage.setItem('nbreDequantite', nbreDequantite);
                    acheters.push({"nom": article.cartName, "prix": article.prix, "quantite": combien, 'couleur': defaut})
                    // console.log(montantT);
                    // console.log(acheters);
                    localStorage.setItem('acheters', JSON.stringify(acheters));
                    
                }
            })

}
document.addEventListener('DOMContentLoaded', boutique);

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
    //console.log(total);
    message += `*Total à payer : ${total} XOF*\n\n`;
    message += "C'est quoi la prochaine étape?";
    // console.log(message);
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