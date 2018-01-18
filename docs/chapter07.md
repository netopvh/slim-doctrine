# Déboguer

Pour debugger pendant le développement de votre application, je vous recommande d'utiliser la fonction `r()` qui est un `var_dump` amélioré pour vos controllers, en revanche si vous voulez debugger directement sur twig vous avez la function `dump()` qui est activé.

Vous disposez aussi de `tracy` comme profiler pour votre projet en environnement de développement (local).<br>
Sur ce dernier, vous avez la possibilité de voir le trafic de vos requêtes doctrine, du temps de chargement de twig etc...

Il vous est possible d'utiliser `monolog` pour envoyer des messages spécifiques dans les logs (exemple dans le controller `HomeController`).

| Introduction | Chapitre précédent |
| :---------------------: | :--------------: |
| [Introduction](https://github.com/SimonDevelop/slim-doctrine/blob/master/docs/introduction.md) | [Front-End & Gulpfile](https://github.com/SimonDevelop/slim-doctrine/blob/master/docs/chapter06.md) |
