function scrollToTop() {
    window.scrollTo({top: 0, behavior: 'smooth'});
}

window.addEventListener('scroll', function() {
    const currentScrollPosition = window.scrollY;
    // scrollY returns the number of pixels that the document is currently scrolled vertically

    const scrollBtn = document.getElementById('scroll');
    // in css, you query the html tag is: #scroll

    if (currentScrollPosition !== 0) {
        scrollBtn.setAttribute('style', 'display: block;');
        // this will add the style attribute
        // <a style="display: block;">...</a>
    } else {
        scrollBtn.setAttribute('style', 'display: none;');
    }
});
function toggleScrollButton() {
    const lastPosition = window.scrollY;
    const scrollBtn = document.getElementById('scroll');

    if (lastPosition !== 0) {
        scrollBtn.setAttribute('style', 'display: block;');
    } else {
        scrollBtn.setAttribute('style', 'display: none;');
    }
}

window.addEventListener('scroll', function() {
    toggleScrollButton();
});

window.addEventListener('load', () => {
    toggleScrollButton();
});

function showLoginForm() {
    const form = document.getElementById('login');
    
    if (!form) { return; }
    
    form.style.display = form.style.display ? '' : 'block';
}

function showLoginForm() {
    const form = document.getElementById('login');
    
    if (!form) { return; }
    
    form.style.display = form.style.display ? '' : 'block';
}
