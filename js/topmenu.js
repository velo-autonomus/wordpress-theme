var previousScroll = 0;
document.addEventListener("DOMContentLoaded", function() {
    if(document.getElementById('header').getAttribute('class')=='dynamicColor') {
        console.log('DYNAMIC COLOR');
        document.addEventListener('scroll', () => {
            var header = document.getElementById('header');
            if(!header) return;
            if(window.scrollY > window.innerHeight-30){
                if(window.scrollY + 10 < previousScroll) {
                    header.classList.remove('hidden');
                    header.classList.add('black');
                }else if(window.scrollY > previousScroll){
                    header.classList.add('hidden');
                }
            }else{
                header.classList.remove('black');
                header.classList.remove('hidden');
            }
            previousScroll = window.scrollY;
        })
    }
});

function openMobileNav() {
    document.getElementById('mobileNav').classList.add('open');
}

function closeMobileNav() {
    document.getElementById('mobileNav').classList.remove('open');
}
