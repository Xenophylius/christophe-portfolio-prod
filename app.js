// ===== CONFIGURATION SWIPER =====
  const mySwiper = new Swiper('.mySwiper', {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    mousewheel: false,
    allowTouchMove: true,
    preventInteractionOnTransition: false,
    touchStartPreventDefault: false,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: false,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      dynamicBullets: true,
    },
    // Callback pour réactiver le scroll après changement de slide
    on: {
      slideChangeTransitionEnd: function () {
        // Forcer le scroll à fonctionner sur toutes les slides après transition
        setTimeout(function() {
          const projectContents = document.querySelectorAll('.project-content');
          
          projectContents.forEach((content, index) => {
            // Forcer les propriétés CSS de scroll
            content.style.overflowY = 'auto';
            content.style.maxHeight = '100%';
            content.style.height = 'auto';
            
            // Ajouter un attribut pour forcer le recalcul
            content.setAttribute('data-scroll-ready', 'true');
            
            // Réappliquer le fix Chrome spécifiquement pour les slides problématiques
            if (navigator.userAgent.includes('Chrome')) {
              const parentCol = content.closest('.col-md-8');
              
              // Supprimer les anciens event listeners s'ils existent
              if (parentCol && !parentCol.hasAttribute('data-scroll-fixed')) {
                parentCol.setAttribute('data-scroll-fixed', 'true');
                
                let isScrolling = false;
                
                parentCol.addEventListener('wheel', function(e) {
                  if (content.scrollHeight > content.clientHeight) {
                    const delta = e.deltaY * 0.6;
                    const currentScrollTop = content.scrollTop;
                    const maxScrollTop = content.scrollHeight - content.clientHeight;
                    
                    if ((delta > 0 && currentScrollTop < maxScrollTop) || (delta < 0 && currentScrollTop > 0)) {
                      if (!isScrolling) {
                        isScrolling = true;
                        requestAnimationFrame(() => {
                          content.scrollBy({
                            top: delta,
                            behavior: 'auto'
                          });
                          isScrolling = false;
                        });
                      }
                      e.preventDefault();
                      e.stopPropagation();
                    }
                  }
                }, { passive: false });
              }
              
              // Gérer la colonne de gauche (image) pour permettre le scroll de la page
              const imageCol = content.closest('.row').querySelector('.col-md-4');
              if (imageCol && !imageCol.hasAttribute('data-page-scroll-enabled')) {
                imageCol.setAttribute('data-page-scroll-enabled', 'true');
                
                imageCol.addEventListener('wheel', function(e) {
                  // Sur la colonne image, laisser le scroll de la page se faire naturellement
                  // Ne rien faire de spécial, laisse le comportement par défaut
                }, { passive: true });
              }
            }
            
            // Déclencher un reflow pour forcer le navigateur à recalculer
            content.offsetHeight;
          });
        }, 150);
      },
      init: function() {
        // Aussi à l'initialisation
        setTimeout(function() {
          const projectContents = document.querySelectorAll('.project-content');
          projectContents.forEach(content => {
            content.style.overflowY = 'auto';
            content.style.maxHeight = '100%';
            
            // Fix spécifique pour Chrome - approche adaptée responsive
            if (navigator.userAgent.includes('Chrome') && !content.hasAttribute('data-chrome-fix')) {
              content.setAttribute('data-chrome-fix', 'true');
              
              // Créer une zone de protection autour du contenu
              content.style.position = 'relative';
              content.style.zIndex = '9999';
              
              // Sur desktop, appliquer le fix plus largement pour couvrir toute la zone
              const isDesktop = window.innerWidth >= 768; // Breakpoint md de Bootstrap
              
              if (isDesktop) {
                // Sur desktop, appliquer aussi sur les éléments parents Bootstrap ET la div interne
                const parentCol = content.closest('.col-md-8');
                const grandParentRow = content.closest('.row');
                const projectCard = content.closest('.project-card');
                const innerDiv = content.querySelector('div'); // La div interne qui pourrait poser problème !
                
                // Gérer le scroll pour les éléments enfants du contenu
                const elementsToFix = [content, innerDiv, ...content.querySelectorAll('*')].filter(el => el);
                
                elementsToFix.forEach(element => {
                  element.addEventListener('wheel', function(e) {
                    e.stopPropagation();
                    e.stopImmediatePropagation();
                  }, { passive: false, capture: true });
                });
                
                // Gérer spécifiquement la div parente col-md-8 qui peut intercepter le scroll
                if (parentCol && !parentCol.hasAttribute('data-scroll-fixed-init')) {
                  parentCol.setAttribute('data-scroll-fixed-init', 'true');
                  let isScrolling = false;
                  
                  parentCol.addEventListener('wheel', function(e) {
                    // Si le contenu peut scroller, rediriger l'événement
                    if (content.scrollHeight > content.clientHeight) {
                      const delta = e.deltaY * 0.6; // Réduire encore plus la sensibilité
                      const currentScrollTop = content.scrollTop;
                      const maxScrollTop = content.scrollHeight - content.clientHeight;
                      
                      // Vérifier si on peut encore scroller dans le contenu
                      if ((delta > 0 && currentScrollTop < maxScrollTop) || (delta < 0 && currentScrollTop > 0)) {
                        // Throttle pour éviter trop d'événements
                        if (!isScrolling) {
                          isScrolling = true;
                          requestAnimationFrame(() => {
                            content.scrollBy({
                              top: delta,
                              behavior: 'auto' // Plus fluide que smooth pour les interactions rapides
                            });
                            isScrolling = false;
                          });
                        }
                        e.preventDefault();
                        e.stopPropagation();
                      }
                    }
                  }, { passive: false });
                }
                
                // Gérer la colonne de gauche (image) pour permettre le scroll de la page
                const imageCol = content.closest('.row').querySelector('.col-md-4');
                if (imageCol && !imageCol.hasAttribute('data-page-scroll-enabled')) {
                  imageCol.setAttribute('data-page-scroll-enabled', 'true');
                  
                  imageCol.addEventListener('wheel', function(e) {
                    // Sur la colonne image, laisser le scroll de la page se faire naturellement
                    // Ne rien faire de spécial, laisse le comportement par défaut
                  }, { passive: true });
                }
                
                // Pareil pour les autres éléments parents
                [grandParentRow, projectCard].filter(el => el).forEach(element => {
                  element.addEventListener('wheel', function(e) {
                    // Vérifier si l'événement vient de la colonne image
                    const imageCol = element.querySelector('.col-md-4');
                    const isFromImageCol = imageCol && imageCol.contains(e.target);
                    
                    if (!isFromImageCol && content.scrollHeight > content.clientHeight) {
                      e.preventDefault();
                      e.stopPropagation();
                    }
                    // Si c'est de la colonne image, laisser le scroll de la page se faire
                  }, { passive: false });
                });
              } else {
                // Sur mobile, fix simple mais incluant aussi la div interne
                const innerDiv = content.querySelector('div');
                const allElements = [content, innerDiv, ...content.querySelectorAll('*')].filter(el => el);
                allElements.forEach(element => {
                  element.addEventListener('wheel', function(e) {
                    e.stopPropagation();
                  }, { passive: true });
                });
              }
            }
          });
        }, 250); // Réduit de 500 à 250ms - suffisant pour le rendu DOM
      }
    }
  });

  // Protection supplémentaire pour Chrome - désactiver les gestionnaires Swiper sur les zones de contenu
  if (navigator.userAgent.includes('Chrome')) {
    setTimeout(function() {
      const swiperContainer = document.querySelector('.mySwiper');
      if (swiperContainer && swiperContainer.swiper) {
        // Désactiver temporairement les gestionnaires d'événements de Swiper sur les zones de contenu
        const projectContents = document.querySelectorAll('.project-content');
        projectContents.forEach(content => {
          content.addEventListener('mouseenter', function() {
            if (swiperContainer.swiper) {
              swiperContainer.swiper.allowTouchMove = false;
            }
          });
          content.addEventListener('mouseleave', function() {
            if (swiperContainer.swiper) {
              swiperContainer.swiper.allowTouchMove = true;
            }
          });
        });
      }
    }, 500); // Réduit de 1000 à 500ms - suffisant pour l'init Swiper
  }

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

  // Attacher les événements de mode sombre/clair avec délai pour s'assurer que le DOM est prêt
  setTimeout(function() {
    const modeToggleSection = document.querySelector('.mode-toggle-section');
    
    if (modeToggleSection) {      
      modeToggleSection.addEventListener('click', function(ev) {
        // Identifier quelle icône a été cliquée en vérifiant quelle est visible
        const lightIcon = document.querySelector('#lightMod');
        const darkIcon = document.querySelector('#darkMod');
        
        // Si l'icône light est visible, l'utilisateur veut passer en mode clair
        if (lightIcon && !lightIcon.classList.contains('d-none')) {
          switchToLightMode();
        }
        // Si l'icône dark est visible, l'utilisateur veut passer en mode sombre
        else if (darkIcon && !darkIcon.classList.contains('d-none')) {
          switchToDarkMode();
        }
      });
    }
  }, 500);
  
  function switchToLightMode() {
    toggleClass();
    let root = document.querySelector(':root');
    root.style.setProperty('--main-bg-color', '#F4FBF6');
    root.style.setProperty('--second-bg-color', '#0E1511');
    root.style.setProperty('--icon-color', '#0E1511');
    root.style.setProperty('--gradient-mid-color', '#e8f5ea');
    let toggle = document.querySelector('#navToggle');
    if (toggle) {
      toggle.classList.remove('navbar-dark');
      toggle.classList.add('navbar-light');
    }
  }
  
  function switchToDarkMode() {
    toggleClass();
    let root = document.querySelector(':root');
    root.style.setProperty('--main-bg-color', '#0E1511');
    root.style.setProperty('--second-bg-color', '#B2B3BD');
    root.style.setProperty('--icon-color', '#B2B3BD');
    root.style.setProperty('--gradient-mid-color', '#1a2e23');
    let toggle = document.querySelector('#navToggle');
    if (toggle) {
      toggle.classList.remove('navbar-light');
      toggle.classList.add('navbar-dark');
    }
  }

  // const frenchModElement = document.querySelector('#frenchMod');
  // if (frenchModElement) {
  //   frenchModElement.addEventListener('click', (ev) => {
  //     toggleClassLangage()
  //     toggleTextLangage('#nav0', 'À PROPOS')
  //     toggleTextLangage('#nav1', 'COMPÉTENCES')
  //     toggleTextLangage('#nav2', 'PROJETS')
  //     toggleTextLangage('#heroText1', 'Je suis ...')
  //     toggleTextLangage('#second', 'Développeur Web')
  //     toggleTextLangage('#third', 'Développeur Mobile')
  //     toggleTextLangage('#citation', "Vous n'avez pas besoin de savoir, apprenez simplement.")
  //     toggleTextLangage('#skill1', "EQUIPE")
  //     toggleTextLangage('#skill2', "MENEUR")
  //     toggleTextLangage('#skill3', "INTELLECT")
  //     toggleTextLangage('#skill4', "SOLVEUR")
  //     toggleTextLangage('#skill5', "SAVOIR")
  //     toggleTextLangage('#projectTitle', "PROJETS")
  //     toggleTextLangage('#contactName', "Nom")
  //     toggleTextLangage('#contactMail', "Adresse mail")
  //     toggleTextLangage('#contactButton', "Envoyer")
      
      
  //   })
  // }

  // const ukModElement = document.querySelector('#ukMod');
  // if (ukModElement) {
  //   ukModElement.addEventListener('click', (ev) => {
  //     toggleClassLangage()
  //     toggleTextLangage('#nav0', 'ABOUT')
  //     toggleTextLangage('#nav1', 'SKILLS')
  //     toggleTextLangage('#nav2', 'PROJECTS')
  //     toggleTextLangage('#heroText1', "I'M ...")
  //     toggleTextLangage('#second', 'Web Developer')
  //     toggleTextLangage('#third', 'Mobile Developer')
  //     toggleTextLangage('#citation', "You don't need to know, just learn.")
  //     toggleTextLangage('#skill1', "TEAM")
  //     toggleTextLangage('#skill2', "LEADER")
  //     toggleTextLangage('#skill3', "BRAIN")
  //     toggleTextLangage('#skill4', "SOLVER")
  //     toggleTextLangage('#skill5', "LEARNING")
  //     toggleTextLangage('#projectTitle', "PROJECTS")
  //     toggleTextLangage('#contactName', "Name")
  //     toggleTextLangage('#contactMail', "Email address")
  //     toggleTextLangage('#contactButton', "Send")
      
  //   })
  // }

  function toggleClass() {
    let darkMod = document.querySelector('#darkMod')
    let lightMod = document.querySelector('#lightMod')
    
    if (darkMod) darkMod.classList.toggle('d-none')
    if (lightMod) lightMod.classList.toggle('d-none')
    
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


// Configuration globale de toastr
toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": true,
  "progressBar": true,
  "positionClass": "toast-top-right",
  "preventDuplicates": true,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut",
  "tapToDismiss": true,
  "escapeHtml": false,
  "iconClasses": {
    error: 'toast-error',
    info: 'toast-info',
    success: 'toast-success',
    warning: 'toast-warning'
  }
};

