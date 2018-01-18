# Doctrine/Commandes
Maintenant que nous avons vu les bases de fonctionnement du skeleton, attaquons maintenant doctrine et les diverses commandes utiles.


### Doctrine
Doctrine est l'ORM utilisée dans ce skeleton, vous avez à votre disposition les entités dans le dossier `app/src/Entity`.<br>
Vous avez accès à  l'`EntityManager` dans vos controller via un `$this->em;`

Voici la commande doctrine que vous aurez besoin pour déclarer vos entités en base (Vérifiez avoir bien créé votre base de données au préalable):

``` bash
$ php vendor/bin/doctrine orm:schema-tool:update
```

Vous pouvez envoyer des données fictives en base de données via la librairie `data-fixtures` de doctrine, créez vos fixtures dans le dossier `app/src/Entity/DataFixtures` puis lancez la commande :

``` bash
$ php console data:fixtures
```

L'implémentation des DataFixtures se fait via l'EntityManager de doctrine.<br>
Pour plus d'infos sur l'ORM, je vous invite à aller voir la [documentation](http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/).


### Commandes

Grace à la librairie [Console](https://github.com/symfony/console), le skeleton vous offre des commandes pour la création rapide de `Controllers` ,`Middlewares` ,`Entity` et vidage du cache twig.

C'est le fichier `console` qui vous permet d'utiliser les commandes suivantes :

Pour voir la liste des commandes disponibles :
``` bash
$ php console list
```

Pour vider le cache de twig
``` bash
$ php console cache:clear
```

Pour générer un controller ou middleware
``` bash
$ php console generate:controller TestController
```
`app/src/Controllers/TestController.php`

``` bash
$ php console generate:middleware TestMiddleware
```
`app/src/Middlewares/TestMiddleware.php`

``` bash
$ php console generate:entity Test
```
`app/src/Entity/Test.php`


| Introduction | Chapitre précédent | Chapitre suivant |
| :---------------------: | :--------------: | :--------------: |
| [Introduction](https://github.com/SimonDevelop/slim-doctrine/blob/master/docs/introduction.md) | [Controllers/Views/Middlewares](https://github.com/SimonDevelop/slim-doctrine/blob/master/docs/chapter03.md) | [Csrf/Token](https://github.com/SimonDevelop/slim-doctrine/blob/master/docs/chapter05.md) |
