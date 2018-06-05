# Front-End & Webpack

Webpack permet de fusionner et minifier vos fichiers js (prochainement `css` et optimisation des `images`).

Dans le dossier `front`, sont disposez des dossiers dédiés au développement front-end (`css` et `js`) mais vous pouvez aussi optimiser les images dans `img`.

Pour pouvoir utiliser webpack, il vous faut au préalable avoir nodejs 6.11.5 au minimum d'installé puis lancer les commandes :
```bash
$ sudo npm install -g webpack-cli
$ npm install
```

Pour pouvoir fusionner et minifier vos fichiers dans le dossier `public` de votre application, vous avez ces commandes :
``` bash
# Compiler en mode développement (version linux/mac)
$ npm run webpackdev
# Compiler en mode production (version linux/mac)
$ npm run webpack
# Compiler en mode développement (version windows)
$ npm run webpack:win
# Compiler en mode production (version windows)
$ npm run webpackdev:win
```

J'apprend webpack en même temps que je prépare la version 1.0.5 de ce dépot, si jamais vous voulez m'aider à finaliser webpack, n'hésitez surtout pas à faire un pull request !

| Introduction | Chapitre précédent | Chapitre suivant |
| :---------------------: | :--------------: | :--------------: |
| [Introduction](https://github.com/SimonDevelop/slim-doctrine/blob/master/docs/introduction.md) | [Csrf/Token](https://github.com/SimonDevelop/slim-doctrine/blob/master/docs/chapter05.md) | [Debugger Bar](https://github.com/SimonDevelop/slim-doctrine/blob/master/docs/chapter07.md) |
