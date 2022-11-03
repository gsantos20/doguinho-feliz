// //===== MENU SHOW Y HIDDEN =====

// // if(.classList.contains(className))

// const navMenu = document.getElementById('nav');
//  const toggleMenu = document.getElementById('navbar-toggler');
//  const closeMenu = document.getElementById('buttonClose');
 

//   /*SHOW*/
//   toggleMenu.addEventListener('click', ()=>{
//     navMenu.classList.toggle('show');
//     closeMenu.style.display="block";
//   });

//   /*HIDDEN*/
//   closeMenu.addEventListener('click', ()=>{
//     navMenu.classList.remove('show');
//   });

//   /*===== ACTIVE AND REMOVE MENU =====*/
//    const navLink = document.querySelectorAll('.dropdown-item');

//    function linkAction(){
//    /*Active link*/
//    navLink.forEach(n => n.classList.remove('active'));
//    this.classList.add('active');

//    /*Remove menu mobile*/
//    navMenu.classList.remove('show')
//    }
//    navLink.forEach(n => n.addEventListener('click', linkAction));



// const btnMobile = document.getElementById('btn-mobile');

// function toggleMenu(){
//   const nav = document.getElementById('nav');
//   const icon = document.getElementById('icon-fa');
//   nav.classList.toggle('active');
//   icon.classList.toggle('fa-2x')
  
// }

// /* quando clicar em um item do menu, esconder o menu */
// const links = document.querySelectorAll("nav ul li a");

// for (const link of links) {
//   link.addEventListener("click", function () {
//     nav.classList.remove("show");
//   });
// }

/* mudar o header da página quando der scroll */
const header = document.querySelector("#header");
const navHeight = header.offsetHeight;

function changeHeaderWhenScroll() {
  if (window.scrollY >= navHeight) {
    // scroll é maior que a altura do header
    header.classList.add("scroll");
  } else {
    // menor que a altura do header
    header.classList.remove("scroll");
  }
}

const swiper = new Swiper(".swiper", {
  slidesPerView: 3,
  pagination: {
    el: ".swiper-pagination",
  },
  mousewheel: true,
  preventInteractionOnTransition: true,
  keyboard: true,
  mousewheel: {
		forceToAxis: true,
	},
  breakpoints: {
    768: {
      slidesPerView: 1,
      setWrapperSize: true,
    },
    300: {
    slidesPerView: 1,
    setWrapperSize: true,
    },
    900: {
      slidesPerView: 1,
      setWrapperSize: true,
      },
    1268: {
      slidesPerView: 3,
      setWrapperSize: true,
      }
  },
});

/* ScrollReveal: Mostrar elementos quando der scroll na página */
const scrollReveal = ScrollReveal({
  origin: "top",
  distance: "30px",
  duration: 700,
  reset: true,
});

scrollReveal.reveal(
  `#home .image, #home .text,
  #about .image, #about .text,
  #services header, #services .card,
  #testimonials header, #testimonials .testimonials
  #contact .text, #contact .links,
  footer .brand, footer .social
  `,
  { interval: 100 }
);

/* Botão voltar para o topo */
const backToTopButton = document.querySelector(".back-to-top");

function backToTop() {
  if (window.scrollY >= 560) {
    backToTopButton.classList.add("show");
  } else {
    backToTopButton.classList.remove("show");
  }
}

/* Menu ativo conforme a seção visível na página */
const sections = document.querySelectorAll("main section[id]");
function activateMenuAtCurrentSection() {
  const checkpoint = window.pageYOffset + (window.innerHeight / 8) * 4;

  for (const section of sections) {
    const sectionTop = section.offsetTop;
    const sectionHeight = section.offsetHeight;
    const sectionId = section.getAttribute("id");

    const checkpointStart = checkpoint >= sectionTop;
    const checkpointEnd = checkpoint <= sectionTop + sectionHeight;

    if (checkpointStart && checkpointEnd) {
      document
        .querySelector("nav ul li a[href*=" + sectionId + "]")
        .classList.add("active");
    } else {
      document
        .querySelector("nav ul li a[href*=" + sectionId + "]")
        .classList.remove("active");
    }
  }
}

/* When Scroll */
window.addEventListener("scroll", function () {
  changeHeaderWhenScroll();
  backToTop();
  activateMenuAtCurrentSection();
});

function cadastrar() {
  window.location.href = "cadastrar.html";
}

function VoltarLogin() {
  window.location.href = "login.html";
}

function NotHaveYet() {
  document.getElementById("NotHaveYet").innerHTML = "It is not done yet";
}
function NoHaveYet() {
  document.getElementById("NoHaveYet").innerHTML = "It is not done yet";
}

const list = document.querySelectorAll(".list");
function activeLink() {
  list.forEach((item) => item.classList.remove("active"));
  this.classList.add(`active`);
}

list.forEach((item) => item.addEventListener("click", activeLink));
