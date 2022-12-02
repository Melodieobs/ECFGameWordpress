let burgerMenu = document.querySelector('#burgerMenu');
let nav = document.querySelector('nav')

burgerMenu.addEventListener('click', e =>{
    nav.classList.toggle('activeMenu')
    burgerMenu.classList.toggle('activeMenu')

});


/* let sections = document.querySelectorAll('section')
let link = document.querySelectorAll('nav a')

let observer = new IntersectionObserver(function(inputs){
    inputs.forEach(singleInput => {
        if(singleInput.isIntersecting){
    
            let currentImg = singleInput.target.querySelector('img');
            let src = currentImg.getAttribute('data-src');

            currentImg.setAttribute('src', src)
            aside.forEach( link => {
                link.classList.toggle('test')
            });
        
        observer.unobserve(singleInput.target);
        currentImg.removeAttribute('data-src')
        }
    });
});
sections.forEach(section => {
    observer.observe(section);
});

link.forEach(element => {
    console.log(element);
    element.addEventListener('click', e => {
        burgerMenu.classList.remove('activeMenu')
        nav.classList.remove('activeMenu')
        e.preventDefault();
        let secRef = element.getAttribute('href').replace('#', '');
        let section = document.getElementById(secRef)
        let position = section.offsetTop
        console.log(position)
        window.scrollTo({top : position, behavior : 'smooth'})         
    });
   console.log(element)
}); */
