# CrashMoneyLauncher

![Minecraft](https://img.shields.io/badge/Minecraft-1.0--latest-green?style=for-the-badge\&logo=minecraft)
![Electron](https://img.shields.io/badge/Electron-App-blue?style=for-the-badge\&logo=electron\&logoColor=white)
![PHP](https://img.shields.io/badge/WebServer-PHP-777BB4?style=for-the-badge\&logo=php\&logoColor=white)
![Java](https://img.shields.io/badge/Java-AutoInstall-orange?style=for-the-badge\&logo=java\&logoColor=white)
![ModLoaders](https://img.shields.io/badge/Modloaders-Forge%20%7C%20Fabric%20%7C%20Quilt-blueviolet?style=for-the-badge)
![License](https://img.shields.io/badge/License-MIT-blue?style=for-the-badge)
![Build](https://img.shields.io/badge/Build-Stable-brightgreen?style=for-the-badge)
![Contributions](https://img.shields.io/badge/Contributions-Welcome-brightgreen?style=for-the-badge)

CrashMoneyLauncher est un launcher Minecraft complet conçu pour simplifier l'installation et la gestion des instances Minecraft, avec une intégration transparente entre le client et le serveur web.

---

## ✨ Fonctionnalités principales

* 🔒 **Authentification Microsoft** : Connexion sécurisée via les identifiants Microsoft.
* ⛏️ **Support étendu des versions** : Compatibilité avec toutes les versions de Minecraft, de la 1.0 à la plus récente.
* 📦 **Support des modloaders** : Prise en charge des versions moddées incluant Forge, NeoForge, LegacyFabric, FabricMC et Quilt.
* 📰 **Fil d'actualité intégré** : Affichage des dernières nouvelles directement dans le launcher.
* ⚙️ **Gestion des paramètres** : Interface intuitive pour configurer les paramètres, y compris un panneau de configuration Java.
* 🟢 **Statut du serveur** : Affichage du statut du serveur (en ligne/hors ligne) et du nombre de joueurs connectés.
* ☕ **Installation automatique de Java** : Installation automatique de la version appropriée de Java si nécessaire.

---

## 🧰 Architecture du projet

### 1. Branche `Launcher`

Cette branche contient le code source principal du launcher, développé avec **Electron** et JavaScript, avec une interface utilisateur construite à l'aide de technologies web modernes.

**Structure du projet :**

* `src/` : Composants principaux de l'application (authentification, instances, interface, etc).
* `.vscode/` : Configurations pour le débogage avec Electron (main et renderer process).
* `.github/` : Workflows GitHub Actions.
* `package.json` : Dépendances, configuration Electron, et scripts npm.
* `build.js` : Script de build personnalisé.

**Fonctionnalités clés :**

* Authentification Microsoft via API.
* Création et gestion d'instances Minecraft avec modloaders.
* Interface utilisateur réactive et intuitive.
* Débogage possible via VSCode (Electron main/renderer).

### 2. Branche `Web-Server`

Cette branche contient le serveur web qui interagit avec le launcher pour des services complémentaires.

**Fonctionnalités du serveur :**

* Distribution des fichiers d'instances.
* Publication du fil d'actualité.
* Statut en temps réel du serveur de jeu (en ligne/offline, nombre de joueurs).

**Technos utilisées :**

* **PHP** pour la logique serveur.
* Fichiers statiques JSON/XML pour le fil d'actualité ou les métadonnées des instances.
* Configuration simple, pouvant être hébergé sur un serveur mutualisé ou un VPS léger.

---

## 🛠️ Installation et utilisation

### Prérequis

* Node.js + npm (pour le launcher)
* Serveur web compatible PHP (Apache, Nginx, etc)
* Git

### Cloner le projet

```bash
git clone https://github.com/s-i-m-o-n-git/CrashMoneyLauncher.git
cd CrashMoneyLauncher
```

### Installation des dépendances (Launcher)

```bash
npm install
```

### Modifier les URLs serveur

Dans `package.json` ou les fichiers de configuration (`config.json`, etc.), modifiez les URL pour :

* Le fil d'actualité
* Les instances Minecraft
* Le statut du serveur de jeu

### Lancer le launcher

```bash
npm start
```

### Compilation en exécutable (.exe)

```bash
npm run build
```

> ⚠️ Assurez-vous de bien configurer les champs `build` dans `package.json` (nom de l'app, icône, plateforme, etc.). Utilise [electron-builder](https://www.electron.build/) pour empaqueter l'application.

### Exemple de configuration de build dans `package.json`

```json
"build": {
  "appId": "com.crashmoney.launcher",
  "productName": "CrashMoneyLauncher",
  "files": ["dist/**/*", "node_modules/**/*", "package.json"],
  "win": {
    "target": "nsis",
    "icon": "assets/icon.ico"
  }
}
```

### Configuration du serveur web (branche Web-Server)

```bash
git checkout Web-Server
```

* Déployer les fichiers PHP sur un serveur web (ex: /var/www/html ou via un hébergement mutualisé).
* Configurer les URLs correspondantes dans le launcher (ex: URL du fil d'actu, fichiers d'instances).

---

## ✨ Ajouts Prochains

* 🔒 **Authentification Cracké via un serveur web à la NationGlory** : permettre aux utilisateurs non-premium de se connecter via un système d'UUID personnalisé.
* ⛏️ **Mise à jour automatique du launcher** : téléchargement et installation silencieuse des nouvelles versions.
* 🎨 **Thèmes personnalisables** : choix entre plusieurs thèmes visuels (sombre, clair ( mieux ) mais aussi d'autres features.....)
* 🧼 **Amélioration de l'interface utilisateur** : navigation plus fluide, animations, feedbacks utilisateur.
* 📰 **Ajout de fonctionnalités standards** : vérification d'intégrité, logs d'exécution, sélection d'écran de démarrage.
* 🛠️ **Intégration de mods recommandés** : option pour activer une liste de mods par défaut fournie par le serveur.
* 🗂️ **Multi-profil** : gestion de plusieurs comptes et instances indépendantes.

---

## 📄 Licence

Projet sous licence **MIT**.

---

## 🤝 Credits

* [https://github.com/luuxis/Selvania-Launcher](https://github.com/luuxis/Selvania-Launcher) — Launcher basé sur CraaftLauncher, source d'inspiration principale.

---

Pour toute suggestion ou contribution, ouvrez une issue ou une pull request sur le [repo GitHub](https://github.com/s-i-m-o-n-git/CrashMoneyLauncher).
