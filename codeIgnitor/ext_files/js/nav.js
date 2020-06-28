const nav_slide = ()=>{
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const nav_links = document.querySelectorAll('.nav-links li');

    burger.addEventListener('click',e=>{
        nav.classList.toggle('nav-active')
        nav_links.forEach((link,index)=>{
            if(link.style.animation)
            link.style.animation = ''
            else
            link.style.animation = `navLinkFade 0.5 ease forwards ${index/7 + 1.2}s`;
        })
    });

    
}

nav_slide();