// Gestion des paramètres URL pour les notifications
document.addEventListener('DOMContentLoaded', function() {
  const params = new URLSearchParams(window.location.search);
  const success = params.get("success");
  const error = params.get("error");

  if (success) {
    toastr.success(success, "Succès !");
  }

  if (error) {
    toastr.error(error, "Erreur !");
  }
  
  // Nettoyer l'URL après affichage des notifications
  if (success || error) {
    const cleanURL = window.location.protocol + "//" + window.location.host + window.location.pathname;
    window.history.replaceState({}, document.title, cleanURL);
  }
});

// ===== NOTIFICATIONS TOASTR =====
// La configuration et gestion des toastr est maintenant dans index.php
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

// ===== GESTION SCROLLBAR ELEGANTE PROJECTS =====

document.addEventListener('DOMContentLoaded', function() {
  // Version de base - juste les indicateurs visuels
  const projectContents = document.querySelectorAll('.project-content');
  
  projectContents.forEach(content => {
    // Fonction pour vérifier si l'utilisateur est en bas du scroll et si le contenu déborde
    function checkScrollPosition() {
      const hasOverflow = content.scrollHeight > content.clientHeight;
      const isAtBottom = (content.scrollHeight - content.scrollTop - content.clientHeight) < 5;
      
      // Marquer si le contenu déborde
      if (hasOverflow) {
        content.setAttribute('data-has-overflow', 'true');
      } else {
        content.removeAttribute('data-has-overflow');
      }
      
      // Marquer si on est en bas
      if (isAtBottom) {
        content.classList.add('scrolled-to-bottom');
      } else {
        content.classList.remove('scrolled-to-bottom');
      }
    }
    
    // Vérifier la position initiale après un court délai pour que le contenu soit rendu
    setTimeout(checkScrollPosition, 100);
    
    // Écouter les événements de scroll
    content.addEventListener('scroll', checkScrollPosition);
    
    // Ajouter un indicateur visuel subtil au hover pour indiquer la scrollabilité
    content.addEventListener('mouseenter', function() {
      if (content.scrollHeight > content.clientHeight) {
        content.classList.add('scrollable-content');
      }
    });
    
    content.addEventListener('mouseleave', function() {
      content.classList.remove('scrollable-content');
    });
  });
});

