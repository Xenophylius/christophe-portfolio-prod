var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    mousewheel: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: false, // Désactiver les ombres automatiques
    },
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    // Pagination
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      dynamicBullets: true,
    },
  });

  // ===== EFFET DE TYPING MODERNE =====
  
  // Textes à taper en rotation
  const typingTexts = [
    "Développeur Full-Stack",
    "Créateur d'Applications",
    "Expert WordPress", 
    "Expert Prestashop", 
    "Développeur Mobile"
  ];
  
  let currentTextIndex = 0;
  let currentCharIndex = 0;
  let isDeleting = false;
  const typingSpeed = 100;
  const deletingSpeed = 50;
  const pauseTime = 2000;
  
  function typeWriter() {
    const typedTextElement = document.getElementById('typed-text');
    if (!typedTextElement) return;
    
    const currentText = typingTexts[currentTextIndex];
    
    if (isDeleting) {
      // Suppression du texte
      typedTextElement.textContent = currentText.substring(0, currentCharIndex - 1);
      currentCharIndex--;
      
      if (currentCharIndex === 0) {
        isDeleting = false;
        currentTextIndex = (currentTextIndex + 1) % typingTexts.length;
        setTimeout(typeWriter, 500);
      } else {
        setTimeout(typeWriter, deletingSpeed);
      }
    } else {
      // Ajout du texte
      typedTextElement.textContent = currentText.substring(0, currentCharIndex + 1);
      currentCharIndex++;
      
      if (currentCharIndex === currentText.length) {
        isDeleting = true;
        setTimeout(typeWriter, pauseTime);
      } else {
        setTimeout(typeWriter, typingSpeed);
      }
    }
  }
  
  // Démarrer l'effet de typing après un délai
  setTimeout(typeWriter, 1000);

  document.querySelector('#lightMod').addEventListener('click', (ev) => {
    toggleClass()
    let root = document.querySelector(':root')
    root.style.setProperty('--main-bg-color', '#F4FBF6')
    root.style.setProperty('--second-bg-color', '#0E1511')
    root.style.setProperty('--icon-color', '#0E1511')
    root.style.setProperty('--gradient-mid-color', '#e8f5ea')
    let toggle = document.querySelector('#navToggle')
    toggle.classList.toggle('navbar-light')
    toggle.classList.toggle('navbar-dark')
    
  })

  document.querySelector('#darkMod').addEventListener('click', (ev) => {
    toggleClass()
    let root = document.querySelector(':root')
    root.style.setProperty('--main-bg-color', '#0E1511')
    root.style.setProperty('--second-bg-color', '#B2B3BD')
    root.style.setProperty('--icon-color', '#B2B3BD')
    root.style.setProperty('--gradient-mid-color', '#1a2e23')
    let toggle = document.querySelector('#navToggle')
    toggle.classList.toggle('navbar-light')
    toggle.classList.toggle('navbar-dark')
  })

  document.querySelector('#frenchMod').addEventListener('click', (ev) => {
    toggleClassLangage()
    toggleTextLangage('#nav0', 'À PROPOS')
    toggleTextLangage('#nav1', 'COMPÉTENCES')
    toggleTextLangage('#nav2', 'PROJETS')
    toggleTextLangage('#heroText1', 'Je suis ...')
    toggleTextLangage('#second', 'Développeur Web')
    toggleTextLangage('#third', 'Développeur Mobile')
    toggleTextLangage('#citation', "Vous n'avez pas besoin de savoir, apprenez simplement.")
    toggleTextLangage('#skill1', "EQUIPE")
    toggleTextLangage('#skill2', "MENEUR")
    toggleTextLangage('#skill3', "INTELLECT")
    toggleTextLangage('#skill4', "SOLVEUR")
    toggleTextLangage('#skill5', "SAVOIR")
    toggleTextLangage('#projectTitle', "PROJETS")
    toggleTextLangage('#contactName', "Nom")
    toggleTextLangage('#contactMail', "Adresse mail")
    toggleTextLangage('#contactButton', "Envoyer")
    
    
  })

  document.querySelector('#ukMod').addEventListener('click', (ev) => {
    toggleClassLangage()
    toggleTextLangage('#nav0', 'ABOUT')
    toggleTextLangage('#nav1', 'SKILLS')
    toggleTextLangage('#nav2', 'PROJECTS')
    toggleTextLangage('#heroText1', "I'M ...")
    toggleTextLangage('#second', 'Web Developer')
    toggleTextLangage('#third', 'Mobile Developer')
    toggleTextLangage('#citation', "You don't need to know, just learn.")
    toggleTextLangage('#skill1', "TEAM")
    toggleTextLangage('#skill2', "LEADER")
    toggleTextLangage('#skill3', "BRAIN")
    toggleTextLangage('#skill4', "SOLVER")
    toggleTextLangage('#skill5', "LEARNING")
    toggleTextLangage('#projectTitle', "PROJECTS")
    toggleTextLangage('#contactName', "Name")
    toggleTextLangage('#contactMail', "Email address")
    toggleTextLangage('#contactButton', "Send")
    
  })

  function toggleClass() {
    let darkMod = document.querySelector('#darkMod')
    darkMod.classList.toggle('d-none')
    let lightMod = document.querySelector('#lightMod')
    lightMod.classList.toggle('d-none')
    
    // Basculer la classe light-mode sur le body pour les styles
    document.body.classList.toggle('light-mode')
  }

  function toggleClassLangage() {
    let frenchMod = document.querySelector('#frenchMod')
    frenchMod.classList.toggle('d-none')
    let ukMod = document.querySelector('#ukMod')
    ukMod.classList.toggle('d-none')
  }

  function toggleTextLangage(idVariable, frenchText) {
    let idVar = document.querySelector(idVariable)
    idVar.innerText = frenchText
    
  }


