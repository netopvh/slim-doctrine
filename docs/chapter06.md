# Front-End & Gulpfile

Le script `gulpfile.js` vous permet avec de simples commandes de compiler ou minifier vos fichiers côté front.

Dans le dossier `front`, sont disposez des dossiers dédiés au développement front-end dans divers langagues (`less`, `sass`, `scss`, `css` et `js`) mais vous pouvez aussi optimiser les images dans `img`.

Pour pouvoir utiliser le script gulp, il vous faut au préalable avoir nodejs 6 au minimum d'installé puis lancer la commande :
```bash
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

| Introduction | Chapitre précédent | Chapitre suivant |
| :---------------------: | :--------------: | :--------------: |
| [Introduction](https://github.com/SimonDevelop/slim-doctrine/blob/master/docs/introduction.md) | [Csrf/Token](https://github.com/SimonDevelop/slim-doctrine/blob/master/docs/chapter05.md) | [Déboguer](https://github.com/SimonDevelop/slim-doctrine/blob/master/docs/chapter07.md) |
