const navToggler = document.querySelector('.navbar-toggler');
console.log(navToggler)

navToggler.addEventListener('click', navToggle);


function navToggle(){
    navToggler.classList.toggle('active')
    const nav = document.querySelector('.nav');
    nav.classList.toggle('open');
    if(nav.classList.contains('open')){
        nav.style.height = nav.scrollHeight + "px"
    }else{
        nav.style.height = ""
    }
}