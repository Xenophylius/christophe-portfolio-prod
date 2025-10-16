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
    },
    
    
  });

  document.querySelector('#lightMod').addEventListener('click', (ev) => {
    toggleClass()
    let root = document.querySelector(':root')
    root.style.setProperty('--main-bg-color', '#F4FBF6')
    root.style.setProperty('--second-bg-color', '#0E1511')
    root.style.setProperty('--icon-color', '#0E1511')
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
    let toggle = document.querySelector('#navToggle')
    toggle.classList.toggle('navbar-light')
    toggle.classList.toggle('navbar-dark')
  })

  document.querySelector('#frenchMod').addEventListener('click', (ev) => {
    toggleClassLangage()
    toggleTextLangage('#nav1', 'COMPETENCES')
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

    if (document.body.scrollTop > 700 || document.documentElement.scrollTop > 700) {
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