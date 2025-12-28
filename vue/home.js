let hero = document.getElementsByClassName('hero')[0];
let urls = ['../images/gale.png','../images/base.png'];
let index = 0;
if(window.innerWidth<768){
    let animationHome=setInterval(()=>{
        hero.style.backgroundImage = "url('"+urls[index]+"";
        index++;
        if(index>=urls.length){
            index=0;
        }
    },2500)
}else{
    clearInterval(animationHome);
}