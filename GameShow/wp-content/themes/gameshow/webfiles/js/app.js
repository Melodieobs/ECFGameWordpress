let div = document.createElement('div')
let body = document.querySelector('body')
buttonTop = document.querySelector(".buttonDebut")
div.classList = 'buttonDebut';

window.addEventListener("scroll", ()=>{
    buttonTop = document.querySelector(".buttonDebut")
    if(window.scrollY > 800 && !buttonTop){
        body.append(div)
    } 
    if(window.scrollY <= 800  && buttonTop){
        buttonTop.remove()
    }
});

if(window.scrollY <= 800 && buttonTop){
    buttonTop.remove()
}
if(window.scrollY > 800 && !buttonTop){
    body.append(div)
}


div.addEventListener('click', e => {
    window.scrollTo({top : 0, behavior : 'smooth' })
});
console.log(window.scrollY)