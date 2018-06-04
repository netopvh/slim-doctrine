# Front-End & Gulpfile

Le script `gulpfile.js` vous permet avec de simples commandes de compiler ou minifier vos fichiers côté front.

Dans le dossier `front`, sont disposez des dossiers dédiés au développement front-end dans divers langagues (`less`, `sass`, `scss`, `css` et `js`) mais vous pouvez aussi optimiser les images dans `img`.

Pour pouvoir utiliser le script gulp, il vous faut au préalable avoir nodejs 6 au minimum d'installé puis lancer les commandes :
```bash
$ sudo npm install -g gulp
$ npm install
```

Pour pouvoir compiler, minifier et copier ces derniers dans le dossier `public` de votre application, vous avez cette commande générale :
``` bash
$ gulp build
```

Si vous voulez gérer vos compilations séparément, voici les diverses commandes :<br>
Pour compiler les `less` en `css` :
``` bash
$ gulp less
```

Pour compiler les `sass` en `css` :
``` bash
$ gulp sass
```

Pour compiler les `scss` en `css` :
``` bash
$ gulp scss
```

Pour minifier les `css` :
``` bash
$ gulp css
```

Pour minifier les `js` :
``` bash
$ gulp js
```

Pour minifier et fusionner les `css` :
``` bash
$ gulp gcss
```

Pour minifier et fusionner les `js` :
``` bash
$ gulp gjs
```

Pour optimiser les `images` :
``` bash
$ gulp img
```

Vous disposez aussi de la commande `watch`, elle vous permet de surveiller tout changement dans vos fichiers, et exécute automatiquement la commande `build` à chaque fois que vous sauvegardez vos changements sur votre ide/editeur :
``` bash
$ gulp watch
```

Attention, selon votre version de nodejs, il ce peux qu'en utilisant `gulp watch` une erreur peut apparaître.<br>
Si c'est le cas, et que vous êtes sous UNIX/Linux, effectuer cette commande :
```bash
$ echo fs.inotify.max_user_watches=524288 | sudo tee -a /etc/sysctl.conf && sudo sysctl -p
```
Pour plus d'information sur cette dernière, aller voir ce poste sur [StackOverFlow](https://stackoverflow.com/questions/16748737/grunt-watch-error-waiting-fatal-error-watch-enospc).

Les dépendences pour gulp comporte encore à ce jours quelque vulnérabilitées, mais étant utilisé pour de la compile de fichier css/js/sass/less ceci n'est pas vraiment grave en soit.

je n'est pas la motivation de les changer, si jamais vous trouver une alternative voir implémenter webpack à la place de gulp, hésitez pas à faire une pull request !

| Introduction | Chapitre précédent | Chapitre suivant |
| :---------------------: | :--------------: | :--------------: |
| [Introduction](https://github.com/SimonDevelop/slim-doctrine/blob/master/docs/introduction.md) | [Csrf/Token](https://github.com/SimonDevelop/slim-doctrine/blob/master/docs/chapter05.md) | [Debugger Bar](https://github.com/SimonDevelop/slim-doctrine/blob/master/docs/chapter07.md) |
