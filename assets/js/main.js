var faq = document.getElementsByClassName("faq-box-question");
var i;
for(i = 0; i < faq.length; i++){
    faq[i].addEventListener("click", function() {
        this.classList.toggle("active");

        var body = this.nextElementSibling;
        if(body.style.maxHeight == "100px"){
            body.style.maxHeight = "0px"
        }
        else{
            body.style.maxHeight = "100px"
        }
    });
}


//nav menu togggle

let menu = document.querySelector('#menu-icon');
let navlist = document.querySelector('.navlist');

menu.onclick = () => {
	menu.classList.toggle('bx-x');
	navlist.classList.toggle('open');
}

window.onscroll = () => {
	menu.classList.remove('bx-x');
	navlist.classList.remove('open');
}



const navLinks = document.querySelectorAll('a.nav_links');

navLinks.forEach(navLink => {
    navLink.addEventListener('click', () => {
        document.querySelector('.active')?.classList.remove('active');
        navLink.classList.add('active');
    });
});

  


// scroll up 
const scrollUp = () =>{
	const scrollUp = document.getElementById('scroll-up')
    // When the scroll is higher than 350 viewport height, add the show-scroll class to the a tag with the scrollup class
	this.scrollY >= 350 ? scrollUp.classList.add('show-scroll')
						: scrollUp.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollUp);

const header = document.getElementById('header');

// Function to add or remove the 'sticky' class based on scroll position
function toggleStickyHeader() {
    if (window.scrollY > 0) {
        header.classList.add('sticky'); // Add the 'sticky' class when scrolled
    } else {
        header.classList.remove('sticky'); // Remove the 'sticky' class when not scrolled
    }
}

// Add scroll event listener to window
window.addEventListener('scroll', toggleStickyHeader);

// scroll reveal section........

ScrollReveal({
    distance: '80px',
    duration: 2000,
    delay: 200,
});

ScrollReveal().reveal('.home-content', { origin: 'top' });
ScrollReveal().reveal('.home-img', { origin: 'left' });
ScrollReveal().reveal('.works', { origin: 'top' });
ScrollReveal().reveal('.work-icon', { origin: 'right' });
ScrollReveal().reveal('.media-body', { origin: 'top' });