// Ajout d'un effet de parallaxe subtil sur la scrollbar au scroll de la page
window.addEventListener('scroll', function() {
  const projectContents = document.querySelectorAll('.project-content');
  const scrollY = window.pageYOffset;
  
  projectContents.forEach((content, index) => {
    const rect = content.getBoundingClientRect();
    const isVisible = rect.top < window.innerHeight && rect.bottom > 0;
    
    if (isVisible) {
      // Effet subtil de parallaxe sur l'indicateur de scroll
      const parallaxValue = (scrollY * 0.1) % 20;
      content.style.setProperty('--scroll-indicator-offset', `${parallaxValue}px`);
    }
  });
});

// Gestion de la modal CV pour éviter les problèmes d'accessibilité
document.addEventListener('DOMContentLoaded', function() {
  const modal = document.getElementById('exampleModal');
  
  if (modal) {
    // Gérer la fermeture de la modal pour éviter les problèmes d'aria-hidden
    modal.addEventListener('hidden.bs.modal', function () {
      // Retirer le focus de tous les éléments de la modal
      const focusedElement = modal.querySelector(':focus');
      if (focusedElement) {
        focusedElement.blur();
      }
      
      // Remettre le focus sur le bouton qui a ouvert la modal
      const triggerButton = document.querySelector('[data-bs-target="#exampleModal"]');
      if (triggerButton) {
        setTimeout(() => {
          triggerButton.focus();
        }, 100);
      }
    });
    
    // Gérer l'ouverture de la modal
    modal.addEventListener('shown.bs.modal', function () {
      // S'assurer que la modal a le focus approprié
      const closeButton = modal.querySelector('.modern-btn-close');
      if (closeButton) {
        setTimeout(() => {
          closeButton.focus();
        }, 100);
      }
    });
  }
});

