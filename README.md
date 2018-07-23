[![version](https://img.shields.io/badge/Version-1.1.0-brightgreen.svg)](https://github.com/SimonDevelop/slim-doctrine/releases/tag/1.1.0)
[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%207.1-8892BF.svg)](https://php.net/)
[![Minimum Node Version](https://img.shields.io/badge/node-%3E%3D%206.11.5-brightgreen.svg)](https://nodejs.org/en/)
[![Build Status](https://travis-ci.org/SimonDevelop/slim-doctrine.svg?branch=master)](https://travis-ci.org/SimonDevelop/slim-doctrine)
[![GitHub license](https://img.shields.io/badge/License-MIT-blue.svg)](https://github.com/SimonDevelop/slim-doctrine/blob/master/LICENSE)
[![FOSSA Status](https://app.fossa.io/api/projects/git%2Bgithub.com%2FSimonDevelop%2Fslim-doctrine.svg?type=shield)](https://app.fossa.io/projects/git%2Bgithub.com%2FSimonDevelop%2Fslim-doctrine?ref=badge_shield)
# slim-doctrine

Plus qu'un simple skeleton `slim`, un véritable framework.

Pour toutes contribution sur github, merci de lire le document [CONTRIBUTING.md](https://github.com/SimonDevelop/slim-doctrine/blob/master/.github/CONTRIBUTING.md).


## Les avantages que propose le skeleton

- Répartition des routes/controlleurs/vues/middlewares.
- Fichier de configuration d'environnement base de données.
- Moteur de template twig.
- Organisation du container pour faciliter l'ajout de nouvelles librairies.
- Fichier `config/error_pages.php` pour personnaliser les pages d'erreurs (404, 405, 500).
- Mise en place de middlewares pour le csrf, token, message flash et sauvegarde des inputs.
- Commandes via la console pour créer rapidement des controlleurs/middlewares ou pour vider le cache de twig.
- Doctrine 2 comme ORM avec les DataFixtures.
- Un helper pour la gestion des sessions.
- Système multilingue avec twig.
- Webpack pour faciliter le développement front-end.


## Librairies utilisées

- [slim/twig-view](https://github.com/slimphp/Twig-View) pour la vue.
- [doctrine/doctrine2](https://github.com/doctrine/doctrine2) pour la base de données.
- [doctrine/data-fixtures](https://github.com/doctrine/data-fixtures) pour les données fictives en base de données.
- [respect/validation](https://github.com/Respect/Validation) pour valider les données.
- [slim/csrf](https://github.com/slimphp/Slim-Csrf) pour la sécurité des sessions.
- [digitalnature/php-ref](https://github.com/digitalnature/php-ref) pour une fonction var_dump amélioré.
- [vlucas/phpdotenv](https://github.com/vlucas/phpdotenv) pour la configuration de l'environnement.
- [symfony/console](https://github.com/symfony/console) pour des commandes console.
- [php-school/cli-menu](https://github.com/php-school/cli-menu) pour simplifier l'exécution des commandes.
- [seldaek/monolog](https://github.com/Seldaek/monolog) pour gérer des logs.
- [runcmf/runtracy](https://github.com/runcmf/runtracy) le profiler.
- [adbario/slim-secure-session-middleware](https://github.com/adbario/slim-secure-session-middleware) helper pour la gestion des sessions.
- [illuminate/translation](https://github.com/illuminate/translation) pour le système multilingue.
- [webpack/webpack](https://github.com/webpack/webpack) pour la fusion et minification des fichiers css/js.


## Installation

Via composer

```bash
$ composer create-project simondevelop/slim-doctrine <projet_name>
$ cd <projet_name>
$ composer install
```
Vérifiez que le fichier `.env` a bien été créé, il s'agit du fichier de configuration de votre environnement ou vous définissez la connexion à la base de données, l'environnement `local` ou `prod` et l'activation du cache de twig.

Si jamais le fichier n'a pas été créé, faite le manuellement en dupliquant le fichier `.env.example`.

N'oubliez pas de vérifier que votre configuration d'environnement de votre base de données corresponde bien.

## Permissions

Autoriser les dossiers `app/cache` et `app/logs` à l'écriture coté serveur web.

## Docker

Un docker-compose est disponible pour faire fonctionner le skeleton via docker.<br>

1. Télécharger le skeleton :
```bash
$ composer create-project simondevelop/slim-doctrine <projet_name>
# Ou
$ git clone https://github.com/SimonDevelop/slim-doctrine.git
```

2. Lancer composer :
```bash
$ composer install
# Ou
$ php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
$ php composer-setup.php
$ php -r "unlink('composer-setup.php');"
$ php composer.phar install
# Ou
$ docker run -ti --rm -v $(pwd):/app composer
```

3. Vérifier le .env :
```
# Database development
DBD_TYPE = "pdo_mysql"
DBD_NAME = "slim"
DBD_SERVER = "mysql"
DBD_USER = "root"
DBD_PWD = "root"

# Database production
DBP_TYPE = "pdo_mysql"
DBP_NAME = "slim"
DBP_SERVER = "mysql"
DBP_USER = "root"
DBP_PWD = "root"

# Environment mode
# ("local" pour developpement | "prod" pour production)
ENV = "local"

# Cache twig
CACHE = false
```

4. Lancer docker-compose :
```bash
# à la racine du projet, lancer cette commande
$ docker-compose up -d
```

5. Choses à savoir :<br>
  - La configuration nginx se trouve dans le dossier `docker/nginx`, vous disposez des logs et de la config pour le skeleton.
  - Il est important de mettre les dossiers `app/cache` et `app/logs` en écriture `777` pour que le container `nginx` puisse écrire les logs et fichiers de cache twig.
  - Le docker-compose ne prend pas en charge `nodejs`, à vous de le faire vous même.

# Guide d'utilisation

Pour bien utiliser ce skeleton, il est important de bien connaitre le fonctionnement de `Slim 3` et des divers librairies utilisées.

Vous avez à votre disposition, plus haut, les liens vers ces derniers pour en savoir plus.

Toute fois, voici un petit [guide d'utilisation](https://github.com/SimonDevelop/slim-doctrine/blob/master/docs/introduction.md).


## License
[![FOSSA Status](https://app.fossa.io/api/projects/git%2Bgithub.com%2FSimonDevelop%2Fslim-doctrine.svg?type=large)](https://app.fossa.io/projects/git%2Bgithub.com%2FSimonDevelop%2Fslim-doctrine?ref=badge_large)