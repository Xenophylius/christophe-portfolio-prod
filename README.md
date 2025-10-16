# Portfolio Christophe Delahaye

## 🚀 Installation

### Prérequis
- PHP 8.3 ou supérieur
- Node.js et npm
- Composer

### Installation des dépendances
```bash
# Dépendances PHP
composer install

# Dépendances Node.js
npm install
```

### Démarrage du serveur de développement
```bash
php -S localhost:8000
```

## 📁 Structure du projet

```
├── index.php              # Page principale du portfolio
├── style.css              # Styles principaux
├── projects-styles.css    # Styles spécifiques aux projets
├── skills-animations.css  # Animations des compétences
├── app.js                 # JavaScript principal
├── skills-interactions.js # Interactions des compétences
├── composer.json          # Dépendances PHP
├── package.json           # Dépendances Node.js (pour les outils front-end)
├── .gitignore             # Fichiers ignorés par Git
└── vendor/                # Dépendances Composer (non versionnées)
    └── ...
```

## 🔧 Dépendances

### PHP (Composer)
- **PHPMailer** : Envoi d'emails pour le formulaire de contact
- **vlucas/phpdotenv** : Gestion des variables d'environnement

### Node.js (npm)
- **browserify** : Bundler JavaScript pour le navigateur
- **dotenv** : Gestion des variables d'environnement côté client

### Frontend (CDN)
- **Bootstrap 5.3.2** : Framework CSS responsive
- **Swiper.js** : Carousel moderne pour les projets
- **Font Awesome** : Icônes
- **Google Fonts** : Typographies personnalisées

## 🌟 Fonctionnalités

- ✅ Design moderne avec hero section animée
- ✅ Background animé global avec particules flottantes  
- ✅ Navbar fixe avec effets glassmorphism
- ✅ Mode sombre/clair adaptatif
- ✅ Carousel de projets avec Swiper.js
- ✅ Modal CV modernisée
- ✅ Formulaire de contact fonctionnel
- ✅ Animations et transitions fluides
- ✅ 100% responsive

## ⚙️ Configuration

### Variables d'environnement
Créez un fichier `.env` à la racine avec :
```
SMTP_HOST=your-smtp-host
SMTP_USERNAME=your-email@domain.com
SMTP_PASSWORD=your-password
SMTP_PORT=587
```

## 🚨 Important : Gestion Git

Le dossier `vendor/` est automatiquement exclu du versioning Git via le `.gitignore`. 

**Après un clone du repository :**
```bash
composer install
npm install
```

**Pourquoi ?** 
Les dépendances Composer sont spécifiques à chaque environnement et peuvent varier selon la plateforme. Il est recommandé de les regénérer localement plutôt que de les versionner.

## 🚀 Déploiement en Production

### Mise à jour du serveur de production
```bash
# 1. Récupérer les dernières modifications
git pull origin main

# 2. Réinstaller les dépendances PHP (avec optimisations de production)
composer install --no-dev --optimize-autoloader

# 3. Réinstaller les dépendances Node.js (production uniquement)
npm ci --production

# 4. Vérifier les permissions des fichiers
chmod 644 *.php *.css *.js
chmod 755 images/
```

### ⚠️ Important pour la Production
- **Toujours** réinstaller les dépendances après un `git pull`
- **Utiliser** `composer install --no-dev` pour exclure les dépendances de développement
- **Utiliser** `npm ci` au lieu de `npm install` pour des installations reproductibles
- **Vérifier** que le fichier `.env` est configuré avec les bonnes variables de production

### 🔒 Sécurité Production
Assurez-vous que ces fichiers/dossiers ne sont pas accessibles publiquement :
- `.env` (variables d'environnement)
- `composer.json` / `composer.lock`
- `package.json` / `package-lock.json`
- `.git/` (dossier Git)
- `vendor/` (si exposé publiquement)