// ===== FORMULAIRE DE CONTACT MODERNE =====

document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contactForm');
    const submitButton = document.getElementById('contactSubmit');
    const btnText = submitButton.querySelector('.btn-text');
    const btnLoading = submitButton.querySelector('.btn-loading');
    const btnSuccess = submitButton.querySelector('.btn-success-check');
    
    // Animation des labels flottants
    const inputs = document.querySelectorAll('.form-control-modern');
    
    inputs.forEach(input => {
        // Vérifier si le champ a déjà une valeur au chargement
        if (input.value) {
            input.classList.add('has-value');
        }
        
        // Événement focus
        input.addEventListener('focus', function() {
            this.parentElement.classList.add('focused');
        });
        
        // Événement blur
        input.addEventListener('blur', function() {
            this.parentElement.classList.remove('focused');
            if (this.value) {
                this.classList.add('has-value');
            } else {
                this.classList.remove('has-value');
            }
        });
        
        // Événement input/change pour validation en temps réel
        input.addEventListener('input', function() {
            if (this.value) {
                this.classList.add('has-value');
                this.classList.remove('invalid');
            } else {
                this.classList.remove('has-value');
            }
            
            // Validation spécifique par type
            validateField(this);
        });
        
        // Événement change spécifique pour les selects
        input.addEventListener('change', function() {
            if (this.value) {
                this.classList.add('has-value');
                this.classList.remove('invalid');
            } else {
                this.classList.remove('has-value');
            }
            
            validateField(this);
        });
    });
    
    // Fonction de validation des champs
    function validateField(field) {
        const value = field.value.trim();
        let isValid = true;
        
        switch (field.type) {
            case 'email':
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                isValid = emailRegex.test(value);
                break;
            case 'text':
                isValid = value.length >= 2;
                break;
            default:
                if (field.tagName.toLowerCase() === 'select') {
                    isValid = value !== '' && value !== null;
                } else {
                    isValid = value.length > 0;
                }
        }
        
        if (isValid) {
            field.classList.remove('invalid');
            field.classList.add('valid');
        } else {
            field.classList.remove('valid');
            if (value.length > 0) {
                field.classList.add('invalid');
            }
        }
        
        return isValid;
    }
    
    // Gestion de la soumission du formulaire
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Validation complète du formulaire
            let isFormValid = true;
            inputs.forEach(input => {
                if (!validateField(input) || !input.value.trim()) {
                    isFormValid = false;
                    input.classList.add('invalid');
                    
                    // Animation de secousse pour les champs invalides
                    input.parentElement.style.animation = 'shake 0.5s ease-in-out';
                    setTimeout(() => {
                        input.parentElement.style.animation = '';
                    }, 500);
                }
            });
            
            if (!isFormValid) {
                // Animation d'erreur sur le bouton
                submitButton.classList.add('error');
                setTimeout(() => {
                    submitButton.classList.remove('error');
                }, 1000);
                return;
            }
            
            // Animation de chargement
            submitButton.classList.add('loading');
            btnText.style.display = 'none';
            btnLoading.style.display = 'inline-flex';
            submitButton.disabled = true;
            
            // Soumission du formulaire
            const formData = new FormData(contactForm);
            
            fetch('./process_contact.php', {
                method: 'POST',
                body: formData,
                headers: {
                    'Accept': 'application/json'
                }
            })
            .then(async response => {
                let responseData;
                
                try {
                    responseData = await response.json();
                } catch (jsonError) {
                    // Si la réponse n'est pas du JSON valide
                    throw new Error('Réponse serveur invalide');
                }
                
                // Vérification du statut HTTP et du success dans la réponse
                if (!response.ok || !responseData.success) {
                    throw new Error(responseData.message || 'Erreur lors de l\'envoi du message');
                }
                
                return responseData;
            })
            .then(data => {
                // Simulation d'un délai minimum pour l'UX
                setTimeout(() => {
                    // Animation de succès
                    btnLoading.style.display = 'none';
                    btnSuccess.style.display = 'flex';
                    submitButton.classList.remove('loading');
                    submitButton.classList.add('success');
                    
                    // Réinitialisation du formulaire après succès
                    setTimeout(() => {
                        contactForm.reset();
                        inputs.forEach(input => {
                            input.classList.remove('has-value', 'valid', 'invalid');
                        });
                        
                        // Remettre le bouton à l'état normal
                        setTimeout(() => {
                            btnSuccess.style.display = 'none';
                            btnText.style.display = 'inline-flex';
                            submitButton.classList.remove('success');
                            submitButton.disabled = false;
                        }, 2000);
                    }, 1500);
                    
                    // Notification de succès avec gestion d'environnement
                    if (typeof toastr !== 'undefined') {
                        toastr.success(data.message, 'Succès');
                    }
                }, 1000);
            })
            .catch(error => {               
                // Animation d'erreur
                setTimeout(() => {
                    btnLoading.style.display = 'none';
                    btnText.style.display = 'inline-flex';
                    submitButton.classList.remove('loading');
                    submitButton.classList.add('error');
                    submitButton.disabled = false;
                    
                    setTimeout(() => {
                        submitButton.classList.remove('error');
                    }, 2000);
                    
                    // Gestion des messages d'erreur selon l'environnement
                    if (typeof toastr !== 'undefined') {
                        // Détection d'environnement local
                        const isLocalhost = window.location.hostname === 'localhost' || 
                                          window.location.hostname === '127.0.0.1' ||
                                          window.location.hostname === '::1';
                        
                        if (isLocalhost) {
                            toastr.info('Mode développement : Email non envoyé', 'Info');
                        } else {
                            // En production, afficher le vrai message d'erreur
                            const errorMessage = error.message || 'Une erreur est survenue lors de l\'envoi du message';
                            toastr.error(errorMessage, 'Erreur');
                        }
                    }
                }, 1000);
            });
        });
    }
    
    // Animation de parallaxe désactivée pour éviter les problèmes de positionnement
    // Les effets de parallaxe peuvent causer des conflits avec le layout
    
    // Remplacement par une animation d'apparition simple au scroll
    const contactSection = document.getElementById('contact');
    if (contactSection) {
        const contactObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, { threshold: 0.1 });
        
        contactObserver.observe(contactSection);
    }
    
    // Animation d'apparition au scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -100px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, observerOptions);
    
    // Observer les éléments à animer
    const animatedElements = document.querySelectorAll('.contact-info-item, .contact-form-container, .contact-social');
    animatedElements.forEach(el => observer.observe(el));
});

// Styles CSS ajoutés dynamiquement pour les animations supplémentaires
const additionalStyles = `
    <style>
        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-5px); }
            75% { transform: translateX(5px); }
        }
        
        .form-control-modern.invalid {
            border-color: #dc3545 !important;
            box-shadow: 0 0 0 3px rgba(220, 53, 69, 0.1) !important;
        }
        
        .form-control-modern.valid {
            border-color: var(--bs-success) !important;
        }
        
        .btn-send-modern.error {
            background: linear-gradient(135deg, #dc3545, #c82333) !important;
            animation: errorShake 0.5s ease-in-out !important;
        }
        
        @keyframes errorShake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-10px); }
            75% { transform: translateX(10px); }
        }
        
        .contact-info-item.visible {
            animation: slideInLeft 0.6s ease forwards;
        }
        
        .contact-form-container.visible {
            animation: formSlideUp 0.8s ease forwards;
        }
        
        .contact-social.visible {
            animation: fadeInUp 0.6s ease forwards;
        }
    </style>
`;

// Ajouter les styles supplémentaires
document.head.insertAdjacentHTML('beforeend', additionalStyles);