# 🌐 Web – Racine des sites hébergés sur mon VPS

Bienvenue sur ce dépôt GitHub !! Il contient le **code source de la racine web (`/var/www/`)** de mon serveur VPS personnel (accessible sur [yannctr.fr](https://yannctr.fr)). Il centralise plusieurs sites ou applications web, répartis dans différents sous-dossiers.

---

## 📁 Structure des dossiers

| Dossier       | Description                                                                 |
|---------------|-----------------------------------------------------------------------------|
| `alternance`  | Site de présentation pour ma recherche d'alternance, accessible via [alternance.yannctr.fr](https://alternance.yannctr.fr)                       |
| `apoal`       | Projet de jeu web inspiré de *À Prendre ou à Laisser*. (Développement en cours) accessible via [apoal.yannctr.fr](https://apoal.yannctr.fr)                   |
| `cv`          | Page contenant mon CV en ligne, accessible via [cv.yannctr.fr](https://cv.yannctr.fr). |
| `html`        | Portail récapitulatif de mes sites web, accessible sur [yannctr.fr](https://yannctr.fr)                                              |
| `matomo`      | Interface de suivi statistique auto-hébergée avec Matomo.                  |
| `meteowan`    | 🌦️ Projet Web BTS de météo avec Laravel pour le lycée Kastler de Talence. *(submodule GitHub)* accessible sur [meteowan.yannctr.fr](https://meteowan.yannctr.fr)|
| `monprenom`   | 🔤 Projet d'analyse de la valeur symbolique/prénoms. *(submodule GitHub)* accessible sur [monprenom.yannctr.fr](https://monprenom.yannctr.fr) |
| `progressbar` | 📊 Projet de barre de progression du temps. *(submodule GitHub)* accessible via [progressbar.yannctr.fr](https://progressbar.yannctr.fr)  |
| `socials`     | Page de type "link-in-bio" regroupant mes liens de réseaux sociaux, accessible sur [socials.yannctr.fr](https://socials.yannctr.fr).     |

---

## 🔗 Liens utiles

- [Mon profil GitHub](https://github.com/yannctroff)
- [Mon site principal](https://yannctr.fr)

---

## 🔗 Liens des submodules
- `meteowan` : [https://github.com/yannctroff/meteowan](https://github.com/yannctroff/meteowan)
- `monprenom`: [https://github.com/yannctroff/valeur_prenom](https://github.com/yannctroff/valeur_prenom)
- `progressbar`: [https://github.com/yannctroff/progress-bar](https://github.com/yannctroff/progress-bar)

---

## 📥 Clonage avec les sous-modules

Pour récupérer correctement le projet avec les dossiers dit "submodules" :

```bash
git clone https://github.com/yannctroff/Web.git
cd Web
git submodule update --init --recursive
```