let params = new URLSearchParams(document.location.search);
let success = params.get("success");
let error = params.get("error");

if (success != null) {
    toastr.options.positionClass = 'toast-top-center';
    toastr.options.showMethod = 'fadeIn';
    toastr.options.progressBar = true;
    toastr.options.closeButton = true;
    toastr.success(success);

  ;
}

if (error != null) {
    toastr.options.positionClass = 'toast-top-center';
    toastr.options.showMethod = 'fadeIn';
    toastr.options.progressBar = true;
    toastr.options.closeButton = true;
    toastr.error(error);
  ;
}
window.onload = function (){
  var mybutton = document.querySelector("#scrollButton");
    mybutton.style.opacity = 0;
    mybutton.style.visibility = "hidden"
}
window.onscroll = function () { scrollFunction() };

function scrollFunction() {
  // Get the button
    var mybutton = document.querySelector("#scrollButton");

    if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
        mybutton.style.opacity = 1;
        mybutton.style.visibility = "visible";
       
    } else {
        mybutton.style.opacity = 0;
        mybutton.style.visibility = "hidden";
        
    }
}

// window.addEventListener("DOMContentLoaded", (event) => {
//   animate_text();
// });
// function animate_text() 
// {
//   let delay = 70,
//       delay_start = 0,
//       contents,
//       letters;

//   document.querySelectorAll(".animate-text").forEach(function (elem) {
//     contents = elem.textContent.trim();
//     elem.textContent = "";
//     letters = contents.split("");
//     elem.style.visibility = 'visible';

//     letters.forEach(function (letter, index_1) {
//       setTimeout(function () {
//         elem.textContent += letter;
//       }, delay_start + delay * index_1);
//     });    
//     delay_start += delay * letters.length;
//   });
// }

// Effet de navbar dynamique au scroll
window.addEventListener('scroll', function() {
  const navbar = document.querySelector('.navbar');
  if (window.scrollY > 100) {
    navbar.classList.add('scrolled');
  } else {
    navbar.classList.remove('scrolled');
  }
});

// Animation d'apparition des éléments navbar
document.addEventListener('DOMContentLoaded', function() {
  const navItems = document.querySelectorAll('.navbar .nav-item');
  navItems.forEach((item, index) => {
    item.style.opacity = '0';
    item.style.transform = 'translateY(-20px)';
    setTimeout(() => {
      item.style.transition = 'all 0.5s ease';
      item.style.opacity = '1';
      item.style.transform = 'translateY(0)';
    }, index * 100);
  });
});