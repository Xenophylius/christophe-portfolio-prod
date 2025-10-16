<!DOCTYPE html>
<html lang="fr">
<head>
  <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-SZWN9B34VR"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-SZWN9B34VR');
</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Venez découvrir mes services, mes projets. Téléchargez mon CV et contactez moi.">
    <title>Portfolio Christophe Delahaye - Développeur web et mobile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <!-- Navbar Section -->
    <a href="#heroSection" aria-label="Lien vers la hero section de Christophe Delahaye"><i class="fa-solid fa-circle-up fa-2x me-2 z-3 position-fixed bottom-0 end-0 mb-2 hoverScale" id="scrollButton" style="color: #30a46c;"></i></a>
    <nav class="navbar navbar-expand-lg fixed-top blurDiv" >
        <div class="container-fluid row text-center">
        <div class="col-6">
          <a class="navbar-brand" href="https://www.linkedin.com/in/christophe-delahaye-b61446186/" aria-label="Lien vers la page Linkedin de Christophe Delahaye" target="_blank"><i class="fa-brands fa-linkedin fa-xl hoverScale2 iconBgColor"></i></a>
          <a class="navbar-brand" href="https://github.com/Xenophylius" aria-label="Lien vers la page GitHub de Christophe Delahaye" target="_blank"><i class="fa-brands fa-github fa-xl hoverScale2 iconBgColor"></i></a>
          <a class="navbar-brand" href="https://discord.com/users/274269260878970882" aria-label="Lien vers la page Discord de Christophe Delahaye" target="_blank"><i class="fa-brands fa-discord fa-xl hoverScale2 iconBgColor"></i></a>
        
        </div>
          <button class="navbar-toggler col-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon navbar-dark" id="navToggle"></span>
          </button>
        
          <div class="collapse navbar-collapse col-6 justify-content-center align-items-center" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item hoverScale ">
                <a class="nav-link textColor" aria-current="page" href="#skills" id="nav1" >SKILLS</a>
              </li>
              <li class="nav-item hoverScale ">
                <a class="nav-link textColor" href="#projects" id="nav2">PROJECTS</a>
              </li>
              <li class="nav-item hoverScale ">
                <a class="nav-link textColor" href="#contact">CONTACT</a>
              </li>
              <li class="nav-item hoverScale mx-2 ">
                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-success pt-2 fw-bold btn-change6">CV</button>
              </li>
              <li class="nav-item hoverScale" id="lightMod">
                <i class="fa-regular fa-lightbulb fa-lg pt-2 mx-3" style="color: #b2b3bd;"></i>
              </li>
              <li class="nav-item hoverScale d-none" id="darkMod">
                <i class="fa-solid fa-moon fa-lg pt-2 mx-3" style="color: #0E1511;"></i>
              </li>
              <li class="nav-item hoverScale" id="frenchMod">
                <img src="./images/france.png" alt="Drapeau de la France pour changer le langage" class="pt-2" id="langageFlag">
              </li>
              <li class="nav-item hoverScale d-none" id="ukMod">
                <img src="./images/united-kingdom.png" alt="Drapeau Anglais pour changer le langage" class="pt-2" id="langageFlag">
              </li>
            </ul>
          </div>
        </div>
      </nav>
    
    <!-- MODAL Section -->
     
    <div class="modal fade blurDiv" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content bgMainColor text-light">
          <div class="modal-header">
            <h3 class="modal-title fs-5" id="exampleModalLabel">Curriculum Vitae</h3>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <button type="button" class="btn btn-secondary mx-2" data-bs-dismiss="modal">Close</button>
            <a type="button" class="btn btn-success mx-2 btn-change6" href="images/CHRISTOPHE DELAHAYE (2).pdf" download="christophe-delahaye-CV.pdf">Télécharger le CV</a>
          </div>
          <div class="modal-body">
            <embed src="images/CHRISTOPHE DELAHAYE (2).pdf#toolbar=0" width="100%" type="application/pdf" class="pdfHeight"/>
          </div>
        </div>
      </div>
    </div>

    <!-- Hero Section -->
  <main>
    <section id="heroSection" class="container-fluid mt-5 pt-5">
        <div class="row mt-5 justify-content-around mb-3">
                <div class="container-head row justify-content-center ">
                  <div class="col-12 col-lg-12 col-xl-4 ">
                    <p class="fw-bold mb-4 titleColor text-center helloWorld"><i class="fa-solid fa-terminal fa-xl me-2"></i><span class="animate-text"> Hello World ! <span id="heroText1">I'm ... </span></span></p>
                  </div> 
                  <section class="animation mb-3 col-12 col-lg-12 col-xl-3 text-center ">
                    <div class="first"><div class="px-3">Christophe</div></div>
                    <div class="second"><div class="px-3" id="second">Web Dev</div></div>
                    <div class="third"><div class="px-3" id="third">Mobile Dev</div></div>
                  </section>
                </div>
            </div>
            <div class="col-12  text-center">
                <img fetchpriority="high" src="images/pictureProfil.webp" alt="Photo de profil de Christophe Delahaye" id="profilPicture" class="rounded-circle">
            </div>
        </div>
        <div class="row mt-5 justify-content-center mx-1">
            <div class="rounded-2 col-12 col-6-sm col-md-3 interactiveComponentColor text-center py-1">
                <p class="ft-bold fst-italic textColor2 text-light"><i class="fas fa-quote-left fa-2x mb-3 me-4"></i><span id="citation">You don't need to know, just learn.</span> <i class="fas fa-quote-left fa-2x mb-3 ms-4"></i></p>
            </div>
        </div>
        <div class="row justify-content-center mt-5" id="skills">
            <div class="border-bottom text-center col-4 "></div>
        </div>
    </section>

    <!-- Skills Section -->

    <section class="container-fluid mt-5" >
    
        <div class="row justify-content-evenly text-center align-items-center">
            <div class="col-12 col-md-5" >
                <div class="card text-center interactiveComponentColor ">
                    <div class="card-header">
                        <h2 class="titleColor fw-bold">HARD SKILLS</h2>
                    </div>
                    <div class="card-body mt-1 row justify-content-center align-items-center textColor2 text-light">
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-2 text-center hoverScale">
                            <i class="fa-brands fa-bootstrap fa-2xl mx-3 mb-3" style="color: #7952b3;"></i>
                            <p><span class="fw-bold brygada">BOOTSTRAP</span></p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-2 text-center hoverScale ">
                            <i class="fa-brands fa-symfony fa-2xl mx-3 mb-3" style="color: #000000;"></i>
                            <p><span class="fw-bold brygada">SYMFONY</span></p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-2 text-center hoverScale">
                            <i class="fa-solid fa-database fa-2xl mx-3 mb-3" style="color: #00758f;"></i>
                            <p><span class="fw-bold brygada">MYSQL</span></p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-2 text-center hoverScale ">
                            <i class="fa-brands fa-square-js fa-2xl mx-3 mb-3" style="color: #f7df1e;"></i>
                            <p><span class="fw-bold brygada">JAVASCRIPT</span></p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-2 text-center hoverScale">
                            <i class="fa-brands fa-react fa-2xl mx-3 mb-3" style="color: #61DBFB;"></i>
                            <p><span class="fw-bold brygada">REACT</span></p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-2 text-center hoverScale ">
                            <i class="fa-brands fa-wordpress fa-2xl mx-3 mb-3" style="color: #00749C;"></i>
                            <p><span class="fw-bold brygada">WORDPRESS</span></p>
                        </div> 
                    </div> 
                </div>
            </div>
            <div class="col-12 col-md-5 mt-3 mt-md-0">
                <div class="card text-center interactiveComponentColor ">
                    <div class="card-header">
                        <h2 class="titleColor fw-bold">SOFT SKILLS</h2>
                    </div>
                    <div class="card-body mt-1 row justify-content-center textColor2 text-light">
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-2 text-center hoverScale">
                            <i class="fa-solid fa-people-group fa-2xl mx-3 mb-3" style="color: #00A2C7;"></i>
                            <p><span class="col-1 mx-1 fw-bold brygada" id="skill1">TEAM</span></p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-2 text-center hoverScale ">
                            <i class="fa-solid fa-user-group fa-2xl mx-3 mb-3" style="color: #4E1511;"></i>
                            <p><span class="col-1 mx-1 fw-bold brygada" id="skill2">LEADER</span></p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-2 text-center hoverScale">
                            <i class="fa-solid fa-brain fa-2xl mx-3 mb-3" style="color: #8E4EC6;"></i>
                            <p><span class="col-1 mx-1 fw-bold brygada" id="skill3">BRAIN</span></p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-2 text-center hoverScale ">
                            <i class="fa-solid fa-screwdriver-wrench fa-2xl mx-3 mb-3" style="color: #FF801F;"></i>
                            <p><span class="col-1 mx-1 fw-bold brygada" id="skill4">SOLVER</span></p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-2 text-center hoverScale">
                            <i class="fa-solid fa-graduation-cap fa-2xl mx-3 mb-3" style="color: #1B537B;"></i>
                            <p><span class="mx-1 fw-bold brygada" id="skill5">LEARNING</span></p>
                        </div>
                    </div> 
                    
                </div>
            </div>
        </div>
    
    </section>
   
    <!-- Projects Section -->

    <section class="container-fluid secondBackgroundColor pt-5 px-0 mx-0" id="projects">
        <h2 class="text-center textColor2 pb-0 mb-0" id="projectTitle">PROJECTS</h2>
         <!-- Swiper -->
          <div class="swiper mySwiper z-2">
          <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="card interactiveComponentColorSecond mx-0 px-0 overflow-hidden">
                  <div class="overflow-hidden">
                    <a href="https://alpine-eight-beta.vercel.app/" target="_blank"><img src="images/alpine.webp" loading="lazy" class="card-img-top hoverScale" alt="Image représentant le site Alpine"></a>
                  </div>  
                <div class="card-body textColor2 text-light">
                    <p class="card-title remTitleCard"><u>ALPINE CONFIGURATOR</u></p>
                    <p class="card-text">Reproduce Alpine home page and built a configurator with <span class="fw-bold titleColor ">NEXT JS, REDUX.</span>.</p>
                    <p class="card-text fst-italic">"Dev a web application allowing its users to discover or rediscover the brand through a home page."</p>
                    <a href="https://alpine-eight-beta.vercel.app/" class="btn btn-success btn-change6" target="_blank">Live Preview</a>
                    <a href="https://github.com/Xenophylius/alpine" aria-label="Lien vers la page Github du projet Alpine" target="_blank"><i class="fa-brands fa-github fa-2xl mx-5 hoverScale" style="color: #eeeef0;"></i></a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card interactiveComponentColorSecond mx-0 px-0 overflow-hidden">
                <div class="overflow-hidden">
                  <a href="http://film-harmonik.projets.p8.garage404.com/" target="_blank"><img src="images/filmHarmonik.webp" loading="lazy" class="card-img-top hoverScale" alt="Image représentant le site film harmonik"></a>
                </div>
                  <div class="card-body textColor2 text-light">
                    <p class="card-title remTitleCard"><u>FILM HARMONIK</u></p>
                    <p class="card-text">Coding a Website with <span class="fw-bold titleColor ">WORDPRESS, STRIPE (PAYMENT)</span>.</p>
                    <p class="card-text fst-italic">"creation of a website for a music festival while ensuring compliance with the General Data Protection Regulation (GDPR)"</p>
                    <a href="http://film-harmonik.projets.p8.garage404.com/" class="btn btn-success btn-change6" target="_blank">Live Preview</a>
                    <a href="https://github.com/G404-DWWM/RGPD-Festival" aria-label="Lien vers la page Github du projet Festival" target="_blank"><i class="fa-brands fa-github fa-2xl mx-5 hoverScale" style="color: #eeeef0;"></i></a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card interactiveComponentColorSecond mx-0 px-0 overflow-hidden">
                <div class="overflow-hidden">
                  <a href="https://christophe-hopital.projets.p8.garage404.com/" target="_blank"><img src="images/hospital.webp" loading="lazy" class="card-img-top hoverScale" alt="Image du site hopital"></a>
                </div>
                  <div class="card-body textColor2 text-light">
                    <p class="card-title remTitleCard"><u>HOSPITAL</u></p>
                    <p class="card-text">Coding an application for hospital with <span class="fw-bold titleColor ">PHP, SQL & DATABASE</span>.</p>
                    <p class="card-text fst-italic">"Make an app for an assistant to add patients and appointments with database recording"</p>
                    <a href="https://christophe-hopital.projets.p8.garage404.com/" target="_blank" class="btn btn-success btn-change6">Live Preview</a>
                    <a href="https://github.com/Xenophylius/PHPSQL" aria-label="Lien vers la page Github du projet Hospital" target="_blank"><i class="fa-brands fa-github fa-2xl mx-5 hoverScale" style="color: #eeeef0;"></i></a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card interactiveComponentColorSecond mx-0 px-0 overflow-hidden">
                <div class="overflow-hidden">
                  <a href="https://rumble-react.vercel.app/" target="_blank"><img src="images/fightHero.webp" loading="lazy" class="card-img-top hoverScale" alt="Image du site rumble react sur Vercel"></a>
                </div>
                  <div class="card-body textColor2 text-light">
                    <p class="card-title remTitleCard"><u>FIGHT HERO</u></p>
                    <p class="card-text">Coding a single page application with <span class="fw-bold titleColor ">REACT JS, REDUX, BOOTSTRAP</span>.</p>
                    <p class="card-text fst-italic">"Creating a store with Redux, use components and actions."</p>
                    <a href="https://rumble-react.vercel.app/" target="_blank" class="btn btn-success btn-change6">Live Preview</a>
                    <a href="https://github.com/Xenophylius/RumbleReact" aria-label="Lien vers la page Github du projet Fight Hero" target="_blank"><i class="fa-brands fa-github fa-2xl mx-5 hoverScale" style="color: #eeeef0;"></i></a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card interactiveComponentColorSecond mx-0 px-0 overflow-hidden">
                <div class="overflow-hidden">
                  <a href="https://christophe-chat.projets.p8.garage404.com/" target="_blank"><img src="images/chat.webp" loading="lazy" class="card-img-top hoverScale" alt="Image du site mini chat"></a>
                </div>
                <div class="card-body textColor2 text-light">
                    <p class="card-title remTitleCard"><u>CHAT</u></p>
                    <p class="card-text">Coding a mini-chat with <span class="fw-bold titleColor ">PHP, AUTH, SQL</span>.</p>
                    <p class="card-text fst-italic">"Build a mini-chat with authentification, logout, ajax, users & more."</p>
                    <a href="https://christophe-chat.projets.p8.garage404.com/" class="btn btn-success btn-change6" target="_blank">Live Preview</a>
                    <a href="https://github.com/G404-DWWM/Vanilla-TP-MiniChat" aria-label="Lien vers la page Github du projet Mini-Chat" target="_blank"><i class="fa-brands fa-github fa-2xl mx-5 hoverScale" style="color: #eeeef0;"></i></a>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="swiper-pagination"></div>
          </div>
    </section>
    <!-- Contact Section -->

    <section class="container-fluid row justify-content-center my-5 pe-0" id="contact">
        <p class="textColor2 text-center mb-5 remTitle">CONTACT</p>
        <form action="./process_contact.php" method="post" class="textColor2 col-12 col-sm-8 col-md-6 col-lg-4 mt-2">
            <div data-mdb-input-init class="form-outline mb-4">
              <input type="text" id="form4Example1" name="name" class="form-control" required/>
              <label class="form-label" for="form4Example1" id="contactName">Name</label>
            </div>

            <div data-mdb-input-init class="form-outline mb-4">
              <input type="email" id="form4Example2" name="mail" class="form-control" required/>
              <label class="form-label" for="form4Example2" id="contactMail">Email address</label>
            </div>

            <div data-mdb-input-init class="form-outline mb-4">
              <textarea class="form-control" id="form4Example3" name="message" rows="4" required></textarea>
              <label class="form-label" for="form4Example3">Message</label>
            </div>
        
            <div class="text-center">
              <button data-mdb-ripple-init type="submit" class="btn btn-success btn-block mb-4 btn-change6 " id="contactbutton">Send</button>
            </div>
          </form>
    </section>
</main>
    <footer class="bg-transparent blurDiv text-center">
        <p class="textColor2">© Delahaye Christophe</p> 
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-2.0.3.min.js" ></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="app.js"></script>    
  </body>
</html>