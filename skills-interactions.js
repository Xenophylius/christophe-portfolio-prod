// ===== SKILLS SECTION INTERACTIVE ANIMATIONS =====

// Initialisation forcée des tabs Bootstrap
function initializeSkillsTabs() {
    // Assurer que Bootstrap Tabs fonctionne
    const tabsElement = document.querySelector('#skillTabs');
    if (tabsElement && window.bootstrap) {
        // Forcer l'initialisation Bootstrap si nécessaire
        try {
            new bootstrap.Tab(document.querySelector('#frontend-tab'));
        } catch (e) {
        }
    }
}

document.addEventListener('DOMContentLoaded', function() {
    
    // Initialiser les tabs d'abord
    setTimeout(initializeSkillsTabs, 100);
    
    // Animation des cercles de progression (toujours à 100%)
    function animateProgressCircle(card) {
        const progressCircle = card.querySelector('.progress-ring-circle');
        
        if (progressCircle) {
            const circumference = 2 * Math.PI * 26; // rayon = 26
            // Animation à 100% (offset = 0)
            progressCircle.style.strokeDashoffset = 0;
        }
    }

    // Effet de parallax léger sur les cards
    function addParallaxEffect() {
        const cards = document.querySelectorAll('.skill-card');
        
        cards.forEach(card => {
            card.addEventListener('mousemove', function(e) {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;
                
                const rotateX = (y - centerY) / 10;
                const rotateY = (centerX - x) / 10;
                
                card.style.transform = `translateY(-15px) scale(1.05) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
            });
            
            card.addEventListener('mouseleave', function() {
                card.style.transform = '';
            });
        });
    }

    // Animation d'entrée des cards lors du changement de tab
    function animateTabContent(tabPane) {
        const cards = tabPane.querySelectorAll('.skill-card');
        
        // Reset des animations
        cards.forEach((card, index) => {
            card.style.animation = 'none';
            card.style.opacity = '0';
        });
        
        // Redémarrer les animations avec délai
        setTimeout(() => {
            cards.forEach((card, index) => {
                setTimeout(() => {
                    card.style.opacity = '1';
                    card.style.animation = `slideInFromBottom 0.6s ease-out forwards`;
                }, index * 100);
            });
        }, 100);
    }

    // Effet de particules au clic
    function createParticleEffect(x, y, color) {
        const colors = [color, '#ffffff', '#30a46c'];
        
        for (let i = 0; i < 15; i++) {
            const particle = document.createElement('div');
            particle.style.position = 'fixed';
            particle.style.left = x + 'px';
            particle.style.top = y + 'px';
            particle.style.width = '4px';
            particle.style.height = '4px';
            particle.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
            particle.style.borderRadius = '50%';
            particle.style.pointerEvents = 'none';
            particle.style.zIndex = '9999';
            
            document.body.appendChild(particle);
            
            const angle = (Math.PI * 2 * i) / 15;
            const velocity = 100 + Math.random() * 100;
            
            const animation = particle.animate([
                {
                    transform: 'translate(0, 0) scale(1)',
                    opacity: 1
                },
                {
                    transform: `translate(${Math.cos(angle) * velocity}px, ${Math.sin(angle) * velocity}px) scale(0)`,
                    opacity: 0
                }
            ], {
                duration: 1000 + Math.random() * 500,
                easing: 'cubic-bezier(0.25, 0.46, 0.45, 0.94)'
            });
            
            animation.onfinish = () => particle.remove();
        }
    }

    // Effet sonore virtuel (vibration visuelle)
    function addClickEffect(element) {
        element.style.transform = 'scale(0.95)';
        setTimeout(() => {
            element.style.transform = '';
        }, 150);
    }

    // Notification toast au clic sur une skill
    function showSkillToast(skillName, color) {
        // Créer le toast
        const toast = document.createElement('div');
        toast.className = 'skill-toast';
        toast.innerHTML = `
            <i class="fa-solid fa-check-circle me-2"></i>
            <strong>${skillName}</strong> sélectionné !
        `;
        
        // Style du toast
        toast.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            background: linear-gradient(135deg, ${color}20, ${color}40);
            border: 2px solid ${color};
            color: ${color};
            padding: 12px 20px;
            border-radius: 10px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
            z-index: 10000;
            font-weight: 600;
            backdrop-filter: blur(10px);
            transform: translateX(400px);
            transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        `;
        
        document.body.appendChild(toast);
        
        // Animation d'entrée
        setTimeout(() => {
            toast.style.transform = 'translateX(0)';
        }, 100);
        
        // Animation de sortie
        setTimeout(() => {
            toast.style.transform = 'translateX(400px)';
            setTimeout(() => {
                if (toast.parentNode) {
                    toast.parentNode.removeChild(toast);
                }
            }, 300);
        }, 2000);
    }

    // Gestionnaire des tabs - Correction pour Bootstrap
    const tabButtons = document.querySelectorAll('#skillTabs .nav-link');
    
    tabButtons.forEach((button, index) => {
        
        // Événement au clic pour assurer le fonctionnement
        button.addEventListener('click', function(event) {
            // Supprimer la classe active de tous les boutons
            tabButtons.forEach(btn => btn.classList.remove('active'));
            
            // Ajouter la classe active au bouton cliqué
            this.classList.add('active');
            
            // Masquer tous les tab-panes
            const allTabPanes = document.querySelectorAll('.tab-pane');
            allTabPanes.forEach(pane => {
                pane.classList.remove('show', 'active');
            });
            
            // Afficher le tab-pane correspondant
            const targetId = this.getAttribute('data-bs-target');
            const targetPane = document.querySelector(targetId);
            
            if (targetPane) {
                targetPane.classList.add('show', 'active');
                setTimeout(() => {
                    animateTabContent(targetPane);
                }, 100);
            }
        });
        
        // Garder aussi l'événement Bootstrap pour la compatibilité
        button.addEventListener('shown.bs.tab', function(event) {
            const target = document.querySelector(event.target.getAttribute('data-bs-target'));
            if (target) {
                animateTabContent(target);
            }
        });
    });

    // Gestionnaire des cards
    const skillCards = document.querySelectorAll('.skill-card');
    
    skillCards.forEach(card => {
        // Animation du cercle de progression au hover
        card.addEventListener('mouseenter', function() {
            animateProgressCircle(card);
        });
        
        // Effet de clic avec interactions visuelles renforcées
        card.addEventListener('click', function(e) {
            e.preventDefault();
            
            const rect = card.getBoundingClientRect();
            const x = rect.left + rect.width / 2;
            const y = rect.top + rect.height / 2;
            
            const icon = card.querySelector('i');
            const skillName = card.getAttribute('data-skill');
            const color = window.getComputedStyle(icon).color;
            
            // Effet visuel de clic
            addClickEffect(card);
            createParticleEffect(x, y, color);
            
            // Animation de rotation de l'icône
            icon.style.transform = 'rotate(360deg) scale(1.2)';
            setTimeout(() => {
                icon.style.transform = '';
            }, 500);
            
            // Animation du cercle de progression
            animateProgressCircle(card);
            
            // Notification toast
            showSkillToast(skillName, color);
            
            // Vibration si supportée
            if (navigator.vibrate) {
                navigator.vibrate([50, 100, 50]);
            }
        });
        
        // Animation de pulsation aléatoire
        setInterval(() => {
            if (!card.matches(':hover') && Math.random() < 0.1) {
                const icon = card.querySelector('i');
                if (icon) {
                    icon.style.animation = 'pulse 0.6s ease-in-out';
                    setTimeout(() => {
                        icon.style.animation = '';
                    }, 600);
                }
            }
        }, 3000);
    });

    // Ajout de l'effet parallax
    addParallaxEffect();

    // Fonction d'initialisation des tabs
    function ensureActiveTab() {
        // S'assurer qu'au moins un tab est actif
        const activeButton = document.querySelector('#skillTabs .nav-link.active');
        const activePane = document.querySelector('.tab-content .tab-pane.active');
        
        if (!activeButton || !activePane) {
            // Activer le premier tab par défaut
            const firstButton = document.querySelector('#skillTabs .nav-link');
            const firstPane = document.querySelector('.tab-content .tab-pane');
            
            if (firstButton && firstPane) {
                // Nettoyer tous les états actifs
                document.querySelectorAll('#skillTabs .nav-link').forEach(btn => {
                    btn.classList.remove('active');
                    btn.setAttribute('aria-selected', 'false');
                });
                document.querySelectorAll('.tab-content .tab-pane').forEach(pane => {
                    pane.classList.remove('active', 'show');
                });
                
                // Activer le premier
                firstButton.classList.add('active');
                firstButton.setAttribute('aria-selected', 'true');
                firstPane.classList.add('active', 'show');
                
            }
        }
    }
    
    // Initialiser l'état des tabs
    ensureActiveTab();

    // Animation d'entrée initiale
    setTimeout(() => {
        const activeTab = document.querySelector('.tab-pane.active');
        if (activeTab) {
            animateTabContent(activeTab);
        }
    }, 500);

    // Effet de type "matrix" en arrière-plan (optionnel)
    function createMatrixEffect() {
        const skillSection = document.querySelector('#skills').parentElement;
        
        if (!skillSection) return;
        
        const canvas = document.createElement('canvas');
        canvas.style.position = 'absolute';
        canvas.style.top = '0';
        canvas.style.left = '0';
        canvas.style.width = '100%';
        canvas.style.height = '100%';
        canvas.style.pointerEvents = 'none';
        canvas.style.opacity = '0.1';
        canvas.style.zIndex = '1';
        
        skillSection.style.position = 'relative';
        skillSection.appendChild(canvas);
        
        const ctx = canvas.getContext('2d');
        canvas.width = skillSection.offsetWidth;
        canvas.height = skillSection.offsetHeight;
        
        const matrix = [];
        const matrixChars = '01';
        
        for (let i = 0; i < canvas.width / 20; i++) {
            matrix[i] = Math.floor(Math.random() * canvas.height / 20);
        }
        
        function drawMatrix() {
            ctx.fillStyle = 'rgba(0, 0, 0, 0.05)';
            ctx.fillRect(0, 0, canvas.width, canvas.height);
            
            ctx.fillStyle = '#30a46c';
            ctx.font = '15px monospace';
            
            for (let i = 0; i < matrix.length; i++) {
                const text = matrixChars[Math.floor(Math.random() * matrixChars.length)];
                ctx.fillText(text, i * 20, matrix[i] * 20);
                
                if (matrix[i] * 20 > canvas.height && Math.random() > 0.975) {
                    matrix[i] = 0;
                }
                matrix[i]++;
            }
        }
        
        setInterval(drawMatrix, 100);
    }

    // Décommentez la ligne suivante pour activer l'effet matrix
    // createMatrixEffect();

    // Intersection Observer pour déclencher les animations au scroll
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const skillsSection = entry.target;
                skillsSection.classList.add('skills-visible');
                
                // Animation du titre
                const title = skillsSection.querySelector('.skill-title-animation');
                if (title) {
                    title.style.animation = 'fadeInDown 1s ease-out';
                }
                
                // Animation de la ligne
                const underline = skillsSection.querySelector('.skill-underline-animation');
                if (underline) {
                    underline.style.animation = 'expandWidth 1.5s ease-out 0.5s both';
                }
            }
        });
    }, { threshold: 0.3 });
    
    const skillsSection = document.querySelector('#skills').parentElement;
    if (skillsSection) {
        observer.observe(skillsSection);
    }
});

// Fonction utilitaire pour ajouter des effets de hover dynamiques
function addDynamicHoverEffects() {
    const style = document.createElement('style');
    style.textContent = `
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        
        .skill-card.floating {
            animation: float 3s ease-in-out infinite;
        }
    `;
    document.head.appendChild(style);
    
    // Application aléatoire de l'effet floating
    setInterval(() => {
        const cards = document.querySelectorAll('.skill-card');
        cards.forEach(card => {
            if (Math.random() < 0.2 && !card.matches(':hover')) {
                card.classList.add('floating');
                setTimeout(() => {
                    card.classList.remove('floating');
                }, 3000);
            }
        });
    }, 5000);
}