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
    // let tables = [
    //     {
    //         status: "populaire",
    //         cartImg: "https://picsum.photos/200",
    //         cartName: "Casque",
    //         nbreyellow: 4,
    //         nbreboth: 0,
    //         nbrevide: 1
    //     },
    //     {
    //         status: "nouveau",
    //         cartImg: "https://picsum.photos/200",
    //         cartName: "Casque",
    //         nbreyellow: 4,
    //         nbreboth: 0,
    //         nbrevide: 1
    //     },   
    //     {
    //         status: "populaire",
    //         cartImg: "https://picsum.photos/200",
    //         cartName: "Casque",
    //         nbreyellow: 4,
    //         nbreboth: 0,
    //         nbrevide: 1
    //     },
    //     {
    //         status: "nouveau",
    //         cartImg: "https://picsum.photos/200",
    //         cartName: "Casque",
    //         nbreyellow: 4,
    //         nbreboth: 0,
    //         nbrevide: 1
    //     },          
    //     {
    //         status: "populaire",
    //         cartImg: "https://picsum.photos/200",
    //         cartName: "Casque",
    //         nbreyellow: 4,
    //         nbreboth: 0,
    //         nbrevide: 1
    //     },             
    //     {
    //         status: "nouveau",
    //         cartImg: "https://picsum.photos/200",
    //         cartName: "Casque Pro",
    //         nbreyellow: 3,
    //         nbreboth: 1,
    //         nbrevide: 1
    //     },   
    //     {
    //         status: "nouveau",
    //         cartImg: "https://picsum.photos/200",
    //         cartName: "Casque Pro",
    //         nbreyellow: 3,
    //         nbreboth: 1,
    //         nbrevide: 1
    //     }, 
    //     {
    //         status: "nouveau",
    //         cartImg: "https://picsum.photos/200",
    //         cartName: "Casque Pro",
    //         nbreyellow: 3,
    //         nbreboth: 1,
    //         nbrevide: 1
    //     }, 
    //     {
    //         status: "nouveau",
    //         cartImg: "https://picsum.photos/200",
    //         cartName: "Casque Pro",
    //         nbreyellow: 3,
    //         nbreboth: 1,
    //         nbrevide: 1
    //     }, 
    //     {
    //         status: "nouveau",
    //         cartImg: "https://picsum.photos/200",
    //         cartName: "Casque Pro",
    //         nbreyellow: 3,
    //         nbreboth: 1,
    //         nbrevide: 1
    //     }                                       
    // ]

//divbulder
    function articleBulder(status, cartImg, cartName, nbreyellow,nbreboth, nbrevide, prix){
        let div= document.createElement('div');
        div.className='cursor-pointer article hover:shadow-2xl hover:scale-105 mb-[10px] bg-gray-500/10 transition-all duration-300  md:w-1/6 max-md:basis-[45%] relative rounded-t-md';
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
        h3.className='md:font-bold md:text-center md:text-xl max-md:text-[12px] max-md:font-semibold max-md:mt-1';
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
        span2.innerHTML = prix+" XOF<span class=\"text-gray-500 line-through text-[8px] md:hidden\">2000 XOF</span>"
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

console.log(4);
async function boutique(categorie="nouveau"){
    const response = await fetch('../controller/controller.php?categorie='+categorie+'');
    const articles = await response.json();
        let bgarticles = document.querySelector('.bgarticles'); //partie article 
        bgarticles.classList.add('flex','flex-wrap','gap-3','justify-center');
                if (!bgarticles) return;
                bgarticles.innerHTML = "";
    
                articles.forEach(item => {
                    let article = articleBulder(
                        item.status.toLowerCase(),
                        item.cartImg,
                        item.cartName,
                        item.nbreyellow,
                        item.nbreboth,
                        item.nbrevide,
                        item.prix
                    );
                    bgarticles.appendChild(article);
                });
            let quantite = document.querySelector('.quantite');
            let nbreDequantite = 0;
            let checks=document.querySelectorAll('.check');
            checks.forEach(check=>{
                check.classList.add('cursor-pointer');
                check.addEventListener('click', ()=>{
                    check.classList.toggle('valid');
                    if(check.classList.contains('valid')){
                        check.style.backgroundColor='green';
                        check.innerHTML = "";
                        check.innerHTML= "<img src='../images/afterpaye.png'>";
                        nbreDequantite++;
                        console.log(nbreDequantite);
                        quantite.innerHTML = nbreDequantite;                    
                        
                    }else{
                        check.style.backgroundColor='transparent';
                        check.innerHTML = "";
                        check.innerHTML= "<img src='../images/add-to-cart.png'>";        
                        nbreDequantite--;                                
                        console.log(nbreDequantite);
                        quantite.innerHTML = nbreDequantite;
                    }
                })   
            }) 
}
    document.addEventListener("DOMContentLoaded", boutique());
// console.log(bgarticles);
// console.log(articles);





   