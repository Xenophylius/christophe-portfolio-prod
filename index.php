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
    <meta name="description" content="Christophe Delahaye - Développeur web fullstack passionné. 10+ ans d'expérience, spécialisé Symfony, Vue.js, WordPress. Solutions modernes et performantes centrées utilisateur.">
    <title>Portfolio Christophe Delahaye - Développeur web et mobile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Toastr CSS désactivé - utilisation du CSS personnalisé dans style.css -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="skills-animations.css">
    <link rel="stylesheet" href="projects-styles.css">
</head>
<body>
    <!-- Particules globales pour toute la page -->
    <div class="global-particles">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>
    
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
                <a class="nav-link textColor" aria-current="page" href="#about" id="nav0">À PROPOS</a>
              </li>
              <li class="nav-item hoverScale ">
                <a class="nav-link textColor" href="#skills" id="nav1" >COMPÉTENCES</a>
              </li>
              <li class="nav-item hoverScale ">
                <a class="nav-link textColor" href="#projects" id="nav2">PROJETS</a>
              </li>
              <li class="nav-item hoverScale ">
                <a class="nav-link textColor" href="#contact">CONTACT</a>
              </li>
              <li class="nav-item hoverScale mx-2 ">
                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-success pt-2 fw-bold btn-change6">CV</button>
              </li>
              <li class="nav-item hoverScale" id="lightMod">
                <i class="fa-regular fa-lightbulb fa-lg pt-2 mx-3"></i>
              </li>
              <li class="nav-item hoverScale d-none" id="darkMod">
                <i class="fa-solid fa-moon fa-lg pt-2 mx-3"></i>
              </li>
              <!-- Changement de langue temporairement masqué 
              <li class="nav-item hoverScale" id="frenchMod">
                <img src="./images/france.png" alt="Drapeau de la France pour changer le langage" class="pt-2" id="langageFlag">
              </li>
              <li class="nav-item hoverScale d-none" id="ukMod">
                <img src="./images/united-kingdom.png" alt="Drapeau Anglais pour changer le langage" class="pt-2" id="langageFlag">
              </li>
              -->
            </ul>
          </div>
        </div>
      </nav>
    
    <!-- MODAL Section -->
     
    <div class="modal fade modern-modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content modern-modal-content">
          <div class="modal-header modern-modal-header">
            <div class="modal-title-section">
              <i class="fa-solid fa-file-pdf me-3"></i>
              <h3 class="modal-title" id="exampleModalLabel">Curriculum Vitae</h3>
            </div>
            <div class="modal-actions">
              <button type="button" class="btn btn-outline-secondary modern-btn-close" data-bs-dismiss="modal">
                <i class="fa-solid fa-times me-2"></i>Fermer
              </button>
              <a type="button" class="btn btn-success modern-btn-download" href="images/Christophe_delahaye_CV.pdf" download="christophe-delahaye-CV.pdf">
                <i class="fa-solid fa-download me-2"></i>Télécharger
              </a>
            </div>
          </div>
          <div class="modal-body modern-modal-body">
            <div class="pdf-container">
              <embed src="images/Christophe_delahaye_CV.pdf#toolbar=0" width="100%" type="application/pdf" class="modern-pdf"/>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Hero Section -->
  <main>
    <section id="heroSection" class="hero-modern">        
        <div class="hero-content">
            <div class="hero-greeting">
                <span class="hero-emoji">👋</span>
                <span class="hero-hello">Bonjour, je suis</span>
            </div>
            
            <h1 class="hero-name">
                <span class="hero-name-text">Christophe</span>
                <span class="hero-name-highlight">Delahaye</span>
            </h1>
            
            <div class="hero-role">
                <span class="hero-role-prefix">Je suis un</span>
                <div class="hero-typing-container">
                    <span id="typed-text" class="hero-typed-text"></span>
                    <span class="hero-cursor">|</span>
                </div>
            </div>
            
            <p class="hero-tagline">
                Développeur passionné créant des <span class="hero-highlight">expériences digitales</span> innovantes
            </p>
            
            <div class="hero-cta">
                <a href="#about" class="hero-btn-primary">
                    <span>Découvrir mon profil</span>
                    <i class="fas fa-arrow-down"></i>
                </a>
                <a href="#contact" class="hero-btn-secondary">
                    <i class="fas fa-envelope"></i>
                    <span>Me contacter</span>
                </a>
            </div>
        </div>
        
    </section>
            <!-- Section Photo + À Propos -->
            <section id="about">
            <!-- Titre de section About -->
            <div class="row justify-content-center mb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title" id="aboutTitle">À PROPOS</h2>
                    <div class="section-separator"></div>
                </div>
            </div>
            
            <div class="row justify-content-center align-items-center" id="about">
                <!-- Colonne gauche: Photo -->
                <div class="col-12 col-lg-4 text-center mb-5 mb-lg-0">
                    <img fetchpriority="high" src="images/pictureProfil2.png" alt="Photo de profil de Christophe Delahaye" id="profilPicture" class="rounded-circle">
                </div>
                
                <!-- Colonne droite: Section À Propos -->
                <div class="col-12 col-lg-6">
                    <!-- <div class="text-center text-lg-start mb-4">
                        <h2 class="titleColor fw-bold mb-3" id="aboutTitle">À PROPOS</h2>
                        <div class="d-flex justify-content-center justify-content-lg-start">
                            <div class="border-bottom titleColor" style="width: 80px;"></div>
                        </div>
                    </div> -->
                    
                    <div class="interactiveComponentColor rounded-3 p-4">
                        <h3 class="titleColor fw-bold mb-3 text-center text-lg-start" id="roleTitle">
                            <i class="fa-solid fa-code me-2"></i>DÉVELOPPEUR WEB FULLSTACK
                        </h3>
                        <div class="textColor2 text-light">
                            <p class="mb-3" id="aboutDescription1">
                                Développeur web fullstack, <strong class="titleColor">passionné par la création d'applications modernes et performantes</strong>. 
                                Titulaire du diplôme RNCP 6 Concepteur Développeur d'Applications, j'aime concevoir des solutions 
                                <em>centrées utilisateur</em> et des solutions <em>back-office</em> pour les entreprises.
                            </p>
                            <p class="mb-0" id="aboutDescription2">
                                Curieux, rigoureux et autonome, je maîtrise un large éventail de technologies 
                                <span class="titleColor fw-semibold">(Symfony, Vue.js, Prestashop, WordPress)</span> 
                                et développe des solutions <strong>performantes et innovantes</strong> adaptées aux besoins métier.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Citation -->
            <!-- <div class="row justify-content-center mt-5 mb-4">
                <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                    <div class="rounded-3 interactiveComponentColor text-center py-3 px-3">
                        <p class="ft-bold fst-italic textColor2 text-light mb-0">
                            <i class="fas fa-quote-left fa-lg me-3"></i>
                            <span id="citation">Vous n'avez pas besoin de savoir, apprenez simplement.</span> 
                            <i class="fas fa-quote-right fa-lg ms-3"></i>
                        </p>
                    </div>
                </div>
            </div> -->
            
            <!-- Cards informations centrées -->
            <!-- <div class="row justify-content-center mt-4">
                <div class="col-12 col-lg-10 col-xl-10">
                    <div class="row g-3 justify-content-center">
                        <div class="col-6 col-sm-6 col-md-3">
                            <div class="interactiveComponentColor rounded-3 p-3 text-center h-100">
                                <i class="fa-solid fa-graduation-cap fa-2x titleColor mb-2"></i>
                                <h4 class="textColor2 fs-6 fw-bold mb-1">FORMATION</h4>
                                <p class="textColor2 small mb-0">RNCP 6 Concepteur Développeur</p>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-3">
                            <div class="interactiveComponentColor rounded-3 p-3 text-center h-100">
                                <i class="fa-solid fa-code-branch fa-2x titleColor mb-2"></i>
                                <h4 class="textColor2 fs-6 fw-bold mb-1" id="experienceYears">PROJETS</h4>
                                <p class="textColor2 small mb-0">Applications web complexes</p>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-3">
                            <div class="interactiveComponentColor rounded-3 p-3 text-center h-100">
                                <i class="fa-solid fa-laptop-code fa-2x titleColor mb-2"></i>
                                <h4 class="textColor2 fs-6 fw-bold mb-1">SPÉCIALITÉ</h4>
                                <p class="textColor2 small mb-0">Applications web fullstack</p>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-3">
                            <div class="interactiveComponentColor rounded-3 p-3 text-center h-100">
                                <i class="fa-solid fa-users fa-2x titleColor mb-2"></i>
                                <h4 class="textColor2 fs-6 fw-bold mb-1" id="focusTitle">FOCUS</h4>
                                <p class="textColor2 small mb-0">Solutions centrées utilisateur</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
        <div class="row justify-content-center mt-5" id="skills">
            <div class="border-bottom text-center col-4 "></div>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="container-fluid pb-5" >
        <!-- Titre principal avec animation -->
        <div class="row justify-content-center ">
            <div class="col-12 text-center">
                <h2 class="section-title skill-title-animation" id="skillsMainTitle">COMPÉTENCES</h2>
                <div class="section-separator skill-underline-animation"></div>
            </div>
        </div>

        <!-- Catégories de compétences avec tabs interactifs -->
        <div class="row justify-content-center mb-4">
            <div class="col-12 col-lg-10">
                <ul class="nav nav-pills justify-content-center skill-tabs" id="skillTabs" role="tablist">
                    <li class="nav-item mx-2" role="presentation">
                        <button class="nav-link active skill-tab-btn" id="frontend-tab" data-bs-toggle="pill" data-bs-target="#frontend" type="button" role="tab">
                            <i class="fa-solid fa-palette me-2"></i>Frontend
                        </button>
                    </li>
                    <li class="nav-item mx-2" role="presentation">
                        <button class="nav-link skill-tab-btn" id="backend-tab" data-bs-toggle="pill" data-bs-target="#backend" type="button" role="tab">
                            <i class="fa-solid fa-server me-2"></i>Backend
                        </button>
                    </li>
                    <li class="nav-item mx-2" role="presentation">
                        <button class="nav-link skill-tab-btn" id="cms-tab" data-bs-toggle="pill" data-bs-target="#cms" type="button" role="tab">
                            <i class="fa-solid fa-cube me-2"></i>CMS
                        </button>
                    </li>
                    <li class="nav-item mx-2" role="presentation">
                        <button class="nav-link skill-tab-btn" id="automation-tab" data-bs-toggle="pill" data-bs-target="#automation" type="button" role="tab">
                            <i class="fa-solid fa-robot me-2"></i>IA/Automatisation
                        </button>
                    </li>
                    <li class="nav-item mx-2" role="presentation">
                        <button class="nav-link skill-tab-btn" id="tools-tab" data-bs-toggle="pill" data-bs-target="#tools" type="button" role="tab">
                            <i class="fa-solid fa-tools me-2"></i>Outils & DevOps
                        </button>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Contenu des tabs -->
        <div class="row justify-content-center">
            <div class="col-12 col-lg-11">
                <div class="tab-content" id="skillTabsContent">
                    
                    <!-- Frontend Tab -->
                    <div class="tab-pane fade show active" id="frontend" role="tabpanel">
                        <div class="row g-4 justify-content-center skill-cards-container mt-1 mx-1 mt-1 mx-1">
                            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                                <div class="skill-card interactiveComponentColor rounded-3 p-3 text-center h-100" data-skill="HTML5" data-level="95">
                                    <div class="skill-icon-container mb-3">
                                        <i class="fa-brands fa-html5 fa-2x" style="color: #e34f26;"></i>
                                        <div class="skill-progress-circle">
                                            <svg class="progress-ring" width="60" height="60">
                                                <circle class="progress-ring-circle" stroke="#e34f26" stroke-width="3" fill="transparent" r="26" cx="30" cy="30"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <h5 class="textColor2 fw-bold mb-0">HTML5</h5>
                                </div>
                            </div>
                            
                            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                                <div class="skill-card interactiveComponentColor rounded-3 p-3 text-center h-100" data-skill="CSS3" data-level="90">
                                    <div class="skill-icon-container mb-3">
                                        <i class="fa-brands fa-css3-alt fa-2x" style="color: #1572b6;"></i>
                                        <div class="skill-progress-circle">
                                            <svg class="progress-ring" width="60" height="60">
                                                <circle class="progress-ring-circle" stroke="#1572b6" stroke-width="3" fill="transparent" r="26" cx="30" cy="30"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <h5 class="textColor2 fw-bold mb-0">CSS3</h5>
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                                <div class="skill-card interactiveComponentColor rounded-3 p-3 text-center h-100" data-skill="JavaScript" data-level="88">
                                    <div class="skill-icon-container mb-3">
                                        <i class="fa-brands fa-square-js fa-2x" style="color: #f7df1e;"></i>
                                        <div class="skill-progress-circle">
                                            <svg class="progress-ring" width="60" height="60">
                                                <circle class="progress-ring-circle" stroke="#f7df1e" stroke-width="3" fill="transparent" r="26" cx="30" cy="30"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <h5 class="textColor2 fw-bold mb-0">JavaScript</h5>
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                                <div class="skill-card interactiveComponentColor rounded-3 p-3 text-center h-100" data-skill="Vue.js" data-level="82">
                                    <div class="skill-icon-container mb-3">
                                        <i class="fa-brands fa-vuejs fa-2x" style="color: #4fc08d;"></i>
                                        <div class="skill-progress-circle">
                                            <svg class="progress-ring" width="60" height="60">
                                                <circle class="progress-ring-circle" stroke="#4fc08d" stroke-width="3" fill="transparent" r="26" cx="30" cy="30"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <h5 class="textColor2 fw-bold mb-0">Vue.js</h5>
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                                <div class="skill-card interactiveComponentColor rounded-3 p-3 text-center h-100" data-skill="Tailwind CSS" data-level="88">
                                    <div class="skill-icon-container mb-3">
                                        <i class="fa-solid fa-wind fa-2x" style="color: #06b6d4;"></i>
                                        <div class="skill-progress-circle">
                                            <svg class="progress-ring" width="60" height="60">
                                                <circle class="progress-ring-circle" stroke="#06b6d4" stroke-width="3" fill="transparent" r="26" cx="30" cy="30"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <h5 class="textColor2 fw-bold mb-0">Tailwind CSS</h5>
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                                <div class="skill-card interactiveComponentColor rounded-3 p-3 text-center h-100" data-skill="Bootstrap" data-level="92">
                                    <div class="skill-icon-container mb-3">
                                        <i class="fa-brands fa-bootstrap fa-2x" style="color: #7952b3;"></i>
                                        <div class="skill-progress-circle">
                                            <svg class="progress-ring" width="60" height="60">
                                                <circle class="progress-ring-circle" stroke="#7952b3" stroke-width="3" fill="transparent" r="26" cx="30" cy="30"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <h5 class="textColor2 fw-bold mb-0">Bootstrap</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Backend Tab -->
                    <div class="tab-pane fade" id="backend" role="tabpanel">
                        <div class="row g-4 justify-content-center skill-cards-container mt-1 mx-1">
                            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                                <div class="skill-card interactiveComponentColor rounded-3 p-3 text-center h-100" data-skill="PHP" data-level="90">
                                    <div class="skill-icon-container mb-3">
                                        <i class="fa-brands fa-php fa-2x" style="color: #777bb4;"></i>
                                        <div class="skill-progress-circle">
                                            <svg class="progress-ring" width="60" height="60">
                                                <circle class="progress-ring-circle" stroke="#777bb4" stroke-width="3" fill="transparent" r="26" cx="30" cy="30"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <h5 class="textColor2 fw-bold mb-0">PHP</h5>
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                                <div class="skill-card interactiveComponentColor rounded-3 p-3 text-center h-100" data-skill="Symfony" data-level="88">
                                    <div class="skill-icon-container mb-3">
                                        <i class="fa-brands fa-symfony fa-2x" style="color: #000000;"></i>
                                        <div class="skill-progress-circle">
                                            <svg class="progress-ring" width="60" height="60">
                                                <circle class="progress-ring-circle" stroke="#30a46c" stroke-width="3" fill="transparent" r="26" cx="30" cy="30"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <h5 class="textColor2 fw-bold mb-0">Symfony</h5>
                                </div>
                            </div>



                            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                                <div class="skill-card interactiveComponentColor rounded-3 p-3 text-center h-100" data-skill="Node.js" data-level="75">
                                    <div class="skill-icon-container mb-3">
                                        <i class="fa-brands fa-node-js fa-2x" style="color: #68a063;"></i>
                                        <div class="skill-progress-circle">
                                            <svg class="progress-ring" width="60" height="60">
                                                <circle class="progress-ring-circle" stroke="#68a063" stroke-width="3" fill="transparent" r="26" cx="30" cy="30"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <h5 class="textColor2 fw-bold mb-0">Node.js</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CMS Tab -->
                    <div class="tab-pane fade" id="cms" role="tabpanel">
                        <div class="row g-4 justify-content-center skill-cards-container mt-1 mx-1">
                            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                                <div class="skill-card interactiveComponentColor rounded-3 p-3 text-center h-100" data-skill="WordPress" data-level="90">
                                    <div class="skill-icon-container mb-3">
                                        <i class="fa-brands fa-wordpress fa-2x" style="color: #21759b;"></i>
                                        <div class="skill-progress-circle">
                                            <svg class="progress-ring" width="60" height="60">
                                                <circle class="progress-ring-circle" stroke="#21759b" stroke-width="3" fill="transparent" r="26" cx="30" cy="30"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <h5 class="textColor2 fw-bold mb-0">WordPress</h5>
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                                <div class="skill-card interactiveComponentColor rounded-3 p-3 text-center h-100" data-skill="PrestaShop" data-level="85">
                                    <div class="skill-icon-container mb-3">
                                        <i class="fa-solid fa-shopping-cart fa-2x" style="color: #df0067;"></i>
                                        <div class="skill-progress-circle">
                                            <svg class="progress-ring" width="60" height="60">
                                                <circle class="progress-ring-circle" stroke="#df0067" stroke-width="3" fill="transparent" r="26" cx="30" cy="30"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <h5 class="textColor2 fw-bold mb-0">PrestaShop</h5>
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                                <div class="skill-card interactiveComponentColor rounded-3 p-3 text-center h-100" data-skill="Elementor" data-level="88">
                                    <div class="skill-icon-container mb-3">
                                        <i class="fa-solid fa-paint-brush fa-2x" style="color: #d63384;"></i>
                                        <div class="skill-progress-circle">
                                            <svg class="progress-ring" width="60" height="60">
                                                <circle class="progress-ring-circle" stroke="#d63384" stroke-width="3" fill="transparent" r="26" cx="30" cy="30"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <h5 class="textColor2 fw-bold mb-0">Elementor</h5>
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                                <div class="skill-card interactiveComponentColor rounded-3 p-3 text-center h-100" data-skill="Divi" data-level="80">
                                    <div class="skill-icon-container mb-3">
                                        <i class="fa-solid fa-magic-wand-sparkles fa-2x" style="color: #8b5cf6;"></i>
                                        <div class="skill-progress-circle">
                                            <svg class="progress-ring" width="60" height="60">
                                                <circle class="progress-ring-circle" stroke="#8b5cf6" stroke-width="3" fill="transparent" r="26" cx="30" cy="30"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <h5 class="textColor2 fw-bold mb-0">Divi</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- IA/Automatisation Tab -->
                    <div class="tab-pane fade" id="automation" role="tabpanel">
                        <div class="row g-4 justify-content-center skill-cards-container mt-1 mx-1">
                            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                                <div class="skill-card interactiveComponentColor rounded-3 p-3 text-center h-100" data-skill="n8n" data-level="85">
                                    <div class="skill-icon-container mb-3">
                                        <i class="fa-solid fa-diagram-project fa-2x" style="color: #ea4b71;"></i>
                                        <div class="skill-progress-circle">
                                            <svg class="progress-ring" width="60" height="60">
                                                <circle class="progress-ring-circle" stroke="#ea4b71" stroke-width="3" fill="transparent" r="26" cx="30" cy="30"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <h5 class="textColor2 fw-bold mb-0">n8n</h5>
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                                <div class="skill-card interactiveComponentColor rounded-3 p-3 text-center h-100" data-skill="Office 365" data-level="90">
                                    <div class="skill-icon-container mb-3">
                                        <i class="fa-brands fa-microsoft fa-2x" style="color: #0078d4;"></i>
                                        <div class="skill-progress-circle">
                                            <svg class="progress-ring" width="60" height="60">
                                                <circle class="progress-ring-circle" stroke="#0078d4" stroke-width="3" fill="transparent" r="26" cx="30" cy="30"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <h5 class="textColor2 fw-bold mb-0">Office 365</h5>
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                                <div class="skill-card interactiveComponentColor rounded-3 p-3 text-center h-100" data-skill="Power Apps" data-level="82">
                                    <div class="skill-icon-container mb-3">
                                        <i class="fa-solid fa-mobile-screen-button fa-2x" style="color: #742774;"></i>
                                        <div class="skill-progress-circle">
                                            <svg class="progress-ring" width="60" height="60">
                                                <circle class="progress-ring-circle" stroke="#742774" stroke-width="3" fill="transparent" r="26" cx="30" cy="30"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <h5 class="textColor2 fw-bold mb-0">Power Apps</h5>
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                                <div class="skill-card interactiveComponentColor rounded-3 p-3 text-center h-100" data-skill="Power Automate" data-level="88">
                                    <div class="skill-icon-container mb-3">
                                        <i class="fa-solid fa-bolt fa-2x" style="color: #0066cc;"></i>
                                        <div class="skill-progress-circle">
                                            <svg class="progress-ring" width="60" height="60">
                                                <circle class="progress-ring-circle" stroke="#0066cc" stroke-width="3" fill="transparent" r="26" cx="30" cy="30"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <h5 class="textColor2 fw-bold mb-0">Power Automate</h5>
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                                <div class="skill-card interactiveComponentColor rounded-3 p-3 text-center h-100" data-skill="Power BI" data-level="80">
                                    <div class="skill-icon-container mb-3">
                                        <i class="fa-solid fa-chart-line fa-2x" style="color: #f2c811;"></i>
                                        <div class="skill-progress-circle">
                                            <svg class="progress-ring" width="60" height="60">
                                                <circle class="progress-ring-circle" stroke="#f2c811" stroke-width="3" fill="transparent" r="26" cx="30" cy="30"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <h5 class="textColor2 fw-bold mb-0">Power BI</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tools & DevOps Tab -->
                    <div class="tab-pane fade" id="tools" role="tabpanel">
                        <div class="row g-4 justify-content-center skill-cards-container mt-1 mx-1">
                            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                                <div class="skill-card interactiveComponentColor rounded-3 p-3 text-center h-100" data-skill="Git" data-level="85">
                                    <div class="skill-icon-container mb-3">
                                        <i class="fa-brands fa-git-alt fa-2x" style="color: #f05032;"></i>
                                        <div class="skill-progress-circle">
                                            <svg class="progress-ring" width="60" height="60">
                                                <circle class="progress-ring-circle" stroke="#f05032" stroke-width="3" fill="transparent" r="26" cx="30" cy="30"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <h5 class="textColor2 fw-bold mb-0">Git</h5>
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                                <div class="skill-card interactiveComponentColor rounded-3 p-3 text-center h-100" data-skill="Docker" data-level="78">
                                    <div class="skill-icon-container mb-3">
                                        <i class="fa-brands fa-docker fa-2x" style="color: #2496ed;"></i>
                                        <div class="skill-progress-circle">
                                            <svg class="progress-ring" width="60" height="60">
                                                <circle class="progress-ring-circle" stroke="#2496ed" stroke-width="3" fill="transparent" r="26" cx="30" cy="30"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <h5 class="textColor2 fw-bold mb-0">Docker</h5>
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                                <div class="skill-card interactiveComponentColor rounded-3 p-3 text-center h-100" data-skill="Vercel" data-level="82">
                                    <div class="skill-icon-container mb-3">
                                        <i class="fa-solid fa-cloud fa-2x" style="color: #000000;"></i>
                                        <div class="skill-progress-circle">
                                            <svg class="progress-ring" width="60" height="60">
                                                <circle class="progress-ring-circle" stroke="#30a46c" stroke-width="3" fill="transparent" r="26" cx="30" cy="30"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <h5 class="textColor2 fw-bold mb-0">Vercel</h5>
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                                <div class="skill-card interactiveComponentColor rounded-3 p-3 text-center h-100" data-skill="CI/CD" data-level="75">
                                    <div class="skill-icon-container mb-3">
                                        <i class="fa-solid fa-infinity fa-2x" style="color: #ff6b35;"></i>
                                        <div class="skill-progress-circle">
                                            <svg class="progress-ring" width="60" height="60">
                                                <circle class="progress-ring-circle" stroke="#ff6b35" stroke-width="3" fill="transparent" r="26" cx="30" cy="30"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <h5 class="textColor2 fw-bold mb-0">CI/CD</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <!-- Projects Section -->

    <section class="container-fluid secondBackgroundColor py-5 px-0 mx-0" id="projects">
        <!-- Titre de section Projects -->
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h2 class="section-title" id="projectTitle">PROJETS</h2>
                <div class="section-separator"></div>
            </div>
        </div>
         <!-- Swiper -->
          <div class="swiper mySwiper z-2">
          <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="project-card rounded-4 overflow-hidden shadow-lg">
                    <div class="row g-0">
                        <!-- Image à gauche -->
                        <div class="col-12 col-md-4">
                            <div class="project-image-container">
                                <a href="https://alpine-eight-beta.vercel.app/" target="_blank">
                                    <img src="images/alpine.webp" loading="lazy" class="project-image" alt="Image représentant le site Alpine">
                                </a>
                            </div>
                        </div>
                        <!-- Contenu à droite -->
                        <div class="col-12 col-md-8">
                            <div class="project-content p-4">
                                <div>
                                    <h3 class="project-title titleColor fw-bold mb-3">ALPINE CONFIGURATOR</h3>
                                    
                                    <!-- Technologies utilisées avec logos -->
                                    <div class="project-technologies mb-3">
                                        <div class="d-flex align-items-center flex-wrap gap-1">
                                            <span class="tech-badge">
                                                <i class="fa-brands fa-js-square" style="color: #f7df1e;"></i>
                                                <span>JavaScript</span>
                                            </span>
                                            <span class="tech-badge">
                                                <i class="fa-brands fa-react" style="color: #61dafb;"></i>
                                                <span>Next.js</span>
                                            </span>
                                            <span class="tech-badge">
                                                <i class="fa-solid fa-database" style="color: #764abc;"></i>
                                                <span>Redux</span>
                                            </span>
                                        </div>
                                    </div>
                                    
                                    <p class="project-description textColor2 mb-3">
                                        Reproduction de la page d'accueil Alpine et développement d'un configurateur interactif. 
                                        Application web permettant de découvrir la marque Alpine.
                                    </p>
                                    
                                    <p class="project-quote fst-italic textColor2 mb-3">
                                        "Développement d'une application web permettant de découvrir la marque."
                                    </p>
                                </div>
                                
                                <div class="project-actions d-flex align-items-center gap-3">
                                    <a href="https://alpine-eight-beta.vercel.app/" class="btn btn-success btn-change6" target="_blank">
                                        <i class="fa-solid fa-external-link-alt me-2"></i>Voir le projet
                                    </a>
                                    <a href="https://github.com/Xenophylius/alpine" aria-label="Lien vers la page Github du projet Alpine" target="_blank">
                                        <i class="fa-brands fa-github fa-2x hoverScale" style="color: #eeeef0;"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="project-card rounded-4 overflow-hidden shadow-lg">
                    <div class="row g-0">
                        <!-- Image à gauche -->
                        <div class="col-12 col-md-4">
                            <div class="project-image-container">
                                <a href="http://film-harmonik.projets.p8.garage404.com/" target="_blank">
                                    <img src="images/filmHarmonik.webp" loading="lazy" class="project-image" alt="Image représentant le site film harmonik">
                                </a>
                            </div>
                        </div>
                        <!-- Contenu à droite -->
                        <div class="col-12 col-md-8">
                            <div class="project-content p-4">
                                <div>
                                    <h3 class="project-title titleColor fw-bold mb-3">FILM HARMONIK</h3>
                                    
                                    <!-- Technologies utilisées avec logos -->
                                    <div class="project-technologies mb-3">
                                        <div class="d-flex align-items-center flex-wrap gap-1">
                                            <span class="tech-badge">
                                                <i class="fa-brands fa-wordpress" style="color: #21759b;"></i>
                                                <span>WordPress</span>
                                            </span>
                                            <span class="tech-badge">
                                                <i class="fa-brands fa-php" style="color: #777bb4;"></i>
                                                <span>PHP</span>
                                            </span>
                                            <span class="tech-badge">
                                                <i class="fa-solid fa-credit-card" style="color: #6772e5;"></i>
                                                <span>Stripe</span>
                                            </span>
                                        </div>
                                    </div>
                                    
                                    <p class="project-description textColor2 mb-3">
                                        Site web pour un festival de musique avec système de paiement Stripe intégré. 
                                        Développement en respectant les normes RGPD et optimisation de l'expérience utilisateur.
                                    </p>
                                    
                                    <p class="project-quote fst-italic textColor2 mb-3">
                                        "Création d'un site web pour un festival de musique en assurant la conformité RGPD."
                                    </p>
                                </div>
                                
                                <div class="project-actions d-flex align-items-center gap-3">
                                    <a href="http://film-harmonik.projets.p8.garage404.com/" class="btn btn-success btn-change6" target="_blank">
                                        <i class="fa-solid fa-external-link-alt me-2"></i>Voir le projet
                                    </a>
                                    <a href="https://github.com/G404-DWWM/RGPD-Festival" aria-label="Lien vers la page Github du projet Festival" target="_blank">
                                        <i class="fa-brands fa-github fa-2x hoverScale" style="color: #eeeef0;"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="project-card rounded-4 overflow-hidden shadow-lg">
                    <div class="row g-0">
                        <!-- Image à gauche -->
                        <div class="col-12 col-md-4">
                            <div class="project-image-container">
                                <a href="https://christophe-hopital.projets.p8.garage404.com/" target="_blank">
                                    <img src="images/hospital.webp" loading="lazy" class="project-image" alt="Image du site hopital">
                                </a>
                            </div>
                        </div>
                        <!-- Contenu à droite -->
                        <div class="col-12 col-md-8">
                            <div class="project-content p-4">
                                <div>
                                    <h3 class="project-title titleColor fw-bold mb-3">HOSPITAL MANAGEMENT</h3>
                                    
                                    <!-- Technologies utilisées avec logos -->
                                    <div class="project-technologies mb-3">
                                        <div class="d-flex align-items-center flex-wrap gap-1">
                                            <span class="tech-badge">
                                                <i class="fa-brands fa-php" style="color: #777bb4;"></i>
                                                <span>PHP</span>
                                            </span>
                                            <span class="tech-badge">
                                                <i class="fa-solid fa-database" style="color: #00758f;"></i>
                                                <span>MySQL</span>
                                            </span>
                                            <span class="tech-badge">
                                                <i class="fa-brands fa-html5" style="color: #e34f26;"></i>
                                                <span>HTML5</span>
                                            </span>
                                        </div>
                                    </div>
                                    
                                    <p class="project-description textColor2 mb-3">
                                        Application de gestion hospitalière permettant l'ajout de patients et la gestion des rendez-vous. 
                                        Système complet avec authentification et base de données sécurisée.
                                    </p>
                                    
                                    <p class="project-quote fst-italic textColor2 mb-3">
                                        "Application pour assistant médical avec gestion de patients et rendez-vous en base de données."
                                    </p>
                                </div>
                                
                                <div class="project-actions d-flex align-items-center gap-3">
                                    <a href="https://christophe-hopital.projets.p8.garage404.com/" class="btn btn-success btn-change6" target="_blank">
                                        <i class="fa-solid fa-external-link-alt me-2"></i>Voir le projet
                                    </a>
                                    <a href="https://github.com/Xenophylius/PHPSQL" aria-label="Lien vers la page Github du projet Hospital" target="_blank">
                                        <i class="fa-brands fa-github fa-2x hoverScale" style="color: #eeeef0;"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="project-card rounded-4 overflow-hidden shadow-lg">
                    <div class="row g-0">
                        <!-- Image à gauche -->
                        <div class="col-12 col-md-4">
                            <div class="project-image-container">
                                <a href="https://rumble-react.vercel.app/" target="_blank">
                                    <img src="images/fightHero.webp" loading="lazy" class="project-image" alt="Image du site rumble react sur Vercel">
                                </a>
                            </div>
                        </div>
                        <!-- Contenu à droite -->
                        <div class="col-12 col-md-8">
                            <div class="project-content p-4">
                                <div>
                                    <h3 class="project-title titleColor fw-bold mb-3">FIGHT HERO</h3>
                                    
                                    <!-- Technologies utilisées avec logos -->
                                    <div class="project-technologies mb-3">
                                        <div class="d-flex align-items-center flex-wrap gap-1">
                                            <span class="tech-badge">
                                                <i class="fa-brands fa-react" style="color: #61dafb;"></i>
                                                <span>React</span>
                                            </span>
                                            <span class="tech-badge">
                                                <i class="fa-solid fa-database" style="color: #764abc;"></i>
                                                <span>Redux</span>
                                            </span>
                                            <span class="tech-badge">
                                                <i class="fa-brands fa-bootstrap" style="color: #7952b3;"></i>
                                                <span>Bootstrap</span>
                                            </span>
                                        </div>
                                    </div>
                                    
                                    <p class="project-description textColor2 mb-3">
                                        Application single page développée avec React et Redux. 
                                        Création d'un store complexe avec gestion d'état globale et composants réutilisables.
                                    </p>
                                    
                                    <p class="project-quote fst-italic textColor2 mb-3">
                                        "Création d'un store avec Redux, utilisation de composants et d'actions."
                                    </p>
                                </div>
                                
                                <div class="project-actions d-flex align-items-center gap-3">
                                    <a href="https://rumble-react.vercel.app/" class="btn btn-success btn-change6" target="_blank">
                                        <i class="fa-solid fa-external-link-alt me-2"></i>Voir le projet
                                    </a>
                                    <a href="https://github.com/Xenophylius/RumbleReact" aria-label="Lien vers la page Github du projet Fight Hero" target="_blank">
                                        <i class="fa-brands fa-github fa-2x hoverScale" style="color: #eeeef0;"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="project-card rounded-4 overflow-hidden shadow-lg">
                    <div class="row g-0">
                        <!-- Image à gauche -->
                        <div class="col-12 col-md-4">
                            <div class="project-image-container">
                                <a href="https://christophe-chat.projets.p8.garage404.com/" target="_blank">
                                    <img src="images/chat.webp" loading="lazy" class="project-image" alt="Image du site mini chat">
                                </a>
                            </div>
                        </div>
                        <!-- Contenu à droite -->
                        <div class="col-12 col-md-8">
                            <div class="project-content p-4">
                                <div>
                                    <h3 class="project-title titleColor fw-bold mb-3">MINI-CHAT</h3>
                                    
                                    <!-- Technologies utilisées avec logos -->
                                    <div class="project-technologies mb-3">
                                        <div class="d-flex align-items-center flex-wrap gap-1">
                                            <span class="tech-badge">
                                                <i class="fa-brands fa-php" style="color: #777bb4;"></i>
                                                <span>PHP</span>
                                            </span>
                                            <span class="tech-badge">
                                                <i class="fa-solid fa-shield-alt" style="color: #28a745;"></i>
                                                <span>Auth</span>
                                            </span>
                                            <span class="tech-badge">
                                                <i class="fa-solid fa-database" style="color: #4479a1;"></i>
                                                <span>SQL</span>
                                            </span>
                                        </div>
                                    </div>
                                    
                                    <p class="project-description textColor2 mb-3">
                                        Application de mini-chat développée en PHP avec système d'authentification complet, gestion des utilisateurs et communications en temps réel.
                                    </p>
                                    
                                    <p class="project-quote fst-italic textColor2 mb-3">
                                        "Construction d'un mini-chat avec authentification, déconnexion, ajax, utilisateurs et plus encore."
                                    </p>
                                </div>
                                
                                <div class="project-actions d-flex align-items-center gap-3">
                                    <a href="https://christophe-chat.projets.p8.garage404.com/" class="btn btn-success btn-change6" target="_blank">
                                        <i class="fa-solid fa-external-link-alt me-2"></i>Voir le projet
                                    </a>
                                    <a href="https://github.com/G404-DWWM/Vanilla-TP-MiniChat" aria-label="Lien vers la page Github du projet Mini-Chat" target="_blank">
                                        <i class="fa-brands fa-github fa-2x hoverScale" style="color: #eeeef0;"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
              
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
          </div>
    </section>
    
    <!-- Espace pour la pagination du carousel -->
    <div style="height: 60px;"></div>
    
    <!-- Contact Section -->

    <section class="container-fluid row justify-content-center pe-0" id="contact">
        <!-- Titre de section Contact -->
        <div class="col-12 text-center mb-5">
            <h2 class="section-title">CONTACT</h2>
            <div class="section-separator"></div>
        </div>
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
	  <script src="toastr.min.js"></script>
    
    <!-- Configuration et gestion des notifications toastr -->
    <script>
      $(document).ready(function() {
        // Configuration toastr moderne
        toastr.options = {
          "closeButton": true,
          "debug": false,
          "newestOnTop": true,
          "progressBar": true,
          "positionClass": "toast-top-right",
          "preventDuplicates": true,
          "onclick": null,
          "showDuration": "300",
          "hideDuration": "300",
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
          
        // Vérification des paramètres URL pour afficher les notifications
        const urlParams = new URLSearchParams(window.location.search);
        const errorMsg = urlParams.get('error');
        const successMsg = urlParams.get('success');
        
        if (errorMsg) {
          toastr.error(decodeURIComponent(errorMsg), 'Erreur');
        }
        
        if (successMsg) {
          toastr.success(decodeURIComponent(successMsg), 'Succès');
        }
        
        // Nettoyer l'URL après affichage des notifications
        if (errorMsg || successMsg) {
          const cleanURL = window.location.protocol + "//" + window.location.host + window.location.pathname;
          window.history.replaceState({}, document.title, cleanURL);
        }
      });
    </script>
    
    <script src="app.js"></script>
    <script src="skills-interactions.js"></script>    
  </body>
</html>
